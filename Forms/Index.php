<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Style.css">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="Forms-content">
            <fieldset> 
                     <legend>Formulário</legend>          
                <div class="Cadastro">
                <div id="Nome">
                        <label for="">Digite Seu Nome:</label>
                        <input type="text" id="nome_input" required name="nome_input" >
                    </div>
                    <div id="Email">
                        <label for="">Digite Seu Email:</label>
                        <input type="email" id="email_input" required name="email_input" >
                    </div>
                    <div id="CPF">
                        <label for="">CPF:</label>
                        <input type="text" id="cpf_input" required name="cpf_input">
                    </div>
                    <div id="Telefone">
                        <label for="">Digite Se Telefone de Contato:</label>
                        <input type="text" id="telefone_input" required name="telefone_input">
                    </div>
                    <div id="Nascimento">
                        <label for="">Digite sua data de Nascimento:</label>
                        <input type="date" id="nascimento_input" required name="nascimento_input">
                    </div>
                    <div id="Estudante">
                        <label for="">Voce é Estudante:</label>
                        <input type="checkbox" id="eh_estudante" name="eh_estudante">
                    </div>

                </div>
            </fieldset>
            <fieldset>

                <div class="Documento">       
                    <div>
                    <label for="">Carregue Sua Documentação: </label>
                    <input type="file" id="Documentos" required name="Documentos">
                    </div>        
                    <input type="Submit"></input>
                </div>
            </fieldset>
        </div>
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST"){


            $nome = $_POST["nome_input"];
            $cpf = $_POST["cpf_input"];
            $telefone = $_POST["telefone_input"];
            $nascimento = $_POST["nascimento_input"];
            $email = $_POST["email_input"];
            $documentos = $_POST["Documentos"];
            $eh_estudante = isset($_POST["eh_estudante"])? "Sim":"Não";
            $idade = date_diff(date_create($nascimento), date_create('today'))->y;
            echo "Eu $nome,$eh_estudante sou estudante. Meu numero de CPF é $cpf, nasci em $nascimento e tenho $idade anos de idade. Meu telefone para contato é $telefone e o meu email é $email é meus estão no anexo $documentos";

    
        // 
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_POST)) {
        echo "Erro!! Formulario não enviado.";
    }
    else{
        //nada a fazer 
    }
    
    
    
    ?>
</body>
</html>
