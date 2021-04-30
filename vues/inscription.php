<?php
include("sousVue/Header.php");
?>
<html>
     <link rel="stylesheet" href="css/color.css" />
    <div>
        <center><p>Les inscriptions sont terminées</p></center>;
    </div>
     <div id="contenu">
         <table class="table">
             <thead class="thead-dark">
                 <tr>
                     <th scope="col">Num</th>
                     <th scope="col">IdAdhérent</th>
                     <th scope="col">Num Cours</th>
                     <th scope="col">PDF</th>
                     <th scope="col">Supprimer</th>
                 </tr>
             </thead>
         
  

<?php

$i =0;
foreach ($lesInscrits as $unInscrit)
    { ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $unInscrit['idAdherent']?></td>
        <td><?php echo $unInscrit['idSeance']?></td>
        <td><a href="index.php?action=pdfInscription&numInscription=<?php echo $i ?>"><img src="image/adobe_pdf_document_14979.png" /></a></td>
        <td><a href="index.php?action=supprimerInscription&numInscription=<?php echo $i ?>"><img src="image/deletebutton_80861.png" /></a></td>
    </form>
    </tr>
    <?php $i++;
        
    }
 ?></table>
    <center>
 </html>