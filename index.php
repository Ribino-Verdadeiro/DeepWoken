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

        <form id="formulario" autocomplete="off" action="cadastro.php" method="post">

            <input type="text" class='input' placeholder="Nome" id='nome' name="nome" required>
            <br>
            <input type="text" class='input' placeholder="Idade" id='idade' name="idade" required>
            <br>
            <input type="email" class='input' placeholder="Email" id="Email" name="email" required>
            <br>
            <input type="password" class='input' placeholder="Senha" id="senha" name="senha" required>
            <br>
            <button class='button'> Enviar</button>

         </form> 

    </div>
    
</body>

</html>