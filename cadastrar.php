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
        <form action="cadastro.php" method="POST">
        <div class="mb-3">
        <label for="exampleInputNome" class="form-label">Nome</label>
        <input type="name" class="form-control" id="exampleInputNome">  
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1">  
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
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