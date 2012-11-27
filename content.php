
		<?php
			include("config.php");

			// finding number of total items in each category
			


			if ($subid) {
				$temp_query = "select * from quotely where subcat = '" . $subcat . "'";
				$temp_result = mysql_query($temp_query);
				$num_items_in_category = mysql_num_rows($temp_result);
				if ($num_items_in_category < $subid) {
					$subid = '1';
				}
				$query = "select * from quotely where subcat = '" . $subcat . "' AND subid = '" . $subid ."'";
				$category = $subcat;
				$id = $subid;
			} else if ($id) {
				$temp_query = "select * from quotely where category = '" . $category . "'";
				$temp_result = mysql_query($temp_query);
				$num_items_in_category = mysql_num_rows($temp_result);
				if ($num_items_in_category < $id) {
					$id = '1';
				}
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
				echo "<a href='wiki.php?c=" . $category . "&i=" . $id . "&u=" . $row["wikipedia"] . "'><small>+ Read more about this speaker at Wikipedia &raquo;</small></a>";
				echo "<p><small id='source'><a href='source.php?c=" . $category . "&i=" . $id . "&u=" . $row['sourcelink'] . "'>+ See the full story at ". $row["source"] . " &raquo;</a></small></p>";


			} 
		?>
		
	