<?php
try{
    $bdd=new PDO('mysql:host=localhost;dbname=test','root','');
} 
catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}
$rep=$bdd->prepare('INSERT INTO etudiant (nom,prenom,filiere,mail) VALUES(:nom,:prenom,:filiere,:mail)') or
die(print_r($rep->errorInfo()));
$rep->execute(array('nom' => $nom,
                    'prenom' => $prenom,
                    'filiere' => $filiere,
                    'mail' => $mail ));
                    echo 'L\'ajout a ete bien effectue';
?>
<p><h3><a href="Home.html">Revenez a la page acceuil</a></h3><br/>
<h3><a href="ajout.html">Revenez a la page ajout</a></h3></p>