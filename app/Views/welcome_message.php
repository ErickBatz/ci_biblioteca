<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel principal del sistema de biblioteca.">
    <title>Inicio | Biblioteca</title>
    <link rel="stylesheet" href="<?= base_url('css/biblioteca.css') ?>">
</head>
<body>
    <header class="topbar">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="Inicio de Biblioteca">
            <span class="brand-mark" aria-hidden="true">B</span>
            <span>Biblioteca<small>Sistema de biblioteca</small></span>
        </a>
        <a class="top-link" href="<?= site_url('libros') ?>">Explorar catálogo <span aria-hidden="true">→</span></a>
    </header>

    <main>
        <section class="hero" aria-labelledby="welcome-title">
            <p class="eyebrow">Panel principal</p>
            <h1 id="welcome-title">Todo tu espacio de biblioteca, en un solo lugar.</h1>
            <p class="intro">Accede rápidamente a los registros y operaciones del sistema. Elige una sección para comenzar a gestionar la biblioteca.</p>
        </section>

        <section aria-labelledby="sections-title">
            <div class="section-heading">
                <div>
                    <h2 id="sections-title">Módulos de gestión</h2>
                    <p>Selecciona el área que deseas consultar o administrar.</p>
                </div>
            </div>
            <div class="grid">
                <a class="card" href="<?= site_url('libros') ?>">
                    <span class="card-top"><span class="icon" aria-hidden="true">▤</span><span class="arrow" aria-hidden="true">↗</span></span>
                    <h3>Libros</h3><p>Consulta y administra el catálogo de libros.</p>
                </a>
                <a class="card" href="<?= site_url('prestamos') ?>">
                    <span class="card-top"><span class="icon" aria-hidden="true">⇄</span><span class="arrow" aria-hidden="true">↗</span></span>
                    <h3>Préstamos</h3><p>Da seguimiento a los préstamos de la biblioteca.</p>
                </a>
                <a class="card" href="<?= site_url('estudiantes') ?>">
                    <span class="card-top"><span class="icon" aria-hidden="true">♙</span><span class="arrow" aria-hidden="true">↗</span></span>
                    <h3>Estudiantes</h3><p>Gestiona los registros de estudiantes.</p>
                </a>
                <a class="card" href="<?= site_url('empleados') ?>">
                    <span class="card-top"><span class="icon" aria-hidden="true">♧</span><span class="arrow" aria-hidden="true">↗</span></span>
                    <h3>Empleados</h3><p>Consulta y administra el personal registrado.</p>
                </a>
                <a class="card" href="<?= site_url('editoriales') ?>">
                    <span class="card-top"><span class="icon" aria-hidden="true">▣</span><span class="arrow" aria-hidden="true">↗</span></span>
                    <h3>Editoriales</h3><p>Administra las editoriales del catálogo.</p>
                </a>
            </div>
        </section>
    </main>

    <footer>&copy; <?= date('Y') ?> Biblioteca · Sistema de gestión</footer>
</body>
</html>
