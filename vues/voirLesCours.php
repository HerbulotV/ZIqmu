<html>
    <center>
<?php
include("sousVue/Header.php");
foreach ($lesCours as $unCours){
    $numero = $unCours['idSeance'];
    echo"Cours <b>$numero</b> <br> ";
    
    echo "date du cours : ".$unCours['jour']."<br>";
    echo "l'instrument : ".$unCours['idInstrument']."</br>";
    echo "Le professeur : ".$unCours['idProf']."</br>";
    echo '<a href="index.php?action=inscriptionCours&numero='.$numero.'">inscrire</a></br></br>';
}
?>
    </center>

    <link rel="stylesheet" href="css/color.css" />
    <div>
        <center><p>Les cours seront disponibles le 30 octobres</p></center>;
    </div>
</html>