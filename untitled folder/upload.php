<?php
    include("config.php");

    if (isset($_POST["submit"])) {
        $file_name = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $file_path = "uploads/" . $file_name;

        move_uploaded_file($file_tmp, $file_path);

        $sql = "INSERT INTO files (file_name, file_path) VALUES ('$file_name', '$file_path')";
        if (mysqli_query($conn, $sql)) {
            //echo "File uploaded successfully.";
            header("Location:viewfiles.php");
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>