<?php 

$senha1 = $_POST['senha'];
$confirmar_senha = $_POST['confirmar-senha'];

if ($senha1 !== $confirmar_senha) {
    header('Location: index.php?erroSenha');
    exit();
}

?>