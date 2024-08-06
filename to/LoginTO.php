<?php


class LoginTO {
    private $usuario = null;
    private $senha = null;
    
    public function getUsuario () {
        return $this->usuario;
    }
    public function setUsuario ($usuario) {
        $this->usuario = $usuario;
    }
    public function getSenha () {
        return $this->senha;
    }
    public function setSenha ($senha) {
        $this->senha = $senha;
    }


}
?>