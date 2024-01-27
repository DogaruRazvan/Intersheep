<?php
session_start();
include_once "db_conn.php";
if(isset($_POST['emailL']) && isset($_POST['pswdL'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['emailL']);
    $pass = validate($_POST['pswdL']);

    $sql = "SELECT * FROM candidati WHERE Email='$email' AND Parola='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['Email'];
        $_SESSION['prenume'] = $row['Prenume'];
        $_SESSION['nume']=$row['Nume'];
        $_SESSION['specializare']=$row['Specializare'];
        $_SESSION['id'] = $row['ID'];
        $_SESSION['cv'] = $row['candidat_cv'];
        $_SESSION['si'] = $row['candidat_si'];
        header("Location: homeStud.php");
        exit();

    }else{
        $sqlc = "SELECT * FROM companii WHERE Email='$email' AND Parola='$pass'";
        $resultc = mysqli_query($conn, $sqlc);

        if(mysqli_num_rows($resultc)){
            $row = mysqli_fetch_assoc($resultc);
        $_SESSION['email'] = $row['Email'];
        $_SESSION['nume'] = $row['Nume_comp'];
        $_SESSION['id'] = $row['id_companie'];
        header("Location: homeComp.php");
        exit();
        }else{
            $sqlv= "SELECT * FROM admini WHERE mail_admin='$email' AND parola_admin='$pass'";
            $resultv = mysqli_query($conn, $sqlv);
            if(mysqli_num_rows($resultv)){
                $row = mysqli_fetch_assoc($resultv);
            $_SESSION['email'] = $row['mail_admin'];
            $_SESSION['nume'] = $row['nume_admin'];
            $_SESSION['id'] = $row['id_admin'];
            header("Location: homeAdm.php");
            exit();
            
        }else{
            header("Location: LogIn.php?error=Incorect email or password");
        }}
    }

}else{
    header("Location: LogIn.php");
    exit();
}
$conn->close();
?>