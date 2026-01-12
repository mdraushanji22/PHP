<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="condition.php" method="POST">
        Age: <input type="text" name="data">
        <input type="submit" value="check">
    </form>

    <?php
    if (isset($_POST["data"])) {

        $age = $_POST["data"];

        if ($age >= 18) {
            echo "Voter";
        } else {
            echo "Not Voter";
        }
    }
    ?>

</body>

</html>