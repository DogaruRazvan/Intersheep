<?php

include_once "db_conn.php";

$sql= "INSERT INTO companii (Tara_comp, CUI, Reg_com, Nume_comp, Strada, Oras_comp, Tara_sediu, Email, Parola) VALUES (?,?,?,?,?,?,?,?,?)";
if($stmt = mysqli_prepare($conn, $sql)){

    mysqli_stmt_bind_param($stmt, "sssssssss", $tara_comp, $CUI, $reg_com, $nume_comp, $strada, $oras_comp, $tara_sediu, $email, $password);

    
    $tara_comp = $_REQUEST['tara_comp'];
    $CUI = $_REQUEST['CUI'];
    $reg_com = $_REQUEST['reg_com'];
    $nume_comp = $_REQUEST['nume_comp'];
    $strada = $_REQUEST['strada'];
    $oras_comp = $_REQUEST['oras_comp'];
    $tara_sediu = $_REQUEST['tara_sediu'];
    $email = $_REQUEST['email_comp'];
    $password= $_REQUEST['parola_comp'];

    if(mysqli_stmt_execute($stmt)){
        header("Location: Succes.php");
    }else{
        echo "ERROR: Nu a putut fi executat: $sql.". mysqli_error($conn);
    }
}else{
    echo "ERROR: Nu a putut fi pregatit: $sql.".mysqli_error($conn);
}
mysqli_stmt_close($stmt);

mysqli_close($conn);
?>