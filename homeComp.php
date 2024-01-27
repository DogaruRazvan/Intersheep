<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nume'])){ 
    ?>



<!DOCTYPE html>
<html>
<head>
	<title>Home Company</title>
	<link rel="stylesheet" type="text/css" href="homeComp1.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="Login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
<header>

<ul>
<li><img style="margin-right:10px;" src="https://cdn-icons-png.flaticon.com/512/8847/8847183.png" onclick="toggleMenu()"></li>
    <li ><a href="#ParticipatingCompanies">Contact</a></li>
    <li><a href="#RecommendedPrograms">About</a></li>
    <li><a href="aplicanti.php">Candidati</a></li>
    <li><a href="#">Home</a></li>
    
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
        <a href="form_firme.php" class="sub-menu-link">
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
      <div class="main">
      <div class="contbox" >
      <p class="text-intro">Bine ai venit pe portalul nostru dedicat recrutării de studenți pentru practică! Suntem aici pentru a facilita conexiunile între companii și tineri talentați în căutarea unei experiențe practice valoroase. Indiferent dacă ești student în căutarea unei oportunități de practică sau o companie în căutare de viitori lideri, suntem aici să te sprijinim în fiecare pas al drumului.
      Găsește talentele viitoare care pot aduce un plus de inovație și energie în organizația ta. Noi simplificăm procesul de recrutare, oferindu-ți acces la o bază de date cu studenți entuziaști și bine pregătiți. Publică-ți ofertele de practică, interacționează cu candidații și identifică viitorii lideri ai companiei tale. Suntem partenerii tăi în construirea unei echipe puternice și motivate.
    </p>
    <button onclick="location.href='form_firme.php'" >Incarca oferta</button>
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