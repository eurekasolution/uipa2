<?php

    function connectDB()
    {
        $dbHost = "localhost";

        $dbUser = "DB 사용자 계정";
        $dbPass = "비밀번호";
        $dbName = "데이터베이스 이름";
        $dbPort = 3306;

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort) or die("Connect Fail to MySQL for XAMPP : %s\n". $conn->error);
        return $conn;
    }

    function closeDB($conn)
    {
        $conn->close();
    }
?>