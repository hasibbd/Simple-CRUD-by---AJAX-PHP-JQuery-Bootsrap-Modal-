<?php

class AjaxCrud
{
    private $host = "localhost";
    private $user = "root";
    private $db = "php_ajax";
    private $pass = "";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function showData($table)
    {
        $sql = "SELECT * FROM $table";
        $q = $this->conn->query ($sql) or die("failed!");
        while ($row = mysqli_fetch_assoc ($q)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getById($id, $table)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $q   = $this->conn->query ($sql);
        $row = mysqli_fetch_assoc ($q);
        return $row;
    }

    public function UserUpdate($id, $name, $contact, $table)
    {
        $sql = "UPDATE `$table` SET `name`='$name',`contact`= '$contact' WHERE `id`='$id '";
        $this->conn->query ($sql);

    }

    public function insertData($name, $contact, $table)
    {
        $sql = "INSERT INTO $table (`name`, `contact`)";
        $sql .= "VALUES ('$name', '$contact')";
        $this->conn->query ($sql);
    }

    public function deleteData($id, $table)
    {
        $sql = "DELETE FROM $table WHERE `id` = '$id'";
        $this->conn->query ($sql);
    }
}

?>

