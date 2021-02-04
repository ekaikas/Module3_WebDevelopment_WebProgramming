<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment4_ekaikas</title>
        <style>
            h1{
                text-align: center;
                background-color:white;
                color: grey;
                }
            h3{
                color: black;
                text-decoration:underline;
                font-weight:bold;
            }
            body{
                color: black;
                font-family: Tahoma, Geneva, sans-serif;
                }
            .questions{
                color: black;
                background-color:#E2D7D7;
                text-align: left;
                }
            .scripts{
                color: white;
                background-color:#007193;
                text-align: left;
                }
            .answers{
                color: black;
                background-color:#B98077;
                text-align: left;
                }
            .btn-primary
                {
                    font-size: 1rem;
                    margin-top: 0%;
                    box-shadow: 5px 5px grey;   
                }
            .dropbtn {
                background-color: #E2D7D7;
                color: black;
                padding: 16px;
                font-size: 16px;
                border: none;
                }
                .dropdown {
                position: relative;
                display: inline-block;
                }
                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }
                .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                }
                .dropdown-content a:hover {background-color: #ddd;}
                .dropdown:hover .dropdown-content {display: block;}
                .dropdown:hover .dropbtn {background-color: #007193;}  
        </style>
    </head>
    <body>
            <div class="dropdown">
                <button class="dropbtn"><b>Tasks selection button</b></button>
                <div class="dropdown-content">
                                <a href="#Task1">Task_1</a>
                                <a href="#Task2">Task_2</a>
                                <a href="#Task3">Task_3</a>
                                <a href="#Task4">Task_4</a>
                                <a href="#Task5">Task_5</a>
                                <a href="#Task6">Task_6</a>
                                <a href="#Task7">Task_7</a>
                                <a href="#Task8">Task_8</a>
                </div>
            </div>
        <header>
            <h1>Assignment 4</h1>
        </header>
        <main>
    <!--Task_1-->       
    <!--Write a php script to display courses as list. Use <li> $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")-->
    <div id="Task1">
            <div class="questions">
                <div>
                    <h2>Task_1</h2>
                    <p>
                    Write a php script to display courses as list. Use < li > $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
                    $lcourses=count($courses);<br>
                    for ($i=0; $i<$lcourses;$i++)<br>
                    {<br>
                        echo "< li >{$courses[$i]} < /li >\n";  <br>   
                    } </i> 
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                            $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
                            $lcourses=count($courses);
                            for ($i=0; $i<$lcourses;$i++)
                            {
                                echo " <b> <li>{$courses[$i]}</li>\n</b>";     
                            }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>    
            </div>
    </div>
            <hr>
    <!--Task_2-->       
    <!--The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable. array_values() is an inbuilt function that  returns all the values of an array and not the keys. Delete an element from the array below: $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");-->
    <div id="Task2">       
            <div class="questions">
                <div>
                    <h2>Task_2</h2>
                    <p>
                    The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable. array_values() is an inbuilt function that  returns all the values of an array and not the keys. Delete an element from the array below:<br> $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>  
                        unset($courses1[1]);<br>  
                        $lcourses1=count($courses1);<br>  
                        for ($i=0; $i<$lcourses1+1;$i++)<br>  
                        {<br>  
                            echo "$courses1[$i]\n";    <br>   
                        }</i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
                        <p>Let's assume that we want to delete the second element-"HTML" with the use of the unset() function. These will be the elements of the updated array: </p>
<!--Start of Solution script--> 
                       <?php
                            $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
                            unset($courses1[1]);
                            $lcourses1=count($courses1);
                            for ($i=0; $i<$lcourses1+1;$i++)
                            {
                                echo "<b>$courses1[$i]\n</b>";     
                            }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_3-->       
    <!--Sort the following array 
                    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
                    a) ascending order sort by value
                    b) ascending order sort by Key
                    c) descending order sort by Value
                    d) descending order sort by Key-->
    <div id="Task3">
            <div class="questions">
                <div>
                    <h2>Task_3</h2>
                    <p>
                    Sort the following array 
                    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
                    a) ascending order sort by value
                    b) ascending order sort by Key
                    c) descending order sort by Value
                    d) descending order sort by Key
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $courses3=array(course1=>"PHP", course2=>"HTML", course3=>"JavaScript", course4=>"CMS", course5=>"Project");<br>
                        echo "<i>a) These are the courses in ascending order sort in terms of their value/name:</i>";<br>
                        asort($courses3);<br>
                        foreach ($courses3 as $c=>$c_value){<br>
                        echo "The course code is : ".$c." and it's name is ".$c_value.".";<br>
                        }<br>
                        echo "<i>b) These are the courses in ascending order sort in terms of their key/code:</i>";<br>
                        ksort($courses3);<br>
                        foreach ($courses3 as $c=>$c_value){<br>
                        echo "The course code is : ".$c." and it's name is ".$c_value.".";<br>
                        }<br>
                        echo "<i>b) These are the courses in descending order sort in terms of their value/name:</i>";<br>
                        arsort($courses3);<br>
                        foreach ($courses3 as $c=>$c_value){<br>
                        echo "The course code is : ".$c." and it's name is ".$c_value.".";<br>
                        }<br>
                        echo "<i>b) These are the courses in descending order sort in terms of their key/code:</i>";<br>
                        Krsort($courses3);<br>
                        foreach ($courses3 as $c=>$c_value){<br>
                        echo "The course code is : ".$c." and it's name is ".$c_value.".";<br>
                        }<br>
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
                        <p>Let's assume that the elements of the array courses3, represent the values and their keys are declared as coursex where x is the number of each course.
                        As a result, the array $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");,
                        will be updated to: <b>$courses3=array(course1=>"PHP", course2=>"HTML", course3=>"JavaScript", course4=>"CMS", course5=>"Project")</b>;
                        </p>
