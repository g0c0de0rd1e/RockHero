<?php

    require_once __DIR__ ."/auth/helper.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockHero</title>
</head>
<body>
    <form class="registration-form" action="auth/registration.php">
        <label for="name">
            Имя
            <input 
            type="text" 
            id="name" 
            name="name" 
            placeholder="Иван Иванович"
            value="<?php echo old('name')?>"
            <?php validationErrorAttr('name') ?>
        >
        <?php if(validationError('name')): ?>
            <small><?php validationErrorMessage('name') ?></small>
        <?php endif;?>  
        </label>
        <label for="email">
            E-mail
            <input 
            type="text" 
            id="email"
            name="email"
            placeholder="admin@redhat.com"
            value="<?php echo old('email')?>"
            <?php validationErrorAttr('email') ?>
        >
        <?php if(validationError('email')): ?>
            <small><?php validationErrorMessage('email') ?></small>
        <?php endif;?>  
        </label>
        
        <label for="password">
            Пароль
            <input 
            type="password" 
            id = "password"
            name="password"
            placeholder="*******"
            <?php validationErrorAttr('password') ?>
        >
        <?php if(validationError('password')): ?>
            <small><?php validationErrorMessage('password') ?></small>
        <?php endif;?>  
        </label>
        <input type="password" name="confirmPassword">
        <input type="submit" value="Sign in">
    </form>
</body>
</html>