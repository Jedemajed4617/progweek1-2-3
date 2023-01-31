<?php
$weekdagen = array(
    'ma' => 'maandag',
    'di' => 'disndag',
    'woe' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
); 

foreach ($weekdagen as $key => &$value) {
    switch ($key) {
        case 'za':
        case 'zo':
            $value = strtoupper($value);
            break;
        default:
            $value = ucfirst($value);
    }
}

$omgekeerd = array();
$size = sizeof($weekdagen);

foreach (array_reverse($weekdagen) as $value) {
    array_push($omgekeerd, $value);
}

echo "Grootte van originele array: " . count($weekdagen) . "<br>";
echo "Grootte van nieuwe array: " . count($omgekeerd) . "<br>";

$omgekeerd = array_reverse($weekdagen);

//strtoupper(); uppercase
//ucfirst(); hoofdletter van bvb naam

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
*/

/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
*/

