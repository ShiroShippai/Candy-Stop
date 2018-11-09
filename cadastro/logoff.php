<html>

<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Logoff</title>
</head>

<body>
    <?php
    session_abort();
    ?>
    
    <h1>Logoff Efetuado com sucesso</h1>
    
    <form method="POST" action="login.php">
        <fieldset>
        <h3><a href="login.html">Login</a></h3>
        <h3><a href="cadastro.html">Cadastre-se</a></h3>
        </fieldset>
    </form>
</body>

</html>
