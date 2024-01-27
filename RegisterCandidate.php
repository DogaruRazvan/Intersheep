<!DOCTYPE html>
<html>
<head>
	<title>Register_Candidate</title>
	<link rel="stylesheet" type="text/css" href="RegisterCandidate1.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="Login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
</head>
<body>
    <div class="t1">Creeaza un cont nou de candidat</div>
    <div class="t2">Inca un pas si totul este gata</div>
    <div class="box">
        
	<div class="main">  
        <form action="insert_candidate.php" method="post">
        <div class="IdBox">	
		<input class="FirstName" type="text" name="first_name" placeholder="Prenume" required="">    
        <input class="FirstName" type="text" name="last_name" placeholder="Nume de familie" required="">    
        </div>
        <input class="mail" type="email" name="email" placeholder="E-mail" required="">
        <div class="containerParola">
            <input class="passwordBox" type="password"  name="pswd" placeholder="Password" id="myInput" required="">
            <i class="far fa-eye eyeSee" type="checkbox"  style="cursor:pointer;" onclick="myFunction()"></i>
            </div>
            <input class="mail" type="text" name="oras_r" placeholder="Oras de resedinta" required="">
            <input class="mail" type="date" name="zi_de_nastere" placeholder="dd/mm/yyyy" required="">
            <select name="specializare" class="specializare">
                <option value="Inginerie industriala" selected="selected">Inginerie Industriala</option>
                <option value="Inginerie si management">Inginerie si management</option>
                <option value="Mecatronica si robotica">Mecatronica si robotica</option>
                <option value="Stiinte ingineresti aplicate">Stiinte ingineresti aplicate</option>
                <option value="Inginerie mecanica">Inginerie mecanica</option>
        </select>
            <div class="terms">
                <input type="checkbox" required="">
                Pentru a continua te rugam sa confirmi ca esti de acord cu <a class="link"href="">Termenii si conditiile</a> noastre
            </div>
            <button type="submit" value="submit">Register</button>

        </form>
	</div>
    </div>
    
</body>
</html>