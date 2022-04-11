<?php
   class Config{
      private $host = 'localhost';
      private $username = 'root';
      private $password = '123';
      private $dbname = 'search';
      private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

      protected $connection = '';

      public function connect(){
         try{
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password, $this->options);
         }catch(PDOException $e){
            echo $e;
         }
         return $this->connection;
      }
   }
?>