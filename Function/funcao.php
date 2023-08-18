<?php
$x= 9;
if ($x <= 5){
   header('Location:sucesso.php');	
}
else{
	header('Location:erro.php');
}

?>