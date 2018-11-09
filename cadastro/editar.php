<!DOCTYPE html>
<html lang="pt-br">  
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title> Editar Usuário </title>
    <meta charset="utf-8">
</head>
    <body>
        <?php
        session_start();
        
        ?>
    
        <h1>Editar Dados</h1>
        
        <form method="POST" action="edicao.php">
        <fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome Completo: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" placeholder="Dia"> 
   <input type="text" name="mes" size="2" maxlength="2" placeholder="Mês"> 
   <input type="text" name="ano" size="4" maxlength="4" placeholder="Ano">
   </td>
  </tr>
  <tr>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">

    <tr>
        <td>
         <label for="estado">Estado:</label>
        </td>
        <td align="left">
         <select name="estado"> 
         <option value="ac">Acre</option> 
         <option value="al">Alagoas</option> 
         <option value="am">Amazonas</option> 
         <option value="ap">Amapá</option> 
         <option value="ba">Bahia</option> 
         <option value="ce">Ceará</option> 
         <option value="df">Distrito Federal</option> 
         <option value="es">Espírito Santo</option> 
         <option value="go">Goiás</option> 
         <option value="ma">Maranhão</option> 
         <option value="mt">Mato Grosso</option> 
         <option value="ms">Mato Grosso do Sul</option> 
         <option value="mg">Minas Gerais</option> 
         <option value="pa">Pará</option> 
         <option value="pb">Paraíba</option> 
         <option value="pr">Paraná</option> 
         <option value="pe">Pernambuco</option> 
         <option value="pi">Piauí</option> 
         <option value="rj">Rio de Janeiro</option> 
         <option value="rn">Rio Grande do Norte</option> 
         <option value="ro">Rondônia</option> 
         <option value="rs">Rio Grande do Sul</option> 
         <option value="rr">Roraima</option> 
         <option value="sc">Santa Catarina</option> 
         <option value="se">Sergipe</option> 
         <option value="sp">São Paulo</option> 
         <option value="to">Tocantins</option> 
        </select>
        </td>
       </tr>
  <tr>
   <td>
    <label for="endereco">Endereço:</label>
   </td>
   <td align="left">
    <input type="text" name="endereco">
   </td>
   <td>
    <label for="complemento">Complemento:</label>
   </td>
   <td align="left">
    <input type="text" name="complemento">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
   </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de Login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br>
        <button type="submit">Atualizar</button>
        </form>
        
    </body>
</html>