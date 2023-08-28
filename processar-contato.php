<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$to = 'seu-email@example.com';
$subject = 'Nova mensagem de contato';
$message = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

mail($to, $subject, $message);

header('Location: contato.html');
?>
