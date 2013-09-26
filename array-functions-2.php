<!-- Use the editor to create an array with various elements in it. Then sort() the array, rsort() the array, and print both to the screen. -->
<html>
    <p>
	<?php
		// Create an array with several elements in it,
		// then sort it and print the joined elements to the screen
		$array = array(" apples", " bananas ", " oranges");
		sort($array);
		print join(",", $array);
	?>
	</p>
	<p>
	<?php
		// Reverse sort your array and print the joined elements to the screen
		rsort($array);
		print join(", ", $array);
	?>
	</p>
</html>