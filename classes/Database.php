<?php

class Database
{
    private string $host = DB_HOST;
    private string $db_name = DB_NAME;
    private string $username = DB_USER;

    private string $password = DB_PASS;

    public ?PDO $conn;

    public function getConnection(): ?PDO
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error ".$exception->getMessage();
        }
        return $this->conn;
    }
}
