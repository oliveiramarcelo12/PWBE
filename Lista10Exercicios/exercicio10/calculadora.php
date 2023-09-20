<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["valor"]);
    
    $cincoPorcento = $valor * 0.05;
    $cinquentaPorcento = $valor * 0.5;
}
?>
