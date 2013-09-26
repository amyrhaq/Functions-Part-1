<!-- Try rounding some numbers for yourself. You can use M_PI if you like; it's my favorite floating point number. -->
<html>
	<p>
	<?php
	//Round a floating point number to an integer and print it
	$round = round(M_PI);
	echo $round;
	?>
	</p>
	<p>
	<?php
	//Round a floating point number to 3 decimal places
	$round_decimal = round(M_PI, 3);
	echo $round_decimal;
	?>
	</p>
</html>