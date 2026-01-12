<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Nested Functions

    function test()
    {
        echo "This is test functions <br>";

        function apple()
        {
            echo "inside test functions apple";
        }
    }
    test();
    apple();

    ?>
</body>

</html>