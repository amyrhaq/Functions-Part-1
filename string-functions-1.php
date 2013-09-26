<!-- Get a partial string from within your own name and print it to the screen. 
Then try making your name upper case and lower case and print those to the screen as well. -->
<html>
<head>
	<title>String Functions 1</title>
</head>
<body>
	<p>
		<?php
			$name = "Amyr";

			//Get a partial string from within your name and print it here
			$partial = substr($name, 0 , 2);
			echo $partial;
		?>
	</p>
	<p>
		<?php
			//Make your name upper case and print it here
			$upperCase = strtoupper($name);
			echo $upperCase;
		?>
	<p>
		<?php 
			//Make your name lower case and print it here
			$lowerCase = strtolower($name);
			echo $lowerCase;
		?>
	</p>

	</p>
</body>
</html>