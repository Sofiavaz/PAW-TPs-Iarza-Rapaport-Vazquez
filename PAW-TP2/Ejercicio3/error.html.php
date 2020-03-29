<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error en datos recibidos</title>
</head>
<body>
    <h2>Error en los datos del turno.</h2>
    <p>Los datos recibidos no cumplen con las restricciones
        impuestas.
    </p>

    <?php foreach($invalid_fields as $field): ?>
       <li><?= $field?></li>
    <?php endforeach ?>

</body>
</html>