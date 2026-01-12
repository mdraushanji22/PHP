<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // function fruit($name, $color = "red")
    // {

    //     echo "This is $name and color is $color";
    // }
    // fruit("apple", "green");

    //Default parameter functions

    function displayUser($name = "Raushan", $color = "green")
    {

        echo "<h1 style='color:$color; text-align:center;'>My name is: $name</h1>";
    }
    displayUser();

    ?>
</body>

</html>