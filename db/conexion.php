<?php 

// Conexion hereda de PDO y permite conectarse a la base de datos 

 class Conexion extends PDO { 

   private $db_type = 'mysql';
   private $host = 'localhost';
   private $db_name = 'consulting_rooms';
   private $user = 'root';
   private $password = ''; 
   public function __construct() {

      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct("{$this->db_type}:dbname={$this->db_name};host={$this->host};charset=utf8", $this->user, $this->password);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
 } 
?>