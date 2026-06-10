
<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<form method="POST">
    <label>نام:</label>
    <input type="text" name="name">
    <br><br>
    <label>سن:</label>
    <input type="number" name="age">
    <br><br>
    <label>ایمیل :</label>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="ارسال">
</form>

</body>
</html>

<?php

if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"])) {

    $name = trim(htmlspecialchars($_POST["name"]));
    $age = (int) $_POST["age"];
    $email = trim(htmlspecialchars($_POST["email"]));
if ($name === "" || $email === "" || $age <= 0 ){
    if($name === ""){
        echo "خطا: نام را وارد کنید.<br>";
    }
    if($email === ""){
        echo " خطا: ایمیل را وارد کنید.<br>";
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo "خطا: ایمیل معتبر نیست.";
        }
    }
    if($age <= 0 ){
        echo "خطا: سن معتبر نیست.";
    }
    }else{
    // ادامه بنامه
    echo "نام: $name <br>";
    echo "سن: $age <br>";
    echo "ایمیل: $email <br>";

    if ($age >= 18) {
        echo "وضعیت: مجاز";
    } else {
        echo "وضعیت: غیر مجاز";
    }
    }
}
?>