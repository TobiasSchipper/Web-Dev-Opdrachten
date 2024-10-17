<!doctype HTML>
<html>
    <head>
        <title>File:Function_scope.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 19/08/2022
    //Time: 22:31

    /* Function - scope: The scope can be considered the reach of a function. What is accessible inside and outside
     * of the curly braces. This is in regard to variables.
     */
    $output = "named output";

    function scopeExample(){
        echo "The variable {$output} is out of scope";
        echo "In order to make the variable {$output} accessible, we will need add a line of code";
    }

    /*
     * In order to make the code above functional, we need to make the function look for the $output outside the
     * curly braces. We can do so by defining $output as a global one.
     * Take the following line of code and paste it above the first echo. This will allow the function to look outside
     * the current scope so that it can find $output.
     *
     * global $output;
     */

    ?>
    </body>
</html>
