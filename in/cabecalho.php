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
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
        <a class="navbar-brand" href="#"><img src="../img/iconfinder_169-_flag-hand-peace-lesbian_3011531.png" style="width: 22%;"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?page=photos">Us</a></li>
          <li><a href="#portfolio">Cartinha on</a></li>
          <li><a href="index.php?page=playlist">Playlist</a></li>
          </li>
        </ul>
      </div>
      <div class="top-social">
        <ul id="top-social-menu">
          <li><a href="#">Surpresa</a></li>
          <li><a href="sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
</body>