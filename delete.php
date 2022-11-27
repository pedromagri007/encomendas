<?php


require_once('config.php');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM mpi_natal.encomendas WHERE id='$id'";
    $query_run = mysqli_query($conexao, $query);

    if($query_run)
    {
        echo '<script> alert("Data deleted");</script>';
        header("location:principal.php");
    }
    else
    {
        echo '<script> alert("Data not deleted");</script>';
    }
}


?>