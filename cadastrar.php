<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>cadastro</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">ESTANTE DIGITAL</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    </div>
  </div>
</nav>

<div class="container">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">cadastrar</h5>
        <p class="card-text">
        <form action="classes\cadastrocontroller.php" method="POST">
        <div class="mb-3">
        <label for="exampleInputNome" class="form-label">Nome</label>
        <input name = "nome" type="name" class="form-control" id="nome">  
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email">  
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" id="senha">
        </div>
        <button type="submit" class="btn btn-primary">cadastrar</button>
        <a href="entra.php" class="card-link">entrar</a>
        </form>
        </p>
    </div>
    </div>
</div>
</body>
</html>