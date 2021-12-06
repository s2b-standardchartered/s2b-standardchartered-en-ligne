<?php
session_start();

@$user=$_POST["number"];
@$pass=$_POST["pass"];
@$valider=$_POST["submit"];

if(isset($valider)){

 if($user=="123" && $pass=="123"){
 $_SESSION["autoriser"]="oui";
 header("location:Solde.php");
 }
}

<!DOCTYPE html>
<html>
	<head>
		<title>stanfard chartered</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<img src="https://i.ibb.co/3Yt4WCD/4-D0-EAFEC-9782-4-F6-F-BEB9-3-CBE38080-C0-C-removebg-preview.png"/>
<br /><br /><h1></h1>
<center><h3>welcome to Straight2Bank</h3></center>

<div class="login">
<h4>login to your account</h4>

<form method="POST" action="#">
<input type="tel" name="number" maxlength="10" placeholder="User ID or Email" required/>
<br />
<input type="password" name="pass" maxlength="10" placeholder="Group ID" required/>
<br /><br />
<button name="submit">Continue</button>
</form>
</div>
<br /><br /><br /><br /><br /><br />
<p>legal notice</p>
<hr>
<p>Service guide</i></p>
<hr>
<p>Security centre</p>
<hr>
<p>legal notice</p>
<hr>
<p>legal notice</p>
<hr>

	</body>
</html>