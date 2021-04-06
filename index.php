<?php  include('./header.php');   ?>

<?php require_once("./banco.php");  ?>

<section class="header">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="text-box">
                        <h1>Eu sou Guilherme Alamino, Espero o seu Cadastro!</h1>
                        <p>Ajude me a Desenvolver com sua Contribuição de Register!</p>
                        <a href="./visualizar.php" class="btn btn-info link">Visualizar Registros</a>
                    </div>
                </div>

          <div class="col-md-6 text-center">
            <div class="main-form">
                <div class="title-box">
                    <h3>Register User's!</h3>
                    <p>Hoje Mesmo!</p>
                </div>
                
<form id="form">
  
    <label for="nome">Nome</label>
    <input type="text" class="input-box" name="nome" id="nome" required >
  
    <label for="sobrenome">Sobrenome</label>
    <input type="text" class="input-box" name="sobrenome" id="sobrenome" required>
  
    <label for="email">Email</label>
    <input type="email" class="input-box" name="email" id="email" required>
 
    <label for="tipo">Tipo de Carteira</label>
    <select id="tipo" class="input-box" required name="tipo">
    <option value="" selected></option>
    <option value="clt">CLT</option>
    <option value="pj">PJ</option>
    <option value="autonomo">Autônomo</option>
    </select>

    <label for="cpf">CPF</label>
    <input type="text" class="input-box" name="cpf" id="cpf" required>

    <label for="celular">Celular</label>
    <input type="phone" class="input-box" name="celular" id="celular" required>
  
  <input type="submit" class="btn btn-primary" value="Enviar" name="botao" id="botao">

  <div id="msg1" class="alert alert-success" role="alert"><p></p></div>

</form>
</div>
</div>
</div>
</div>
</section>

<?php  include('./footer.php');   ?>