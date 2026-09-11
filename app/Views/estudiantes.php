<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1>Estudiantes</h1>
        </header>

        <main>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EmpleadosModal">
                Nuevo
            </button>

            <!-- Modal -->
            <div class="modal fade" id="EmpleadosModal" tabindex="-1" aria-labelledby="EmpleadosModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="EmpleadosModalLabel">Agregar Estudiante</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="<?= base_url('insertarEstudiante'); ?>" class="form" method="post">
                                <label for="txt_codigo" class="form-label">Carne Alumno</label>
                                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control">

                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                                <label for="txt_apellido" class="form-label">Apellido</label>
                                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                                <label for="txt_direccion" class="form-label">Dirección</label>
                                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">

                                <label for="txt_telefono" class="form-label">Telefono</label>
                                <input type="text" name="txt_telefono" id="txt_telefono" class="form-control">


                                <label for="txt_email" class="form-label">Email</label>
                                <input type="text" name="txt_email" id="txt_email" class="form-control">

                                <label for="txt_fechaNac" class="form-label">fecha Nacimiento</label>
                                <input type="text" name="txt_fechaNac" id="txt_fechaNac" class="form-control">

                                <label for="txt_grado" class="form-label">Codigo Grado</label>
                                <input type="text" name="txt_grado" id="txt_grado" class="form-control">


                                <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>

                            </form>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Carne Alumno</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>telefono</th>
                        <th>email</th>
                        <th>Fecha Nacimiento</th>
                        <th>Codigo_grado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $estudiante) {
                    ?>
                        <tr>
                            <td><?= $estudiante['carne_alumno'] ?></td>
                            <td><?= $estudiante['nombre'] . " " . $estudiante['apellido']; ?></td>
                            <td><?= $estudiante['direccion'] ?></td>
                            <td><?= $estudiante['telefono'] ?></td>
                            <td><?= $estudiante['email'] ?></td>
                            <td><?= $estudiante['fechanacimiento'] ?></td>
                            <td><?= $estudiante['codigo_grado'] ?></td>
                            <td>
                                <a href="<?= base_url('bucarEstudiante/') . $estudiante['carne_alumno']; ?>" class="btn btn-primary">Actualizar</a>
                                <!--eliminar tiene la ruta eliminar/codigo-->
                                <a href="<?= base_url('eliminarEstudiante/') . $estudiante['carne_alumno']; ?>" class="btn btn-danger">eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</body>

</html>