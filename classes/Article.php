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

    public function getExcerpt($content, $length = 100)
    {
        if (strlen($content) > $length) {
            return substr($content, 0, $length)."...";
        }
        return $content;
    }

    public function get_all()
    {
        $query = "SELECT * FROM ".$this->table." ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
