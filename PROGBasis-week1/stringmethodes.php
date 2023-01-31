<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String methodes</title>
</head>
<body>

<h2>String methodes</h2>
<form action="" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" name="naam" required placeholder="Naam"><br><br>

    <label for="straat">Straat:</label><br>
    <input type=text name="straat" required placeholder="Straat">><br><br>

    <label for="huisnummer">Huisnummer:</label><br>
    <input type=text name="huisnummer" required placeholder="Huisnummer">><br><br>

    <label for="postcode">Postcode:</label><br>
    <input type=text name="postcode" required placeholder="Postcode">><br><br>

    <label for="woonplaats">Woonplaats:</label><br>
    <input type=text name="woonplaats" required placeholder="Woonplaats">><br><br>

    <input type="submit" name="submit" value="verzenden" >
</form>

<?php

if (isset($_POST['submit'])) {
    $naam = ucfirst(strtolower(htmlspecialchars($_POST['naam'])));
    $straat = ucfirst(strtolower(htmlspecialchars($_POST['straat'])));
    $huisnummer = htmlspecialchars($_POST['huisnummer']);
    $postcode = htmlspecialchars($_POST['postcode']);
    $woonplaats = ucfirst(strtolower(htmlspecialchars($_POST['woonplaats'])));

    if (is_numeric($huisnummer)){
        echo
            '<br>',
            "Naam: ", $naam, '<br>', '<br>',
            "Straat: ", $straat, '<br>', '<br>',
            "Huisnummer: ", $huisnummer, '<br>', '<br>',
            "Postcode: ", $postcode, '<br>', '<br>',
            "Woonplaats: ", $woonplaats, '<br>', '<br>';  
    }
    else {
        echo '<script>alert("Geen nummers gebruikt bij Postcode!")</script>';
    }

}
?>

</body>
</html>