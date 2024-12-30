<?php

class Database {
    private $connection;

    public function __construct() {
        // Load the database config
        $config = require 'config.php';
        $dbConfig = $config['db'];

        try {
            // Create a PDO connection string with the provided configuration
            $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
            $this->connection = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling
        } catch (PDOException $e) {
            // If there is a connection error, display the message
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Method to get the PDO connection
    public function getConnection() {
        return $this->connection;
    }
}
