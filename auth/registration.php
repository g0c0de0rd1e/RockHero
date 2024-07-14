<?php

    require_once __DIR__ ."/helper.php";

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $passwordConfirm = $_POST['confirmPassword'] ?? null;

    $_SESSION['validation'] = [];

    saveValue('name', $name);
    saveValue('email', $email);
    
    if (empty($name)){
       addValidationError('name', 'Неверное имя');
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        addValidationError('email', 'Введена неправильная почта');
    }

    if (empty($password)){
        addValidationError('password', 'Пароль пустой');
    }

    if ($password !== $passwordConfirm){
        addValidationError('password', 'Пароли не совпадают');
    }

    if (!empty($_SESSION['validation'])){
        header('Location: /registration.php');
    }

    $pdo = getPDO();

    $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $params = [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];
    $stmt = $pdo->prepare($query);

    try{
        $stmt->execute($params);
    } catch(\Exception $e){
        die($e->getMessage());
    }

    header('Location: /signin.php');