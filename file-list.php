<?php
$path = "files";
$items = scandir($path);
$items = array_diff($items, array(".", ".."));

foreach ($items as $item) {
    echo "<br>";
    echo "<a href=\"./files/$item\">$item</a>";
}
