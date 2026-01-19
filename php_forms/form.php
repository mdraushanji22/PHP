<?php
if (isset($_POST['name'])) {

    echo "User name is: " . $_POST['name'];
    echo "<br>";
    echo "User email is: " . $_POST['name'];
    echo "<br>";
    echo "User password is: " . $_POST['password'];
    echo "<br>";

    echo "User Skills is: " . implode(", ", $_POST['skills']);
    echo "<br>";
    echo "User Gender is: " . $_POST['gender'];
    echo "<br>";
    echo "User City is: " . $_POST['city'];
    echo "<br>";
    echo "User Bio is: " . $_POST['bio'];
}
