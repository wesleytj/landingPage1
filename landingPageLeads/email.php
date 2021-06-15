<?php

/*Variáveis que vão receber os dados informados
pelo usuário*/
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['tel']);

$to = "wesleyjacques@hotmail.com";
$subject = "Contato Lead";
$body = "Nome: ".$nome. "\n".
        "E-mail: ".$email. "\n".
        "Telefone: ".$telefone;

/*O e-mail do FROM deve ser um e-mail do domínio onde o script ta rodando*/
$header = "From:contato@dominiohospedado.com.br"."\r\n"
        ."Reply-To:".$email."\r\n"
        ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O E-mail não pode ser enviado");
}
?>