<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nume'])){
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx');
    if(in_array($fileActualExt, $allowed )){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                include_once "db_conn.php";

                $bla1 = $_SESSION['id'];
                $updateSql1 = "UPDATE candidati SET candidat_cv='$fileNameNew' WHERE ID=$bla1";
                $conn->query($updateSql1);
                $conn->close();
                header("Location: profil_candidat.php?uploadsuccess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You can't upload files of this type!";
    }
}
}else{
    header("Location: logout.php");
    exit();
    }