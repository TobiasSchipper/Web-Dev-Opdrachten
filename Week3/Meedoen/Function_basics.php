<!doctype HTML>
<html>
    <head>
        <title>File:Function_basics.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 18/08/2022
    //Time: 23:28

    /*
     * Function - basics: a custom function requires to start its declaration with the 'function' keyword.
     * The parameters you see between the parentheses ($foo and $bar) are optional. They are values you can pass with
     * the call of the function so that the values can be used inside the curly braces {}.
     * The code to be executed has to be supplied within the curly braces {}, this example has a set of echo's which
     * echo the result of several equations.
     */
    function basicArithOps($foo, $bar)
    {
        echo $foo+$bar."<br>";
        echo $foo-$bar."<br>";
        echo $foo/$bar."<br>";
        echo $foo*$bar."<br>";
    }

    /*
     * Below you can see the call of the function basicArithOps(). The parentheses next to the name tells you that it's a function.
     * The call consists of the name of the function combined with the necessary parameters ($foo and $bar). In this example we
     * will be passing two integers, both the number 5, to the function.
     * Try adding another parameter or removing one in the function call below to see what happens.
     */
    basicArithOps(5,5);


    ?>
    </body>
</html>
