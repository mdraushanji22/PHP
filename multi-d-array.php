<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Multi Dimensional Array
    $users = [
        [1, "Md Raushan", "mdraushanji22gmail.com", 24],
        [2, "Raushan", "mdraushanji22gmail.com", 24],
        [3, "Jilani", "mdraushanji22gmail.com", 24],
        [4, "Khan", "mdraushanji22gmail.com", 24]
    ];

    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    for ($i = 0; $i < count($users); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($users[$i]); $j++) {
            echo "<td>{$users[$i][$j]}</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>