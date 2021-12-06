<!DOCTYPE html>
<html>
	<head>
		<title>Credit Agricole</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="Style3.css"/>

<script type="text/javascript" src="Java3.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>


<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src='https://kit.fontawesome.com/618007f65e.js' crossorigin='anonymous'></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>
	<div id="sideNavigation" class="sidenav">
	
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:#fff;text-align:center;top: -10px;">&times;</a>

<div class="profil">
<img src="https://i.ibb.co/tMz2vrp/AA675390-8500-468-A-9-F3-C-E781-BCE4-A182-removebg-preview.png"/>
</div>
<br />
<section>
<p>William Kalubi</p>
 <a style="padding:0;margin:0;text-decoration:none;" href="Deco.php"><button class="logout">SE DÉCONNECTER</button></a>
</section>
  <br />
  <a href="#">Ma banque et moi</a>
  <hr style="background-color:#1f94a6">
  <a href="#">Mes infos personnel</a>
  <hr style="background-color:#1f94a6">
  <a href="#">Mes parametre</a>
  <hr style="background-color:#1f94a6">
  <a href="#">Mes projets</a>
  <hr style="background-color:#1f94a6">
  <a onclick="alert()" href="#">Mes avantages</a><hr style="background-color:#1f94a6">
 
</div>
 
<nav class="topnav">
  <a href="" onclick="openNav()">
	<svg width="30" height="30" id="icoOpen">
		<path d="M0,5 30,5" stroke="#000" stroke-width="2"/>
		<path d="M0,14 30,14" stroke="#000" stroke-width="2"/>
		<path d="M0,23 30,23" stroke="#000" stroke-width="2"/>
	</svg>
  </a>
  
  <img src="https://i.ibb.co/tMz2vrp/AA675390-8500-468-A-9-F3-C-E781-BCE4-A182-removebg-preview.png"/>
  
  
</nav>
 <script>
function openNav() {
	document.getElementById("sideNavigation").style.width = "100%";
	/*document.getElementById("main").style.marginLeft = "250px";*/
}
 
function closeNav() {
	document.getElementById("sideNavigation").style.width = "0";
	/*document.getElementById("main").style.marginLeft = "0";*/
}
</script>
<br />
<br />
<br />
<h3>EFFECTUER UN VIREMENT</h3>

<p style="color:gray;margin-left: 10px;
	margin-top: 15px;
	margin-bottom: 15px;
	padding:10px;">compte a debiter</p>

<div class="debit">
<h6 style="color:#347780;font-weight:700;margin-left: 10px;" >xxxtentacion</h6>
<br>
<p><b>Livret A - 018757XXXXXX</b> &nbsp &nbsp &nbsp  +100.000,00€</p>
</div>

<div class="form">
<form method="POST" action="#">

<center>
<label>nom et prenom du beneficiaire</label><br>
<input id="input" onkeyup='javascript:isCharSet()' type="text" name="nom" required/><br>

<label>Releve d'identite bancaire (RIB)</label><br>
<input id="input1" onkeyup='javascript:isCharSet()' type="text" name="nom" required/><br>

<label>Montant</label><br>
<input id="input2" onkeyup='javascript:isCharSet()' type="tel"  name="nom" required/><br>

<label>libelle</label><br>
<input id="input3" onkeyup='javascript:isCharSet()' type="text"  name="nom" required/><br>
<br>
<label>date d'effet du virement</label>
</center>



<div style="margin-left:40%;" class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
	immediat
  </label>
</div>
<div style="margin-left:40%;" class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
	permanent
  </label>
</div>
<br>
<center><button id="button" class="ok" onclick="
  let timerInterval
  Swal.fire({
	title: 'virement en cours',
	html: 'chargement ',
	timer: 10000,
	onOpen: () => {
	  Swal.showLoading()
	  timerInterval = setInterval(() => {
		
	  }, 100)
	},
	onClose: () => {
	  clearInterval(timerInterval)
	}
  }).then((result) => {
	if (
	  // Read more about handling dismissals
	  result.dismiss === Swal.DismissReason.timer
	) {
	  alert1();
	}
  })
">VALIDER</button></center>
</form>
</div>

<br />
<br/>
<br />
<div class="menudown">
  <a href="#home" onclick="alert()"><i class='fas fa-money-check' style='font-size:12px;color:#fff'></i><br />EDITER UN <br/>RIB</a>
  <a href="#news" onclick="alert()"><i class='far fa-credit-card' style='font-size:12px;color:#fff'></i><br/>EFFECTUER <br/>UN VIREMENT</a>
  </div>
	</body>
</html>