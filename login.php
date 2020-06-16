<style>
html {
    height:100%;
}
body {
  height:100%;
  background-image: linear-gradient(to bottom, rgba(221, 117, 117, 0.61), rgba(184, 62, 62, 0.918) );
  display: flex;
}

*{
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
}
.cont{
  position: relative;
  width: 25%;
  height: 300px;
  padding: 10px 25px;
  margin: 10vh auto;
  background: #fff;
  border-radius: 8px;
}
h1{ 
  color: #606060;
  font-weight: bold;
  font-size: 20px;
  margin: 30px auto;
  text-align: center;
  display: block;
}

.login{
    color: #fff;
    cursor: pointer;
    margin-top: 80px;
    background: rgba(184, 62, 62, 0.918);
    transition: background 0.4s ease;
}

.login:hover{ background: rgba(218, 132, 132, 0.918) }
@media only screen and (min-width : 280px) {
  .cont{ width: 90% }
}

@media only screen and (min-width : 480px) {
  .cont{ width: 60% }
}

@media only screen and (min-width : 768px) {
  .cont{ width: 40% }
}

@media only screen and (min-width : 992px) {
  .cont{ width: 30% }
}

.login{
  width: 100%;
  height: 45px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: lighter;
  margin-bottom: 30px;
}

.form{ width: 100%; height: 100%; }
</style>

<?php


$senha = $_POST['password'];

$host = "localhost";
$user = "root";
$password = "";
$database = "her";


if ($conexao = new mysqli($host, $user, $password, $database)) {
$sql = "SELECT pass FROM senha WHERE pass='$senha' LIMIT 1";
$dados = $conexao ->query($sql);
$conexao->close();


if($linhas = mysqli_num_rows($dados) > 0){
  

     header("location:  http://localhost/her-project/in/index.html");
   
 
} else {
   ?>
    <div class="cont">
    <div class="form">
     <h1> Senha incorreta, clique em voltar</h1>
         <button class="login" onclick="Voltar();">VOLTAR</button>
    </div>
</div>
    <?php
}
}

?>

<script>
    function Voltar(){
        window,location.href  = "index.php";
    }
</script>

