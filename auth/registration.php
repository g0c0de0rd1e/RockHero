<?php

    require_once __DIR__ ."/helper.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['confirmPassword'];

    $_SESSION['validation'] = [];

    saveValue('name', $name);
    saveValue('email', $email);
    
    if (empty($name)){
       addValidationError('name', 'Неверное имя');
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        addValidationError('email', 'Введена неправильная почта');
    }

    if (!empty($password)){
        addValidationError('password', 'Пароль пустой');
    }

    if ($password == $passwordConfirm){
        addValidationError('password', 'Пароли не совпадают');
    }

    if (!empty($_SESSION['validation'])){
        header('Location: /registration.php');
    }