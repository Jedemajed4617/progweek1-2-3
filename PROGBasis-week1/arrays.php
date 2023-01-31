<?php

$aanhef = array(
    "aanhef" => "Beste",
    "klant" => "");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "jouw naam" => "",
  "functie" => "Directeur Webshop beheer"
);

print_r($aanhef);
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r($korting);
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r($ondertekening);
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r(str_replace("product", "zakje", $korting));
$aanbieding = array_merge($aanhef, $korting, $ondertekening);
print_r("<br>");
print_r("<br>");
print_r("<br>");
print_r("<br>");


print_r($aanbieding);

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
*/

/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */

/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
*/