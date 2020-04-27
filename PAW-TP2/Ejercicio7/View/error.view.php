<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>

    <nav><?php include 'navbar.view.php' ?></nav>
    <h2>Error</h2>
    <p>Mensaje: <?= $view_message?></p>

    <?php if (isset($invalid_fields)) 
        foreach($invalid_fields as $field): ?>
        <li><?= $field?></li>
        <?php endforeach ?>

</body>
</html>