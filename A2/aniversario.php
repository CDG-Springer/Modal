<?php

    $colaboradores = array(
        "José das Dores|josedasdores@modal.com|06/11",
        "Maria da Silva|mariadasilva@modal.com|15/08",
        "Carlos Ferreira|carlosferreira@modal.com|03/12",
        "Ana Rodrigues|anarodrigues@modal.com|19/04",
        "Pedro Santos|pedrosantos@modal.com|10/11"
    );

    foreach($colaboradores as $colaborador) {

        $dadosColaborador = explode("|", $colaborador);

        $dataHoje = date('d/m');

        if($dataHoje == $dadosColaborador[2]){

            $para = $dadosColaborador[1];
            $assunto = "Feliz Aniversário";
            $mensagem = "Hoje é o seu dia, " . $dadosColaborador[0] . "! estamos felizes por você, comemore seu dia!!";

            mail($para, $assunto, $mensagem);

            echo "email enviado para " . $dadosColaborador[0];

        }
    };

?>