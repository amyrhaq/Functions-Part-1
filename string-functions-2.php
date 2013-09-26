<!-- Use the editor to create your own haystack and needle combinations. 
You can use variables for both haystack and needle.
Try one example with a positive result and one where the needle is not found. -->
<html>
    <p>
    <?php
    // Print out the position of a letter that is in your own name
    $name = "Amyr";
    $pos = strpos($name, "y");
    echo $pos;
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not in your own name and print out an error message
    if (strpos($name, "z") == false)
    {
    	echo "Sorry, there is no 'z' in 'Amyr'";
    }
    ?>
    </p>
</html>