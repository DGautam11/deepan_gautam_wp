
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 03</title>
</head>
<body>
<!-- 1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays

You can use date(F) function to get the current month name  -->
<?php

$monthName = date('F');

if ($monthName == "August"){
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, This is Month-name so i don't have any holidays";
}

?>

<!--2. Assign color red to a variable name $color and check to print one the following responses using if else statement 

The color is red. 

The color is not red. -->

<?php

$color = "red";

if($color == "red"){
    echo "The color is red.";
} else {
    echo "The color is not red.";
}

?>
  
</body>
</html>




