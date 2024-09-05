<!DOCTYPE html>
<html>
<title> HomePage </title>
<link rel="stylesheet" type="text/css" href="./styles.css">

</head>


<!-- Using Google ajax API-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">

</script>

<div class="center">

    <body>
        <h1> Hey Everyone, John Szoszorek Here!</h1>
        <p1> I am a Senior at Point Park University. My major is Applied Computer Science. 100% Yinzer</p1>
    <div class = "caption">
        <h2> Assignment Links: </h2>
        <p><a href="http://jrszosz.it.pointpark.edu/Assignment%202/form.html">Module 2</a></p>
        <p><a href="https://github.com/Gp32Prog66/Assignment_3">Module 3</a></p>
        <p><a href="http://167.88.242.32/PHP_Page/phpinfo.php">PHP MyInfo</a></p>
        <p><a href="http://167.88.242.32/phpinfo.php">Alternative MyInfo</a></p>
        </div>

        <h2> What I have learned in Week 3</h2>

        <ul>
            <li> 1. Learned How to Install NodeJS</li>
            <li> 2. Ran my First Program Using Node JS via Google Chrome</li>
            <li> 3. Installing Packages via the Node Package Manager</li>
            <li> 4. Display the Results of my Program Via a Port Number</li>
        </ul>


        <h2> Picture of Me</h2>

        <img src="pic.jpg" width=300 alt="John Szoszorek">

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

        <h2> Demonstrations</h2>
        <p><a href="http://jrszosz.it.pointpark.edu/Animation/First Animation.html">Basic Animation</a></p>

        <h2> How to Contact Me</h2>
        <p2> Email: jrszosz@pointpark.edu</p2>
        <p><a href="https://github.com/Gp32Prog66">My Github Account</a></p>


        <p> This is a test site where I am transferring the contents to PHP </p>
</div>

<!-- PHP Scripting-->
<?php
echo "Using the echo command. Creates an echo chamber";
#Variable
$name = "John";
echo $name;

$string = "Welcome! Enjoy your visit.";
$int = 42;

echo $string;
echo "The meaning of life is ";
echo $int;

$guest = "Viewer";
?>
<p> Say Hello to our special guest <?php echo $guest ?>, and hope you enjoy your visit! </p>
</body>

</html>