<?php

// $nome = $_GET['nome'];
// $email = $_GET['email'];

// echo "Nome:".$nome. '<br>';
// echo "<p> email:".$email . '</p>';

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

echo "Nome:".$nome. '<br>';
echo "<p> email:".$email . '</p>';
echo "<p> Mensagem:".$mensagem . '</p>';

?>