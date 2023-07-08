<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Register</h1><br><br>

    <form action="database.php" method="POST">
        <label for="first-name">First Name:</label>
        <input type="text" name="first-name" placeholder="e.g. Martin" required><br><br>


        <label for="last-name">Last Name:</label>
        <input type="text" name="last-name" placeholder="e.g. Garrix" required><br><br>


        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="e.g. xxxxx@xxxxxx.com" required><br><br>


        <label for="password" required>Password:</label>
        <input type="password" name="password">

        <input type="submit" name="submit-button" value="submit">
    </form>
</body>

</html>