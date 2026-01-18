<!DOCTYPE html>
<html lang="en">

<head>
    <title>cookie with request</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter username">
        <br>
        <br>
        <button name="button" value="set">Set cookies</button>
        <br>
        <br>
        <button name="button" value="display">Display cookie</button>
        <br>
        <br>
        <button name="button" value="delete">Delete cookie</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {

        $val = $_POST['user'];
        setcookie("user", $val);
        echo "Cookie is set";
    }
    if ($_POST['button'] == "display") {
        if (isset($_COOKIE['user'])) {
            echo "<br>";
            echo $_COOKIE['user'];
        }
    }
    if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['user'])) {
            echo "<br>";
            setcookie('user', '', -1);
        }
    }
}

?>