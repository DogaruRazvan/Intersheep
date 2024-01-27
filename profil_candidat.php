<?php
include_once "db_conn.php";
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nume'])){ 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
	body {
    margin:0;
            background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    font-family: 'Jost', sans-serif;
            background-image: url("wp8774869-college-love-wallpapers-fotor-2023122113225.jpg");
    }
    ul {
    list-style-type: none;
    padding-top:10px;
    overflow: hidden;
    background-color: #24262b;
    border-radius: 30px;
  }
  
  li {
    float: right;
  }
  
  
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 30px;
    text-decoration: none;
  }
  
 
  
  li a:hover {
    background-color: #111;
  }
  
  
  img{
   cursor: pointer;
    width:45px;
  }
  .logo{
    
    font-size: 30px;
    color: white;
  }
  .sub-menu-wrap{
    position: absolute;
    top: 10%;
    right: 1px;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
    z-index: 9;
    
  }
  .sub-menu-wrap.open-menu{
    max-height:500px;
  }
  .sub-menu{
    background: #24262b;
    border-radius: 25px;
    padding: 20px;
    margin:10px;

  }
  .uer-info{
    display:flex;
    align-items: center;
    color: #FE4E4E;
  }
  .uer-info img{
    margin-right:15px;
  }
  .sub-menu-link{
    display:flex;
    align-items: center;
    text-decoration: none;
    color:#FE4E4E;
    margin:12px 0px;
  }
  .sub-menu-link img{
    width:30px;
  }
  .sub-menu-link p{
    width:100%;
    padding-left:10px;
  }
  .sub-menu-link span{
    transition: transform 0.5s;
  }
  .sub-menu-link:hover span{
    transform: translateX(5px);
  }
  .sub-menu-link:hover p{
    font-weight: 600;
  }

    .background {
        background-color: #24262b;
        margin: 15px;
        margin-left: 40px;
        margin-right: 40px;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container {
        background-color: white;
        margin: 15px;
        margin-left: 40px;
        margin-right: 80px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        text-align: left; /* Alinează formularul la stânga */
    }

    label {
        display: block;
        margin: 10px 0;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #FE4E4E;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #c20101;
    }

    h1{
        padding-left: 100px;
        color:white;
    }
    #message-container {
        text-align:center;
    }
    .specializare{
      width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .upload{
      border:none;
    }
    </style>
</head>
<body>
<header>

<ul>
<li><img style="margin-right:10px;" src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png" onclick="toggleMenu()"></li>
    <li ><a href="#ParticipatingCompanies">Contact</a></li>
    <li><a href="#RecommendedPrograms">About</a></li>
    <li><a href="oferte_firme1.php">Oferte</a></li>
    <li><a href="homeStud.php">Home</a></li>
    
    <div class="logo">
    
    <img src="https://cdn-icons-png.flaticon.com/512/3319/3319395.png">
    <span>Internsheep</span>
</div>
    
  </ul>
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="uer-info">
          <img src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png">
          <h2><?php echo $_SESSION['prenume']; ?> <?php echo $_SESSION['nume'];?></h2>
        </div>
        <hr>
        <a href="profil_candidat.php" class="sub-menu-link">
          <img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png">
          <p>Edit Profile</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="https://cdn-icons-png.flaticon.com/512/126/126472.png">
          <p>Settings & Privacy</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="https://cdn-icons-png.flaticon.com/512/471/471664.png">
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="logout.php" class="sub-menu-link">
          <img src="https://cdn-icons-png.flaticon.com/512/4400/4400629.png">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
  </header>
	
    
    <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu(){
        subMenu.classList.toggle("open-menu");
      }
      </script>
      <?php
$message = "";
// Verificăm dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prelucrăm datele primite din formular
    $newNume = $_POST["new_nume"];
    $newPrenume = $_POST["new_prenume"];
    $newEmail = $_POST["new_email"];
    $newFacultate = $_POST["new_facultate"];

    // Actualizăm datele în baza de date
    $blaa = $_SESSION['id'];
    $updateSql = "UPDATE candidati SET Nume='$newNume', Prenume='$newPrenume', Email='$newEmail', Specializare='$newFacultate' WHERE ID=$blaa"; // id=1 pentru a actualiza doar primul rând
    if ($conn->query($updateSql) === TRUE) {
        $message = "Datele actualizate cu succes!";
        $vari = $_SESSION['id'];
        $sqlc = "SELECT * FROM candidati WHERE ID=$vari";
        $resultc = mysqli_query($conn, $sqlc);
        if(mysqli_num_rows($resultc)){
          $row = mysqli_fetch_assoc($resultc);
          $_SESSION['email'] = $row['Email'];
        $_SESSION['prenume'] = $row['Prenume'];
        $_SESSION['nume']=$row['Nume'];
        $_SESSION['specializare']=$row['Specializare'];
        $_SESSION['id'] = $row['ID'];
          }
    } else {
        $message = "Eroare la actualizarea datelor: " . $conn->error;
    }
}

$sql = "SELECT * FROM candidati";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
?>
    <div class="background">
    <h1>Profil Student - <?php echo $_SESSION['prenume'];?> <?php echo $_SESSION['nume'];?></h1>
        
        <div class="container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="new_nume">Nume:</label>
                <input type="text" name="new_nume" value="<?php echo $_SESSION['nume'];?>">

                <label for="new_prenume">Prenume:</label>
                <input type="text" name="new_prenume" value="<?php echo $_SESSION['prenume'];?>">

                <label for="new_email">Email:</label>
                <input type="text" name="new_email" value="<?php echo $_SESSION['email'];?>">

                <label for="new_facultate">Specializare:</label>
                <select name="new_facultate" class="specializare" >
                  <option value="<?php echo $_SESSION['specializare'];?>" selected hidden><?php echo $_SESSION['specializare'];?></option>
                  <option value="Inginerie industriala">Inginerie Industriala</option>
                  <option value="Inginerie si management">Inginerie si management</option>
                  <option value="Mecatronica si robotica">Mecatronica si robotica</option>
                  <option value="Stiinte ingineresti aplicate">Stiinte ingineresti aplicate</option>
                  <option value="Inginerie mecanica">Inginerie mecanica</option>
                </select>

                <input type="submit" value="Actualizează">
            </form>
            <div id="message-container">
                <?php echo $message; ?>
            </div>
            
            <form  action="uploadCV.php" method="POST" enctype="multipart/form-data">
            <label for="cv">Incarca-ti CV-ul:</label>
              <input class="upload" type="file" name="file">
              <button type="submit" name="submit">UPLOAD</button>
            </form>
            <form action="uploadSI.php" method="POST" enctype="multipart/form-data">
            <label for="si">Incarca-ti scrisoare de intentie:</label>
              <input class="upload" type="file" name="file">
              <button type="submit" name="submit">UPLOAD</button>
            </form>
        </div>
    </div>
    <?php
}
$conn->close();
    ?>
</body>
</html>
<?php
}else{
header("Location: logout.php");
exit();
}
?>