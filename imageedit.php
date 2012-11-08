<?php
	//crop
   $cim = imagecreatefromjpeg("autumn_sea_vii.jpg");
   $csize = getimagesize("autumn_sea_vii.jpg");
   $cW=$csize[0];
   $cH=$csize[1];
   $crop_width = 320;
   $crop_height = 460;
  
   $canvas = imagecreatetruecolor($crop_width, $crop_height);
   imagecopy($canvas, $cim, 0, 0, $cW/2-$crop_width/2,$cH/2-$crop_height/2, $cW, $cH);
   imagejpeg($canvas, "autumn_sea_vii2.jpg", 100);
   
   
   //recolor
   $im = imagecreatefromjpeg("autumn_sea_vii2.jpg");
   $size = getimagesize("autumn_sea_vii2.jpg");
   $W=$size[0];
   $H=$size[1];

   for($j=0;$j<$H;$j++){
      for($i=0;$i<$W;$i++){
         $rgb = imagecolorat($im, $i, $j);
         $r = $rgb&0x00FF0000;    
         $r = $r >> 16;
         $g = $rgb&0x0000FF00; 
         $g = $g >> 8;
         $b = $rgb&0x0000FF;
   
         $frac = 0.5; // 0.0 < frac < 1.0
   
         $rr = (int)($r*$frac);
         $gg = (int)($g*$frac);
         $bb = (int)($b*$frac);
                 
         $result = (0x000000FF<<24)|
            ($rr <<16)|($gg << 8)|$bb;
   
         $new_r = ($result >> 16) & 0xFF;
         $new_g = ($result >> 8) & 0xFF;
         $new_b = $result & 0xFF;
   
         $new_color = imagecolorallocate(
            $im, $new_r, $new_g, $new_b); 
         imagesetpixel($im, $i, $j, $new_color);
      }
   }    
   
   //add text
	$tim = imagecreatetruecolor(55, 30);
	$textcolor = imagecolorallocate($im, 250, 250, 250);
	$black = imagecolorallocate($tim, 0, 0, 0);

	// Make the background transparent
	imagecolortransparent($tim, $black);  
	imagestring($tim, 4, 0, 0, 'Hello world!', $textcolor);
	imagecopy($im, $tim, $W/2, $H/2, 0, 0, $W, $H);
  
  
  
    header("Content-type: image/jpeg");
   imagejpeg($im,NULL,100);

?>