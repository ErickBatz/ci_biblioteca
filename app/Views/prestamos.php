<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1>Prestamos</h1>
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

                            <form action="<?= base_url('insertarPrestamo'); ?>" class="form" method="post">

                                <label for="txt_codigo" class="form-label">Numero Prestamos</label>
                                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control">

                                <label for="txt_libro" class="form-label">Codigo Libro</label>
                                <input type="text" name="txt_libro" id="txt_libro" class="form-control">

                                <label for="txt_alumno" class="form-label">Carne Alumno</label>
                                <input type="text" name="txt_alumno" id="txt_alumno" class="form-control">

                                <label for="txt_fechaPrestamo" class="form-label">Fecha Prestamo</label>
                                <input type="date" name="txt_fechaPrestamo" id="txt_fechaPrestamo" class="form-control">

                                <label for="txt_fechaDevolucion" class="form-label">Fecha Devolucion</label>
                                <input type="date" name="txt_fechaDevolucion" id="txt_fechaDevolucion" class="form-control">


                                <label for="txt_empleado" class="form-label">Codigo Empleado</label>
                                <input type="text" name="txt_empleado" id="txt_empleado" class="form-control">


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
                        <th>Numero Prestamos</th>
                        <th>Codigo Libro</th>
                        <th>Carne Alumno</th>
                        <th>Fecha Prestamo</th>
                        <th>Fecha Devolucion </th>
                        <th>codigo Empleado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $prestamo) {
                    ?>
                        <tr>
                            <td><?= $prestamo['numero_prestamo'] ?></td>
                            <td><?= $prestamo['codigo_libro'] ?></td>
                            <td><?= $prestamo['carne_alumno'] ?></td>
                            <td><?= $prestamo['fecha_prestamo'] ?></td>
                            <td><?= $prestamo['fecha_devolucion'] ?></td>
                            <td><?= $prestamo['codigo_empleado'] ?></td>

                            <td>
                                <a href="<?= base_url('buscarPrestamo/') . $prestamo['numero_prestamo']; ?>" class="btn btn-primary">Actualizar</a>
                                <!--eliminar tiene la ruta eliminar/codigo-->
                                <a href="<?= base_url('eliminarPrestamo/') . $prestamo['numero_prestamo']; ?>" class="btn btn-danger">eliminar</a>
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