<?php

    require_once __DIR__ . '/auth/helper.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockHero</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <form class="registration-form" action="auth/registration.php" method="post">
        <?php if (hasMessage('error')){
            echo getMessage('error');
        }
        ?>
    <div class="wrapper">
        <h2>Registration</h2>
        <?php if (hasMessage('error')){
            echo getMessage('error');
        } ?>
        <div class="input-box">
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
        </div>
        <div class="input-box">
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
        </div>
        <div class="input-box">
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
        </div>
        <div class="input-box">
            <label for="confirmPassword">
            Подтверждение пароля
                <input 
                    type="password" 
                    id = "confirmPassword"
                    name="confirmPassword"
                    placeholder="*******"
                >
            </label> 
        </div>
        <div class="input-box button">
            <input type="Submit" value="Register Now">
        </div>
        <div class="text">
            <h3>Already have an account?
                <a href="signin.php">Sign In</a>
            </h3>
        </div>
    </div>
    </form>
</body>
</html>