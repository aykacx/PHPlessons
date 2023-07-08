<?php
$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, ratione?";
#explode converts any text to array
$convertToArray = explode(" ", $text);

for ($i = 0; $i < 10; $i++) {
    echo $convertToArray[$i], "<br>";
}
#implode converts any array to text
$convertToText = implode(" ", $convertToArray);
echo "<br><br>", $convertToText;


?>