# Sistema de gestión de biblioteca

**Demo en vivo:** [Ver el sistema de biblioteca](https://biblioteca-app.gt.tc/public/index.php)

Aplicación web para administrar información de una biblioteca escolar. Permite consultar y mantener el catálogo de libros, registrar préstamos y gestionar los datos de estudiantes, empleados y editoriales.

El proyecto está desarrollado en PHP con CodeIgniter 4 y usa MySQL/MariaDB. La interfaz está en español y cuenta con un panel principal para acceder a los módulos.

## Módulos

- **Libros:** registro, consulta, edición y eliminación de libros.
- **Préstamos:** seguimiento de préstamos asociados a libros, estudiantes y empleados.
- **Estudiantes:** consulta y mantenimiento de los registros de estudiantes.
- **Empleados:** consulta y mantenimiento de los registros del personal.
- **Editoriales:** consulta y edición de información de editoriales.

Las tablas de autores, grados y estados también están definidas en el archivo SQL; actualmente no tienen módulos en el menú principal.

## Tecnologías

- PHP 8.2 o superior
- CodeIgniter 4
- MySQL o MariaDB
- HTML, CSS y Bootstrap
- Composer

## Requisitos

- PHP 8.2+ con las extensiones `intl`, `mbstring` y `mysqli` habilitadas.
- Composer.
- MySQL o MariaDB (por ejemplo, el que incluye XAMPP).
- Apache con `mod_rewrite` habilitado si se ejecuta mediante XAMPP.

## Instalación local con XAMPP

1. Clona o copia este repositorio dentro de la carpeta `htdocs` de XAMPP.
2. Inicia Apache y MySQL desde el panel de XAMPP.
3. Instala las dependencias desde la carpeta del proyecto:

   ```bash
   composer install
   ```

4. Abre phpMyAdmin, importa el archivo `bd_biblioteca.sql` y confirma que se haya creado la base de datos `db_biblioteca`.
5. Revisa la conexión en `app/Config/Database.php`. La configuración local incluida usa `localhost`, el usuario `root`, contraseña vacía y la base `db_biblioteca`. Ajusta estos datos si tu instalación es distinta.
6. Revisa `app/Config/App.php` y configura `baseURL` para que coincida con la dirección local del proyecto. La configuración actual apunta a `http://localhost/fs2026/ci_biblioteca/public/`.
7. Abre la dirección del proyecto en el navegador. Con la ubicación anterior, la página inicial es:

   ```text
   http://localhost/fs2026/ci_biblioteca/public/
   ```

También puedes iniciar el servidor de desarrollo de CodeIgniter desde la raíz del proyecto:

```bash
php spark serve
```

Luego visita `http://localhost:8080`.

## Rutas principales

Las rutas se declaran en `app/Config/Routes.php` y conectan las URL con los controladores:

| URL | Controlador | Uso |
| --- | --- | --- |
| `/` | `Home::index` | Panel principal |
| `/libros` | `LibrosController::index` | Catálogo de libros |
| `/prestamos` | `PrestamosController::index` | Registros de préstamos |
| `/estudiantes` | `EstudiantesController::index` | Registros de estudiantes |
| `/empleados` | `EmpleadosController::index` | Registros de empleados |
| `/editoriales` | `EditorialesController::index` | Registros de editoriales |

Las acciones de creación, actualización y eliminación se resuelven con rutas adicionales definidas en ese mismo archivo.

## Estructura del proyecto

```text
app/
  Config/       Configuración y rutas
  Controllers/  Controladores de los módulos
  Models/       Modelos para acceder a la base de datos
  Views/        Panel, listados y formularios
public/
  css/          Estilos de la aplicación
  index.php     Punto de entrada web de CodeIgniter
bd_biblioteca.sql  Estructura y datos iniciales de la base de datos
```

## Base de datos

El archivo `bd_biblioteca.sql` crea la base `db_biblioteca` y contiene tablas para libros, préstamos, estudiantes, empleados, editoriales, autores, grados y estados. También incluye datos de ejemplo; revísalos y reemplázalos antes de usar o publicar una copia con información propia.

## Notas

- Este proyecto es una aplicación académica/local y no incluye autenticación de usuarios.
- Las funciones disponibles dependen de las rutas implementadas para cada módulo; consulta `app/Config/Routes.php` y los controladores para ver el detalle.
- No publiques contraseñas reales ni datos personales en el repositorio.
