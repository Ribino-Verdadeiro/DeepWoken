<?php

$servername='localhost'; // é o nosso servidor
$username='root'; // usuario padrao do servidor local
$password=''; //senha padrao do servidor local
$db_name='usuarios'; //nome do bando de dados

$conn = new mysqli($servername,$username,$password,$db_name); // faz a conexão com o banco de dados, seguindos as informaçoes especificadas.

if($conn->connect_error) { // verifica a conexão com o banco de dados, em caso de erro
    die("Falha na conexão" . $conn->connect_error); // die encerra o script
}

// capturando dados do formulario
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

//essa variavel faz uma consulta no banco de dados, e coloca os dados do formulario na tabela do banco de dados
$sql = "INSERT INTO usuarios (nome, idade, email, senha) VALUES('$nome','$idade','$email','$senha')";

// Condição que diz se o usuario conseguiu se cadastrar ou se deu algum erro, e caso de erro apresenta o erro;

if($conn->query($sql) === TRUE){
    echo 'Usuario cadastrado com sucesso!';
}else{
    echo 'Erro: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>