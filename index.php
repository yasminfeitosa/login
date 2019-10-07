<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Página Inicial </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style>

            body{
                font-family: 'Lato', sans-serif;
                font-size: 16px;
            }
            #alinhar-menu{
                padding-left: 50%;
                text-align: right;
            }
            .alinhamento{
                text-align: center;;
            }
        </style>
    </head>
    <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
              <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="index.php">Site X</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Página Inicial</a></li>
                      <li><a href="#">Produtos</a></li>
                      <li><a href="#">Dúvidas</a></li>
                      <li><a href="#">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav" id = "alinhar-menu">
                      <?php
                          try{

                              require_once "conexao.php";

                              session_start();
                              if (!isset($_SESSION["email"])){
                                ?><li><a href="#" data-toggle="modal" data-target="#myModal" style="color: #FF0000;"> Login </a></li><?php
                              } else {
                                $nome = $_SESSION['nome'];
                                ?><li style="color: #FFFFFF;"> Bem-vindo(a), <?php echo $nome; ?> !</li> <br>
                                <a href="logout.php?token='.md5(session_id()).'" style="color: #FF0000;">Sair</a>';<?php
                              }
                          ?>
                    </ul>
                </div>
              </nav>
            </div>
        </div>

        <div class="modal fade alinhamento" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                <form name="login" method="POST" action="index.php">

                      <label> E-mail:</label>
                      <input class="form-control" name="email"  placeholder="nome@email.com">


                      <label> Senha:</label>
                      <input class="form-control" name="senha" type="password">
                      <br>
                  <input name="Entrar" type="submit" class="btn btn-primary" value="Entrar">
                </form>
              </div>
              <div class="modal-footer">
                <a href="cadastro.php"> Não tem cadastro? Inscreva-se! </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
      </div>
    </body>
</html>

<?php

    if (isset($_REQUEST['Entrar'])) {

      $email = $_REQUEST['email'];
      $senha = $_REQUEST['senha'];


      $sql = $con->prepare("SELECT email, nome, senha from usuarios WHERE email=:email");
      $sql->bindValue(":email",$email);
      $sql->execute();

      $row = $sql->fetch(PDO::FETCH_ASSOC);

      $nome = $row['nome'];
      $senhabd = $row['senha'];

      if($senhabd == $senha){
          $_SESSION['email'] = $email;
          $_SESSION['nome'] = $nome;
          $_SESSION['senha'] = $senha;
          $_SESSION['logado'] = true;
          session_start();
          header('location:index.php');
      } else {
        unset ($_SESSION['email']);
        unset ($_SESSION['nome']);
        unset ($_SESSION['senha']);
        $_SESSION['logado'] = false;
        echo "Senha incorreta!";
        header('location:index.php');
      }

    }

  } catch (PDOException $erro) {

    echo $erro->getMessage();

  }

  $con = null;
?>
