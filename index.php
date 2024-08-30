<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Deepwoken </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div id="titulo">
        <div class="letras">D</div>
        <div class="letras">E</div>
        <div class="letras">E</div>
        <div class="letras">P</div>
        <div class="letras" style="font-size: 35px; margin-right: 12px; margin-top: -5px;">W</div>
        <div class="letras">O</div>
        <div class="letras">K</div>
        <div class="letras">E</div>
        <div class="letras">N</div>
    </div>


    <div id="area">
        <h1> Criar conta </h1>
        <form id="formulario" autocomplete="off" action="cadastro.php" method="post">

            <input type="text" class='input' placeholder="Nome" id='nome' name="nome" required>
            <br>
            <input type="text" class='input' placeholder="Idade" id='idade' name="idade" required>
            <br>
            <input type="email" class='input' placeholder="Email" id="Email" name="email" required>
            <br>
            <input type="password" class='input' placeholder="Senha" id="senha" name="senha" required>
            <br>
            <input type='password' class='input' placeholder='confirmar-senha' id='confirmar-senha' name='confirmar-senha' required>
            <br>
            <button class='button'> Entrar </button>

         </form> 

    </div>
    
    
    <div id="area2">
        <h1> Entrar </h1>
        <form id="formulario2" autocomplete="off" action="entrar.php" method="post">

            <input type="email" class='input' placeholder="Email" id="email-entrar" name="email-entrar" required>
            <br>
            <input type="password" class='input' placeholder="Senha" id="senha-entrar" name="senha-entrar" required>
            <br>
            <input class='button' type="submit" value="Entrar" id="entrar" name="entrar"><br>

         </form> 

    </div>

</body>

</html>