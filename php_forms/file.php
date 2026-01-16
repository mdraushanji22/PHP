<?php

// Check if file is selected
if (isset($_FILES["myfile"])) {

    $fileName = $_FILES["myfile"]["name"];
    $fileTmp = $_FILES["myfile"]["tmp_name"];

    // Set upload folder
    $uploadFolder = "uploads/" . $fileName;

    // Create folder if not exists
    if (!file_exists("uploads")) {
        mkdir("uploads", 0777, true);
    }

    // Move file to upload folder
    if (move_uploaded_file($fileTmp, $uploadFolder)) {
        echo "<h3>File Uploaded Successfully!</h3>";
        echo "Saved as: $uploadFolder";
    } else {
        echo "<h3>File Upload Failed!</h3>";
    }
} else {
    echo "No file selected!";
}
