<?php
    require_once '../includes/session.php';

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = strstr($url, 'id=');
    $id = substr($url, 3);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
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
                        <a href="editar.html"> <ul class="menu-div-item">Editar</ul> </a>
                        <a href="../rotinas/logout.php"> <ul class="menu-div-item">Sair</ul> </a>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="container">
            <div class="container-update">
                <h2>Editar</h2>
                
                <form method="POST" action="../rotinas/update_monstro.php?id=<?php echo $id;?>">
                    <label for="name">Nome</label>
                    <input type="text" name="nome" size="50">
                    <br>
                    <label for="">Descrição</label>
                    <input type="text" name="descricao" size="50">
                    <br>
                    <input type="submit" value="Atualizar" name="atualizar">
                </form>
    

        </section>
    </main>

    <footer>

    </footer>
    
</body>
</html>