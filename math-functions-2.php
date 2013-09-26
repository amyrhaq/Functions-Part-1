<!-- Use the editor to print a random number. Then use use your knowledge of strlen(), substr(), and rand() to print a random character from your name! -->
<html>
<p>
<?php
//Use rand() to print a random number to the screen
echo floor(rand(1,4));
?>
</p>
<p>
<?php
//Use strlen(), substr(), and rand() to print a random character from your name to the screen
$name = 'Amyr';
$print = substr($name, rand(0, strlen($name) - 1), 1);
echo $print;
?>
</p>
</html>