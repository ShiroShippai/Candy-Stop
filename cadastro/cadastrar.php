<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $erros = array();
        
        // Dados Pessoais //
        $nome = $_POST["nome"];
        $nascimento = $_POST["nascimento"];
        $cpf = $_POST["cpf"];

        // Dados de Endereço //
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];

        // Dados de Login //
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $confsenha = $_POST["confsenha"];

        if ($nome || $usuario || $email || $senha || $confsenha == ''){            
            
            // Erros 'Dados de Login' //
            if ($usuario == ''){
            $erros["usuarioErro"] = "O campo usuario é obrigatório. <br/>";
            }
            else if ($email == ''){
                $erros["emailErro"] = "O campo email é obrigatório. <br/>";
            }
            else if ($senha == ''){
                $erros["senhaErro"] = "O campo senha é obrigatório. <br/>";
            }
            else if ($confsenha == ''){
                $erros["confsenhaError"] = "A confirmação da senha é obrigatória. <br/>";
            }

            // Erros 'Dados Pessoais' //
            else if ($nome == ''){
                $erros["nomeErro"] = "O campo nome é obrigatório. <br/>";
            }
            else if ($nascimento == ''){
                $erros["nascimentoErro"] = "O campo nascimento é obrigatório. <br/>";
            }
            else if ($cpf == ''){
                $erros["cpfErro"] = "O campo cpf é obrigatório. <br/>";
            }
            
            // Erros 'Endereço' //
            else if ($endereco == ''){
                $erros["enderecoError"] = "O campo endereço é obrigatório. <br/>";
            }
            else if ($bairro == ''){
                $erros["bairroErro"] = "O campo bairro é obrigatório. <br/>";
            }
            else if ($cidade == ''){
                $erros["cidadeErro"] = "O campo cidade é obrigatório. <br/>";
            }
            else if ($cep == ''){
                $erros["cepError"] = "O campo cep é obrigatório. <br/>";
            }
        }
        header('Location: login.html');
    }


    if(count($erros) > 0) {
        $aviso = "<h2>Foram encontrados os seguintes erros:</h2>";
        $aviso .= implode('<br />', $erros);
        $aviso .= '<br />
        <a href="javascript:history.back();">Retorne e corrija..</a>';        
        exit($aviso);
      }
    else
    {
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['senha']=$senha;
        $_SESSION['nome']=$nome;
        $_SESSION['email']=$email;
    }

?>