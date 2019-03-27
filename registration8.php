<?php

require_once __DIR__ . 'classes/Form8.php';

$form = new Form('post', 'action8.php');
$formGet = new Form('get', 'action8.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Form class</title>
    <link rel="stylesheet" href="css8.css">
</head>

<body>
    <?= $form->render() ?>

    <?= $formGet->render() ?>
</body>

</html>
