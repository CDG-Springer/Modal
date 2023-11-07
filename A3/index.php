<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST">
        <label for="">Emprestimo</label><br><br>

        <label for="">Nome: </label><br>
        <input name="Nome" type="text" required autocomplete="off"><br>
        <label for="">Tempo que está na empresa: </label><br>
        <input name="tempoEstadia" type="text" required autocomplete="off"><br>
        <label for="">Data de emissão: </label><br>
        <input name="DataEmissao" type="date" required autocomplete="off"><br>
        <label for="">Salário atual: </label><br>
        <input name="SalarioAtual" type="text" required autocomplete="off"><br>
        <label for="">Valor do empréstmo: </label><br>
        <input name="ValorEmprestimo" type="text" required autocomplete="off"><br>
        <input type="submit"><br>


        <?php

        if(isset($_POST['ValorEmprestimo']) && $_POST['ValorEmprestimo'] !== ''){

            $nome = $_POST['Nome'];
            $dataEmissao = $_POST['DataEmissao'];
            $salarioAtual = $_POST['SalarioAtual'];
            $tempoEstadia = $_POST['tempoEstadia'];
            $valorEmprestimo = $_POST['ValorEmprestimo'];

            if($tempoEstadia > 5){

                if($salarioAtual % 2 == 0){
                    echo 'Você é elegível para '. $salarioAtual*2 .' de empréstimo, ', $nome . '!';
                } else {
                    echo "Insira um valor válido!";
                }

            } else {
                echo "Agradecemos seu interesse, mas você não atende os requisitos mínimos do programa.";
            }
            
        }

    ?>



    </form>


    
    
</body>
</html>