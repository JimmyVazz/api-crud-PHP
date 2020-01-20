<?php
class Database{
 
    // Escribimos nuestras propias credenciales para el acceso a la BD
    //Estos son los atributos de nuestra clase privados 
    private $host = "localhost";
    private $db_name = "apidb";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // Metodo para iniciar u obtener la conexión a la BD
    public function getConnection(){
 
        $this->conn = null;  //Apuntamos la variable conn a null, antes de hacer una conexión
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
