<!DOCTYPE html>
<html>
<h1>Arrays 2</h1>
<br><br>


<?php
$Items = array(
    "Fruits" => array("Apple"=>array("Green Apple","Red Apple"), "Plum"=>array("Red Plum", "Green Plum"), "Peach"=>array("Peach 1","Peach 2")),
    "Vegetables" => array("Tomato", "Cucumber", "Pepper"),
    "Meats" => array("Rib", "Beef", "Chop")
);
?>

<body>
    <ul>
        <ul>
            <li>Fruits</li>
            <ul>
                <li>
                    <?= $Items["Fruits"]["Apple"][0] ?>
                </li>
                <li>
                    <?= $Items["Fruits"]["Plum"][0] ?>
                </li>
                <li>
                    <?= $Items["Fruits"]["Peach"][0] ?>
                </li>
            </ul>
        </ul>
        <ul>
            <li>Vegetables</li>
            <ul>
                <li>
                    <?= $Items["Vegetables"][0] ?>
                </li>
                <li>
                    <?= $Items["Vegetables"][1] ?>
                </li>
                <li>
                    <?= $Items["Vegetables"][2] ?>
                </li>
            </ul>
        </ul>
        <ul>
            <li>Meats</li>
            <ul>
                <li>
                    <?= $Items["Meats"][0] ?>
                </li>
                <li>
                    <?= $Items["Meats"][1] ?>
                </li>
                <li>
                    <?= $Items["Meats"][2] ?>
                </li>
            </ul>
        </ul>

    </ul>
</body>

</html>