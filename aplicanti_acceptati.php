<?php
include_once "db_conn.php";
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nume'])){ 
    ?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Candidati acceptati</title>
      <link rel="stylesheet" href="aplicanti.css">
  </head>
  <body>

  <header>
      <ul>
          <li><img style="margin-right:10px;" src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png" onclick="toggleMenu()"></li>
          <li><a href="#ParticipatingCompanies">Contact</a></li>
          <li><a href="#RecommendedPrograms">About</a></li>
          <li><a href="aplicanti_acceptati.php">Candidati</a></li>
          <li><a href="homeAdm.php">Home</a></li>
          
          <div class="logo">
              <img src="https://cdn-icons-png.flaticon.com/512/3319/3319395.png">
              <span>Internsheep</span>
          </div>
          
      </ul>
      <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
              <div class="uer-info">
                  <img src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png">
                  <h2><?php echo $_SESSION['nume']; ?> </h2>
              </div>
              <hr>
              <a href="#" class="sub-menu-link">
                  <img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png">
                  <p>Profil</p>
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

  <div id="applicants-table">
      <table id="table_b">
          <thead>
              <tr>
                  <th>Numele candidatului</th>
                  <th>Numele firmei</th>
                  <th>Titlul ofertei de practica</th>
                  <th>Generare contract</th>
              </tr>
          </thead>
          <tbody>
          <?php
    
    $sql = "SELECT * FROM acceptari ORDER BY id_acceptare DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
              <tr>
                  <td><?php echo $row['nume_candidat_acc'];?></td>
                  <td><?php echo $row['nume_firma_acc'];?></td>
                  <td><?php echo $row['titlu_oferta_acc'];?></td>
                  <td><a style="color:blue;cursor:pointer;">Genereaza</a></td>
              </tr>
              <?php
        }
    } else {
        echo "";
    }

    mysqli_close($conn);
    ?>
              
          </tbody>
      </table>
      <div style="color:#FE4E4E;text-align:center;">
        <?php 
        if(isset($_GET['message']))echo $_GET['message'];
        ?>
    </div>
  </div>

  </body>
  </html>
  <?php
}else{
header("Location: logout.php");
exit();
}
?>