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
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Cadastro</h1><!-- Cadastro -->
                  <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="Nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="Nome">
                    </div>
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="Endereco">
                    </div>
                    <div class="form-group">
                        <label for="whatsapp" class="form-label">Whatsapp</label>
                        <input type="text" class="form-control" name="Whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="CPF" class="form-label">CPF </label>
                        <input type="text" class="form-control" name="CPF">
                    </div>
                    <div class="form-group">
                        <label for="CPF" class="form-label">Numero</label>
                        <input type="text" class="form-control" name="Numero">
                    </div>
                    <div class="form-group">
                    <input class="form-label" type="checkbox" value="" id="flexCheckDefault">
                    <div class="form-group">
                        <input type="submit" class="btn btn-sucess">
                    </div>
                  </form>
                  <a href="index.php" class="btn btn-info">Voltar para o inicio</a>
          </div>
      </div>
      </div>
        

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