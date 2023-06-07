<?php
$maghe = $_POST['maghe'];
$slve = $_GET['slv'];
$slnuoc = $_GET['sln'];
$slbap = $_GET['slb'];


header("Location: maintam.php?nd=thanhtoan&mg=".$maghe."&idgc=".$_GET['idgc']."&sln=".$slnuoc."&slb=".$slbap."&slv=".$slve."&user=".$_GET['user']."")

?>

