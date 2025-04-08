<?php
    $banco = new PDO('sqlite:banco_dados.db');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuario WHERE email=:email";
    $stmt = $banco->prepare($sql);
    if($stmt){
        $stmt->execute([':email'=>$email]);
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($usuario && password_verify($senha,$usuario[0]['senha'])){
            $_SESSION['user_id'] = $usuario[0]['id_usuario'];
            $_SESSION['user_email'] = $usuario[0]['email'];
            echo'Login realizado com sucesso!';
        } else{
            echo 'Login ou senha incorretos!';
        }
    }
?>