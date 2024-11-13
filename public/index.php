<?php
require_once 'Router.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Filmoteca hello world</h1>
    </header>
    <main> 
        <p>Your content goes here.</p>
        <?php 
        $essaiUrl = new Router();
        $message = $essaiUrl->route();
        var_dump($message) ;
        ?>
    </main>


    <footer>
        <p>&copy; 2023 Filmoteca. All rights reserved.</p>
    </footer>
</body>
</html>