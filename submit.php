<?php

if(isset($_POST['submit']))
        {

            include('config.php');

            $items = $_POST['items'];
            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $morada = $_POST['morada'];
            $contacto = $_POST['contacto'];


            
        
            $result = $conexao->query("SELECT * FROM mpi_natal.encomendas WHERE items = '$items' and nome = '$nome' and valor = '$valor' and morada = '$morada' and contacto = '$contacto'");

            $resultfinal = mysqli_query($conexao, "INSERT INTO mpi_natal.encomendas(items,nome,valor,morada,contacto) VALUES ('$items','$nome','$valor','$morada','$contacto')");

            header("location:principal.php");
            exit;
        }

        else
        {
            echo "Nao enviado";
        }

            

?>