<?php
include("modele/fonction.php");

if(!isset($_REQUEST['action']))
{
 $action = 'accueil';
}
else {
    $action = $_REQUEST['action'];
}


switch($action)
{
case 'accueil' :
include("vues/accueil.php");
    break;
case 'voirLesCours' :
    $lesCours = Music::getLesCours();
    include("vues/voirLesCours.php");
    break;
 case 'inscription':
 $lesInscrits = Music::getInscrits();
 include("vues/inscription.php");
 break;


case 'inscriptionCours':
    include("vues/inscriptionCours.php");
    break;
case 'validInscription':
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $seance=$_POST['cours'];
    Music::inscrire($nom,$prenom,$tel,$seance);
    include("vues/validInscription.php");
 break;
case 'pdfInscription':
    $lesInscriptions = Music::getInscrits();
     $num = $_REQUEST['numInscription'];
    $line = $lesInscriptions[$num];
    include("vues/sousVue/pdf_inscription.php");
    creerPdfInscription($line);
    break;
    
case 'supprimerInscription':
    $lesInscriptions = Music::getInscrits();
    $num = $_REQUEST['numInscription'];
    $line = $lesInscriptions[$num];
    include("vues/inscription.php");
    Music::supprimer($line);
    
    
    break;
}









