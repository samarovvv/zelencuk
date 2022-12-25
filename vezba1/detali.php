<?php session_start(); ?>
<?php


$krastavici=$_SESSION['krastavici'];
$domati=$_SESSION['domati'];
$zelka=$_SESSION['zelka'];

echo "<b>Детали</b><br>";
$vkkrastavici=$krastavici*60;
echo "$krastavici * 60=" . $vkkrastavici . "<br>";
$vkdomati=$domati*50;
echo "$domati * 50=" . $vkdomati . "<br>";
$vkzelka=$zelka*40;
echo "$zelka * 40=" . $vkzelka . "<br>";
echo "<hr>";
$vkupno=$vkkrastavici+$vkdomati+$vkzelka;
echo "<b>Вкупно:</b> $vkupno";


?>