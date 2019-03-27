<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP form</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form method="post" action="action.php">
        <div class="row">
            <label>Email</label>
            <input type="email" name="email" id="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
            <?= !empty($errors['email']) ? $errors['email'] : ''?>
        </div>

        <button>Подписаться</button>

    </form>
</body>

</html>