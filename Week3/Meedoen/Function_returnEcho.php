<!doctype HTML>
<html>
    <head>
        <title>File:Function_returnEcho.php</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //Author: Gerjan
    //Date: 20/08/2022
    //Time: 22:26

    /*
     * The following example is an illustration of the difference between return and echo.
     * The functions created are basically useless, they are just using the functionality of an already existing function
     * called random_int (as you can see from the function declaration). Creating functions like this is bad practice, but again,
     * this is simply an example.
     */

    function randomNumberReturn($min, $max){
        return random_int($min, $max);

        //The following line will not executed since it is preceded by a return statement.
        echo "Random number provided";

    }

    function randomNumberEcho($min, $max){
        echo random_int($min, $max);

        //The following line will be executed, there is nothing that will stop the function prematurely.
        echo "Random number provided";
    }

    //One of these 2 will show up on screen and the other will pass its result to the code, which is invisible.
    randomNumberEcho(1, 6);
    randomNumberReturn(1, 6);

    //In order to get the result of randomNumberReturn() on screen, we can preface it with an echo.

    echo randomNumberReturn(1, 6);

    /*
     * The following example will show you how we can use functions with a return statement in collaboration with other
     * functions.
     */

    function higherOrLower($randomNumber){
        $numberToBeat = rand_int(1,6);

        if($numberToBeat > $randomNumber){
            echo "Im so sorry, you lost. Your number was {$randomNumber} but the house has a {$numberToBeat}";
        }
        elseif($numberToBeat < $randomNumber){
            echo "Congratulations, you are a winner! Your number {$randomNumber} has beaten the house with a {$numberToBeat}";
        }
        else
        {
            echo "Wow a tie?!, what are the odds of that..... (1/6 * 1/6) * 6 = 1/6th actually.... so fairly good odds.";
        }
    }

    /*
     * The followinc call can only be done because our randomNumberReturn has a return statement. That return statement
     * will pass the variable into the new function as a parameter, using it for that function.
     * It will not work with a function that does not return an integer. So since our randomNumberEcho() will not work in
     * this case, but feel free to try it.
     */
    higherOrLower(randomNumberReturn(1, 6));

    //Line comments
    #Line comments

    /*
     * Block comment
     */
    ?>
    </body>
</html>
