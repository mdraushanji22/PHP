<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h2>Function call</h2>
    <form action="" method="post">
        <button name="button" value="btn">Call function</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['button'])) {
    button_click_test();
}
function button_click_test()
{
    echo "<h3>Button click successfully</h3>";
}
?>