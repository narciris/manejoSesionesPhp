<?php 
session_start();
?>

<html> 
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100" >

    <div class="card p-4" style="max-width: 400px; width: 100%;">
   
                <h2 class="text-center">Iniciar sesion</h2>
            <form action="" method="post">
                <div class="mb-3" >
                <label 
                for="email" 
                class="form-label"
                >Correo electronico</label>
                <input type="email" 
                name="email"
                 placeholder="Escribe tu correo"
                 class="form-control"
                 >
                </div>
           
                <div class="mb-3 style="max-width: 400px; width: 100%;">
                <label 
                for="password" 
                name="password"
                 type="password"
                 class="form-label"
                 >Contraseña</label>

                <input 
                type="password"
                 name="password"
                 class="form-control"
                 placeholder="Escribe tu contraseña"
                 >
                </div>
               
            </form>
            <button type="submit" class="btn btn-success">Iniciar sesion</button>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</html>