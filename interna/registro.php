<?php
    require_once '../includes/config.php';
    require_once '../includes/session.php';
    require '../includes/monstro.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
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
                        <a href="home.php"> <ul class="menu-div-item">Home</ul> </a>
                        <a href="catalogo.php"> <ul class="menu-div-item">Catálogo</ul> </a>
                        <a href="registro.php"> <ul class="menu-div-item">Registrar</ul> </a>
                        <a href="editar.php"> <ul class="menu-div-item">Editar</ul> </a>
                        <a href="../rotinas/logout.php"> <ul class="menu-div-item">Sair</ul> </a>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="container">
          <div class="container-register">
            <h2>Registrar</h2>
            <form method="POST" action="../rotinas/cadastrar_monstro.php" enctype="multipart/form-data">
               <label for="name">Nome</label>
               <input type="text" id="nome" name="nome" size="50">
               <br>
               <label for="">Descrição</label>
               <input type="text" name="descricao" id="descricao" size="50">
               <br>
               
               <label for="paises">Origem</label>
                    <select name="pais" id="pais">
                    <option value="">Selecione</option>;
                        
                    <?php
                         echo html_select_paises(); 
                    ?>
                   
                    </select>
                    <br>
                <label for="tipos">Tipo</label>
                    <select name="tipo" id="tipo">
                    <option value="">Selecione</option>;

                    <?php 
                        echo html_select_tipo(); 
                    ?>

                    </select>                 
                <br>
               <label for="imagem">Imagem</label>
               <input type="file" name="imagem[]" multiple="multiple">
               
               <input type="submit" value="Registrar" name="registrar">
            </form>
            
          </div>
        </section>
    </main>

    <footer>

    </footer>
    
</body>
</html>