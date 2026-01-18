<?php

$fileName = "files/dummy.txt";
$content = "This is dummy file";

// If folder does NOT exist, create it
if (!file_exists("files")) {
    mkdir("files", 0777, true);
}

$file = fopen($fileName, "w") or die("Unable to open file");

fwrite($file, $content);
fclose($file);

echo "Created file successfully!";
