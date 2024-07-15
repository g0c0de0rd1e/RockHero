<?php

    require_once __DIR__ . '/auth/helper.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockHero</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form class="signinform" action="auth/login.php" method="post">
        <div class="wrapper">
            <div class="input-box">
                <label for="email">
                    Email
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="email@email.com"
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
                    id="password"
                    name="password"
                    placeholder="********">
                </label>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Login Now">
            </div>
            <div class="text">
                <h3>Нет аккаунта?
                    <a href="signin.php">Зарегестрироваться</a>
                </h3>
            </div>
        </div>
    </form>
</body>
</html>