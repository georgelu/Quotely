
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

				// You will get here is a table called sometable
				// and a username test and password test exists. If it doesn’t exist
				// you won’t land here.
				echo "<blockquote id='quotation'>" . $row["quote"] . "</blockquote>";
				echo "<cite id='speaker'><p><a href='" . $row['wikipedia'] . "'>-" . $row["speaker"] . "</p></cite>";
				echo "<small id='source'><a href='source.php?u=" . $row['sourcelink'] . "'>+ ". $row["source"] . " &raquo;</a></small>";


			} 
		?>
		
	