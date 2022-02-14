<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 04</title>
    <style>
    * {
        margin:0;
        padding:0;
    }
    div {
        margin-top:10px;
        margin-bottom:10px;
    } 
    h1,h3{
        padding-top:10px;
    }
    h4 {
        margin-bottom:6px;
        margin-top: 5px;
    }
    p {
        padding-top:4px;
        padding-left: 1rem;
    }
    a {
        text-decoration: none;
        color:red;
    }
    a:hover {
        color:blue;
    }
    .container{
            max-width: 1100px;
            margin:auto;
        }
        .output {
           box-shadow: 4px 4px 6px 0  rgba(0,0,0,0.3);
          padding: 10px;
       }
    </style>
</head>
<body>
<div class="container">
    <h1 class = "title">Exercise 4 - Arrays</h1>
    <div class=qstn>
    <h3 class = "qstn-item"> 1. Write a php script to display courses as list. Use 
                            $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project") </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=arrayList.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
        /* PHP program to display all
        the values of an array as list	
        given array */

        $array = array("PHP", "HTML", "JavaScript", "CMS", "Project");

        //Loop through array

        echo "<ul>";
        foreach($array as $item){
            echo "<li>".$item . "</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item"> 2. The unset() function is used to remove element from the array.
                                The var_dump() function is used to dump information about a variable. 
                                array_values() is an inbuilt function that 
                                returns all the values of an array and not the keys.
                                Delete an element from the array below:
                                $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=deleteArrayElement.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php

        #given array
        $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");

        #Delete an element from the array (Project)
        unset($courses1[4]);

        #Loop through array to display content
        for($num = 0; $num < count($courses1); $num += 1){
            echo  $courses1[$num]. " , ";
        }

        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 </h3>
    </div>
    <div class="ans">
    <h3>a) ascending order sort by value </h3>
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=asort.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
        #Given Array
        $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

        asort($courses3);
        #display result
        foreach($courses3 as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }  
            

        ?>
    </div>

    <div class="ans">
    <h3>b) ascending order sort by key </h3>
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=ksort.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
        ksort($courses3);
        #display result
        foreach($courses3 as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }  
        ?>
    </div>

    <div class="ans">
    <h3>c) descending order sort by value </h3>
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=arsort.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
        arsort($courses3);
        #display result
        foreach($courses3 as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }  
        ?>
    </div>

    <div class="ans">
    <h3>d) descending order sort by key </h3>
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=krsort.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
        krsort($courses3);
        #display result
        foreach($courses3 as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }  
        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">4. Change the following array's all values to upper case.
                                $courses4=array("php", "html", "javascript", "cms", "project"); </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=upperCase.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php

        #Given array
        $courses4=array("php", "html", "javascript", "cms", "project");

        /* The array_map() is an inbuilt function in PHP
            it helps to modify all elements one or more arrays according to some user-defined condition 
            in an easy manner. It basically, sends each of the elements of an array to a user-defined 
            function and returns an array with new values as modified by that function. */ 

        $courses4 = array_map( 'strtoupper', $courses4 );

        #Display the content of array
        foreach( $courses4 as $element ){
            echo $element . " , ";
        }

        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">5. Create an array that holds your favorite colors and print them. (indexed arrays) </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=indexed.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php

            #Declare an array
            $favColors = array("black","white","blue");
            #Display the content
            foreach( $favColors as $color ){
                echo $color . "<br>";
            }

        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
 </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=assoc.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
            #Declare associative array
            $fvColors = array("black"=>"#000000", "white"=>"#FFFFFF", "blue"=>"#0000FF");
            #print all the values of an associative array
            foreach($fvColors as $color => $hexValue) {
                echo "Color = " . strtoupper($color) . ", Hexadecimal = " . $hexValue;
                echo "<br>";
            }
            

        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">7. Include 12 months in an array named month and print them using loop statement.
 </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=months.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
            #declare an array
            $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
            #looping through arrray to print values
            foreach($months as $month){
                echo $month."<br>";
            }
            
        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">Write comments to explain the following code (when asked):
 </h3>
    </div>
    <div class="ans">

    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/540f7d2f25ceb2e643efab222599c4a0.js?file=avg.php"></script>
        </div>
    <div class="output">
        <h4>Output:</h4>
        <?php
           /*

            PHP script to calculate and display average temperature, five lowest and highest temperatures.

            Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
            85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
            74, 62, 62, 65, 64, 68, 73, 75, 79, 73

            */
            echo "<hr><h2> Calculation average temperature: </h2>";
            $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
            68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
            // what is explode and what does the below code do? : 
            /*The explode() function splits a string based on a string delimiter, i.e. 
              it splits the string wherever the delimiter character occurs. 
              This functions returns an array containing the strings formed by splitting the original string.
              Here the function returns an array of string values splitting the variable $month_temp values separated by ,
              For instance the function output Array ([0]=>78,[1]=>60,[2]=>68,....) */
            $temp_array = explode(',', $month_temp);
            $tot_temp = 0;
            // What is count?
             /*This inbuilt function of PHP is used to count the current elements in the array.
               Here the count function returns the number of elements in array $temp_array */
            $temp_array_length = count($temp_array);
            foreach($temp_array as $temp)
            {
            $tot_temp += $temp;
            }
            $avg_high_temp = $tot_temp/$temp_array_length;
            echo "Average Temperature is : ".$avg_high_temp."
            "; 
            // what does sort do?
            #sorts the elements of the $temp_array array in ascending  order
            sort($temp_array);
            echo "<br> List of five lowest temperatures :";
            for ($i=0; $i< 5; $i++)
            { 
            echo $temp_array[$i].", ";
            }
            echo "<br>List of five highest temperatures :";
            // explain the following loop
            /*This loop prints the last five elements from the $temp_array array
            Here the initial counter starts at five lesser than the array length.i.e 25
            test counter: check if the init counter is less than the array length.if true run the loop else it ends.
            $i++  increases the loop counter value
            the echo statement print the array values indexing from the initial counter to the value of counter less than array length.
            The values are separated by comma. */
            for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
            {
            echo $temp_array[$i].", ";
            }
            
        ?>
    </div>

    
</div>
</body>
</html>
