<?php 

    $chaveSecreta = "#modalGR#GPTW#top#maiorEmpresaTecnologia#baixadaSantista";


    $senha1 = "BaixadaSantista" . $chaveSecreta;
    $senha2 = "Microfone" . $chaveSecreta;
    $senha3 = "TenisBranco" . $chaveSecreta;

    $senha_criptografada1 = password_hash($senha1, PASSWORD_BCRYPT);
    $senha_criptografada2 = password_hash($senha2, PASSWORD_BCRYPT);
    $senha_criptografada3 = password_hash($senha3, PASSWORD_BCRYPT);

    echo $senha_criptografada1 . "<br>";
    echo $senha_criptografada2 . "<br>";
    echo $senha_criptografada3 . "<br>";

?>