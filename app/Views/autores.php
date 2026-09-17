<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <header><h1>Autores</h1></header>
        <main>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AutoresModal">Nuevo</button>

            <div class="modal fade" id="AutoresModal" tabindex="-1" aria-labelledby="AutoresModalLabel" aria-hidden="true">
                <div class="modal-dialog"><div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AutoresModalLabel">Agregar Autor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('insertarAutor'); ?>" class="form" method="post">
                            <label for="txt_codigo" class="form-label">Código</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                            <label for="txt_nacionalidad" class="form-label">Nacionalidad</label>
                            <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control">
                            <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button></div>
                </div></div>
            </div>

            <table class="table table-striped">
                <thead><tr><th>Código</th><th>Nombre</th><th>Apellido</th><th>Nacionalidad</th><th></th></tr></thead>
                <tbody>
                    <?php foreach ($datos as $autor) { ?>
                    <tr>
                        <td><?= $autor['codigo_autor'] ?></td>
                        <td><?= $autor['nombre'] ?></td>
                        <td><?= $autor['apellido'] ?></td>
                        <td><?= $autor['nacionalidad'] ?></td>
                        <td>
                            <a href="<?= base_url('buscarAutor/') . $autor['codigo_autor']; ?>" class="btn btn-primary">Actualizar</a>
                            <a href="<?= base_url('eliminarAutor/') . $autor['codigo_autor']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
