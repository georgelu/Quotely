
		<?php
			include("config.php");
			if ($subid) {
				$query = "select * from quotely where subcat = '" . $subcat . "' AND subid = '" . $subid ."'";
			} else if ($id) {
				$query = "select * from quotely where category = '" . $category . "' AND id = '" . $id ."'";
			} else {
				$query = "select * from quotely where category = '" . $category . "' AND id = '1'";
			}
			$result = mysql_query($query);
		      // This tells you how many rows were returned
			$num_rows = mysql_num_rows($result);

			while ($row = mysql_fetch_assoc($result)) {

				echo "<blockquote id='quotation'>" . $row["quote"] . "</blockquote>";
				echo "<cite id='speaker'><p>- " . $row["speaker"] . "</p></cite>";
				echo "<a href='wiki.php?u=" . $row['wikipedia'] . "'><small>+ Read more about this speaker at Wikipedia &raquo;</small></a>";
				
				echo "<p><small id='source'><a href='source.php?u=" . $row['sourcelink'] . "'>+ See the full story at ". $row["source"] . " &raquo;</a></small></p>";


			} 
		?>
		
	