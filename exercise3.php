
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 03</title>
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
        <h1 class = "title">Exercise 3 - Control Flow</h1>
        <div class=qstn>
          
            <h3 class = "qstn-item">1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not: </h3>
                           <p> It's August, so it's still holiday. <br>
                            Not August, This is Month-name so i don't have any holidays <br>
                            <i>You can use date(F) function to get the current month name</i> </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=monthAug.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php

        $monthName = date('F');

        if ($monthName == "August"){
            echo "It's August, so it's still holiday.";
        } else {
            echo "Not August, This is Month-name so i don't have any holidays";
        }

        ?>
    </div>

    <div class=qstn>
            <h3 class = "qstn-item">2. Assign color red to a variable name $color and check to print one the following responses using if else statement  </h3>
                           <p> The color is red. 
                               <br>The color is not red. </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=colorRed.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php

        $color = "red";

        if($color == "red"){
            echo "The color is red.";
        } else {
            echo "The color is not red.";
        }

        ?>
    </div>

    <div class=qstn>
            <h3 class = "qstn-item">3. Write a program to grade students based on their total score for a subject.</h3>
            <p> The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; 
                Pass >50 & less than 60 & Fail less than 50 </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=grade.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
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
    </div>

    <div class=qstn>
            <h3 class = "qstn-item">4. Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting..</h3>
            <p> <i>(18 or more than 18 years is eligible for voting.)</i> </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=checkEligibleToVote.php"></script>
        </div>
        <div class="output">

            <h4>Output:</h4>
            
           
            <!--form for taking user input -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Name: <input type="text" name="name">
            <br><br>
            Age: <input type="text" name="age">
            <br><br>
            <input type="submit" name="submit" value="Submit">  
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = intval($_POST["age"]);
                echo "<p>Name:$name </p>";
                echo "<p>Age: $age </p>" ;
                if ($age >= 18){
                    echo "<p><strong>You are eligible for vote.</strong></p>";
                } else {
                    echo "<p><strong>You are not eligible for vote.</strong></p>";
                }
            }
            
            ?>

            
                    
    </div>

     <div class=qstn>
            <h3 class = "qstn-item">5. Use a looping statement to construct the following pattern:</h3>
            <p> 12345678 <br>
                1234567 <br>
                123456 <br>
                12345<br>
                1234 <br>
                123 <br>
                12<br>
                1 </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=numPattern.php"></script>
        </div>
        <div class="output">

            <h4>Output:</h4>
            <?php
                for($i = 8;$i >= 1;$i--){
                    for($j = 1;$j <= $i;$j++){
                        echo $j;
                    }
                echo "<br>";
                    
                }

            ?>
                    
    </div>

    <div class=qstn>
            <h3 class = "qstn-item">6. Use While loop to print the following pattern: </h3>
            <p> * <br>
                ** <br>
                *** <br>
                ****<br>
                ***** <br>
                ****** <br>
                ******* <br>
                ******** </p> 
        </div> 
        <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/9432c66c4fa361ff5624ab6e91eceb2a.js?file=starPattern.php"></script>
        </div>
        <div class="output">

            <h4>Output:</h4>
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
                    
    </div>

    <


    </div>
    <h3 class = "qstn-item">7. Create a GitHub repo and enable GitHub pages for the repo. Upload your HTML files (your website that you did with Tommi)  to the repo. Include the link to the repo and your web page in the php file. </h3>
    <h4><a href="https://github.com/DGautam11/gym-one" target="_blank">GitHub Repo</a></h4>
    <h4><a href="https://dgautam11.github.io/gym-one/" target="_blank">Web-Page</a></h4>



</body>
</html>




