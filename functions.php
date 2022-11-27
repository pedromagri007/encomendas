<?php

require_once('config.php');

function display_data(){

    global $conexao;
    
    $query = "SELECT * FROM mpi_natal.encomendas";
    $result = mysqli_query($conexao, $query);

    return $result;

}

?>