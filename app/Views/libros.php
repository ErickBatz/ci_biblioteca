<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1>Libros</h1>
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
                            <h1 class="modal-title fs-5" id="EmpleadosModalLabel">Agregar Libro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="<?= base_url('insertarLibro'); ?>" class="form" method="post">
                                <label for="txt_codigo" class="form-label">Código Libro</label>
                                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control">

                                <label for="txt_autor" class="form-label">Codigo_Autor</label>
                                <input type="number" name="txt_autor" id="txt_autor" class="form-control">

                                <label for="txt_editorial" class="form-label">Editorial</label>
                                <input type="number" name="txt_editorial" id="txt_editorial" class="form-control">

                                <label for="txt_titulo" class="form-label">titulo</label>
                                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control">

                                <label for="txt_paginas" class="form-label">Numero Paginas</label>
                                <input type="number" name="txt_paginas" id="txt_paginas" class="form-control">

                                <label for="txt_tamanio" class="form-label">Tamaño</label>
                                <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control">

                                <label for="num_precio" class="form-label">Precio</label>
                                <input type="number" name="num_precio" id="num_precio" class="form-control">

                                <label for="txt_estado" class="form-label">Estado</label>
                                <input type="text" name="txt_estado" id="txt_estado" class="form-control">

                                <label for="txt_edicion" class="form-label">Edicion</label>
                                <input type="text" name="txt_edicion" id="txt_edicion" class="form-control">

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
                        <th>Código Libro</th>
                        <th> Autor</th>
                        <th>Editorial</th>
                        <th>Titulo</th>
                        <th>Numero Paginas</th>
                        <th>Tamaño</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Edicion</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $libro) {
                    ?>
                        <tr>
                            <td><?= $libro['codigo_libro'] ?></td>
                            <td><?= $libro['codigo_autor'] ?></td>
                            <td><?= $libro['codigo_editorial'] ?></td>
                            <td><?= $libro['titulo'] ?></td>
                            <td><?= $libro['numero_paginas'] ?></td>
                            <td><?= $libro['tamanio'] ?></td>
                            <td><?= $libro['precio'] ?></td>
                            <td><?= $libro['estado'] ?></td>
                            <td><?= $libro['edicion'] ?></td>

                            <td>
                                <a href="<?= base_url('buscarLibro/') . $libro['codigo_libro']; ?>" class="btn btn-primary">Actualizar</a>
                                <!--eliminar tiene la ruta eliminar/codigo-->
                                <a href="<?= base_url('eliminarLibro/') . $libro['codigo_libro']; ?>" class="btn btn-danger">eliminar</a>
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