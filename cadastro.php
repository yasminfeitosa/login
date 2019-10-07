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
          table {
            margin-top: 20px;
              border-collapse: separate;
              border-spacing: 0 10px;
          }
        </style>
    </head>

    <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4 conteudo">
            <h3 align="center"> Cadastre-se! </h3>
            <form name="cursos" method="POST" action="cadastro.php">
              <table style="text-align: right;">
                <tr>
                  <td><label class="alinhamento"> Nome:</label> </td>
                  <td><input class="form-control" name="nome" size="30px"> </td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> E-mail:  </label></td>
                  <td><input class="form-control" name="email" size="30px" placeholder="nome@email.com"></td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> Senha:  </label></td>
                  <td><input class="form-control" name="senha" size="30px" type="password" placeholder="********"></td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> Data de Nascimento:  </label></td>
                  <td><input class="form-control" name="dataNasc" size="30px" placeholder="dd/mm/aaaa"></td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> NUSP:  </label></td>
                  <td><input class="form-control" name="nusp" size="30px"></td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> CPF:  </label></td>
                  <td><input class="form-control" name="cpf" size="30px" placeholder="00000000000"></td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> Selecione o instituto:  </label></td>
                  <td><select name="instituto" class="form-control">
                        <option value="1">Inscrição</option>
                        <option value="2" selected>Isenção</option>
                        <option value="3">Duração</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td><label class="alinhamento"> Curso: </label></td>
                  <td><select name="curso" class="form-control">
                        <option value="1">Inscrição</option>
                        <option value="2" selected>Isenção</option>
                        <option value="3">Duração</option>
                      </select>
                  </td>
                </tr>
              </table>
              <input name="Cadastrar" type="submit" class="btn btn-primary" style="margin-left:43%; margin-top: 20px; margin-bottom: 10px;" value="Cadastrar">
            </form>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
      </div>
    </body>
