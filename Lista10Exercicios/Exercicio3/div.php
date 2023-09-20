<?php
      if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        include 'funcao.php';
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        $resultado = divisaoPorSubtracoesSucessivas($num1, $num2);

        echo "O resultado da divisão é: $resultado";
    }
  
    
    ?>