<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'aluno';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// if($conexao->connect_errno)
// {

// echo "Erro";

// }else{

//     echo "conexao efetuada com sucesso";

// }


?>