<?php
$data = array("first-name"=>$firstname = $_POST["first-name"],"last-name"=>$lastname = $_POST["last-name"],"email"=>$email = $_POST["email"],"password"=>$password = $_POST["password"]);

foreach ($data as $key => $value) {
    echo $key. "\n". $value. "<br>";
}

?>