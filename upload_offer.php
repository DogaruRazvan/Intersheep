<?php

include_once "db_conn.php";

$sql = "INSERT INTO oferte (company_name, offer_type, offer_title, offer_description, number_of_places, candidate_requirements, company_website,id_companie, specializare_oferta) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)";

if ($stmt = mysqli_prepare($conn, $sql)) {

    mysqli_stmt_bind_param($stmt, "ssssissis", $company_name, $offer_type, $offer_title, $offer_description, $number_of_places, $candidate_requirements, $company_website, $id_companie, $specializare_oferta);

    $company_name = $_REQUEST['company_name'];
    $offer_type = $_REQUEST['offer_type'];
    $offer_title = $_REQUEST['offer_title'];
    $offer_description = $_REQUEST['offer_description'];
    $number_of_places = $_REQUEST['number_of_places'];
    $candidate_requirements = $_REQUEST['candidate_requirements'];
    $company_website = $_REQUEST['company_website'];
    $id_companie = $_REQUEST['id_companie'];
    $specializare_oferta = $_REQUEST['offer_specializare'];

    if (mysqli_stmt_execute($stmt)) {
        header("Location: SuccesOffer.php");
    } else {
        echo "ERROR: Nu a putut fi executat: $sql" . mysqli_error($conn);
    }
} else {
    echo "ERROR: Nu a putut fi pregatit: $sql" . mysqli_error($conn);
}

mysqli_stmt_close($stmt);

mysqli_close($conn);
?>