<?php
    include 'config.php';

    $sql = "CREATE TABLE files (
        id INT AUTO_INCREMENT PRIMARY KEY,
        file_name VARCHAR(255) NOT NULL,
        file_path VARCHAR(255) NOT NULL,
        upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Table Created Successfully.!";
    }
?>