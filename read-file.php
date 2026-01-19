<?php
$fileName = "files/dummy.txt";
$myfile = fopen($fileName, "r") or die("Unable to read file");
echo fread($myfile, filesize($fileName));
fclose($myfile);
