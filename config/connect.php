<?php
        session_start();

        function connectDB() {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db   = "system_repair";
            $charset = "utf8mb4";

            // datasortname
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            //set ค่า attribute     
            $options = [
                    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
            ];

            try {
                    $connect = new PDO($dsn, $user, $pass, $options);
                    
                    return $connect;
            } catch(PDOException $e) {
                throw new PDOException($e->getMessage());
            }
        
        }
?>