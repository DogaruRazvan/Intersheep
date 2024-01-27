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
      <title>Document</title>
      <link rel="stylesheet" href="aplicanti.css">
  </head>
  <body>

  <header>
      <ul>
          <li><img style="margin-right:10px;" src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png" onclick="toggleMenu()"></li>
          <li><a href="#ParticipatingCompanies">Contact</a></li>
          <li><a href="#RecommendedPrograms">About</a></li>
          <li><a href="aplicanti.php">Candidati</a></li>
          <li><a href="homeComp.php">Home</a></li>
          
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
              <a href="profil.php" class="sub-menu-link">
                  <img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png">
                  <p>Incarca oferta</p>
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
                  <th>Nume</th>
                  <th>CV aplicant</th>
                  <th>Scrisoare de intentie</th>
                  <th>Titlu oferta</th>
                  <th>Accepta aplicare</th>
                  
              </tr>
          </thead>
          <tbody>
          <?php
    $bla = $_SESSION['id'];
    $sql = "SELECT * FROM aplicari WHERE `id_firma_aplicare`='$bla' ORDER BY id_aplicare DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
              <tr>
                  <td><?php echo $row['nume_aplicant'];?></td>
                  <td><a href="uploads\<?php echo $row['cv_aplicant'];?>" style="color:blue;">CV</a></td>
                  <td><a href="uploads\<?php echo $row['si_aplicant'];?>" style="color:blue;">Vezi scrisoarea</a></td>
                  <td><?php echo $row['titlu_oferta'];?></td>
                  <td>
                    <form action="insert_acceptari.php" method="post">
                    <input type="hidden" value="<?php echo $row['nume_aplicant'];?>" name="nume_aplicant">
                    <input type="hidden" value="<?php echo $_SESSION['nume'];?>" name="nume_firma">
                    <input type="hidden" value="<?php echo $row['titlu_oferta'];?>" name="titlu_oferta">
                        <button type="submit" value="submit">Accepta</button>
                    </form>
                  </td>
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