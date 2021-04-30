<?php
function creerPdfInscription($inscription){
// permet d'inclure la bibliothèque fpdf
require('fpdf/fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte
$pdf->Cell(70,100,'Inscription au cours :' .$inscription['idSeance'],1,1,'C');
//afficher image

//NEW TEXTE
$pdf->Cell(10,100,'eleve numéro:'.$inscription['idAdherent']);
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
ob_end_clean();
$pdf->Output();
}
?>

