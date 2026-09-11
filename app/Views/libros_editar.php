<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="<?= base_url('actualizarLibro'); ?>" class="form" method="post">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['codigo_libro']; ?>">

        <label for="txt_autor" class="form-label">Codigo Autor</label>
        <input type="text" name="txt_autor" id="txt_autor" class="form-control" value="<?= $datos['codigo_autor']; ?>">

        <label for="txt_editorial" class="form-label">Codigo Editorial</label>
        <input type="text" name="txt_editorial" id="txt_editorial" class="form-control" value="<?= $datos['codigo_editorial']; ?>">

        <label for="txt_titulo" class="form-label">Titulo</label>
        <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?= $datos['titulo']; ?>">

        <label for="txt_paginas" class="form-label">Numero Paginas</label>
        <input type="text" name="txt_paginas" id="txt_paginas" class="form-control" value="<?= $datos['numero_paginas']; ?>">

        <label for="txt_tamanio" class="form-label">Tamanio</label>
        <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control" value="<?= $datos['tamanio']; ?>">

        <label for="num_precio" class="form-label"> Precio</label>
        <input type="number" name="num_precio" id="num_precio" class="form-control" value="<?= $datos['precio']; ?>">

        <label for="txt_estado" class="form-label">codigo Estado</label>
        <input type="text" name="txt_estado" id="txt_estado" class="form-control" value="<?= $datos['estado']; ?>">

        <label for="txt_edicion" class="form-label">Edicion</label>
        <input type="text" name="txt_edicion" id="txt_edicion" class="form-control" value="<?= $datos['edicion']; ?>">

        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>