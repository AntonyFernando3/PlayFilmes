<?php
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
    } else {
        $nome = "";
    }

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $email = "";
    }

    if (isset($_POST["idade"])) {
        $idade = $_POST["idade"];
    } else {
        $idade = 0;
    }
    
    if (isset($_POST["filme"])) {
        $filme = $_POST["filme"];
    } else {
        $filme = "";
    }

    // O switch abaixo mostra o valor do filme conforme o filme selecionado na página .php
    switch($filme) {
        case "A Viagem de Chihiro":
            $valor = 25.50;
            break;
        case "Serviços de Entrega da Kiki":
            $valor = 23.99;
            break;
        case "Vidas ao Vento":
            $valor = 28.00;
            break;
        case "Your Name":
            $valor = 22.50;
            break;
        case "Doutor Estranho":
            $valor = 19.35;
            break;
        case "Harry Potter":
            $valor = 24.99;
            break;
        case "Panico 6":
            $valor = 21.55;
            break;
        case "Perfect Blue":
            $valor = 27.99;
            break;
    }

    $valor += 2.00;


    if (isset($_POST["opcoes"])) {
        $opcoes = $_POST["opcoes"];
    } else {
        $opcoes = "";
    }

    if (isset($_POST["pagamento"])) {
        $pagamento = $_POST["pagamento"];
    } else {
        $pagamento = "";
    }

    if (file_exists('dados-locacao.txt')) {
        $arquivo = fopen("dados-locacao.txt","a");
        fwrite($arquivo,"\n$nome;$email;$idade;$filme;$valor;$opcoes;$pagamento");
        fclose($arquivo);
    } else {
        $arquivo = fopen("dados-locacao.txt","w");
        $texto = "Jundiaí, 10 de abril de 2023.\n";
        fwrite($arquivo, $texto);
        fclose($arquivo);
        $arquivo = fopen("dados-locacao.txt","a");
        fwrite($arquivo,"\n$nome;$email;$idade;$filme;$valor;$opcoes;$pagamento");
        fclose($arquivo);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Filmes</title>
    <link rel="shortcut icon" href="images/logo.png" type="imagem/x-icon">
    <link rel="stylesheet" href="style/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
    <h1>Dados da Locação</h1>
    <p><?php echo "10 de Abril de 2023 <br><br>" ?></p>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Senha: <?php echo $email; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>Filme: <?php echo $filme; ?></p>
    <p>Valor a pagar: R$ <?php echo $valor; ?></p>
    <p>Opções: <?php echo $opcoes; ?></p>
    <p>Forma de pagamento: <?php echo $pagamento; ?><p>
        <br/><b><?php echo $_POST["escondido"]; ?></b></p>

        
             <a href="index.php">
            <button class="btn" type="submit" name="enviar" value="ENVIAR" style=" background-color: #B22222; color: white;">MENU INICIAL</button>
                 </a>
                
</body>
</html>