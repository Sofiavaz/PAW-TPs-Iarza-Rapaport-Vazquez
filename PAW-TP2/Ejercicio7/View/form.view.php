<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario medico</title>
</head>
<body>
    <nav>
        <?php include 'navbar.view.php' ?>
    </nav>

    <form action="../alta_turno.php" method="POST">
        <p>
            <label for="fullname">Nombre:</label>
            <input type="text" name="fullname" id="fullname" required>
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </p>

        <p>
            <label for="telephone">Telefono:</label>
            <input type="tel" name="telephone" id="telephone" required>
        </p>

        <p>
            <label for="age">Edad:</label>
            <input type="number" name="age" id="age" min="0">
        </p>

        <p>
            <label for="shoeSize">Nro Calzado:</label>
            <input type="number" name="shoeSize" id="shoeSize" min="20" max="45">
        </p>

        <p>
            <label for="height">Altura:</label>
            <input type="range" name="height" id="height" min="100" max="230">
        </p>

        <p>
            <label for="birthdate">Fecha de nacimiento:</label>
            <input type="date" name="birthdate" id="birthdate" required>
        </p>

        <p>
            <!--
                La forma de modelar el campo este no es adecuada. Revisen este
                comentario que les deje a sus compañeros de curso, donde les
                armo un poco de codigo para que vean.

                https://github.com/germanfernandez/TP2-WEB/pull/1/commits/87ccda604e6cc54fc2bfc68154e120b09e35b783#diff-fdd73ebbbf50804104fe811d9a3a9eb6R14

                Deberian refactorizar esta parte para que quede como propongo
                en ese Commit.
            -->
            <label for="hairColor">Color de pelo:</label>
            <select name="hairColor" id="hairColor">
                <option value="Morocho">Morocho</option>
                <option value="Rubio">Rubio</option>
                <option value="Pelirrojo">Pelirrojo</option>
                <option value="Castano">Castano</option>
                <option value="Pelado">Pelado</option>
            </select>
        </p>

        <label for="apptDate">Dia turno:</label>
        <input type="date" name="apptDate" id="apptDate" required>

        <p>
            <label for="apptTime">Hora turno:</label>
            <input
                type="time"
                name="apptTime"
                id="apptTime"
                min="08:00"
                max="17:00"
                step="900"
                required>
        </p>

        <input type="reset" name="reset" id="reset" value="Borrar campos">

        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>
</html>
