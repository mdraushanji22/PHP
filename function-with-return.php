<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <h1 style="color: green;">Functions with return keyword</h1>
    <hr>
    <?php
    function withReturn($name, $age)
    {
        return "My Name is $name <br> my age is $age";
    }

    echo "<h2>" . withReturn("Md Raushan", 24) . "</h2>";

    function sum($a, $b)
    {
        return $a + $b;
    }

    $total = sum(10, 20);
    echo "Total is: $total";


    ?>
</body>

</html>