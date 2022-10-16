<?php

session_start();
 $prenom= $_SESSION['name'];
 $nom= $_SESSION['fname'];

 echo '<p > bonjour '.$nom.' '.$prenom.'';
 echo '</p>';
 ?>