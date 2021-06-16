<!--conexao-->
<?php
class DAO{

    /**
     * Variáveis globais para criação da conexão e do
     * tipo do banco.
     */
    private $banco;
    private $conexao;
    
    /**
     * Construtor recebe um tipo de banco MYSQL OU POSTGRES
     * porém caso não seja inserido o parametro será utilizado
     * o banco padrão DEFAULT
     */
    public function __construct($banco = self::DEFAULT){
        $this->banco = $banco;
        $this->conectar();
    }
    
    /**
     * Metodo que retorna a conexão criada
     * @return PDO
     */
    public function getConexao(){
        return $this->conexao;
    }
    
    /**
     * Metodo para criar uma nova conexao
     */
    private function conectar(){
        switch ($this->banco){
            case self::MYSQL :
                /*
                 * mysql:host=localhost - Padrão não precisa mexer
                 * dbname=escola - nome da base de dados que você criou
                 * user=root - usuário do nanco de dados
                 * password= - senha do banco de dados
                 */
                $this->conexao = new PDO('mysql:host=localhost;dbname=escola;user=root;password=rootroot');
                break;
            case self::POSTGRES :
                $this->conexao = new PDO('pgsql:host=localhost port=3000 dbname=escola user=postgres password=rootroot');
                break;
        }
    }
    
    /*
     * Constantes para escolha do banco de dados
     * DEFAULT indica qual banco será utilizado 
     * caso não seja selecionado nenhum banco no construtor
     */
    const MYSQL = 1;
    const POSTGRES = 2;
    const DEFAULT = self::MYSQL;
    
}