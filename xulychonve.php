<?php

$slve = $_POST['sl-ve'];
$slnuoc = $_POST['sl-nuoc'];
$slbap = $_POST['sl-bap'];

header("Location: maintam.php?nd=chonghe&idgc=".$_GET['idgc']."&sln=".$slnuoc."&slb=".$slbap."&slv=".$slve."&user=".$_GET['user']."");

?>