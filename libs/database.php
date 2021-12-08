<?php 
    class Database {

        public $conn;

        public function __construct($server,$user,$password,$dbname){
            try {
                $this->conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function select($sql){
            try {
                $result = $this->conn->prepare($sql);
                $result->execute(); 
                $data = $result->fetchAll();
                return $data;
            } catch(Exception $err){
                return null;
            }
        }

        public function query($sql){
            try {
                $result = $this->conn->prepare($sql);
                $result->execute();
                return 1;
            } catch(Exception $err){
                return 0;
            }
        }

        function __destruct() {
            $conn = null;
        }
    }


    