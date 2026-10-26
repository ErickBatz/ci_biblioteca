<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="<?= base_url('actualizarAutor'); ?>" class="form" method="post">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['codigo_autor']; ?>">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $datos['nombre']; ?>">
        <label for="txt_apellido" class="form-label">Apellido</label>
        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?= $datos['apellido']; ?>">
        <label for="txt_nacionalidad" class="form-label">Nacionalidad</label>
        <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control" value="<?= $datos['nacionalidad']; ?>">
        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
