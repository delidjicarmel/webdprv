<?php
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8" />
		<title>DPRV</title>
		<link rel="stylesheet" type="text/css" href="css/dprv.css" />

	</head>

	<body>

		<header id = "headercontent">
			
			<div id = "logocontent" >
				<img src="img/logo_dprv_transparent.png" id = "logoimage_dprv">
			</div>
			<div id = "bannercontent" ></div>
			<div id = "insignecontent" >
				<img src="img/logo_mef_transparent.png" width = "268px" height = "114px">
			</div>	
			
		</header>

		<section id = "sectioncontent">

			<div id = "formcontent" >
				<div id = "formcase" >
						<form action="index.php" method="post">
					    <div id = "numdossier">
					        <label for="numerodossier">Entrer votre numéro de dossier </label>
					        <input type="text" id="dossier" name = "numerodossier"/>
					    </div>
					    <div id = "numusager">
					        <label for="nomusager">Entrer votre nom d'usager </label>
					        <input type="text" id="usager" name = "nomusager" />
					    </div>
					    
					    <div class="button">
					        <button type="submit" id = "bouton">Effectuer la vérification</button>
					    </div>
					</form>
				</div>
				<div id = "infocontent">
					<p id = "info">
						<?php
						if (($_POST['numerodossier'] == NULL) OR ($_POST['nomusager'] == NULL)){
								echo 'Veuillez renseigner votre numero de dossier et votre nom d\'usager dans le formulaire.';
						} elseif (isset($_POST['numerodossier']) AND isset($_POST['nomusager'])){
								try {
									$bdd = new PDO('mysql:host=127.7.222.2;dbname=dprv;charset=utf8' , 'admin8NnKzQ' , 'R4RdxLi6ejad' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
								} catch (Exception $e)
								{
									die ('Error : ' . $e->getMessage());
								}
								$answer = $bdd->prepare('SELECT nom_usager, position_dossier, numero_dossier FROM files WHERE numero_dossier = ? AND nom_usager = ?')or die(print_r($bdd->errorInfo()));
								$answer->execute(array($_POST['numerodossier'], $_POST['nomusager']));
								while ($data = $answer->fetch())
								{
								echo 'Bonjour '.$data['nom_usager']. '. Votre dossier se trouve actuellement au ' .$data['position_dossier'];	
								}
								$answer->closeCursor();
						} else {
								echo 'Les informations que vous avez entré sont erronées.';
						}
						?>
					</p>
				</div>
			</div>
			
			
		</section>

		<aside id = "asidecontent" >

			<div id = "asidefirstcolor" ></div>
			<div id = "asidesecondcolor" ></div>
			<div id = "asidethirdcolor" ></div>
			
		</aside>

		<footer id = "footercontent">

			<div id = "socialcontent" ></div>
			<div id = "addresscontent" ></div>
			<div id = "copyrigthcontent" >
				<p> <span id ="spancopyrigthcontent">&copy;</span> <script type="text/javascript" src="js/date.js"></script> Highsoft Corporation. Tous droits reservés.</p>
				
			</div>
			

		</footer>
		
	</body>
</html>
