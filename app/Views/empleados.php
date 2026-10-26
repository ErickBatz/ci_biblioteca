<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/biblioteca.css') ?>">
</head>
<body>
        <nav class="library-nav" aria-label="Navegacion principal">
        <a class="library-brand" href="<?= site_url('/') ?>"><span class="library-brand-mark" aria-hidden="true">B</span><span>Biblioteca<small>Sistema biblioteca</small></span></a>
        <div class="library-links">
            <a href="<?= site_url('/') ?>">Inicio</a>
            <a href="<?= site_url('libros') ?>">Libros</a>
            <a href="<?= site_url('prestamos') ?>">Pr&eacute;stamos</a>
            <a href="<?= site_url('estudiantes') ?>">Estudiantes</a>
            <a href="<?= site_url('empleados') ?>">Empleados</a>
            <a href="<?= site_url('editoriales') ?>">Editoriales</a>
        </div>
    </nav>
    <div class="container-fluid">
        <header>
            <h1>Empleados</h1>
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
                    <h1 class="modal-title fs-5" id="EmpleadosModalLabel">Agregar Empleado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?=base_url('insertar'); ?>" class="form" method="post">
                        <label for="txt_codigo" class="form-label">Código</label>
                        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_apellido" class="form-label">Apellido</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                        <label for="txt_email" class="form-label">Email</label>
                        <input type="text" name="txt_email" id="txt_email" class="form-control">
                        <label for="txt_direccion" class="form-label">Dirección</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
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
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($datos as $empleado) {
                    ?>
                    <tr>
                        <td><?=$empleado['codigo_empleado']?></td>
                        <td><?=$empleado['nombre']." ".$empleado['apellido'];?></td>
                        <td><?=$empleado['direccion']?></td>
                        <td><?=$empleado['email']?></td>
                        <td>
                            <a href="<?=base_url('buscar/').$empleado['codigo_empleado'];?>" class="btn btn-primary">Actualizar</a>
                            <!--eliminar tiene la ruta eliminar/codigo-->
                            <a href="<?=base_url('eliminar/').$empleado['codigo_empleado'];?>" class="btn btn-danger">eliminar</a>
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