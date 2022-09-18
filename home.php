<?php
    require_once 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-vindas</title>
    <link rel="stylesheet" href="css/styles.css">
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
                        <a href="home.html"> <ul class="menu-div-item">Home</ul> </a>
                        <a href="catalogo.html"> <ul class="menu-div-item">Catálogo</ul> </a>
                        <a href="registro.php"> <ul class="menu-div-item">Registrar</ul> </a>
                        <a href="editar.html"> <ul class="menu-div-item">Editar</ul> </a>
                        <a href="rotinas/logout.php"> <ul class="menu-div-item">Sair</ul> </a>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="container">
            <div class="container-content">
                <h2>Receba as devidas boas-vindas à nossa Biblioteca de Monstros!</h2>
                <p>
                    Agora que possui acesso ao nosso sistema interno, além de estar convidado a explorar nosso catálogo, 
                    também os convidamos a nos auxiliar ampliando nossa bibliote. Você pode fazer isto registrando as 
                    mais diversas criaturas que nos são desconhecidas em nosso catálogo.
                </p>
                <h3>
                    Segundo o dicionário Michalies, são tratados por monstros aqueles que se classificam como: 
                </h3>
                <p>
                    (a) Ser fantástico, sobrenatural, geralmente grande e ameaçador, que pertence à mitologia ou ao 
                    imaginário das histórias e lendas infantis;
                </p>
                <p>
                    (b) Qualquer ser ou coisa contrário às leis da natureza; monstruosidade.
                </p>
        </section>
    </main>

    <footer>

    </footer>
    
</body>
</html>