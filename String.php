
<h1>String</h1>
<br><br>





<meta charset="UTF-8" />
<title>StringLesson</title>


<?php

$stringVar = "PHP'de neler yapılabilir?";
echo $stringVar, "<br>";

$convertToLow = strtolower($stringVar);
echo $convertToLow, "<br>";

$mbConvertToLow = mb_strtolower($stringVar, "UTF-8");
echo $mbConvertToLow, "<br>";

$convertToUpper = mb_strtoupper($stringVar);
echo $convertToUpper, "<br>";

$firstsUpper = ucwords($stringVar);
echo $firstsUpper, "<br>";
"<br>";
$firstUpper = ucfirst($stringVar);
echo $firstUpper, "<br><br><br>";

$customizeString=ucwords(mb_strtolower($stringVar, "UTF-8"));
echo $customizeString;

?>