<?php
require_once("classes/verificalogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Séries</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Séries</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inserir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Editar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Excluir</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

<form action="classes\seriescontroller.php" method="POST">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Temporada</th>
      <th scope="col">Lançamento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input name = "imagem" type="file" class="form-control" id="imagem"></th>
      <td><input name = "nome" type="text" class="form-text" id="nome"></td>
      <td><input name = "temporada" type="number" class="form-text" id="temporada"></td>
      <td><input name = "lancamento" type="number" class="form-text" id="lancamento"></td>
      <td><button class="btn btn-primary" type="submit">Adicionar</button></td>
    </tr>
  </tbody>
</table>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Temporadas</th>
      <th scope="col">Lançamento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    
</body>
</html>