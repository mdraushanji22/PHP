<?php

$fileName = "dummy.txt";
$content = "This is dummy file";
$file = fopen($fileName, "w") or die("Unable to file");

fwrite($file, $content);
fclose($file);

echo "created file";
