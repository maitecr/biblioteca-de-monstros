<?php
    require_once '../includes/config.php';
    require '../includes/monstro.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1 class="header-title">Biblioteca de Monstros</h1>
    </header>

    <main class="content">
        <section class="menu">
            <div class="menu-div">
                <nav class="menu-div-leftside">
                    <ul>
                        <a href="index.html"> <ul class="menu-div-item">Login</ul> </a>
                        <a href="catalogoexterno.php"> <ul class="menu-div-item">Catálogo</ul> </a>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="container">
            
            <?php 
                echo exibir_card_monstro();
            ?>

        </section>
    </main>

    <footer>

    </footer>
    
</body>
</html>