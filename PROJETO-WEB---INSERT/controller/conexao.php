<?php 

// Definição da classe Conexao
class Conexao {
    // Propriedades privadas que armazenam as informações de conexão
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw0";
    private $conexao;

    // Método construtor que estabelece a conexão com o banco de dados
    public function __construct() {
        // Inicializa uma nova conexão mysqli utilizando as informações de host, usuário, senha e nome do banco
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        
        // Verifica se ocorreu algum erro na conexão
        if ($this->conexao->connect_error) {
            // Se houve erro, interrompe o script e exibe a mensagem de erro
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Método para obter a conexão com o banco de dados
    public function getConexao() {
        // Retorna o objeto de conexão
        return $this->conexao;
    }
}

?>
