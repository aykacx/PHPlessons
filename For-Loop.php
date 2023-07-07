<body>
    <?php
    $Names = array("Jacop", "Micheal", "Maggie", "Ashley");
    $Months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    ?>
    <select>
        <?php
        for ($i = 0; $i < count($Names); $i++) {
            echo "<option>", $Names[$i], "</option>", "<br>";
        }
        ?>
    </select>
    <br>
    <select>
        <?php
        for ($i = 1; $i <= 31; $i++)
            echo "<option>", $i, "</option>";
        ?>

    </select>
    <br>
    <select>
        <?php
        for ($i = 0; $i < count($Months); $i++) {
            echo "<option>", $Months[$i], "</option>", "<br>";
        }
        ?>
    </select>
    <br>
    <select>
        <?php
        for ($i = 2023; $i >= 1960; $i--)
            echo "<option>", $i, "</option>";
        ?>

    </select>
</body>