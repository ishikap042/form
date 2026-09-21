<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
</head>

<body>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <br><br>
        <button type="submit">Upload</button>
    </form>

    <hr>

    <?php
    if (isset($_FILES["image"])) {

        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];

    
        $originalName = pathinfo($filename, PATHINFO_FILENAME);
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        
        date_default_timezone_set("Asia/Kolkata");
        $newFilename = date("Y_m_d_H_i_s") . "_" . round(microtime(true) * 1000) . "_" . $originalName . "." . $extension;

        $folder = "uploads/" . $newFilename;

        if (move_uploaded_file($tempname, $folder)) { 

        
            echo "<img src='$folder' alt='Uploaded Image' width='300'><br><br>";
            echo "Image Uploaded Successfully.";
        } else {
            echo "Upload Failed.";
        }
    }
    ?>

</body>

</html>