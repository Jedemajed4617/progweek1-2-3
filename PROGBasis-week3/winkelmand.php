<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand week3</title>
</head>
<center>
<body>

<?php

$dagtotaal = array();
$prijzen = array(
        'chocola' => 1.25,
        'snoepgoed' => 2.75,
        'blikje frisdrank' => 2.25,
        'gevulde koek' => 1.75
);

// foreach($prijzen as $key => $value){
//     $key = ucfirst($key);
//     echo $key . ' kost €' . $value . "<br>";
// }



?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label>
    <br>
    <select name="product" id="product">
        <?php 

            foreach($prijzen as $key => $value){
                $key = ucfirst($key); ?>
                <option value="<?php echo $key; ?>"><?php echo ucfirst($key) . " | €" . $value ?></option>
                <?php
            }
        
        ?>
    </select>
    <br><br>

    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal" min="<?php echo 1?>" max="<?php echo 200?>"><br><br>
    
    <input style="list-style: none; text-decoration: none; color: black; padding: 0.2rem; border: 2px solid black; border-radius: 5px;" type="submit" name="submit" value="toevoegen"><br><br>
</form>

<?php

if (isset($_GET['emptybasket'])){
    setcookie("totaalprijs", 0);
    $totaal = 0;
    setcookie("aantal", 0);
    $aantalmandje = 0;
    header("Location: winkelmand.php");
}

if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];


    if (isset($_COOKIE["totaalprijs"])){
        $totaal = $_COOKIE["totaalprijs"];
    }
    else{
        setcookie("totaalprijs", 0);
        $totaal = 0;
    }

    if (isset($_COOKIE["aantal"])){
        $aantalmandje = $_COOKIE["aantal"];
    }
    else{
        setcookie("aantal", 0);
        $aantalmandje = 0;
    }


    if (empty($aantal)) {
        echo 'Aantal moet groter zijn dan 0';
    } else {

        if (array_key_exists($product, $prijzen )) {

            /*
             * 1. Wijzig de var_dump en laat met behulp van een loop de inhoud van de $prijzen array zien.
             * 2. Kijk in de array $prijzen wat de prijs is die bij het product behoort.
             * 3. Maak een functie die de totaalprijs berekent voor het gekozen product.
             * 4. Kies minimaal 4 keer een product en submit dit.
             * 5. Maak een functie die het totaal van elke bestelling in de array $dagtotaal stopt.
             * 6. Maak een functie die het totaal van alle bestellingen optelt.
             * 7. Maak een kortingsfunctie, als het totaalbedrag groter is dan 100 mag je 5% korting geven
             * 8. Laat op het scherm zien wat de klant moet betalen.
            */

            

            $prijs = $prijzen[$product];
            $totaalprijsproduct = $aantal * $prijs;
            $totaal = $totaal + $totaalprijsproduct;
            $aantalmandje = $aantalmandje + $aantal;
            setcookie("totaalprijs", $totaal);
            setcookie("aantal", $aantalmandje); 
            echo '<br><br>';
            echo 'Gekozen product en totaal prijs', '<br><br>';
            echo 'Product: ' . $product . '<br>';
            echo 'Aantal producten in winkelmand: ' . $aantalmandje . '<br>';
            echo 'Totaal prijs product: €' . $totaalprijsproduct . '<br>'; 

            if ($totaal > 99){
                echo 'Checkout prijs producten: €' . $totaal / 100 * 95;
                echo '<script>alert("U heeft 5% korting gekregen!")</script>';  
            }
            else{
                echo 'Checkout prijs producten: €' . $totaal; 
            }

        } else {
            echo 'Dit product wordt niet verkocht';
        }

    }

}
else{
    $totaal = $_COOKIE["totaalprijs"];
    if ($totaal > 99){
        echo 'Checkout prijs producten: €' . $totaal / 100 * 95 . '<br>';
        echo '<script>alert("U heeft 5% korting gekregen!")</script>';  
    }
    else{
        echo 'Checkout prijs producten: €' . $totaal . '<br>'; 
    }
    $aantalmandje = $_COOKIE["aantal"];
    echo 'Aantal in winkelmand: ' . $aantalmandje . '<br>';  
}

?>
<br>
<br>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<a style="border-radius: 5px; list-style: none; text-decoration: none; color: black; padding: 0.2rem; border: 2px solid black;" href="winkelmand.php?emptybasket=true">Leeg Winkelmand</a>
</body>
</center>
</html>