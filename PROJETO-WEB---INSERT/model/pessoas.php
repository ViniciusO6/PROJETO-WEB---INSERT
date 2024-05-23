<?php 

// Definição da classe Pessoa
class pessoa {
    // Propriedades privadas que armazenam informações sobre uma pessoa
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;

    // Métodos para acessar os valores das propriedades (getters)
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getCelular(){
        return $this->celular;
    }

    // Métodos para definir os valores das propriedades (setters)
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
}

?>