<!--Start of Solution script-->                         
                        <?php
                        $courses3=array(course1=>"PHP", course2=>"HTML", course3=>"JavaScript", course4=>"CMS", course5=>"Project");
                        echo "<i>a) These are the courses in ascending order sort in terms of their value/name:</i>";
                        asort($courses3);
                        foreach ($courses3 as $c=>$c_value){
                        echo "<br>The course code is : ".$c." and it's name is ".$c_value.".";
                        }
                        echo "<br><br><i>b) These are the courses in ascending order sort in terms of their key/code:</i>";
                        ksort($courses3);
                        foreach ($courses3 as $c=>$c_value){
                        echo "<br>The course code is : ".$c." and it's name is ".$c_value.".";
                        }
                        echo "<br><br><i>b) These are the courses in descending order sort in terms of their value/name:</i>";
                        arsort($courses3);
                        foreach ($courses3 as $c=>$c_value){
                        echo "<br>The course code is : ".$c." and it's name is ".$c_value.".";
                        }
                        echo "<br><br><i>b) These are the courses in descending order sort in terms of their key/code:</i>";
                        Krsort($courses3);
                        foreach ($courses3 as $c=>$c_value){
                        echo "<br>The course code is : ".$c." and it's name is ".$c_value.".";
                        }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_4-->       
    <!--Change the following array's all values to upper case. $courses4=array("php", "html", "javascript", "cms", "project");-->
    <div id="Task4">
            <div class="questions">
                <div>
                    <h2>Task_4</h2>
                    <p>
                    Change the following array's all values to upper case.
                    $courses4=array("php", "html", "javascript", "cms", "project");
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $courses4=array("php", "html", "javascript", "cms", "project");<br>
                        echo "The conversion to the upper case can be done with the following function: <b>strtoupper</b>";<br>
                        $num=count($courses4);<br>
                        for ($i=0; $i<$num; $i++){<br>
                            echo strtoupper("$courses4[$i]");<br>
                        }<br>
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                        $courses4=array("php", "html", "javascript", "cms", "project");
                        echo "The conversion to the upper case can be done with the following function: <b>strtoupper</b> <br>";
                        $num=count($courses4);
                        for ($i=0; $i<$num; $i++){
                            echo strtoupper("<b>$courses4[$i] </b><br>");
                        }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_5-->       
    <!--Create an array that holds your favorite colors and print them. (indexed arrays) -->
    <div id="Task5">
            <div class="questions">
                <div>
                    <h2>Task_5</h2>
                    <p>
                    Create an array that holds your favorite colors and print them. (indexed arrays)                
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $favorite_colors=array("white", "navy_blue", "cyan", "light_green");<br>
                        echo "these are my favorite colors:<br>";
                        $color_num=count($favorite_colors);<br>
                        for ($i=0; $i<$color_num; $i++){
                            echo "<b>$favorite_colors[$i] </b><br>";
                        }  
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                        $favorite_colors=array("white", "navy_blue", "cyan", "light_green");
                        echo "these are my favorite colors:<br>";
                        $color_num=count($favorite_colors);
                        for ($i=0; $i<$color_num; $i++){
                            echo "<b>$favorite_colors[$i] </b><br>";
                        }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_6-->       
    <!--List all your favorite colors and their hexadecimal equivalents. (associative arrays)-->
    <div id="Task6">
            <div class="questions">
                <div>
                    <h2>Task_6</h2>
                    <p>
                    List all your favorite colors and their hexadecimal equivalents. (associative arrays)
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                    $favorite_colors=array("white"=>"#ffffff", "navy_blue"=>"#000080", "cyan"=>"#00FFFF", "light_green"=>"#90ee90");<br>
                         echo "these are my favorite colors:";<br>
                         $color_num=count($favorite_colors);<br>
                         foreach ($favorite_colors as $x=>$x_value){<br>
                             echo "<b>".$x." with hexadecimal equivalent ".$x_value.".</b>";<br>
                         } 
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                         $favorite_colors=array("white"=>"#ffffff", "navy_blue"=>"#000080", "cyan"=>"#00FFFF", "light_green"=>"#90ee90");
                         echo "these are my favorite colors:<br>";
                         $color_num=count($favorite_colors);
                         foreach ($favorite_colors as $x=>$x_value){
                             echo "<b>".$x." with hexadecimal equivalent ".$x_value.".<br></b>";
                         }
 
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_7-->       
    <!--Include 12 months in an array named month and print them using loop statement.-->
    <div id="Task7">
            <div class="questions">
                <div>
                    <h2>Task_7</h2>
                    <p>
                    Include 12 months in an array named month and print them using loop statement.
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                        $month=array("January","February","March","April","May","June","July","September","October","November","December");
                        $month_num=count($month);
                        for ($i=0; $i<$month_num; $i++){
                            echo "<b>$month[$i] </b><br>";
                        }
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
            <hr>
    <!--Task_8-->       
    <!--PHP script to calculate and display average temperature, five lowest and highest temperatures.-->
    <div id="Task8">
            <div class="questions">
                <div>
                    <h2>Task_8</h2>
                    <p>
                    PHP script to calculate and display average temperature, five lowest and highest temperatures.
                    </p>
                </div>
                <div class="scripts">
                    <div>
                    <h4><i>Script:</i></h4>
                    <p><i>
                
                    </i>
                    </p>
                    </div>
                    <div class="answers">
                        <h3><i>Answer</i></h3>
