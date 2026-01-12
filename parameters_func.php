<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>

<body>
    <h1 style="color: pink;">FARHINA KHATUN</h1>
    <h1 style="color: blue;">MD NABEEL</h1>


    <?php
    // ----------- Paragraph Function -----------
    function para($name, $age)
    {
        echo "<p>$name : Md Raushan Jilani</p>";
        echo "<p>$age : 24</p>";
    }

    para("My name", "My age");

    echo "<hr>";

    // ----------- Sum Function -----------
    function sum($a, $b, $color)
    {
        echo "<h1 style='color:$color; background-color:black; width:50%; padding:10px;'>
            Addition of numbers
          </h1>";
        echo "<p>$a + $b = " . ($a + $b) . "</p>";
    }

    // Function Calls
    sum(10, 20, "green");
    sum(10, 20, "red");
    sum(40, 20, "yellow");
    sum(15, 20, "blue");
    sum(16, 20, "magenta");
    sum(15, 20, "violet");

    ?>

</body>

</html>