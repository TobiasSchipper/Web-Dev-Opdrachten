<?php
/*
*Open a PHP block at the top to issue the include/include_once/require/require_once
*Know the difference between those 4 functions!
*/
include_once('html_functions.php')


/*
*After including, the entire file is 'available'. That includes functions, variables, loops, etc.
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Hello World!
    </title> 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body dir="ltr">
    <div id="wrapper">

        <header>
            <div id="logo"><img src="/img/logo.svg" alt="StendenLogo"></div>
            <div class="mainHeading">
            <h1>Hello '.$name.'!</h1>
            </div>
        </header>
        <section class="tiles">
            <div class="lgTile">
                <h2>Welcome Gerjan</h2>
                <p>This screen indicates that the docker PHP development environment for NHL-Stenden is running! 🥳 You
                    can now start coding, or... Check out the tiles for more useful information</p>
                <p>You can add your files to the "app/public" folder. Any files not present in the public folder will
                    not be displayed to the public. They can be used by your own files though!</p>
                <h3>Database</h3>
                <p>The database is accessable at <a href="http://127.0.0.1:3306">127.0.0.1:3306</a>. The default username is <strong>"root"</strong>
                    with password <strong>"qwerty"</strong>. Keep in mind, this is a root user with all permissions. To add another
                    user, navigate to the <strong>.env</strong> file and uncomment the two DB_ lines and fill in the desired user. Afterwards, use <i>docker-compose up</i> to reinitiate the environment.
                </p>
                <p>You use PHPMyAdmin at <a href="http://127.0.0.1:8080">127.0.0.1:8080</a> to access the database or by using another tool like MySQL Workbench. The beforementioned login information still applies.</p>
                <p>Happy coding! 🐱‍👤</p>
            </div>

        </section>
        <section class="tiles">

        <?php
        /*
        *Call the required function. Provide with parameters as needed.
        This will now perform the function in the called location.
        */
            renderApps($collection);
        ?>
            
        </section>
        <footer id="copy">
            &copy; NHL-Stenden 2021
        </footer>
    </div>
</body>

</html>