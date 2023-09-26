<?php
$dir = "./img/";
//recebendo o arquivo multipart
$file = $_FILES["arquivo"];
//move o arquivo da pasta temporaria de upload para a pasta de destino
if (move_uploaded_file($file["tmp_name"], $dir.$file["name"])) {
    echo "arquivo enviado com Sucesso";

}
else{
    echo "Erro, o arquivo não existe, não pode ser enviado.";
}


?>