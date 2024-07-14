<?php

    require_once __DIR__ . 'helper.php';

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $passwordConfirm = $_POST['confirmPassword'] ?? null;

    $_SESSION['validation'] = [];
    
    if (empty($name)){
        setValidationError('name', 'Неверное имя');
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        setValidationError('email', 'Введена неправильная почта');
    }

    if (empty($password)){
        setValidationError('password', 'Пароль пустой');
    }

    if ($password !== $passwordConfirm){
        setValidationError('password', 'Пароли не совпадают');
    }

    if (!empty($_SESSION['validation'])){
        setValue('name', $name);
        setValue('email', $email);
        header('Location: /../registration.php');
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

    header('Location: /../signin.php');