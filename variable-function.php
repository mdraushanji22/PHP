<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Variable function 
    function test()
    {
        echo "variable function <br>";
    }
    function apple()
    {
        echo "Apple Function";
    }
    $testFunction = "test";
    $appleFunction = "apple";
    function main($a)
    {
        $a();
    }
    main($testFunction);
    main($appleFunction);

    ?>
</body>

</html>