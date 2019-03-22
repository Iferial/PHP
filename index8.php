<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP form</title>
    <link rel="stylesheet" href="css8.css">
</head>

<body>
    <form method="post" action="action8.php">

        <div class="row">
            <label>Email</label>
            <input type="email" name="email" id="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
            <?= !empty($errors['email']) ? $errors['email'] : ''?>
        </div>

        <div class="row">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
            <?= !empty($errors['password']) ? $errors['password'] : ''?>
        </div>

        <div class="row">
            <label for="passwordConfirmation">Подтверждение пароля</label>
            <input type="password" name="passwordConfirmation" id="passwordConfirmation">
            <?= !empty($errors['passwordConfirmation']) ? $errors['passwordConfirmation'] : ''?>
        </div>

        <button>Зарегистрироваться</button>
    </form>
</body>

</html>