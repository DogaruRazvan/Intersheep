<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nume'])){ 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incarca oferta ta!</title>
    <link rel="stylesheet" href="form_firme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form id="formfirma" action="upload_offer.php" method="post">
        <input type="hidden" name="company_name" value="<?php echo $_SESSION['nume'];?>">
        <select name="offer_type">
          <option value="training">Training</option>
          <option value="internship">Internship</option>
        </select>
        <select name="offer_specializare">
          <option value="Inginerie industriala">Inginerie Industriala</option>
          <option value="Inginerie si management">Inginerie si management</option>
          <option value="Mecatronica si robotica">Mecatronica si robotica</option>
          <option value="Stiinte ingineresti aplicate">Stiinte ingineresti aplicate</option>
          <option value="Inginerie mecanica">Inginerie mecanica</option>
        </select>
        <input type="text" name="offer_title" placeholder="Titlul ofertei">
        <textarea name="offer_description" placeholder="Descrierea ofertei"></textarea>
        <input type="number" name="number_of_places" placeholder="Numărul de locuri disponibile">
        <textarea name="candidate_requirements" placeholder="Cerințe pentru candidați"></textarea>
        <input type="url" name="company_website" placeholder="Link către site-ul sau pagina web a firmei">
        <input type="hidden" name="id_companie" value="<?php echo $_SESSION['id'];?>">
        <input id="buttonIncarcare" type="submit" placeholder="Încarcă oferta">
        
      </form>
      <button id="butonIntoarcere" onclick="location.href='homeComp.php'">Inapoi la pagina principala. </button>
</body>
</html>
<?php
}else{
header("Location: logout.php");
exit();
}
?>