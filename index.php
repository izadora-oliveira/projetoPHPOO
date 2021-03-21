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
    <title>Estante</title>
</head>
<body>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Estante Digital</h5>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"><a href="filmes.php" >Filmes</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="series.php" >Séries</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="livros.php" >Livros</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="musicas.php" >Músicas</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="classes/logout.php" >Sair</a></th>
    </tr> 
  </tbody>
</table>
  </div>
</div>

</body>
</html>