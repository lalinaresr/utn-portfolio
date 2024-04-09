<?php  
	/**
	 * Verificamos que el valor del campo con name "estudiante" exista y no este vacio
	 * para poder entrar en este apartado y mostrar los datos que ingresamos en estudiante
	 */
	if (isset($_POST['estudiante']) &&
		!empty($_POST['estudiante'])) {
		
		/**
		 * Variable donde almacenamos el nombre del estudiante que se esta registrando
		 * @var String
		 */
		$nombreCompleto = $_POST['nombre_completo'];
		
		/**
		 * Variable donde almacenamos el estado donde vive el estudiante que se esta registrando
		 * @var String
		 */
		$estadoEstudiante = $_POST['estado_estudiante'];

		/**
		 * Variable donde almacenamos la calificacion del estudiante que se esta registrando
		 * @var double
		 */
		$calificacion = $_POST['calificacion'];

		/**
		 * Variable donde almacenamos la edad del estudiante que se esta registrando
		 * @var integer
		 */
		$edadEstudiante = $_POST['edad_estudiante'];

		if ($edadEstudiante >= 0 && $edadEstudiante <= 17) { /* Validamos que la edad no pase de los 17 años para ser acreditado */
			if ($calificacion >= 8.5 && $calificacion <= 10) { /* Validamos que su calificacion sea mayor a 8.5 y menor igual a 10 para ser acreditado */
				echo json_encode(
						array(
							'mensaje' => 'ExitoEstudiante',
							'nombreCompleto' => $nombreCompleto,
							'estadoEstudiante' => $estadoEstudiante,
							'calificacion' => $calificacion,
							'edad' => $edadEstudiante
						)
					);	/* Imprimimos un json de exito para devolverlo con Ajax a las ventanas de mensaje */
			} else {
				echo json_encode(array('mensaje' => 'ErrorEstudiante')); /* Imprimimos un json de error para devolverlo con Ajax a las ventanas de mensaje */
			}		
		} else {
			echo json_encode(array('mensaje' => 'ErrorEstudiante')); /* Imprimimos un json de error para devolverlo con Ajax a las ventanas de mensaje */
		}

	/**
	 * Verificamos que el valor del campo con name "madre" exista y no este vacio
	 * para poder entrar en este apartado y mostrar los datos que ingresamos en madre
	 */
	} else if (isset($_POST['madre']) &&
			  !empty($_POST['madre'])) {

		/* $sexo = $_POST['sexo']; */

		/**
		 * Variable donde almacenamos el estado civil de la madre soltera que se esta registrando
		 * @var String
		 */
		$estadoCivil = $_POST['estado_civil'];

		/**
		 * Variable donde almacenamos el estado donde vive la madre soltera que se esta registrando
		 * @var String
		 */
		$estadoMadreSoltera = $_POST['estado_madre_soltera'];

		/**
		 * Variable donde almacenamos si tiene hijo(s) menor(es) de edad la madre soltera que se esta registrando
		 * @var String
		 */
		$hijoMenorEdad = $_POST['hijo_menor_edad'];

		/**
		 * Variable donde almacenamos la edad del hijo menor de edad si es que tiene la madre soltera que se esta registrando
		 * @var String
		 */
		$edadHijo = $_POST['edad_hijo'];

		if ($edadHijo >= 0 && $edadHijo <= 17) { // Validamos que su hijo realmente sea menor de edad
			echo 'ExitoMadreSoltera'; //Imprimimos el mensaje de exito para retornarlo con Ajax
		} else {
			echo 'ErrorMadreSoltera'; //Imprimimos el mensaje de error para retornarlo con Ajax
		}

	/**
	 * Verificamos que el valor del campo con name "adulto" exista y no este vacio
	 * para poder entrar en este apartado y mostrar los datos que ingresamos en adulto
	 */
	} else if (isset($_POST['adulto']) &&
			  !empty($_POST['adulto'])) {

		/**
		 * Variable donde almacenamos la edad del adulto mayor que se esta registrando
		 * @var String
		 */
		$estadoAdultoMayor = $_POST['estado_adulto_mayor'];

		/**
		 * Variable donde almacenamos la edad del adulto mayor que se esta registrando
		 * @var String
		 */
		$edadAdultoMayor = $_POST['edad_adulto_mayor'];

		if ($edadAdultoMayor >= 70 && $edadAdultoMayor <= 200) { // Para ser adulto mayor verificamos que sea mayor de 70 años
			echo 'ExitoAdultoMayor'; //Imprimimos el mensaje de exito para retornarlo con Ajax
		} else {
			echo 'ErrorAdultoMayor'; //Imprimimos el mensaje de error para retornarlo con Ajax
		}
	}
?>