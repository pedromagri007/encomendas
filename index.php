<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomendas Natal 2022</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <img src="img/favicon.png" alt="">
        <nav>
            <a href="principal.php">Página Principal</a>
            <a href="novaencomenda.html">Criar Encomenda</a>
        </nav>
    </header>
    <main>
        <h1 style="text-align: center; font-size: 300%;">Nova Encomenda</h1>
        <form action="submit.php" method="POST" class="formulario">
            <input class="input" name="items" id="inputitems" type="text" placeholder="Items" required> 
            <input class="input" name="nome" type="text" placeholder="Nome completo" required>
            <input class="input" name="valor" type="int" placeholder="Valor" required>
            <input class="input" name="morada" type="text" placeholder="Morada" required>
            <input class="input" name="contacto" type="int" placeholder="Contacto" required>
            <input class="btn-submit" type="submit" name="submit"></input>
        </form>
    </main>
</body>

<?php
    $_SERVER['DOCUMENT_ROOT'];
    error_reporting(0);

    include_once('config.php');
    $items = $_POST['items'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $morada = $_POST['morada'];
    $contacto = $_POST['contacto'];

    $result = mysqli_query($conexao, "INSERT INTO encomendas(items,nome,valor,morada,contacto) VALUES ('$items','$nome','$valor','$morada','$contacto')");

?>
</html>


