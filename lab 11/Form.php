<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="process.php">
        <input type="text" name="username" placeholder="Enter name">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            echo "Hello, " . htmlspecialchars($username) . "!";
        }
    ?>
</body>
</html>


