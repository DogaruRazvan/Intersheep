<?php

include_once "db_conn.php";

$sql= "INSERT INTO candidati (Prenume, Nume, Email, Parola, Oras, Ziua_Nastere, Specializare) VALUES (?,?,?,?,?,?,?)";
if($stmt = mysqli_prepare($conn, $sql)){

    mysqli_stmt_bind_param($stmt, "sssssss", $first_name, $last_name, $email, $password, $oras, $zi_nastere, $specializare);

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pswd'];
    $oras = $_REQUEST['oras_r'];
    $zi_nastere = $_REQUEST['zi_de_nastere'];
    $specializare = $_REQUEST['specializare'];

    if(mysqli_stmt_execute($stmt)){
        header("Location: Succes.php");
    }else{
        echo "ERROR: Nu a putut fi executat: $sql.". mysqli_error($conn);
    }
}else{
    echo "ERROR: Nu a putut fi pregatit: $sql.".mysqli_error($conn);
}
mysqli_stmt_close($stmt);

$conn->close();
?>