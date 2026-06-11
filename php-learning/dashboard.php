<?php

session_start();

if(isset($_SESSION["username"])){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>
    <?php
    echo "خوش آمدی، " . $_SESSION["username"];
    ?>
</h2>

<a href="logout.php">خروج از حساب</a>

</body>
</html>
