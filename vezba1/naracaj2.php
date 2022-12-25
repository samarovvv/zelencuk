<?php session_start(); ?>
<?php
 echo "Нарачката е успешно направена.За повеќе детали погледнете на следниот линк <br>"; 
?>
<?php
if(isset($_POST['naracaj']))
$_SESSION['krastavici']=$_POST['krastavici'];
$_SESSION['domati']=$_POST['domati'];
$_SESSION['zelka']=$_POST['zelka'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="detali.php">Детали за нарачката</a>
</body>
</html>






