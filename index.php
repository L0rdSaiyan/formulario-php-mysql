<?php


    if(isset($_POST['enviar']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $nomePai = $_POST['nomePai'];
        $nomeMae = $_POST['nomeMae'];
        $cpf = $_POST['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO informacoes(NOME,IDADE,NOMEPAI,NOMEMAE,CPF) VALUES ('$nome','$idade','$nomePai','$nomeMae','$cpf')");

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

   <style>

    body{

        min-height: 100vh;
        padding: 0;
        margin: 0;
        background-image: linear-gradient(45deg, blue, white);
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .formulario{

        background-color: rgb(22, 116, 231);
        height: 500px;
        width: 500px;
        display: flex;
        border-radius: 15px;
        border: 3px dashed black;
        box-shadow: 3px 12px 12px 3px;
        justify-content: center;
        align-items: center;

    }

    .formulario h1{

        position: absolute;
        display: flex;
        margin-bottom: 400px;

    }

    input{

        margin: 10px;
        

    }

   
    .formulario form #enviar{

        margin-left: 50px;
        border-radius: 3px;
        border: none;
        height: 28px;
        width: 88px;
        

    }

    .formulario form .inputUser{

        text-align: center;
        border: none;
        border-radius: 5px;
        height: 30px;

    }
    #enviar{

        display: flex;
        position: absolute;
        justify-content: center;
        transition: 200ms;
        font-size: 14px;

    }

    #enviar:hover{

        transform: scale(1.1);
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;

    }


   </style>

</head>
<body>


    <div class="formulario">

       <h1>Formulário brabo com PHP</h1>
        
        <form action="index.php" method="POST">

           

            <input type="text" name="nome" id="nome" class="inputUser" placeholder="Insira seu nome..." required>
            <br>
            <input type="number" name="idade" id="idade" class="inputUser" placeholder="Insira sua idade..." required>
            <br>
            <input type="text" name="nomePai"  id="nomePai" class="inputUser" placeholder="Nome do seu Pai" required>
            <br>
            <input type="text" name="nomeMae" id="nomeMae" class="inputUser" placeholder="Nome da sua mãe" required>
            <br>
            <input type="number" name="cpf" id="cpf" class="inputUser" placeholder="Insira seu CPF" required>
            <br>
             <input type="submit" name="enviar" id="enviar" class="inputUser"> 
            
    
    
        </form>





    </div>

   

    
</body>
</html>