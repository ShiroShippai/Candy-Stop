  <?php
        session_start();


        if(isset($_POST['atualizar']))
        {
            // Dados de usuario //
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['nascimento'] = $_POST["nascimento"];
            $_SESSION['cpf'] = $_POST["cpf"];

            // Dados de endereço //
            $_SESSION['estado'] = $_POST["estado"];
            $_SESSION['endereco'] = $_POST["endereco"];
            $_SESSION['complemento'] = $_POST["complemento"];
            $_SESSION['bairro'] = $_POST["bairro"];
            $_SESSION['cidade'] = $_POST["cidade"];
            $_SESSION['cep'] = $_POST["cep"];

            // Dados de login // 
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['usuario'] = $_POST["usuario"];
            $_SESSION['senha'] = $_POST["senha"];
            $_SESSION['confsenha'] = $_POST["confsenha"];
        
        } else {
            // Dados de usuario //
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['nascimento'] = $_POST["nascimento"];
            $_SESSION['cpf'] = $_POST["cpf"];
           
            // Dados de endereço //
            $_SESSION['estado'] = $_POST["estado"];
            $_SESSION['endereco'] = $_POST["endereco"];
            $_SESSION['complemento'] = $_POST["complemento"];
            $_SESSION['bairro'] = $_POST["bairro"];
            $_SESSION['cidade'] = $_POST["cidade"];
            $_SESSION['cep'] = $_POST["cep"];
           
            // Dados de login // 
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['usuario'] = $_POST["usuario"];
            $_SESSION['senha'] = $_POST["senha"];
            $_SESSION['confsenha'] = $_POST["confsenha"];

        }
         
         header('Location: index.php');
     ?>



      