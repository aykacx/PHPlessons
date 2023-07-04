<h1>Arrays</h1>
<br><br>


<?php
$person0 = "Ramo";
$person1 = "Fero";
$person2 = "Furkan";

echo $person0, " ", $person1, " ", $person2, "<br><br>";

$arrayVar0 = array(); /* 1st use of arrays */
$arrayVar1[]=""; /* 2nd use of arrays */

$exam = array("ramo"=>"Ramazan","Ferhat", "Furkan"); /* 0th element of my array named ramo, Now callable as "ramo" */
echo $exam["ramo"], " ", $exam[0], " ", $exam[1], "<br><br>";

$arrayVar[]= "halil";
$arrayVar[]= "ibrahim";
$arrayVar[]= "aykaç";
echo ucfirst($arrayVar[0]), " ", ucfirst($arrayVar[1]), " ", mb_strtoupper($arrayVar[2]). "<br>";

foreach($arrayVar as $array){
    echo ucfirst($array) . "\n";
}

?>