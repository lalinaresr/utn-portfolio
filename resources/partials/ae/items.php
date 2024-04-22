<div class="row">
    <div class="col-sm-12 col-lg-4">
        <img class="img-circle center-block" src="<?= RESOURCES_PATH; ?>/images/ae/estudiantes.png" alt="Apoyo a Estudiantes" width="140" height="140">
        <h2 class="text-center">Apoyo a estudiantes</h2>
        <p class="text-center">La convocatoria es para niñas, niños y jóvenes que habiten en el Estado de México los cuales deben tener un promedio superior a 8.5 y ser menores de 18 años para poder ser elegido.</p>
        <p class="text-center">
            <a href="#students-modal" class="btn btn-primary" data-toggle="modal">Llenar solicitud <i class="fa fa-fw fa-external-link"></i></a>
        </p>
    </div>
    <?php include_once COMPONENTS_PATH . '/ae/students-form.php'; ?>
    <div class="col-sm-12 col-lg-4">
        <img class="img-circle center-block" src="<?= RESOURCES_PATH; ?>/images/ae/madres.png" alt="Apoyo a Madres Solteras" width="140" height="140">
        <h2 class="text-center">Apoyo a madres solteras</h2>
        <p class="text-center">La convocatoria es para todas las madres solteras que habiten en el Estado de México las cuales deben ser solteras, y tener mínimo un hijo menor a 18 años de edad.</p>
        <p class="text-center">
            <a href="#mothers-modal" class="btn btn-primary" data-toggle="modal">Llenar solicitud <i class="fa fa-fw fa-external-link"></i></a>
        </p>
    </div>
    <?php include_once COMPONENTS_PATH . '/ae/mothers-form.php'; ?>
    <div class="col-sm-12 col-lg-4">
        <img class="img-circle center-block" src="<?= RESOURCES_PATH; ?>/images/ae/adultos.png" alt="Apoyo a Adultos Mayores" width="140" height="140">
        <h2 class="text-center">Apoyo a adultos mayores</h2>
        <p class="text-center">La convocatoria es para todos los adultos mayores hombres o mujeres, pero que habiten en el Estado de México además deben tener más de 70 años para poder ser elegido.</p>
        <p class="text-center">
            <a href="#adults-modal" class="btn btn-primary" data-toggle="modal">Llenar solicitud <i class="fa fa-fw fa-external-link"></i></a>
        </p>
    </div>
    <?php include_once COMPONENTS_PATH . '/ae/adults-form.php'; ?>
</div>