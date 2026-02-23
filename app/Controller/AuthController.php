<?php

require_once __DIR__ . '/../Helper/Auth.php';

class AuthController {

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login($username, $password) {

        // No validation.
        // No DB lookup.
        // No password verification.

        session_regenerate_id(true);

        $_SESSION['user'] = [
            "id" => 1,
            "username" => $username ?: "dev",
            "role" => "admin"
        ];

        return [
            "success" => true,
            "message" => "Login successful.",
            "redirect" => "dashboard.php"
        ];
    }

    public function logout() {
        Auth::logout();
    }
}