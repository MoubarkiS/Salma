<html>
<head>
	<title></title>
</head>
<body><form method="POST" action="profil.php">
	
	<label>login</label><input type="text" name="login"><br>
	<label>pwd</label><input type="password" name="pwd"><br>
    <label>nom</label><input type="text" name="nom"><br>
	<label>prenom</label><input type="text" name="prenom"><br>
    
	<br>
    <input type="submit" name="envoyer">
    <input type="reset" name="annuler"><br>
    
    
</form>
    </body>
</html>
<?php 
session_start();
if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['login']) AND isset($_POST['motdepass']) AND $_POST['nom']!=null AND $_POST['prenom']!=null AND $_POST['login']!=null AND $_POST['motdepass']!=null) {
}

try{
    $pdo = new PDO("mysql:host=database;dbname=data", "root", "password");
}
catch (exception $e){
    die("erreur".$e);
}
{
   $_logins=$_POST['login'];
	$_pwd=$_POST['pwd'];
    $_pwd2=$_POST['pwd2'];
   $_noms=$_POST['nom'];
	$_prenoms=$_POST['prenom'];
	
}

?>