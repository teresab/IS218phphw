
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=" ">
    <meta name=" ">
    <title>Class Assignment </title>

</head>
<body>
    <h1>Uploading Files </h1>
 <form action="upload.php" method="post" enctype="multipart/form-data"> 
 <input type="file" name="text.txt">
 <br>
 <input type="submit" value="Upload">
</form>
<form action="upload.php" method="post" enctype="multipart/form-data">

<?php
define("UPLOAD_DIR", "/srv/www/uploads/");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

</body>
</html>