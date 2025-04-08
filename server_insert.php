<?php
    $banco = new PDO('sqlite:banco_dados.db');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha =password_hash($_POST['senha'],PASSWORD_DEFAULT);
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO usuario (nm_usuario, email, senha, cpf) VALUES (:name, :email, :senha, :cpf)";
    $stmt=$banco->prepare($sql);
    $stmt->execute([
        ':name'=>$name,
        ':email'=>$email,
        ':senha'=>$senha,
        ':cpf'=>$cpf
    ]);
        echo 'Dados inseridos!';
?>