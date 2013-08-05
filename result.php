<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$choixq1 = $_POST['choixq1'];
$choixq2 = $_POST['choixq2'];
$choixq3 = $_POST['choixq3'];
?>

<!DOCTYPE html> 
<html> 
	<head> 
	<title>Resultats</title> 
<link rel="stylesheet" href="jquerymobilelocal/jquery.mobile-1.3.0.min.css" />
<script src="jquerymobilelocal/jquery-1.8.2.min.js"></script>
<script src="jquerymobilelocal/jquery.mobile-1.3.0.min.js"></script>
	</head> 
	<body> 
		<div data-role="page"> 
			<div data-role="header"> 
				<div data-id="navig" data-role="navbar">
				<ul>
					<li> <a href="index.html"> Accueil </a></li>
					<li> <a href="apropos.html"> A propos </a></li>
					<li> <a href="aide.html"> Aide </a></li>
				</ul>
			</div>
			</div>
			<div data-role="content">	
			<h1 style="text-align: center">Resultats</h1> 
				<h3> Merci d'avoir jou&eacute;, <?php echo $prenom." ".$nom; ?> </h3>
				<?php 
					echo "</br> Question 1: ".$choixq1;
					echo "</br> Question 2: ".$choixq2;
					echo "</br> Question 3: ".$choixq3;					
				?>
			</div>		
		</div> 
	</body> 
</html>


