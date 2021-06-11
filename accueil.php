<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
require("biblio.php");
if (isset($_POST['matricule']) and isset($_POST['nom']) and isset($_POST['login']) and isset($_POST['password'])) {
	$matricule    = $_POST['matricule'];
	$nom          = $_POST['password'];
	$login        = $_POST['login'];
	$password     = $_POST['password'];
	inserEtudiant($matricule, $nom, $login, $password);
	echo "Enrégistrement de <b>$nom </b> effectué avec succès</h1>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<center>
	<?php
		if (isset($_POST['Tlogin']) and isset($_POST['Tpassword'])) {
			$login    = $_POST['Tlogin'];
			$password = $_POST['Tpassword'];
			$nom = TeacherLogin($login, $password);
			echo "<h1>$nom </h1>";
		}

		?>
	</center>
	<div id="general">
		<form method="post" action="accueil.php">
			<input type="submit" name="entrer" value="Afficher les étudiants" />
			<a href="index.php">Se connecter<a>
					<input type="hidden" name="login" value="$login" />
					<input type="hidden" name="password" value="$password" />
		</form>
		<table>
			<?php
			// Afficher les étudiants enrégistrés
			if (isset($_POST['entrer'])) {
				echo "<h2>Affichage des étudiants</h2>";
				$chaine = afficheEtudiants();
				echo $chaine;
			}
			?>
		</table>
	</div>
	<p><a href="affiche_enseignant.php">Liste des enseignants</a> </p><br>
	<p><a href="connexion.php">Connexion</a> </p><br>
	<p><a href="biblio.php">Bibliotecque</a> </p><br>
	<p><a href="enreg_etudiant.php"></a> </p><br>
	<p><a href="accueil.php"> Accueil</a> </p><br>
</body>

</html>