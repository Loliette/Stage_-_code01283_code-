<?php 
try{
    $bdd=new PDO('mysql:host=localhostldbname=test','root','');
}
catch(Exception $e)
{
    die('Erreur:'. $e->getMessage());
}
$reponse=$bdd->query('SELECT * FROM etudiant') or die(print_r($reponse->errorInfo()));
while($donnee=$reponse->fetch())
{
    echo $donnee['nom'].''.$donnee['prenom'].''.$donnee['filiere'].''.$donnee['mail'].'<br/>';

$reponse->closeCursor();
 ?>
 <h3><a href="Home.html">Revenir a la page d'acceuil</a></h3>