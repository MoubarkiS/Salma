<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>page</title>
  </head>
  <body>
    <header>
       <!--<nav class="navbar navbar-expand-lg navbar-dark shadow">
           <div class="container my-2">
             <a href="connexion.php" class="bavbar-brand">Profil</a>
           </div>


       </nav>
    </header>-->
    <!-- <main role="main">
      <?= $pagecontent ?>
    </main> -->
   <!-- <div>
    <form method="POST"  class="form-inline  my-2 my-lg-0"   action="">
	
<input class="form-control mr-sm-2 bg-dark" type="search" placeholder="Find something..."><br>
	<label>pwd</label><input type="password" name="pwd"><br>
    <label>nom</label><input type="text" name="nom"><br>
	<label>prenom</label><input type="text" name="prenom"><br>
    
	<br>
    <input type="submit" name="envoyer">
    <input type="reset" name="annuler"><br>
    
    
</form> -->
<!--<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container-fluid my-2">
    <a class="bavbar-brand " href="#">Blog</a> -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="s.jpg" alt="Bootstrap" width="65" height="65" > 
    </a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="form-control me-2" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="form-control me-2" href="connexion.php">Se connecter</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="form-control me-2" href="inscription1.php">S'inscrire</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php 
try
{
  $pdo = new PDO("mysql:host=database;dbname=data;", "root", "password");
  
$reponse=$pdo->query('select * from USER');
 
while($donnees=$reponse->fetch()){
    echo $donnees['user_name'];
    echo '<br>';
    
}

}
catch (PDOException $e){
  die ("erreur".$e);
}

?>