<?php
include ('statistique.php');
$tab = array();
$note1 =$_GET['note1'];
$note2 = $_GET['note2'];
$note3 = $_GET['note3'];
$tab = [$note1,$note2,$note3];
echo moyenne($tab);
?>