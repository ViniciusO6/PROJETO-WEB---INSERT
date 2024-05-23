<?php 

// Inclui o arquivo que contém a definição da classe Pessoa
require_once 'model/pessoa.php';

// Definição da classe PessoaController
class PessoaController {
    // Propriedade privada para armazenar uma instância da classe Pessoa
    private $pessoa;

    // Construtor da classe PessoaController
    public function __construct() {
        // Instancia um objeto da classe Pessoa e o armazena na propriedade $pessoa
        $this->pessoa = new pessoa;
    }

    // Método para inserir uma pessoa
    public function inserir() {
        // Define os atributos da pessoa com base nos dados recebidos via POST
        $this->pessoa->setId($_POST['id']);
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
    }
}

?>
