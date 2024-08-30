<?php 

$servername='localhost'; // é o nosso servidor
$username='root'; // usuario padrao do servidor local
$password=''; //senha padrao do servidor local
$db_name='usuarios'; //nome do bando de dados

$conn = new mysqli($servername,$username,$password,$db_name); // faz a conexão com o banco de dados, seguindos as informaçoes especificadas.

if($conn->connect_error) { // verifica a conexão com o banco de dados, em caso de erro
    die("Falha na conexão" . $conn->connect_error); // die encerra o script
}

$email = $_POST['email-entrar'];
$senha = $_POST['senha-entrar'];
$entrar = $_POST['entrar'];

if(isset($entrar)){


$verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ") or die("erro ao selecionar");

if(mysqli_num_rows($verifica)<=0){
    header("Location:index.php?Errologin");
    die();
}else{
    header("Location: index.php?Entrou");
}


}


?>