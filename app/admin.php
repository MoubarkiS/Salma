<html>
<head>
    <title></title>
    </head>
<body>
<form method="post" action="" name="">
 <label>   user: </label> <br>
    </form>
    </body>
</html>

<?php
session_start();
try{
    $pdo = new PDO("mysql:host=database;dbname=data", "root", "password");
    
}
catch (Exception $e){
    die ("erreur".$e);
}
$reponse=$connexion->query('select login from user');
echo "<select>";
while($donnees=$reponse->fetch()){
    $i=0;
    echo"<option name=opt".$i."'>".$donnees['login']."</option>";
    
}
echo"</select>";
echo "<input type='submit' name='delete'/>";
function delete_user($login,$connexion){
    
}
