<?php

include_once "db_conn.php";

$sql= "INSERT INTO aplicari (id_aplicant, nume_aplicant, cv_aplicant, si_aplicant, id_oferta_aplicata, titlu_oferta, id_firma_aplicare) VALUES (?,?,?,?,?,?,?)";
if($stmt = mysqli_prepare($conn, $sql)){

    mysqli_stmt_bind_param($stmt, "isssisi", $id_aplicant, $nume_aplicant, $cv_aplicant, $si_aplicant, $id_oferta, $titlu_oferta, $id_firma_aplicare);

    $id_aplicant = $_REQUEST['id_aplicant'];
    $nume_aplicant = $_REQUEST['nume_aplicant']; 
    $cv_aplicant = $_REQUEST['cv_aplicant'];
    $si_aplicant = $_REQUEST['si_aplicant'];
    $id_oferta = $_REQUEST['id_oferta'];
    $titlu_oferta = $_REQUEST['titlu_oferta'];
    $id_firma_aplicare = $_REQUEST['id_companie_oferta'];
    

    if(mysqli_stmt_execute($stmt)){
        header("Location: SuccesApp.php");
    }else{
        echo "ERROR: Nu a putut fi executat: $sql.". mysqli_error($conn);
    }
}else{
    echo "ERROR: Nu a putut fi pregatit: $sql.".mysqli_error($conn);
}
mysqli_stmt_close($stmt);

$conn->close();
?>