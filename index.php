<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
//exo 1

echo '<a href="?nom=Nemare&prenom=Jean">Lien</a>';
echo $_GET['nom'] . "<br>" . $_GET['prenom']; 

//exo 2

if (isset($_GET['age']))  
{
	echo $_GET['age'];
}
else
{
	echo "La balise 'age' n'existe pas !";
}

  ?>
<br>

<?php
//exo 3 
echo '<a href = "?dateDebut=2/05/2016&dateFin=27/11/2016">date</a> <br>';

 if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) 
 {
     echo $_GET['dateDebut'] . "<br>" . $_GET['dateFin'];
 }

  ?>

<br>

  <?php
//exo 4

 echo '<a href = "?langage=PHP&serveur=LAMP">code</a> <br> ';

 if (isset($_GET['langage']) && isset($_GET['serveur'])) 
 {
 	echo "language: " . $_GET['langage'] . "<br>" . "serveur: ".  $_GET['serveur'];
 }

    ?>
   <br>

 <?php
//exo 5
echo '<a href = "?semaine=12">semaines</a> <br> ';

if (isset($_GET['semaine'])) 
{
	echo "semaine : " . $_GET['semaine'];
}

   ?>

<br>

<?php
//exo 6
echo '<a href = "?batiment=12&salle=101">batiment</a> <br> ';

if (isset($_GET['batiment']) && isset($_GET['salle'])) 
{
	echo "batiment: " . $_GET['batiment'] . "<br>" . "salle: " . $_GET['salle'];
}


  ?>

</body>
</html>
