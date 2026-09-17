<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="<?= base_url('actualizarEditorial'); ?>" class="form" method="post">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['codigo_editorial']; ?>">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $datos['nombre']; ?>">
        
    
        <label for="txt_direccion" class="form-label">Dirección</label>
        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $datos['direccion']; ?>">
        
        <label for="txt_telefono" class="form-label">telefono</label>
        <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" value="<?= $datos['telefono']; ?>">
        
        <label for="txt_email" class="form-label">Email</label>
        <input type="text" name="txt_email" id="txt_email" class="form-control" value="<?= $datos['email']; ?>">

        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>