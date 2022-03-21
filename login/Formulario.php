<?php
include('verifica_login.php');
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- icone -->
  <link rel="icon" type="image/png" href="img/Login icone png.png">
 <!-- Magnific Popup core CSS file OFF-LINE -->
  <link rel="stylesheet" href="css/magnific-popup.css">
 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 <!-- Your custom styles (optional) -->
 <link rel="stylesheet" type="text/css" href="css/style2.css"> 

  <script type="text/javascript" src="js/function clicou(){.js"></script>

  <title>Lista de compra anterior</title>

</head>

<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-xs-12 col-sm-12 col-md-12 col-lg-12 painel_1">
    <a class="navbar-brand" href="painel.php">Lista de compra</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="painel.php">Início<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Formulario.php">Formulário de pesquisa<span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <h5 class="user">Olá, <?php echo $_SESSION['nome'];?> <i class="fas fa-desktop"></i></h5>
        <h5 class="user"><a href="logout.php">Sair</a></h5>
      </form>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="clicou()">Search</button>
      </form>
    </div>
</nav>



<div class="container my-5">
<form class="col-12 justify-content-center">
  <div class="form-group">
    <h1 class="text-center"><i class="fas fa-desktop"></i> Formulário de Pesquisa </h1>
    <label for="exampleFormControlInput1"><h5 class="email"><i class="far fa-envelope"></i>Endereço de Email</h5></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><h5 class="senha"><i class="far fa-flag"></i></i>Selecione o seu estado</h5></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>São Paulo</option>
      <option>Rio de Janeiro</option>
      <option>Espírito Santo</option>
      <option>Rio Grande do Sul</option>
      <option>Brasília</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><h5 class="informacoes"><i class="far fa-comment"></i>Selecione se deseja receber mensagens nossa no e-mail ou não:</h5></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Sim, desejo receber notificações de promoções, e novidades</option>
      <option>Não quero receber notificações e nem ficar por dentro de descontos, etc</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h5 class="informacoes"><i class="far fa-comment-alt"></i>(informações adicionais: Telefone, endereço) (Opcional)</h5></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label informacoes" for="inlineCheckbox1"><b>Declaro que sou maior de 18 anos ao concluir o cadastro</b></label>
  </div> <br>
  <button type="submit" class="btn btn-primary my-3">Concluir cadastro</button>
</form>
</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.notify.js"></script>

<script>
    $(function () {
     $('[data-toggle="popover"]').popover()
   })
</script>
  
  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
