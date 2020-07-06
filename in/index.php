<?php 
session_start();

if($_SESSION['senha'] == null){
  header('location:../');
}
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HER</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
     <link href="css.css" rel="stylesheet">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js.js"></script>
    </head>
 <body>
 <header>
  <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container navbar-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?page=photos">Us</a></li>
          <li><a href="#portfolio">Cartinha on</a></li>
          <li><a href="#contact">Playlist</a></li>
          <li><a href="#blog">Blog</a></li>
          </li>
        </ul>
      </div>
      <div class="top-social">
        <ul id="top-social-menu">
          <li><a href="#">Surpresa</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
</body>

<footer>
<div class="rodape">
  Todos os direitos reservados pra mim! Te amo - Amanda
</div>
</footer>
 </html>
 <?php
    if(isset($_GET['page'])){
        include($_GET['page'] . ".php");
    }
?>