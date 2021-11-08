<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suppression d'un etudiant</title>
    </head>
    <body>
<p>Entrer l'identifiant de l'etudiant a supprimer</p>
<form method="post" action="supprimer.php">
<label for="id">ID:</label><input type="number" name=id>
<input type="submit" value="Valider">
</form>
<?php 
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=test','root','');
    }
    catch(Exception $e){
        die('Erreur:'.$e->getMessage());
    }
    $rep=$bdd->prepare('DELETE INTO etudiant WHERE id=:id');
    $rep->execute(array('id' => $id));

?>
 <h3><a href="Home.html">Revenez a la page d'acceuil</a></h3>
    </body>
</html>