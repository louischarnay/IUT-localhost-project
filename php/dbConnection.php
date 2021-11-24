<?php 
        $dsn = 'sqlite:database.db';

        try{
            $pdo = new PDO($dsn);
            echo "SUCCESS";
        } catch (PDOException $exception){
            echo "FAIL";
            die();
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);