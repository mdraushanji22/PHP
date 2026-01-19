<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multiple file created</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="filename" placeholder="Enter file name">
        <br>
        <br>
        <textarea name="content" placeholder="Enter content"></textarea>
        <br>
        <br>
        <button>Create files</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['filename'])) {

    $fileName = "files/" . $_POST['filename'];
    $content = $_POST['content'];

    // If folder does NOT exist, create it
    if (!file_exists("files")) {
        mkdir("files", 0777, true);
    }

    $file = fopen($fileName, "w") or die("Unable to open file");

    fwrite($file, $content);
    fclose($file);

    echo "Created file successfully!";
}
