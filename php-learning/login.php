<?php

session_start();

if (isset($_POST["username"])) {
    $username = trim($_POST["username"]);

    if ($username !== "") {
        $_SESSION["username"] = $username;
        echo "Redirecting...";
      //  header("Location: dashboard.php");
        echo "شرط اجرا شد";
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="POST">
    <label>نام کاربری:</label>
    <input type="text" name="username">
    <br><br>
    <input type="submit" value="ورود">
</form>

</body>
</html>