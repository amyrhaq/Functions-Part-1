<!-- Use the editor to create an array and use array_push() to add at least 5 elements to it. 
Once all your elements are added, print out the number of elements in your array. -->
<html>
<p>
<?php 
$bands = array();
array_push($bands, "Maroon 5");
array_push($bands, "Nirvana");
array_push($bands, "Aerosmith");
array_push($bands, "Bon Jovi");
array_push($bands, "Skrillex");

echo count ($bands);
?>
</p>
</html>