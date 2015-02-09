<?php


class connection {

    static function connect() {
        $a=config::getConfig();
        $servername = "localhost";
        $username = $a['db']['username'];
        $password = $a['db']['password'];

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }

}