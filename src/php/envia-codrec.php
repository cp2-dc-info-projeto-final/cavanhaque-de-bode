<?php
include "envia-email.php";
$nome = "Fulando de tal";
$data = "03/11/2021";
$email = "lololzinha225@gmail.com";
$assunto = "Jacaré no seco anda?";
$mensagem = "Boa noite";
if(envia_email($email,$assunto,$mensagem)){
echo "E-mail enviado com sucesso!";
}
else{
echo "Falha no envio de e-mail!";
}
?>
