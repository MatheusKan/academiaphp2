<?php


$nome = $_POST['nome'];
$para = $_POST['email'];
$assunto = $_POST['assunto'];
$corpo = $_POST['mensagem'];
$headers = "From:enzoempreendedorismos69@gmail.com"; //Cabeçalho para envio do email

if (mail ($para,$assunto,$corpo,$headers))
{
	echo "Email enviado para $para com sucesso!";
}
else
{
	echo "Falha no envio do email, a partir da conta $headers.";
}
?>