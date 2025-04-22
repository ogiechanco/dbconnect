<?php

function uploadOne($filename, $newname, $upload_directory) {
    // Ensure file is uploaded
    if (is_uploaded_file($filename['tmp_name'])) {
        $ext = pathinfo($filename['name'], PATHINFO_EXTENSION); // Get file extension
        $uploadfile = $upload_directory . $newname . "." . $ext; // Full path including extension

        // Move the uploaded file to the directory
        if (move_uploaded_file($filename['tmp_name'], $uploadfile)) {
            return "File uploaded successfully!";
        } else {
            return "Error uploading file.";
        }
    } else {
        return "No file uploaded.";
    }
}

?>