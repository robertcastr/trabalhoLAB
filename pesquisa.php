<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php
        if(isset($_POST['busca'])){
            $pesquisa = $_POST['busca'] ?? '';   
        }else{
            $pesquisa = '  ';
        }
        include "conexao.php";
        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
        $dados = mysqli_query($conn,$sql); 

        ?>
        

      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Pesquisar</h1>
                  <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="Pesquisa.php" Method="POST">
                        <input class="form-control mr-sm-2" type="Search" placeholder="Endereco" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-sucess-my-2 my-sn-0" type="submit">Pesquisar</button>
                    </form>
                  </nav>
                  <table class="table table-hover">
                      <thead>
                        <tr>    
                            <th scope="col">Nome</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Funções</th>
                        </tr>
                      </thead>
                    <tbody>

                    <?php 
        

                        while($linha = msqli_fetch_assoc($dados))
                        {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $nome = $linha['Nome'];
                            $endereco = $linha['Endereco'];
                            $numero = $linha['Numero'];
                            $numero = mostra_data($numero);

                            echo "<tr>
                                      <th scope='row'>$Nome</th>
                                      <td>$Endereco</td>
                                      <td>$Numero</td>
                                      <td width=150px><a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-sucess btn-sm'>Editar</a>
                                      <a href'cadastro_edit.php' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                                      onclick=" .'"'."pegar_dados($cod_pessoa,'$Nome')".'"  '.">Excluir</a>
                                      </td> 
                                  </tr> ";

                        }
                    ?>
                    <!-- onclick="pegar_dados($id,$Nome)"-->
                    </tbody>
                    </table>
                  <a href="index.php" class="btn btn-info">Voltar para o inicio</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirma"tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content"> 
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModelLabel">Confirmação de exclusão</h5>
                <button type="button" class="role" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        <form action="excluir_script.php" method="POST">
                        <p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
                        
                      </div>
                      <div class ="modal_footer">
                        <button type ="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        <input type="hidden" name="Nome" id="nome_pessoa_1" value="" >
                        <input type="hidden" name="id" id="cod_pessoa" value="" >
                        <input type="submit" class="btn btn-danger" value="sim">
                    </form>
              </div>
            </div>
          </div>
         </div>
        <script type="text/javascript">
          function pegar_dados(id,Nome){
            document.getElementById('nome_pessoa').innerHTML = Nome;
            document.getElementById('nome_pessoa1').value = Nome;
            document.getElementById('cod_pessoa').value = id;
          }
        </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>
</html>