<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estudiantes</title>
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
    <form action="<?= base_url('actualizarEstudiante'); ?>" class="form" method="post">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['carne_alumno']; ?>">

        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $datos['nombre']; ?>">

        <label for="txt_apellido" class="form-label">Apellido</label>
        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?= $datos['apellido']; ?>">

        <label for="txt_direccion" class="form-label">Direccion</label>
        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $datos['direccion']; ?>">

        <label for="txt_telefono" class="form-label">Telefono</label>
        <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" value="<?= $datos['telefono']; ?>">

        <label for="txt_email" class="form-label">Email</label>
        <input type="text" name="txt_email" id="txt_email" class="form-control" value="<?= $datos['email']; ?>">

        <label for="txt_fechaNac" class="form-label">Fecha Nacimiento</label>
        <input type="text" name="txt_fechaNac" id="txt_fechaNac" class="form-control" value="<?= $datos['fechanacimiento']; ?>">

        <label for="txt_grado" class="form-label">codigo Grado</label>
        <input type="text" name="txt_grado" id="txt_grado" class="form-control" value="<?= $datos['codigo_grado']; ?>">



        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>