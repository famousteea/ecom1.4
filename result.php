
<?php
require_once("fonction.php");
var_dump($_GET);
if($_GET){
    $mot_de_passe=$_GET['fmdp'];
    if (empty($mot_de_passe)){
    echo"</br>mot de passe vide";
}else{
    echo"</br>Mon mot de passe est :" .$mot_de_passe;
}
/*
$namelength_isvalid=$namelength_isvalid($_GET['fname']);

echo'</br>';
var_dump($namelength_isvalid);
if (!$namelength_isvalid['isvalid']) {
    
}
*/
}
$mot_de_passe = "abcdef";
$resultat = valider_mot_de_passe($mot_de_passe);
echo $resultat;
