<?php
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$date = isset($_POST['date']) ? $_POST['date'] : NULL;
$lieu = isset($_POST['lieu']) ? $_POST['lieu'] : NULL;
$cp = isset($_POST['cp']) ? $_POST['cp'] : NULL;
$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
$page = isset($_POST['page']) ? $_POST['page'] : NULL;
$portable = isset($_POST['portable']) ? $_POST['portable'] : NULL;
$semestre = isset($_POST['semestre']) ? $_POST['semestre'] : NULL;
$niveau = isset($_POST['niveau']) ? $_POST['niveau'] : NULL;
$connaissances = isset($_POST['connaissances']) ? $_POST['connaissances'] : NULL;


echo ("Le nom est : $nom");
echo '<br>';
echo ("Le prénom est : $prenom");
echo '<br>';
echo ("La date de naissance est : $date");
echo '<br>';
echo ("Le lieu de naissance est : $lieu");
echo '<br>';
echo ("Le code postal est : $cp");
echo '<br>';
echo ("L'adresse électronique est : $mail");
echo '<br>';
echo ("La page personnelle est : $page");
echo '<br>';
echo ("Le numéro de portable est : $portable");
echo '<br>';
echo ("Le semestre est : $semestre");
echo '<br>';
echo ("Le niveau en HTML est : $niveau");
echo '<br>';

echo ("Les connaissances : ");
foreach ((array)$connaissances as $valeur){
	echo("$valeur ");
}

?>