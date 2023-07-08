<!DOCTYPE html>
<html>

<head>
    <title>Get Post 1</title>
    <meta charset="utf-8">
</head>

<body>
    <a href="Get-Post-1.php?open=Get-Post-2.php">Get-Post-2</a>
    <?php
    if ($_GET) {
        include_once($_GET["open"]);
        # code...
    }
    ?>
</body>

</html>