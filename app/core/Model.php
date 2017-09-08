<?php

class Model
{
    public $db = null;
    public $tableName = '';

    public function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function find()
    {
        $sql = 'SELECT * FROM ' . $this->tableName . ';';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
