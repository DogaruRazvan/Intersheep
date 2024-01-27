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
    <title>Oferte de Joburi</title>
    <style>
        body{
            margin:0;
            background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    font-family: 'Jost', sans-serif;
            background-image: url("wp8774869-college-love-wallpapers-fotor-2023122113225.jpg");
        }
        .background{
            background-color: #24262b;
            margin: 15px;
            margin-left: 40px;
            margin-right: 40px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container{
            background-color:white;
            margin:15px;
            margin-left:80px;
            margin-right:80px;
            padding:10px;
            text-align:center;
            box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 0.5);
            border-radius:30px;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .column{
            width: 30%;
            padding: 0 15px;
        }
        h1 {
            padding-left:100px;
            color: white;
        }
        .h2_txt{
            padding-left:100px;
            color: white;
        }
        button {
            background-color:#FE4E4E;
            padding: 5px 10px;
            margin-left:100px;
            border-color:#FE4E4E;
            border-radius:5px;
            cursor: pointer;
        }
        #myModal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 180px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 78%;
            border-radius:30px;
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
    <div class="background">
    <h1>Oferte de Joburi</h1><br>
    <h2 class="h2_txt">Aici o sa iti apara doar oferte potrivite specializarii tale</h2><br>

    <button onclick="openFilterModal()">Filtreaza</button>

<!-- Pop-up modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <form method="post" action="oferte_firme_filtrate.php">
            <label for="firma">Firma:</label>
            <select name="firma">
                <option value="">-</option>
                <option value="Microsoft">Microsoft</option>
                <option value="Endava">Endava</option>
                <option value="Infosys">Infosys</option>
                <option value="Google">Google</option>
            </select>

            <label for="postul">Postul:</label>
            <select name="postul">
                <option value="">-</option>
                <option value="Programator Web">Programator WEB</option>
                <option value="Analist Cybersecurity">Analist Cybersecurity</option>
                <option value="Consultanta si suport">Consultanta si Suport</option>
                <option value="Hardware si manufactura">Hardware si Manufactura</option>
                <option value="Design si creativ">Design si Creativ</option>
            </select>

            <label for="durata">Durata:</label>
            <select name="durata">
                <option value="">-</option>
                <option value="360">360 ore</option>
                <option value="240">240 ore</option>
                <option value="180">180 ore</option>
                <option value="120">120 ore</option>
            </select>

            <input type="submit" value="Filtrează">
        </form>
    </div>
</div>

<!-- Script pentru manipularea pop-up-ului -->
<script>
    function openFilterModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Închide pop-up-ul când utilizatorul face clic în afara acestuia
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            document.getElementById("myModal").style.display = "none";
        }
    }
</script>

    <?php
    $bla = $_SESSION['specializare'];
    $sql = "SELECT * FROM oferte WHERE `specializare_oferta`='$bla' ORDER BY offer_id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="container">
                <div class="row">
                    <div class="column">
                    <?php
            echo "<p>Firma: " . $row["company_name"] . "</p>";
            echo "<p>Titlu: " . $row["offer_title"] . "</p>";
            ?> </div><div class="column"> <?php
            echo "<p>Tip: " . $row["offer_type"] . "</p>";
            echo "<p>Descriere: " . $row["offer_description"] . "</p>";
            ?> </div><div class="column"> <?php
            echo "<p>" . $row["specializare_oferta"] . "</p>";
            ?>
            <form action="insert_aplicari.php" method="post">
                <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id_aplicant">
                <input type="hidden" value="<?php echo $_SESSION['prenume'];?> <?php echo $_SESSION['nume'];?>" name="nume_aplicant">
                <input type="hidden" value="<?php echo $_SESSION['cv'];?>" name="cv_aplicant">
                <input type="hidden" value="<?php echo $_SESSION['si'];?>" name="si_aplicant">
                <input type="hidden" value="<?php echo $row['offer_id'];?>" name="id_oferta">
                <input type="hidden" value="<?php echo $row['offer_title'];?>" name="titlu_oferta">
                <input type="hidden" value="<?php echo $row['id_companie'];?>" name="id_companie_oferta">
                <button type="submit" value="submit">Aplica</button>
            </form>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Nu există oferte de joburi disponibile.";
    }

    mysqli_close($conn);
    ?>
    </div>
    
</body>
</html>
<?php
}else{
header("Location: logout.php");
exit();
}
?>