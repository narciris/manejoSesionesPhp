# manejoSesionesPhp

# Proyecto: Sistema de Autenticación en PHP

Este proyecto es un sistema básico de autenticación en PHP que permite a los usuarios iniciar sesión mediante un formulario HTML y validar sus credenciales a partir de un array simulado de usuarios.

## 📌 Tecnologías Utilizadas
- PHP
- Bootstrap 5
- HTML
- Sesiones en PHP

## 📂 Estructura del Proyecto
```
📁 proyecto-login
│── 📄 index.php (Formulario de inicio de sesión)
│── 📄 process-login.php (Lógica de autenticación)
│── 📄 data.php (Simulación de base de datos con usuarios y posts)
│── 📄 home.php (Página de inicio tras iniciar sesión)
```

---

## 📝 Descripción Detallada de Cada Archivo

### 1️⃣ **index.php** (Formulario de inicio de sesión)
Este archivo contiene el formulario de autenticación donde los usuarios ingresan su correo electrónico y contraseña.

#### **Explicación del Código**

```php
<?php
session_start(); // Inicia la sesión para manejar mensajes de error
?>
```
- `session_start();` permite el uso de sesiones para almacenar información entre páginas, como errores de autenticación.

```html
<form action="process-login.php" method="post">
```
- El formulario envía los datos mediante `POST` a `process-login.php`, que se encargará de procesarlos.

```php
<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red;"> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> </p>
<?php endif; ?>
```
- Si existe un error de autenticación (guardado en `$_SESSION['error']`), se muestra en pantalla y luego se elimina de la sesión.

```html
<input type="email" name="email" placeholder="Escribe tu correo" class="form-control">
<input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña">
<button type="submit" class="btn btn-success">Iniciar sesión</button>
```
- Los campos `email` y `password` son ingresados por el usuario y enviados al servidor.
- El botón envía el formulario.

---

### 2️⃣ **process-login.php** (Validación de credenciales)
Este archivo recibe los datos del formulario y verifica si el usuario existe en la "base de datos" (simulada con un array).

#### **Explicación del Código**

```php
session_start();
require 'data.php';
```
- Se inicia la sesión para poder almacenar errores y acceder a los datos de usuario.
- `require 'data.php';` importa el archivo con la lista de usuarios.

```php
$email = $_POST['email'];
$password = $_POST['password'];
```
- Se obtienen los valores enviados desde el formulario.

```php
foreach ($users as $data_user) {
    if ($data_user['email'] == $email && $data_user['password'] == $password) {
        $_SESSION['user'] = $data_user; // Se almacena el usuario en la sesión
        header('Location: home.php'); // Redirige a la página de inicio
        exit;
    }
}
```
- Se recorre el array de usuarios y se compara el email y la contraseña ingresados.
- Si coinciden, se guarda el usuario en `$_SESSION['user']`.
- Luego, se redirige a `home.php`.

```php
$_SESSION['error'] = 'Credenciales incorrectas';
header('Location: index.php');
exit;
```
- Si no se encuentra un usuario con las credenciales ingresadas, se almacena un mensaje de error y se redirige nuevamente al formulario.

---

### 3️⃣ **data.php** (Simulación de Base de Datos)
Este archivo contiene dos arrays que simulan una base de datos de usuarios y publicaciones.

```php
$users = [
    ['id' => 1, 'name' => 'Ana Martínez', 'email' => 'ana@example.com', 'password' => 'password123'],
    ['id' => 2, 'name' => 'Carlos Gómez', 'email' => 'carlos@example.com', 'password' => 'qwerty456'],
    ['id' => 3, 'name' => 'Laura Rodríguez', 'email' => 'laura@example.com', 'password' => 'abc12345'],
];
```
- Un array con datos de usuarios que incluye `id`, `name`, `email` y `password`.

```php
$posts = [
    ['id' => 1, 'title' => 'Bienvenidos al blog', 'description' => 'Primer post.', 'author_id' => 1, 'status' => 'published'],
    ['id' => 2, 'title' => 'Tips para PHP', 'description' => 'Consejos para mejorar.', 'author_id' => 2, 'status' => 'published'],
    ['id' => 3, 'title' => 'Laravel', 'description' => 'Mi experiencia.', 'author_id' => 3, 'status' => 'draft'],
];
```
- Un array de publicaciones asociadas a los usuarios.

---

### 4️⃣ **home.php** (Página de Inicio tras Autenticación)
Este archivo muestra un mensaje de bienvenida al usuario autenticado.

#### **Explicación del Código**

```php
session_start();
$sesionUser = $_SESSION['user'];
if(!$sesionUser){
   header('Location: index.php');
}

```
- Si el usuario no está autenticado, se redirige a la página de inicio de sesión.

```php
    echo $sesionUser['name'];
```
- Se muestra el nombre del usuario autenticado.

---
### 4️⃣ **logout.php** (destruye la sesion)
este archivo maneja el cierre de sesion, cuando un usuario da click en el boton de cerrar sesion
1️⃣ Iniciar la sesión con session_start()
Esto es necesario para acceder a las variables de sesión existentes y poder eliminarlas.
2️⃣ Eliminar todas las variables de sesión con session_unset()
Esto vacía el array $_SESSION, eliminando cualquier información almacenada en la sesión.
3️⃣ Destruir la sesión con session_destroy()
 Esto elimina completamente la sesión del servidor, asegurando que no queden rastros de los datos del usuario.
 4️⃣ Redirigir al usuario a index.php
Después de cerrar la sesión, se usa header('Location: index.php'); para enviarlo de vuelta a la página de inicio de sesión.

será manejado por este archivo que se encarga de destruir la sesion y redigir a la pagina de index.php
donde se encuentra el formulario de inicio de sesion 🚀


## ✅ **Mejoras Futuras**
1. **Usar una base de datos MySQL en lugar de un array.**
2. **Cifrar contraseñas con `password_hash()` en lugar de almacenarlas en texto plano.**
4. **Permitir registro de nuevos usuarios.**

---

## 📌 **Conclusión**
Este proyecto muestra un sistema de autenticación básico en PHP sin base de datos real. Se ha explicado cada parte del código para facilitar su comprensión y futuras mejoras. 🚀

