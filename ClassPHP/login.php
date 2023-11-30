<?php
class login{
    private $user;
    private $senha;

    //getters and setters
    public function getUsuario(){
        return $this->user;

    }
    public function setUsuario($usuario){
        $this->user = $usuario;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    

    public function Logar(){
        if ($this->user == "userphp" and $this->senha == "1234") {
            echo "Logado com sucesso";
        }
        else{
            echo "Dados Inválidos";
        }
    }
}
$logar = new Login();
//$logar ->user = "userphp";
//$logar ->senha = "1234";
$logar->setUsuario("userphp");
$logar->setSenha("1234");
$logar ->Logar(); 
echo "<br>";
echo $logar->getUsuario();
echo "<br>";
echo $logar->getSenha();

?>