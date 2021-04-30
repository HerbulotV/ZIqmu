<?php
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte
$pdf->Cell(40,10,'Voici un Pdf !');
//afficher image
$pdf->Image('../images/FOND2.jpg',10,10, 64, 48);
//NEW TEXTE
$pdf->Cell(50,10,'Rejoin nous !!');
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
?>
