<?php
class Database {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=mabagnole;charset=utf8", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}
?>