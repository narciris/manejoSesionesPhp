<?php
session_start();
require 'data.php';

$sesionUser = $_SESSION['user'];

if(!$sesionUser){
   header('Location: index.php');
}


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">

    <title>home y post</title>
</head>
<body class="bg-info">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>

        
    <h2 class="text-center"> Hola <?php echo $sesionUser['name']; ?> </h2>
    <a class="bg-dark btn text-light" href="logout.php">Cerrar Sesión</a>

    
       

    <h3 class="text-center">Esta son tus publicaciones disponibles</h3>
    <div class="container">
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <?php if ($post['status'] == 'published'): ?>
                <div class="col-md-4 mb-4"> 
                    <div class="card" style="width: 100%;">
                        <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            <p class="card-text"><?php echo $post['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</html>