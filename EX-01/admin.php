<html>
<body>
<?php
 
session_start();
if($_SESSION['iamge']['size']>2097152){
 $error="Le fichier est trop lourd";
 echo $_SESSION['image']['size'];
 echo "octets";
};
$findme='.';
$position=strpos($_SESSION['image']['name'],$findme);
echo $position;
$longueur=strlen($_SESSION['image']['name'])-$position;
$extension=substr($_SESSION['image']['name'],0,$longueur);
$tailleextensio=strlen($extension);
if($extension!='.jpg' ||'.jpeg'||'.png'){
$error="Lextension de votre fichier n'est pas acceptée.";
}
 
$nom=strlen($_SESSION['image']['name']);
$taillenom = $nom-$tailleextension;
if($taillenom <=4){
 echo 'Nombre de caractères ; '.$taillenom.'';
 echo "Le nom de l'image doit faire minimum 4 carcatères hors extension.";
}
 
?>
<div>
 <p>
 <?php if(isset($error)) echo $error; ?>
 </p>
</div>
 <form method="post" enctype="multipart/form-data">
 <input type="file" name="image">
 <input type="texte" name="titre" placeholder="Titre de la photo">
 <input type="texte" name="descrpition" placeholder="Description de la photo">
 <input type="submit" name="bouton" value="Charger">
 </form>
<?php
echo $_SESSION['image'];
echo $_SESSION['titre'];
echo $_SESSION['description'];
 
?>
</body>
 
</html>