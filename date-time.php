<?php
date_default_timezone_set("Asia/Kolkata");
echo date("h:i:sa");
echo "<br>";
echo date("d-M-Y");
echo "<br>";
echo date("F j, Y, g:i a") . "\n";
echo "<br>";
// March 10, 2001, 5:16 pm
echo date("m.d.y") . "\n";
echo "<br>";
// 03.10.01
echo date("j, n, Y") . "\n";
echo "<br>";
// 10, 3, 2001
echo date("Ymd") . "\n";                           // 20010310
echo date('h-i-s, j-m-y, it is w Day') . "\n";
echo "<br>";
// 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.') . "\n";
echo "<br>";
// it is the 10th day.
echo date("D M j G:i:s T Y") . "\n";
echo "<br>";
// Sat Mar 10 17:16:18 MST 2001
echo date('H:m:s \m \i\s\ \m\o\n\t\h') . "\n";
echo "<br>";
// 17:03:18 m is month
echo date("H:i:s") . "\n";
echo "<br>";
// 17:16:18
echo date("Y-m-d H:i:s") . "\n";                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)