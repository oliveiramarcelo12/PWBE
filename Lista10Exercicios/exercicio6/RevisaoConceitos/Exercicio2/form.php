<?php
if(isset($_POST['numero'])){
    $num1 = $_POST['numero'];
    tabuada($num1);
}

function tabuada($num1){
    $num2 = $num1;

    for ($i = 1; $i <= 10; $i++) { 
        $resultado = $num1 * $i;
        echo "$num1 x $i = $resultado<br>";
    }
}
?>
