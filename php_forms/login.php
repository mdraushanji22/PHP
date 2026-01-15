<?php
if ($_GET) {
    echo $_GET['user_name'];
    echo "<br>";
    echo $_GET['user_password'];
} else {
    echo "server error";
}
