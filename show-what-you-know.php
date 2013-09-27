<!-- Create an array() with the names of your closest family and friends. 
The more names in your array, the more fun your game will be, so don't skimp!
After you've created your list, sort it and randomly select a name from the list. 
When you have your winning name, print it to the screen with authority so everyone knows how awesome the winner is.
Functions we'll use here: array(), array_push(), sort(), count(), rand(), and strtoupper(). 
Play around with some of the other functions you've learned as well. -->
<html>
<p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $family = array ("mama","baba","myra");
	array_push ($family, "mama"); 
	array_push ($family, "baba");
	array_push ($family, "myra");
	echo count ($family);
	
	// Sort the list
	sort($family);
	
	// Randomly select a winner!
	$random=rand(0,count($family)-1);
	$winner=$family[$random];
	echo strtoupper($winner);
	
	// Print the winner's name in ALL CAPS
	?>
</p>
</html>
	