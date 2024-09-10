<html>
    <head>
        <title>MyFirst PHP Page</title>
        <style> 
            body
            {
                font-family: Arial, Helvetica, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                text-align: center;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <!--Adding PHP to Body-->
        <?php
        $name = "Johnny Ray";
        echo $name;

        $string = "RandomString";
        $int = "8675309";

        echo $string;
        echo $int;
 
        ?>

        <p>Hey! My name is <?php echo $name ?>. Nice to meet you</p>
    </body>
</html>