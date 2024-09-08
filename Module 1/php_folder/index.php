<!DOCTYPE html>
<html>
<title> HomePage </title>
<link rel="stylesheet" type="text/css" href="./styles.css">

</head>

<style>
        body{
    background-image: url("background/SharpsHillView.jpg");
        }
    </style>



<!-- Using Google ajax API-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">

</script>


<div class="center">
<div class = "caption">            

        <h1> Hey Everyone, John Szoszorek Here!</h1>
        <p1> I am a Senior at Point Park University. My major is Applied Computer Science. 100% Yinzer</p1>
    
<div class="backOne">

        <h2> Assignment Links: </h2>
        <p><a href="https://github.com/Gp32Prog66/Assignment_2/tree/dev">Module 2</a></p>
        <p><a href="https://github.com/Gp32Prog66/Assignment_3">Module 3</a></p>
        <p><a href="http://167.88.242.32/PHP_Page/phpinfo.php">PHP MyInfo</a></p>
        <p><a href="http://167.88.242.32/phpinfo.php">Alternative MyInfo</a></p>
        

        <h2> Other PHP Files</h2>

        <ul>
            <li><a href="firstPHP.php">1. firstPHP.php </a></li>
            <li><a href="webpage.php"> 2. webpage.php</a></li>
            
        </ul>


        <h2> Picture of Me</h2>

        <img src="background/Suit.jpg" width=300 alt="John Szoszorek">

        <h2> Interests</h2>

        <ul>
            <li>Bowling</li>
            <li>Attending Concerts</li>
            <li>Building Computers</li>
            <li>Collecting Records and Cassettes</li>
            <li>Coding</li>

        </ul>

        <h2> Courses Fall 2024</h2>

        <ol>
            <li><b>CMPS 360</b> Survey of Programming</li>
            <li><b>CMPS 361</b> Web Application Development</li>
            <li><b>CMPS 460</b> Mobile Application Development</li>
            <li><b>CMPS 480</b> Senior Project</li>
            <li><b>ENGL 120</b> Introduction to Literary Studies</li>

        </ol>

        <div class="contact">
        <h2> How to Contact Me</h2>

        <div class ="">
        <p2> Email: jrszosz@pointpark.edu</p2>
        <p><a href="https://github.com/Gp32Prog66">My Github Account</a></p>
        </div>

        <p> This is a test site where I am transferring the contents to PHP </p>
</div>
</div>

<!-- PHP Scripting-->
<td width = '40' class = 'center'>
<?php

echo "Using the echo command. Creates an echo chamber\n"; 
#Variable
$name = "John";
echo $name;

$string = "\nWelcome! Enjoy your visit.";
$int = 42;

echo $string;
echo "\nThe meaning of life is ";
echo $int;

$guest = "Viewer";

?>

<p> Say Hello to our special guest <?php echo $guest ?>, and I hope you enjoy your visit! </p>
</td>
</body>

</html>
