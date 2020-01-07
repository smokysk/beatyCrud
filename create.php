
<?php
    require 'conf.php';

    if (isset($_POST['nome']) && empty($_POST['nome'])==false) {
        $nome = stripslashes($_POST['nome']);
        $email = stripslashes($_POST['email']);
        $senha = md5(stripslashes($_POST['senha']));

        $query = $pdo->prepare("INSERT INTO usuarios(nome,email,senha) VALUES(:nome, :email, :senha)");
        $query->execute([
             'nome' => $nome,
             'email' => $email,
             'senha' => $senha
        ]); 


        header("Location: index.php");
   
    } else { 
        
    }


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="container">
        <form method="POST">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome"  class="form-control" placeholder="Nome" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Nome do usuario</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" name="email" class="form-control" " aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control"  placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-info">Enviar</button>
        </form>
        
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

