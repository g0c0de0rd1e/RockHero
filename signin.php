<?php

    require_once __DIR__ . 'auth/helper.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockHero</title>
</head>
<body>
    <form class="signinform" action="auth/login.php" method="post">
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
        <label for="password">
            Пароль
            <input 
            type="password" 
            id="password"
            name="password"
            placeholder="********">
        </label>
        <input type="submit" value="Login">
</body>
</html>