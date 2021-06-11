<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);

   // initialiser la variable message
   $message="";
   
   // traiter ce qui a été envoyé par le formulaire
   if(isset($_POST['entrer'])){
   		// on sécurise le contenu avec addslashes
   		$contenu=addslashes($_POST['contenu']);
   		
   		// on prépare une date
   		$date = date("Y-m-d H:m:s");
   		
   		// on insère
   		$requete="INSERT INTO record ( nom,contenu,date ) VALUES ('entree','$contenu','$date')";
   		$envoi=mysql_query($requete,$connexion);
   		
   		// si c'est reussi, le dire dans le message
   		if($envoi){
   			$message .="<div id='message'>Nouveau contenu entré</div>";
   		}
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>Connexion</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<center>
	<h1>Formulaire d'enrégistrement</h1>
</center>
<div id="general">
	<form action="affiche_enseignant.php"  method="post">
	<table align="center">
		<tr>
		    <td>Login :</td>
		    <td><input type="text" name="login"/></td>
		</tr>
		<tr>
		    <td>Mot de passe</td>
			<td><input type="password" name="password"/></td>
		</tr>
		<tr>
		    <td>Grade</td>
		    <td>
			<select name="grade">
			   <option valeur="chargé_de_td">Chargé de td</option>
			   <option valeur="charger_de_cours">charger de cours</option>
			   <option valeur="docteur">Docteur</option>
			   <option valeur="proffesseur">Professeur</option>
			</select>
		    </td>	
		</tr>

        <tr>
		    <td>Unité</td>
		    <td>
			<select name="unit">
			   <option valeur="inf2044">INF2044</option>
			   <option valeur="inf2054">INF2054</option>
			   <option valeur="inf2064">INF2064</option>
			   <option valeur="math2124">MATH2124</option>
			   <option valeur="englais">ENGLAIS</option>
			</select>
		    </td>	
		</tr>
		<tr>
		   <td><input type="reset" value="Annuler" name="annuler"/></td>
		   <td><input type="submit" name="auth" id="auth" value="Enregistrer"/>
			<a href="index.php" >Se connecter<a>
		   </td>
		</tr>
	</table>
	</form>
<hr />
</div>
</body>
</html>
