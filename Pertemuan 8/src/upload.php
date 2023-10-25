<?php
/*Soal 1.1
    if(isset($_POST["submit"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    }
*/
/*Soal 1.2
    if(isset($_POST["submit"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        $maxFileSize = 5 * 1024 * 1024;

        if(in_array($filetype, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah.";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
*/

/*Soal 1.3    if(isset($_POST["submit"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        $maxFileSize = 5 * 1024 * 1024;

        if(in_array($filetype, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah.";
                echo '<br><br><br><img src="' . $targetFile . ' "width="200" alt="thumbnail">';        } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }

/*Soal 1.4*/
    if(isset($_POST["submit"])) {
        $targetDirectory = "documents/";
        $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
        $documentFiletype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Perbaiki variabel $filetype menjadi $documentFiletype

        $allowedExtensions = array("txt", "pdf", "doc", "docx");

        $maxFileSize = 10 * 1024 * 1024;

        if(in_array($documentFiletype, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
            if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
            } else {
                echo "Gagal mengunggah Dokumen.";
            }
        } else {
            echo "Dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }

?>

