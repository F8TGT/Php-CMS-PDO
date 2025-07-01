<?php

class Article
{
    private $conn;
    private $table = 'articles';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function get_all()
    {
        $query = "SELECT * FROM ".$this->table." ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

    }

}
