<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Array in php
    $users = ["Raushan", "Jilani", "Md", "Nabeel"];
    // echo "$users[0]";
    // echo "<br>";
    // echo "$users[1]";
    // echo "<br>";

    // echo "$users[2]";
    // echo "<br>";

    // echo "$users[3]";

    for ($user = 0; $user < count($users); $user++) {
        echo "<h1>" . $users[$user] . "</h1>";
    }


    ?>
</body>

</html>