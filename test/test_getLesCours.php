<?php

include("../modele/fonction.php");

$lesCours = Music::getLesCours();
print_r($lesCours);