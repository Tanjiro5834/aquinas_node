<?php

require_once __DIR__ . '/../Core/Database.php';

class PreRegistration {

    private $db;

    public function __construct() {
        //$this->db = Database::getInstance();
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($data) {
        $stmt = $this->db->prepare("
            INSERT INTO pre_registrations 
            (first_name, last_name, email, contact_number, grade_level)
            VALUES (:first_name, :last_name, :email, :contact_number, :grade_level)
        ");

        $stmt->execute([
            ':first_name'     => $data['first_name'],
            ':last_name'      => $data['last_name'],
            ':email'          => $data['email'],
            ':contact_number' => $data['contact_number'],
            ':grade_level'    => $data['grade_level']
        ]);

        return $this->db->lastInsertId();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM pre_registrations ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }
}
