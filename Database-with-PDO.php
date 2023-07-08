<!DOCTYPE html>
<html>

<head>
    <title>Connection to database</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php-lessons";
    $connection = false;
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        echo "Connection succesfull";
    } catch (PDOException $e) {
        die("Database connection failed: " . mb_strtoupper($e->getMessage()));
    }
    $connection = null;
    ?>
</body>

</html>