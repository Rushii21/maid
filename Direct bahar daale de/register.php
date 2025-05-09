<?php

require_once("tools/DBconnection.php");
require("entities/client.php");
require("dao/registerDAO.php");


$error = null;
$client = new client;
$registerDAO = new registerDAO;
$DB = new DBconnection;



$error = null;

if(isset($_POST['inscription'])){

    $nom = $_POST['nom'];
    $client->setNom($nom);
    $prenom = $_POST['prenom'];
    $client->setPrenom($prenom);
    $email = $_POST['email'];
    $client->setEmail($email);
    $telephone = $_POST['telephone'];
    $client->setTelephone($telephone);
    $password = $_POST['password'];
    $client->setPassword($password);

    $error = $registerDAO->clientregister($client);

    $idclientSQL = "SELECT iduser FROM users WHERE nom = '".$nom."' and prenom = '".$prenom."' and email ='".$email."'";
                    
    $result = $DB->executeSQL($idclientSQL);

    $idclient = null;

    if($result->num_rows > 0){

        if($row = $result->fetch_assoc()){
            
            $idclient = $row["iduser"];
        }

    }

    $client->setId($idclient);

    if($error == 1){
      session_start();
      $_SESSION['client'] = $client;
      header("Location:PROFILE/index.php");
      
    }else{

      echo "Register Failed";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;600;800&family=Fredoka:wght@300;400;500;600&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- /.google fonts -->
    <!-- fonts awesome -->
    <script src="https://kit.fontawesome.com/e2991dfebd.js" crossorigin="anonymous"></script>   
    <!-- /.fonts awesome -->

    <title>Sign Up</title>
</head>
<body>

<?php require_once("navbar.php"); ?>

<div class="login">
  
    <div class="form">
        <h1>SIGN UP</h1>
        <form action="" method="post">
            <div class="nominput">
                 <i class="fa fa-solid fa-user"></i>
				 <input type="text" name="nom" placeholder="Last Name..." required>
			</div>
            <div class="prenominput">
                <i class="fa fa-solid fa-user"></i>
				 <input type="text" name="prenom" placeholder="First Name..." required>
			</div>
            <div class="mailInput">
				<i class="fa fa-envelope"></i>
				 <input type="email" name="email" placeholder="Email..." required>
			</div>
            <div class="genderInput">
    <i class="fa fa-venus-mars"></i>
    <select name="gender" required>
        <option value="" disabled selected>Select Gender...</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>
            <div class="phoneinput">
                 <i class="fa fa-solid fa-phone"></i>
				 <input type="text" name="telephone" placeholder="Phone..." required>
			</div>
			<div class="passwordInput">
				<i class="fa fa-key"></i>
				 <input type="password" placeholder="Password..." name="password" id="password" required>
				 <span class="eye" onclick="showPassword('password')">
				 <i id="eyeShowpassword" style="display:none;" class="fa fa-eye"></i>
				 <i id="eyeHidepassword"  style="display:block;" class="fa fa-eye-slash"></i>
				 </span>
			</div>
            <div class="submit">
                <button onclick="window.location.href='login.php'" name="connexion" value="CONNEXION">LOGIN</button>
                <button  type="submit" name="inscription" value="INSCRIPTION">SIGN UP<i class="fa-solid fa-arrow-right"></i></button>
            </div>
            
        </form>
    </div>

</div>

<script src="js/script.js"></script>
    
</body>
</html>
