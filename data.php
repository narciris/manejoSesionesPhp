<?php 
session_start(); #habilita uso de sesiones

$users = [
    ['id' => 1, 'name' => 'Ana Martínez', 'email' => 'ana@example.com', 'password' => 'password123'],
    ['id' => 2, 'name' => 'Carlos Gómez', 'email' => 'carlos@example.com', 'password' => 'qwerty456'],
    ['id' => 3, 'name' => 'Laura Rodríguez', 'email' => 'laura@example.com', 'password' => 'abc12345'],
];

$posts = [
    ['id' => 1, 'title' => 'Bienvenidos al blog', 'description' => 'Primer post.', 'author_id' => 1, 'status' => 'published'],
    ['id' => 2, 'title' => 'Tips para PHP', 'description' => 'Consejos para mejorar.', 'author_id' => 2, 'status' => 'published'],
    ['id' => 3, 'title' => 'Laravel', 'description' => 'Mi experiencia.', 'author_id' => 3, 'status' => 'draft'],
];
?>