<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3_EvangelosKaikas</title>
    <style>
        body{
            color: black;
            font-family: Tahoma, Geneva, sans-serif;
            }
    </style>
</head>

<body>
    <h1>Assignment 3<br> Evangelos Kaikas</h1>

    <!----- Use IF else ----->

<!-- Task 1 -->
<h2>Task 1</h2>
    <h3> Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:<br><br> <i>It's August, so it's still holiday.</i><br><i>Not August, This is Month-name so i don't have any holidays</i> <br><br><i>You can use date(F) function to get the current month name</i></h3>
        <?php
            $month=date(F);
            if ($month==August)
            {
                echo "<i>It's August, so it's still holiday.</i><br>";
            }
            else
            {
                echo "<i>Not August, This is $month so i don't have any holidays</i><br>";
            }
        ?>
        
<!-- Task 2 -->
<h2>Task 2</h2>
    <h3>Assign color red to a variable name $color and check to print one the following responses using if else statement <br><br>The color is red.<br><br>The color is not red. </h3>
        <?php
            $color="red";
            if ($color="red")
            {
                echo "The color is $color. <br>";
            }
            else
            {
                echo "The color is not $color.<br>";
            }
        ?>
    
<!-- Task 3 -->
<h2>Task 3</h2>
    <h3>Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50 </h3>
        <?php
            $grade=74;
            if ($grade>80)
            {
                echo "Excellent <br>";
            }
            elseif ($grade>70 && $grade<80)
            {
                echo "Great <br>";
            }
            elseif ($grade>60 && $grade<70)
            {
                echo "Good <br>";
            }
            elseif ($grade>50 && $grade<60)
            {
                echo "Pass <br>";
            }
            else
            {
                echo "Fail <br>";
            }
        ?>

<!-- Task 4 -->
<h2>Task 4</h2>
    <h3>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h3>
        <form method="post" action="<?php echo $_SERVER['Assignment3_ekaikas.php'];?>">
         Name: <input type="text"><br><br>
          Age: <input type=number name=age><br><br>
               <input type="submit"><br>
        </form>
        <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST[age]);
            if ($name>=18)
            {
                echo "<br>You are eligible to vote.<br>";
            }
            elseif ($name<18)
            {
                echo "<br>You are not eligible to vote.<br>";
            }}
        ?>
    
<!-- Task 5 -->
<h2>Task 5</h2>
    <h3> Use a looping statement to construct the following pattern: 
    <br><br> 12345678<br>1234567<br>123456<br>12345<br>1234<br>123<br>12<br>1</h3>
        <?php
            echo "<pre>";
            for($i=8;$i>=1;$i--){
                for($j=1;$j<=$i;$j++){
                    echo $j."&nbsp;";
                    if($j==$i){
                        echo "";
                        echo "<br/>";
                    }
                }
            }
            echo "</pre>";
        ?>

<!-- Task 6 -->
<h2>Task 6</h2>
    <h3> Use While loop to print the following pattern: 
    <br><br> *<br>**<br>***<br>****<br>*****<br>******<br>*******<br>********</h3>        
        
       
    <!----- GitHub ----->

<!-- Task 7 -->
<h2>Task 7</h2>
    <h3> Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page. </h3>
       
</body>
</html>