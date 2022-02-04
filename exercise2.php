<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <style>
        .container{
            max-width: 1100px;
            margin:auto;
        }
        .output {
           box-shadow: 4px 4px 6px 0  rgba(0,0,0,0.3);
          padding: 5px;
       }

    </style>
</head>
<body>
    <div class="container">
    <h1 class = "title">Exercise 2 - Strings & Operators</h1>
    <h2>String</h2>
    <div class=qstn>
    <h3 class = "qstn-item"> 1.Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function)  </h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=concat.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php

        #First String
        $strOne="Hello";

        #Second String
        $strTwo="World!";

        #Concatenation Of String
        $concatStr = $strOne." ".$strTwo;

        #Print Concatenate String
        echo "<p>$concatStr<p>";

        #Print the length of the string
        echo "<p>Length of String: ".strlen($concatStr)."</p>"; #including the space

        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item"> 2.In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect? </h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=singlequote.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php

        #First String
        $strOne='Hello';

        #Second String
        $strTwo='World!';

        #Concatenation Of String
        $concatStr = $strOne.' '.$strTwo;

        #Print Concatenate String
        echo '<p>$concatStr<p>';

        #Print the length of the string
        echo '<p>Length of String: '.strlen($concatStr).'</p>'; #including the space

        ?>
        <p>Using double quotes we can include variables directly in the string.Variable is replaced by the value.
            But in single quote a variable will be output as specified/written without being replaced by 
            its value as seen in the above output ($concatStr)</p>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item"> 3.Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?</h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=syntaxerror03.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <p>PHP Parse error: syntax error, unexpected 'World' (T_STRING)</p>
        <p> We get syntax error when we mix the single and double quotes in a single line.The PHP parser cannot interpret the code and stops working </p>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item"> 4.Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=syntaxerror.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <p>Parse error: syntax error, unexpected '=' in exercise2.php</p>
        <p> We get syntax error when we miss the dollar sign in variable name`.The PHP parser cannot interpret the code and stops working </p>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">5.Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=syntaxerror02.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <p>PHP Parse error: syntax error, unexpected '$concatStr' (T_VARIABLE)</p>
        <p> Missing a semicolon at the end of the line leads to a error. The PHP parser cannot interpret the code and stops working </p>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item"> 6.Write a PHP script to get the following display <br> " It is Markku's car."
                <br>Random characters: del c:\*.* "</h3>
    </div>
    <div class="ans">

        <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=display.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php echo " <p> \"It is Markku's car \" </p>" ?>
        <?php echo " <p> Random characters:del c:\*.* \"</p>" ?>
    </div>

    <h2>Operators</h2>
    <div class=qstn>
    <h3 class = "qstn-item">1.Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.  </h3>
    </div>
    
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=sum.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php

        #First Number
        $numOne=298;

        #Second Number
        $numTwo=234;

        #Third Number
        $numThree=46;

        #Sum the numbers
        $sum=$numOne+$numTwo+$numThree;

        #Print the sum
        echo "<p>The sum is : $sum </p>";
        ?>
    </div>

    <div class=qstn>
    <h3 class = "qstn-item">2.Use variables to calculate the following : (87 + 44)+(200 * 15) / 10   </h3>
    </div>
    
    <div class="code">
        <h4>Code:</h4>
        <script src="https://gist.github.com/DGautam11/f8e2fe0c44f3daa6c3b8c94ac05e52a2.js?file=calc.php"></script>
        </div>
        <div class="output">
        <h4>Output:</h4>
        <?php
        #Storing numbers in variable
        $numOne=87;
        $numTwo=44;
        $numThree=200;
        $numFour=15;
        $numFive=10;

        #Calculate the equation
        $calc = ($numOne + $numTwo)+($numThree * $numFour)/$numFive;

        #Print the result
        echo "<p>The result is : $calc </p>";
        ?>
    </div>


    
    
    </div>
</body>
</html>