<!--Start of Solution script--> 
                        <?php
                        echo "<hr><h2> Calculation average temperature: </h2>";
                        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
                        //Explode is a string function that returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator, where separator is the boundary string. 
                        //The code below will produce an array from the value/string(all the temperatures) of the variable $month_temp. 
                        //The splitting of the above string to an array substrings will based on the comma(,) that separates the temperatures.
                        echo "<b>\$month_temp = \"78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73\";</b><br>
                        <br> <b>Explode</b> is a string function that returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator, where separator is the boundary string. <br>
                        The code below will produce an array from the value/string(all the temperatures) of the variable \$month_temp. <br>
                        The splitting of the above string to an array substrings will based on the comma(,) that separates the temperatures.<br>
                        <b>\$temp_array = explode(',', \$month_temp);</b><br>
                        <b>\$tot_temp = 0;</b><br>";
                        $temp_array = explode(',', $month_temp);
                        $tot_temp = 0;
                        echo "$temp_array<br>";
                        echo "$temp_array[1]<br>";
                        //Count is an array function that counts all the elements in an array.
                        echo"<br><b>Count</b> is an array function that counts all the elements in an array.<br>";
                        $temp_array_length = count($temp_array);
                            foreach($temp_array as $temp)
                            {
                            $tot_temp += $temp;
                            }
                            $avg_high_temp = $tot_temp/$temp_array_length;
                            echo "Average Temperature is : ".$avg_high_temp."<br>"; 
                        //The sort function sorts the elements of an array in ascending or descending order and based on the values or the keys of an array. 
                        echo"<br>The <b>sort</b> function sorts the elements of an array in ascending or descending order and based on the values or the keys of an array. <br>";
                        sort($temp_array);
                        echo "<br> List of five lowest temperatures :";
                        for ($i=0; $i< 5; $i++)
                        { 
                        echo $temp_array[$i].",";
                        }
                        echo "<br>List of five highest temperatures :";
                        //The loop, loops from the 25th element of the array ($temp_array_length-5), with positive increment 1 ($i++), as long as the variable i is smaller than 30 ($temp_array_length). 
                        //Since the array is sorted in ascending order (sort function), the described loop will print the five higher temperatures of the array which also represent the last five elements of the array.
                        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
                            {
                            echo $temp_array[$i].", ";
                            }
                            echo"<br><br>The loop below loops from the 25th element of the array <b>(\$temp_array_length-5)</b>, with positive increment 1 <b>(\$i++)</b>, as long as the variable <b>i</b> is smaller than 30 <b>(\$temp_array_length)</b>. <br>
                                 Since the array is sorted in ascending order <b>(sort function)</b>, the described loop will print the five higher temperatures of the array which also represent the last five elements of the array.<br>
                            <br><b>for (\$i=(\$temp_array_length-5); \$i< (\$temp_array_length); \$i++)<br>
                                {
                                echo \$temp_array[\$i].\", \";<br>
                                }</b><br>";
                        ?>
<!--End of Solution script--> 
                            <p>
                                <button type="button" class="btn-primary" onclick="window.location.href='#';">
                                Back to TOP MENU
                                </button>
                            </p>
                    </div>
                </div>
            </div>
    </div>
        </main>
    </body>
</html>