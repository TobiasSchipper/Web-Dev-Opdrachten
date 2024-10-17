<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $Wachtw = filter_input(INPUT_POST, "WachtW");
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
        <a>CONTACT</a>
        <a>REGISTER</a>
        <a>HOMEPAGE</a>
    </div>
    <div class="Content">
        <div class="login">
            <h2>Login</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="vNaam">Password:</label>
                <input type="text" name="Wachtwoord" id="WachtW">
                <div>
                    <label for="">User:</label>
                    <input type="radio" name="aantal" value="user" id="user">
                    <label for="">Admin:</label>
                    <input type="radio" name="aantal" value="admin" id="admin">
                </div>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            </form>
        </div>
        <div class="centerContent">
            <h2>Browsers</h2>
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