<?php
if(isset($_POST['enviar-formulario'])):
   $formatos= array("PNG", "jpeg", "jpg", "gif");
   $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
   
  

if(in_array($extensao, $formatos)):
    $pasta = "./arquivos/";
    $temporario = $_FILES['arquivo']['tmp_name'];
    $novoNome = uniqid() . ".$extensao";
  
   


if(move_uploaded_file($temporario, $pasta.$temporario)):
    $mensagem = "upload feito com sucesso";
    
   

else:
    $mensagem = "Erro, não foi possivel fazer o upload";
endif;

else: 
    $mensagem = "Formato invalido!! " ;   
endif;
echo $mensagem;
endif;

echo "<br> <a href='index.html'> << Voltar </a>";
?>