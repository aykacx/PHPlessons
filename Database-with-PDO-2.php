<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-lessons";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $read = $connection->query("SELECT * FROM students", PDO::FETCH_ASSOC);

    if ($read != false && !empty($read)) {
        echo "<ol>";
        foreach ($read as $value) {
            $id = $value["ID"];
            $name = $value["Name"];
            $situation = $value["Situation"];

            echo "<li>"."ID: " . $id . "   " . "Name: " . $name . "   " . "Situation: " . $situation . "<br>"."</li>";
        }
        echo "</ol>";
    }
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>