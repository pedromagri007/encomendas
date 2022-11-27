
<?php
/*
require_once('config.php');

*/
/*
$result = mysqli_query($conexao, $query);

*/

require_once 'config.php';
require_once 'functions.php';

$result = display_data();


?>


<!DOCTYPE html>
<html lang="pt-pt">
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
            <a href="index.php">Criar Encomenda</a>
        </nav>
    </header>
    <main>
        <h1 style="text-align: center; font-size: 40px;">Encomendas Natal 2022 - MPI</h1>
        <table class="table"> 
            <tr style="background-color: darkred; color: white; font-weight: bold;">
                <td>Id</td>
                <td>Items</td>
                <td>Nome Completo</td>
                <td>Valor</td>
                <td>Morada</td>
                <td>Contacto</td>
                <td>Remover</td>
            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    <td><?php
                    echo $row['id']; ?></td> 
                    <td><?php
                    echo $row['Items']; ?></td>
                    <td><?php
                    echo $row['Nome']; ?></td>
                    <td><?php
                    echo $row['Valor']; ?></td>
                    <td><?php
                    echo $row['Morada']; ?></td>
                    <td><?php
                    echo $row['Contacto']; ?></td>
                    <td>
                        <form action="delete.php" method="post" class="btn-remove">
                            <input  type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="delete"  value="DELETE">
                        </form>
                    </td>
                </tr>
                <?php
                }

                ?>
            
        </table>
    </main>
</body>
</html>