<?php

declare(strict_types=1);

class Dbconnection

{

    public function connect(): PDO

    {

        try {
            $databaseHost = "localhost";
            $databaseUser = "root";
            $databasePassword = "becode";
            $databaseName = "school";

            $driverOptions = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            return new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName, $databaseUser, $databasePassword, $driverOptions);
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
        }
    }
}