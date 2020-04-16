<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficha Turno</title>
</head>
<body>
     <?php require "view/fichaturno.php" ?$turnox->$turnoEncoded ?>
<section class="Turno">
<section class="Información del Turno">
    <h2> <b>Nro Turno:</b> <? echo $id;?> </h2>
    <div>
        <label for="fecha" ><b>Fecha Turno:</b> <? echo $turnox['fecha' ];?> </label>
    </div>
    <div>
        <label for="horario" ><b>Horario Turno:</b> <? echo $turnox['horario'];?> </label>
    </div>
  </section>
 
 <section class="Información del Paciente">
    <div>
        <label for="nombre" ><b>Nombre:</b> <? echo $turnox['nombre'];?> </label>
    </div>
    <div>
         <label for="email" ><b>Email:</b> <? echo $turnox['email'];?> </label>
    </div>
    <div>
        <label for="telefono" ><b>Teléfono:</b> <? echo $turnox['telefono'];?> </label>
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
