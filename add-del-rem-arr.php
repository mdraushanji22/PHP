<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    $users = ["Raushan", "tony", "bruce", "Bhasker"];

    array_push($users, "peter", "johny", "John");
    // array_pop($users);
    array_splice($users, -1);

    echo "<pre>";
    print_r($users);
    echo "</pre>";
    ?>

</body>

</html>