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

    <!-- <form action="../alta_turno.php" method="POST" enctype="multipart/form-data"> -->
    <form action="/turnos/guardar" method="POST" enctype="multipart/form-data">    
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
        <label for="hairColor">Color de pelo:</label>
        
        <select name="hairColor" id="hairColor">
            <?php foreach($coloresPelo as $colorPelo) : ?>
                <option value="<?= $colorPelo?>"><?= $colorPelo?></option>                
            <?php endforeach ?>
        </select>        
    </p>
       
    <p>
        <label for="apptDate">Dia turno:</label>
        <input type="date" name="apptDate" id="apptDate" required>

        <input type="reset" name="reset" id="reset" value="Borrar campos">

        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>
</html>
