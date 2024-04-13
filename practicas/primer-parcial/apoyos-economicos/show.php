<?php

# Verificamos que el valor del campo con name "students-form" exista y no sea nulo
if (isset($_POST['students-form'])) {

	/**
	 * Variable donde almacenamos el nombre del estudiante que se esta registrando
	 * @var String
	 */
	$fullname = $_POST['fullname'];

	/**
	 * Variable donde almacenamos el estado residencial del estudiante que se esta registrando
	 * @var String
	 */
	$state = $_POST['state'];

	/**
	 * Variable donde almacenamos la calificación final del estudiante que se esta registrando
	 * @var double
	 */
	$score = $_POST['score'];

	/**
	 * Variable donde almacenamos la edad del estudiante que se esta registrando
	 * @var int
	 */
	$age = $_POST['age'];

	# Validamos que la edad no pase de los 17 años para ser acreditado
	if ($age >= 0 && $age <= 17) {
		# Validamos que su calificación sea mayor o igual a 8.5 y menor o igual a 10 para ser acreditado
		if ($score >= 8.5 && $score <= 10) {
			# Imprimimos un json de éxito para devolverlo con ajax a las ventanas de mensaje
			echo json_encode([
				'type' => 'success',
				'text' => 'Felicidades ' . $fullname . ', has logrado obtener el apoyo de 1000 pesos mexicanos'
			]);
		} else {
			# Imprimimos un json de error para devolverlo con ajax a las ventanas de mensaje
			echo json_encode([
				'type' => 'error',
				'text' => 'Lo sentimos pero no fue acreditado para poder obtener el apoyo. Requiere un promedio de 8.5 a 10'
			]);
		}
	} else {
		# Imprimimos un json de error para devolverlo con ajax a las ventanas de mensaje
		echo json_encode([
			'type' => 'error',
			'text' => 'Lo sentimos pero no fue acreditado para poder obtener el apoyo. Require ser menor de edad'
		]);
	}

	# Verificamos que el valor del campo con name "mothers-form" exista y no sea nulo
} else if (isset($_POST['mothers-form'])) {

	/**
	 * Variable donde almacenamos el estado civil de la madre soltera que se esta registrando
	 * @var String
	 */
	$status = $_POST['status'];

	/**
	 * Variable donde almacenamos el estado residencial de la madre soltera que se esta registrando
	 * @var String
	 */
	$state = $_POST['state'];

	/**
	 * Variable donde almacenamos si tiene la menos un hijo menor de edad la madre soltera que se esta registrando
	 * @var String
	 */
	$question = $_POST['question'];

	/**
	 * Variable donde almacenamos la edad del hijo menor de edad si es que tiene la madre soltera que se esta registrando
	 * @var int
	 */
	$age = $_POST['age'];

	# Validamos que por lo menos tenga un hijo
	if (strcmp($question, 'si') == 0) {
		# Comprobamos que ese hijo sea menor de edad para poder hacerla acreedora al beneficio
		if ($age > 0 && $age < 18) {
			# Imprimimos un json de éxito para devolverlo con ajax a las ventanas de mensaje
			echo json_encode([
				'type' => 'success',
				'text' => 'Felicidades has logrado obtener el apoyo de 1200 pesos mexicanos'
			]);
		} else {
			# Imprimimos un json de error para devolverlo con ajax a las ventanas de mensaje
			echo json_encode([
				'type' => 'error',
				'text' => 'Lo sentimos pero no fue acreditada para poder obtener el apoyo. Su hijo requiere ser menor de edad',
			]);
		}
	} else {
		# Imprimimos un json de error para devolverlo con ajax a las ventanas de mensaje
		echo json_encode([
			'type' => 'error',
			'text' => 'Lo sentimos pero no fue acreditada para poder obtener el apoyo. Requiere tener por lo menos un hijo',
		]);
	}

	# Verificamos que el valor del campo con name "adults-form" exista y no sea nulo
} else if (isset($_POST['adults-form'])) {

	/**
	 * Variable donde almacenamos el estado residencial del adulto mayor que se esta registrando
	 * @var String
	 */
	$state = $_POST['state'];

	/**
	 * Variable donde almacenamos la edad del adulto mayor que se esta registrando
	 * @var int
	 */
	$age = $_POST['age'];

	# Validamos que el adulto que se registró verdaderamente sea mayor
	if ($age >= 70) {
		# Imprimimos un json de éxito para devolverlo con ajax a las ventanas de mensaje
		echo json_encode([
			'type' => 'success',
			'text' => 'Felicidades ha logrado obtener el apoyo de 900 pesos mexicanos',
		]);
	} else {
		# Imprimimos un json de error para devolverlo con ajax a las ventanas de mensaje
		echo json_encode([
			'type' => 'error',
			'text' => 'Lo sentimos pero no fue acreditad@ para poder obtener el apoyo',
		]);
	}
}
