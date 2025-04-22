<?php

function uploadOne($filename, $newname, $upload_directory) {
    // Ensure file is uploaded
    if (is_uploaded_file($filename['tmp_name'])) {
        $uploadfile = $upload_directory.$newname.".".end(explode(".", $filename['name']));
        if (move_uploaded_file($filename['tmp_name'],$uploadfile)) {
            return "File uploaded successfully!";
        } else {
            return "Error uploading file.";
        }
    }
    return $res;
}

?>