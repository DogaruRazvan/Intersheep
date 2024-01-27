<!DOCTYPE html>
<html>
<head>
	<title>LogInForm</title>
	<link rel="stylesheet" type="text/css" href="Log_Inn.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="Login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<div class="main">  	
		<div class="labellog">Login</div>
			<div class="login">
				<form action="LogIn2.php" method="post">
                    <?php if(isset($_GET['error'])) { ?>
                        <div class="error"><?php echo $_GET['error'];?></div>
					<?php } ?>
					<input class="mail" type="email" name="emailL" placeholder="E-mail" required="">
					

					<div class="containerParola">
                        <input class="passwordBox" type="password"  name="pswdL" placeholder="Password" id="myInput" required="">
                        <i class="far fa-eye eyeSee" type="checkbox"  style="cursor:pointer;" onclick="myFunction()"></i>
						</div>
                    <a class="forgotPass" href="">Am uitat parola</a>
                      
					<button type="submit" value="submit" >Login</button>

					<div class="noAcc">
						Nu ai cont? <a href="Register.html" style="color: #FE4E4E;text-decoration: none;">Creeaza-ti cont!</a>
					</div>
				</form>
			</div>
	</div>
</body>
</html>