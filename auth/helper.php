<?php
    session_start();

    function setValidationError(string $fieldName, string $message) {
        $_SESSION['validation'][$fieldName] = $message;
    }

    function validationError(string $fieldName): bool{
        return isset($_SESSION['validation'][$fieldName]);
    }

    function validationErrorAttr(string $fieldName) {
        echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true' : '';
    }

    function validationErrorMessage(string $fieldName) {
        $message = $_SESSION['validation'][$fieldName] ?? '';
        unset($_SESSION['validation'][$fieldName]);
        echo $message;
    }

    function setValue(string $key, mixed $value) {
        $_SESSION['old'][$key] = $value;
    }

    function old(string $key){
        $value =  $_SESSION['old'][$key] ?? '';
        unset($_SESSION['old'][$key]);
        return $value;
    }


    function getPDO(): PDO{
        try{
            return new \PDO('mysql:host='. DB_HOST .';port='. DB_PORT .';charset=utf8;dbname='. DB_NAME, DB_USERNAME, DB_PASSWORD);
        } catch (\PDOException $e){
            die($e->getMessage());
        }
    }

    function findUser(string $email) : array|bool{
        $pdo = getPDO();

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    function setMessage(string $key, string $message) : void{
        $_SESSION['message'][$key] = $message;
    }

    function hasMessage(string $key) : bool{
       return isset($_SESSION[$key]);
    }

    function getMessage(string $key) : string{
        $value =  $_SESSION['message'][$key] ?? '';
        unset($_SESSION['message'][$key]);
        return $value;
    }