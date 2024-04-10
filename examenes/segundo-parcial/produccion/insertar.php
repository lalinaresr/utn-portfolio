<?php
	$conexion = mysqli_connect('localhost', 'root', '12345678', 'produccion');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}
	
	$plantas = array(
        array('planta' => 'Hermosillo', 'unidades_producidas' => 5000, 'unidades_defectuosas' => 100),
		array('planta' => 'Mexico', 'unidades_producidas' => 10000, 'unidades_defectuosas' => 200),
		array('planta' => 'Leon', 'unidades_producidas' => 20000, 'unidades_defectuosas' => 300),
		array('planta' => 'Oaxaca', 'unidades_producidas' => 15000, 'unidades_defectuosas' => 150),
		array('planta' => 'Veracruz', 'unidades_producidas' => 17000, 'unidades_defectuosas' => 100),
		array('planta' => 'Puebla', 'unidades_producidas' => 18000, 'unidades_defectuosas' => 800),
    );
				
	for($i = 0; $i < count($plantas); $i++){
		$verificarPlanta = "SELECT * FROM plantas WHERE planta = '" . $plantas[$i]['planta'] . "'";
		$resultadoVerificarPlanta = mysqli_query($conexion, $verificarPlanta);

		if (mysqli_num_rows($resultadoVerificarPlanta) > 0) {
			echo $plantas[$i]['planta'] . ' ya existe en nuestras listas <br>';
		} else {
			$insertarPlanta = "INSERT INTO plantas(planta, unidades_producidas, unidades_defectuosas) VALUES('" . $plantas[$i]['planta'] . "' , '" . $plantas[$i]['unidades_producidas'] . "' , '" . $plantas[$i]['unidades_defectuosas'] . "')";
			$resultadoInsertarPlanta = mysqli_query($conexion, $insertarPlanta);

			if ($resultadoInsertarPlanta != null) {
				echo $plantas[$i]['planta'] . ' fue registrado con exito <br>';
			} else {
				echo $plantas[$i]['planta'] . ' no pudo ser insertado con exito <br>';
			}
		}
	}
?>