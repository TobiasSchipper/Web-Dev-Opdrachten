<!doctype HTML>
<html>
    <head>
        <title>File:Function_ValueReference.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 19/08/2022
    //Time: 23:24

    //Defining our necessary functions. One pass by value, the other pass by reference (as seen by the & added to the parameter)
    function nameChangeByValue($name){
        echo "Changing name to Vincent<br>";
        $name = "Vincent";
        echo "The name from within the function is now {$name}<br>";
    }

    function nameChangeByReference(&$name){
        echo "Changing name to Janet<br>";
        $name = "Janet";
        echo "The name from within the function is now {$name}<br>";
    }

    // Code execution starts from here.
    $originalName = "Barny";
    echo "The original name is {$originalName}<br>";

    nameChangeByValue($originalName);

    echo "The original name is {$originalName}<br>";

    nameChangeByReference($originalName);

    echo "The original name is {$originalName}<br>";
    ?>
    </body>
</html>
