<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $email = filter_input(INPUT_POST, "email",);
        $Password = filter_input(INPUT_POST, "password");
        $user = filter_input(INPUT_POST, "user");
    }
    else
    {
        ;  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekaBoo</title>
    <link rel="stylesheet" href="./css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./css/Style.css" type="text/css">
</head>
<body>
    <div class="Header">
        <img src="./img/logo_geekaboo.png" alt="Logo-Geekaboo">
    </div>
    <div class="Menu">
        <a href="./pages/Error.html">CONTACT</a>
        <a href="./pages/register.html">REGISTER</a>
        <a href="./index.php">HOMEPAGE</a>
    </div>
    <div class="Content">
        <div class="login">
            <h2>Login</h2>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if ($email == "user" || $email == "user@test.com")
                    {
                        // Doorgaan met Controle
                        if ($Password == "user" && $user == "user")
                        { 
                            echo "<h3>Welcome User!</h3>";
                        }
                        else
                        {   
                            // Echo Foutmelding 
                            echo "<h3>Please select the correct user and enter a valid password</h3>";
                        }
                    }
                    elseif ($email == "admin" || $email == "admin@test.com")
                    {
                        if ($Password == "admin" && $user == "admin")
                        { 
                            echo "<h3>Welcome Admin!</h3>";
                        }
                        else
                        {
                            echo "<h3>Please select the correct user and enter a valid password</h3>";
                        }
                    }
                    else
                    {
                        // Echo Foutmelding 
                        echo "<h3>Please enter a valid email/username</h3>";
                    }
                }
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <div>
                <label for="email">Username/Email:</label>
                <input type="text" name="email" id="email">
                <label for="password">Password:</label>
                <input type="password" name="password" id="Password">
            </div>
            <div class="logInButton">
                <input type="submit" value="Login">
            </div>
            <div>
                    <label for="">User:</label>
                    <input type="radio" name="user" value="user" id="user">
                    <label for="">Admin:</label>
                    <input type="radio" name="user" value="admin" id="admin">
            </div>
            <a href="./pages/forgot.html">Forgot password?</a>
            <a href="./pages/register.html">Register</a>
            </form>
        </div>
        <div class="centerContent">
            <h2>Browsers</h2>
            <p>We create websites for:</p>
            <div class="Browsers">
                <img src="./img/ff.png" alt="FireFox">
                <img src="./img/ie.png" alt="Internet Explorer">
                <img src="./img/opera.png" alt="Opera">
                <img src="./img/safari.png" alt="Safari"> 
                <br>
                <img src="./img/netscape.png" alt="Netscape">
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
            </p>
        </div>
        <div class="welcome">
            <h2>Welcome to GeekaBoo</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
            </p>
        </div>
    </div>
    <div class="Footer">
        <div class="info">
            <h3>Info about Geekaboo</h3>
            <p>
                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.  
            </p>
        </div>
        <div class="service">
            <h3>Service at Geekaboo</h3>
            <p>
                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
            </p>
        </div>
        <div class="more">
            <h3>More from Geekaboo</h3>
            <p>
                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
            </p>
        </div>
        <div class="warranty">
            <h3>Warranty at Geelaboo</h3>
            <p>
                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
            </p>
        </div>
    </div>
    <div class="copyRight">
        <p>© GeekaBoo 2024</p>
    </div>
</body>
</html>