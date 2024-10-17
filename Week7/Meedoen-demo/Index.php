<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $vNaam = filter_input(INPUT_POST, "Voornaam");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $aNaam = filter_input(INPUT_POST, "Achternaam");
    $recept = filter_input(INPUT_POST, "recept", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $com = filter_input(INPUT_POST, "communicatie");
    $aantalR = filter_input(INPUT_POST, "aantal");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Meedoen-demo/Recepten.css" type="text/css">
    <title>Recepten</title>
</head>
<body>
    <main class="content">
        <h1>Recepten Nieuwsbrief</h1>

        <hr>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="vNaam">Voornaam:</label>
            <input type="text" name="Voornaam" id="vNaam">
            <label for="aNaam">Achternaam:</label>
            <input type="text" name="Achternaam" id="aNaam">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">

            <p class="nomargin">Ik wil graag recepten ontvangen voor:</p>
            <dir>
                <label for="vlees">Vlees</label>
                <input type="checkbox" name="recept[]" value="vlees" id="vlees">
                <label for="vis">Vis</label>
                <input type="checkbox" name="recept[]" value="vis" id="vis">
                <label for="vegatarisch">Vegatarisch</label>
                <input type="checkbox" name="recept[]" value="vegatarisch" id="vegatarisch">
                <label for="Vegan">Vegan</label>
                <input type="checkbox" name="recept[]" value="vegan" id="vegan">
                <label for="kapsalon">Kapsalon</label>
                <input type="checkbox" name="recept[]" value="kapsalon" id="kapsalon">
            </dir>
            <label for="communicatiecommunicatie">Nieuwsbrief</label>
            <select name="communicatie" id="communicatie">
                <option value="digitaal">Digitaal</option>
                <option value="vogel">Post Duif</option>
                <option value="post">Door de Post</option>
                <option value="nuralink">Door Nuralink</option>
            </select>

            <p class="aantal">Hoeveel recepten?</p>
            <div>
                <label for="">0</label>
                <input type="radio" name="aantal" value="0" id="nul">
                <label for="">1</label>
                <input type="radio" name="aantal" value="1" id="een">
                <label for="">2</label>
                <input type="radio" name="aantal" value="2" id="twee">
                <label for="">3</label>
                <input type="radio" name="aantal" value="3" id="drie">
            </div>

            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(!empty($vNaam) && !empty($aNaam) && !empty($email))
                {
                    // Doorgaan met Controle
                }
                else
                {
                    // Echo Foutmelding 
                    echo "Graag voornaam, achternaam en een geldige email invoeren.";
                }
            }
        ?>
    </main>
</body>
</html>