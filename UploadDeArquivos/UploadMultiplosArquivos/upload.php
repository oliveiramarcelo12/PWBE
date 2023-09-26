<?php
if(isset($_POST['enviar-formulario'])):
   $formatos= array("png", "jpeg", "jpg", "gif");
   $qtdArquivos= count($_FILES['arquivo']['name']);
   $cont =0;

   while($cont<$qtdArquivos):
    $extensao = strtolower(pathinfo($_FILES['arquivo']['name'] [$cont], PATHINFO_EXTENSION));
    if(in_array($extensao,$formatos)):
        $past= "./arquivo/";
        $temporario= $_FILES['arquivo']['tmp_name'][$cont];
        $novoNome= uniqid().".$extensao";

        if(move_uploaded_file($temporario, $past.$novoNome)):
            echo "Upload feito com sucesso. <br>";
        else:
            echo "Erro, não foi possivel fzer o upload. <br>";
        endif;
    else:
        echo "Formato Invalido" .$extensao . "<br>";
    endif;
    $cont++;
endwhile;
endif;
  ?>