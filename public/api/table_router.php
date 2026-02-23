<?php
require_once __DIR__ . '/../../app/Core/Database.php';
require_once __DIR__ . '/../../app/Core/Tables.php';

try {
    $tableCreator = new Tables();
    echo "<h2>Starting Database Migration...</h2>";
    $tableCreator->createTables();
    
    echo "<br><p style='color: green;'><strong>Setup complete!</strong></p>";
} catch (Exception $e) {
    echo "<p style='color: red;'><strong>Critical Error:</strong> " . $e->getMessage() . "</p>";
}