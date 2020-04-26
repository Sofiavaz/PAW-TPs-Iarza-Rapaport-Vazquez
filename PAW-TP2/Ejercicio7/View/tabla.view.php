<!DOCTYPE html>
<html>
<head>
	<title>Tabla de turnos</title>
</head>
<body>
	<nav><?php include 'navbar.view.php'; ?></nav>

	<h3>Tabla de turnos</h3>

	<table>
		<tr>
			<th>Id</th>
			<th>Fecha turno</th>
			<th>Hora turno</th>
			<th>Paciente</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Ficha</th>
		</tr>		

		<?php foreach ($turnos as $turno) : ?>
			<tr>
				<th><?= $turno->id ?></th>
				<td><?= $turno->appt_date ?></td>
				<td><?= date("H:i", $turno->appt_time) ?></td>
				<td><?= $turno->fullname ?></td>
				<td><?= $turno->tel ?></td>
				<td><?= $turno->email ?></td>
				<td> <a href="/fichaturno.php?id=<?=$turno->id?>"> Ficha </a></td>
			</tr>

		<?php endforeach ?>
	</table>
</body>
</html>