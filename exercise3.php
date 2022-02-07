
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

<!--3. Write a program to grade students based on their total score for a subject.
 The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; 
 Pass >50 & less than 60 & Fail <50 -->
<?php
$totalScore = 60;

if($totalScore >= 80){
    echo "Excellent";
}elseif($totalScore >= 70 and $totalScore < 80){
    echo "Great";
}elseif($totalScore >= 60 and $totalScore < 70) {
    echo "Good";
}elseif($totalScore >= 50 and $totalScore > 60){
    echo "Pass";
}else{
    echo "Fail";
}
?>

<!--4. Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting.
 (18 or more than 18 years is eligible for voting.) -->



 <!-- 5. Use a looping statement to construct the following pattern: 

12345678
1234567
123456
12345
1234
123
12
1-->

<?php
for($i = 8;$i >= 1;$i--){
    for($j = 1;$j <= $i;$j++){
        echo $j;
    }
    echo "<br>";
    
}

?>

<!--6. Use While loop to print the following pattern: 
*
**
***
****
*****
******
*******
******** -->

<?php
#No of rows
$rows = 8;
$x = 1;
while ($x <= $rows){
	$y = 1;
    while($y <= $x){
        echo "*";
        $y++;
    }
    echo "<br>";
    $x++;
} 
?>

</body>
</html>




