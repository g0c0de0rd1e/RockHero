<?php
    session_start();

    function addValidationError(string $fieldName, string $message) {
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

    function saveValue(string $key, mixed $value) {
        $_SESSION['old'][$key] = $value;
    }

    function old(string $key){
        $value =  $_SESSION['old'][$key] ?? '';
        unset($_SESSION['old'][$key]););
        return $value;
    }
?>