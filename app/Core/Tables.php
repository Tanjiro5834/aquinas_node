<?php
require_once __DIR__ . '/Database.php';

class Tables {
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function createTables(){
        $tables = [
            "users" => "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL UNIQUE,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                role ENUM('admin', 'student', 'teacher') DEFAULT 'student',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );",

            "enrollments" => "CREATE TABLE enrollments (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstName VARCHAR(100) NOT NULL,
                lastName VARCHAR(100) NOT NULL,
                gradeLevel VARCHAR(50) NOT NULL,
                guardianNumber VARCHAR(20) NOT NULL,
                status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );",

            "events" => "CREATE TABLE events (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL, -- Referenced in create()
                title VARCHAR(255),         -- Referenced in editEvent()
                description TEXT,
                event_date DATETIME NOT NULL,
                location VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );",

            "news" => "CREATE TABLE news (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );",

            "pre_registrations" => "CREATE TABLE pre_registrations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100) NOT NULL,
                email VARCHAR(255) NOT NULL,
                contact_number VARCHAR(20) NOT NULL,
                grade_level VARCHAR(50) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );",
        ];

        foreach ($tables as $name => $sql) {
            try{
                $this->db->exec($sql);
                echo "Table <strong>$name</strong> created successfully.<br>";
            }catch(PDOException $e){
                echo "Error creating table <strong>$name</strong>: " . $e->getMessage() . "<br>";
            }
        }
    }
}