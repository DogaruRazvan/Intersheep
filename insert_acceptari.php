<?php

include_once "db_conn.php";

$sql= "INSERT INTO acceptari (nume_candidat_acc, nume_firma_acc, titlu_oferta_acc) VALUES (?,?,?)";
if($stmt = mysqli_prepare($conn, $sql)){

    mysqli_stmt_bind_param($stmt, "sss", $nume_candidat_acc, $nume_firma_acc, $titlu_oferta_acc);

    $nume_candidat_acc = $_REQUEST['nume_aplicant'];
    $nume_firma_acc = $_REQUEST['nume_firma']; 
    $titlu_oferta_acc = $_REQUEST['titlu_oferta'];
    
    

    if(mysqli_stmt_execute($stmt)){
        header("Location: aplicanti.php?message=candidat_acceptat");
    }else{
        echo "ERROR: Nu a putut fi executat: $sql.". mysqli_error($conn);
    }
}else{
    echo "ERROR: Nu a putut fi pregatit: $sql.".mysqli_error($conn);
}
mysqli_stmt_close($stmt);

$conn->close();
?>