<?php
if ($_POST) {
    echo $_POST["name"];
}
?>



<form action="#" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit-button" value="submit">
</form>