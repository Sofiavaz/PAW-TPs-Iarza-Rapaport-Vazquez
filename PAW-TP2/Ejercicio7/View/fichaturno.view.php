<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficha Turno</title>
</head>
<body>
     <!--?php require "view/fichaturno.php" ?$turnox->$turnoEncoded ?-->
     <nav><?php include 'navbar.view.php' ?></nav>
<section class="Turno">
<section class="Información del Turno">
    <h2> <b>Nro Turno:</b> <? echo $id;?> </h2>
    <div>
        <label for="fecha"><b>Fecha Turno:</b> <?= $turnox->appt_date?> </label>
    </div>
    <div>
        <label for="horario"><b>Horario Turno:</b> <?= date("H:i", $turnox->appt_time)?> </label>
    </div>
  </section>
 
 <section class="Información del Paciente">
    <div>
        <label for="nombre"><b>Nombre:</b> <?= $turnox->fullname?> </label>
    </div>
    <div>
         <label for="email"><b>Email:</b> <?= $turnox->email?> </label>
    </div>
    <div>
        <label for="telefono"><b>Teléfono:</b> <?= $turnox->tel?> </label>
    </div>
    <div>
        <label for="edad"><b>Edad:</b> <?= $turnox->age?> </label>
    </div>
    <div>
        <label for="nac"><b>Fecha nacimiento:</b> <?= $turnox->birthdate?> </label>
    </div>
    <div>
        <label for="pies"><b>Pies:</b> <?= $turnox->shoe_size?> </label>
    </div>
    <div>
        <label for="altura"><b>Altura:</b> <?= $turnox->height?> </label>
    </div>
    <div>
        <label for="pelo"><b>Pelo:</b> <?= $turnox->hair_color?> </label>
    </div>    
</section>  
 </section>
 
  <aside class="volver">
    <ul>
      <li><a href="View/navbar.view.php">Volver</a></li>
    </ul>
  </aside>
</body>
</html>
