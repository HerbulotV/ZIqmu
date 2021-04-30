<html>
    <center>
<?php
include("sousVue/Header.php");

echo 'Inscription Cours : ['.$_GET['numero'],']';
?></center>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<form method="POST" action="index.php?action=validInscription">
  <div class="form">
    <div class="col">
      <input type="hidden" class="form-control" name = "cours" placeholder="NumeroCours" value=<?php echo $_GET['numero']?>>
    </div>
    <div class="col">
      <input type="text" class="form-control" name= "nom" placeholder="Nom">
    </div>
    <br/>
    <div class="col">
      <input type="text" class="form-control" name= "prenom" placeholder="Prénom">
    </div>
    <br/>
    <div class="col">
      <input type="text" class="form-control" name= "tel" placeholder="Téléphone">
    </div>
  </div>
  <br/>
  <button type="submit" class="btn btn-secondary" >S'inscrire</button>
</form>