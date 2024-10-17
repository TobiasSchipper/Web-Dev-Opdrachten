<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum en Cijfers</title>
</head>
<body>
    <?php

        $jaarInNummers = 14062016;
        $eindCijfer = 10;
        $eindCijferCase = 10;

        echo "<h2>Datum</h2>";
        // Opdracht 1 Jaartal nummers om zetten in een losse getallen
        $jaarInNummersString = strval($jaarInNummers); 
        $dagInNummers = substr($jaarInNummersString, 0, 2); 
        $maandInNummers = substr($jaarInNummersString, 2, 2); 
        $jaarInNummers = substr($jaarInNummersString, 4, 4); 

        echo "<p>Dag van Vandaag is=". $dagInNummers. "</p>"; 
        echo "<p>Maand is=". $maandInNummers. "</p>"; 
        echo "<p>Het Jaar is=". $jaarInNummers. "</p>"; 
        // Opdracht 2 Cijfers
        echo "<h2>Cijfers</h2>";

        if($eindCijfer < 1)
        {
            echo "Dit is een ongeldig cijfer: $eindCijfer";
        }
        elseif($eindCijfer <= 3)
        {   
            echo "Heel Slecht Cijfer: $eindCijfer, volgende keer beter.";
        }
        elseif($eindCijfer == 4 OR $eindCijfer == 5 ) 
        {
            echo "Onvoldoende Cijfer: $eindCijfer, Volgende keer beter.";
        }
        elseif($eindCijfer == 6 OR $eindCijfer == 7 )
        {
            echo "Voldoende Gehaald: $eindCijfer, Nog een keer proberen?";
        }
        elseif($eindCijfer == 8)
        {
            echo "Goed gedaan! Cijfer: $eindCijfer.";
        }
        elseif($eindCijfer == 9)
        {
            echo "Zeer goed gedaan!  Cijfer: $eindCijfer.";
        }
        elseif($eindCijfer == 10)
        {
            echo "Uitstekend gedaan!  Cijfer: $eindCijfer.";
        } 
        else
        {
            echo "ongeldig cijfer: $eindCijfer";
        }
        echo "<h2>Case Cijfer</h2>";
        // Opdracht 3 deel 2 case Cijfers
        switch ($eindCijferCase) {
            case '1':
            case '2':
            case '3':
                echo "Heel Slecht Cijfer: $eindCijferCase, volgende keer beter.";
                break;
            case '4':
            case '5': 
                echo "Onvoldoende Cijfer: $eindCijferCase, Volgende keer beter.";
                break;
            case '6':
            case '7':
                echo "Voldoende Gehaald: $eindCijferCase, Nog een keer proberen?";
                break;
            case '8':
                echo "Goed gedaan! Cijfer: $eindCijferCase.";
                break;
            case '9':
                echo "Zeer goed gedaan!  Cijfer: $eindCijferCase.";
                break;
            case '10':
                echo "Uitstekend gedaan!  Cijfer: $eindCijferCase."; 
                break; 
            default:
                echo "ongeldig cijfer: $eindCijferCase";
                break;
        }

    ?>
</body>
</html>