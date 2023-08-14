<?php 

class Connection {
    public PDO $pdo;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "Toluwani431$;";
        
        try {
          $this->pdo = new PDO("mysql:host=$servername;dbname=notes", $username, $password);
          // set the PDO error mode to exception
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }   

    }
    public function getNotes(){

        $statement = $this->pdo->prepare('SELECT * FROM notes ORDER BY create_date DESC');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
}



?>