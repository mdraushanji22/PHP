<?php
setcookie("fruit", "apple", time() + (86400));
setcookie("color", "green", time() + (86400));
if (isset($_COOKIE['fruit'])) {

    echo "Cookie is set";
    echo "<br>";
    echo "current fruit is " . $_COOKIE['fruit'];
} else {
    echo "cookie is not set";
    echo "<br>";
    if (isset($_COOKIE['color'])) {
        echo "current color is " . $_COOKIE['color'];
    } else {
        echo "cookie is not set";
    }
}
