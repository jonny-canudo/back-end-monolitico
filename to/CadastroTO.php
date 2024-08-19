<?php


class LoginTO {
    private $nome = null;
    private $email = null;
    private $senha = null;
    


    public function getUsuario () {
        return $this->nome;
    }
    public function setNome ($nome) {
        $this->nome = $nome;
    }
    public function getEmail () {
        return $this->email;
    }
    public function setEmail ($email) {
        $this->email = $email;
    }
    public function getSenha () {
        return $this->senha;
    }
    public function setSenha ($senha) {
        $this->senha = $senha;
    }


}
?>