<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/

# PHP program to display all
# the values of an array as list
	
# given array
$array = array("PHP", "HTML", "JavaScript", "CMS", "Project");

# Loop through array
echo "<ul>";
foreach($array as $item){
	echo "<li>".$item . "</li>";
}
echo "</ul>";



/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/

#given array
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
#Delete an element from the array (Project)
unset($courses1[4]);
#Loop through array to display content
for($num = 0; $num < count($courses1); $num += 1){
    echo  $courses1[$num]. "<br>";
}



/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
#Given Array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
# a) ascending order sort by value





/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/


#Given array
$courses4=array("php", "html", "javascript", "cms", "project");

/* The array_map() is an inbuilt function in PHP
    it helps to modify all elements one or more arrays according to some user-defined condition 
    in an easy manner. It basically, sends each of the elements of an array to a user-defined 
    function and returns an array with new values as modified by that function. */ 

$courses4 = array_map( 'strtoupper', $courses4 );

#Display the content of array
foreach( $courses4 as $element ){
    echo $element . "<br>";
}
	



# 5. Create an array that holds your favorite colors and print them. (indexed arrays)

#Declare an array
$favColors = array("black","white","blue");
#Display the content
foreach( $favColors as $color ){
    echo $color . "<br>";
}
    



// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)




// 7. Include 12 months in an array named month and print them using loop statement.




/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>