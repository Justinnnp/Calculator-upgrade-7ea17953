<?php
$operator = readline("Welke operatie wil je uitvoeren?(+, -, %) ");

/*$getal1 = readline("Eerste getal ");
$getal2 = readline("Tweede getal ");
*/

if ($operator == "+") {
    $getal1 = readline("Eerste getal ");
    $getal2 = readline("Tweede getal ");
    $uitkomst = ($getal1 + $getal2);
    echo($uitkomst);

} else if($operator == "-") {
    $getal1 = readline("Eerste getal ");
    $getal2 = readline("Tweede getal ");
    $uitkomst = ($getal1 - $getal2);
    echo($uitkomst);

}else if($operator == "%") {
    $getal1 = readline("Eerste getal ");
    $getal2 = readline("Tweede getal ");
    $uitkomst = ($getal1 % $getal2);
    echo($uitkomst);
} else if($operator == "*") {
    echo("'*' is geen geldige operatie");
    
} else {
    echo($operator ." is niet een getal");
}
?>

