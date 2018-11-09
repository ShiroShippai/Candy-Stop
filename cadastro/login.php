<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $erros = array();
    
        
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];

        session_start();
        $usuario = $_SESSION['usuario'];
        $senha2 = $_SESSION['senha'];
        $email = $_SESSION['email'];
        
        if ($usuario == $usuario && $senha == $senha2){            
            echo "Login realizado com sucesso!";
            header('Location: index.php');
        }
        else{
            echo "Login realizado com sucesso!";
            header("Location: login1.html");
        }
    }
    
  
?>    