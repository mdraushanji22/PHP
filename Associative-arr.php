<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Multidimensional Associative Array
    $users = [
        ["Name" => "Md Raushan", "Age" => 26, "City" => "Delhi"],
        ["Name" => "Md Jilani", "Age" => 25, "City" => "Noida"],
        ["Name" => "peter", "Age" => 24, "City" => "Gurgaon"],
        ["Name" => "Bruce", "Age" => 23, "City" => "Haryana"],

    ];
    foreach ($users as $user) {
        foreach ($user as $key => $usersDetail) {
            echo "$key is $usersDetail";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
    }

    ?>
</body>

</html>