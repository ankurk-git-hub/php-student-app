<?php
$name    = htmlspecialchars($_POST["name"] ?? "Guest");
$city    = htmlspecialchars($_POST["city"] ?? "Unknown");
$state   = htmlspecialchars($_POST["state"] ?? "Not Selected");
$country = htmlspecialchars($_POST["country"] ?? "India");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>body{font-family:Arial;margin:50px;} .box{background:#e8f5e9;padding:30px;border-radius:8px;}</style>
</head>
<body>
    <div class="box">
        <h2>Registration Successful!</h2>
        <p>Hello <strong><?php echo $name; ?></strong></p>
        <p>From <strong><?php echo $city; ?></strong>, <strong><?php echo $state; ?></strong>, <strong><?php echo $country; ?></strong></p>
        <a href="index.php">← Back to Form</a> | <a href="about.php">About</a>
    </div>
</body>
</html>
