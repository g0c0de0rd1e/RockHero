<?php

    require_once __DIR__ .'helper.php';

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        setValidationError('email', 'Неверный формат почты');
        setMessage('error', 'Ошибка валидации');
        header("Location: /");
    }

    $user = findUser($email);

    if(!$user){
        setMessage('Error', "Пользователь $email не найден");
        header("Location: /");
    }
    
    var_dump($user);

    if(!password_verify($password, $user["password"])){
        setMessage('Error', "Неверный пароль");
        header("Location: /");
    }

    $_SESSION['user']['id'] = $user['id'];
    header("Location: /../index.php");