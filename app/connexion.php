<?php 
try
{
    $pdo = new PDO("mysql:host=database;dbname=data", "root", "password");
}
catch(Exception $e)
{
echo ("erreur de connexion".$e->getMessage());
}

?>