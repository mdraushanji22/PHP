<!DOCTYPE html>
<html lang="en">

<head>
    <title>Read File</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="files">
        <br>
        <br>
        <button>Read file</button>
    </form>
</body>

</html>



<?php
if (isset($_FILES['files'])) {
    $fileName = $_FILES['files']['tmp_name'];
    $myfile = fopen($fileName, "r") or die("Unable to read file");
    echo fread($myfile, filesize($fileName));
    fclose($myfile);
}
