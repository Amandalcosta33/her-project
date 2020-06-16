<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HER.</title>

   

    <!-- Page -->
    <link  rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <script src="js.js"></script>
</head>
<body onload="Loaderfirst();">
    <div class="heartbeatloader" id="heartbeatloader">
        <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400" xmlns="http://www.w3.org/2000/svg" >
            <path class="path" d="M 0 200 l 40 0 l 5 -40 l 5 40 l 10 0 l 5 15 l 10 -140 l 10 220 l 5 -95 l 10 0 l 5 20 l 5 -20 l 30 0" fill="transparent" stroke-width="4" stroke="black"/>
        </svg>
        <div class="innercircle"></div>
        <div class="outercircle"></div>
    </div>

    <div style="display:none;" id="mainindex">
        <div class="cont">
  
            <div class="form">
                <h1>Welcome my babe</h1>
              <form action="login.php" method="post">
            <img class="img" src="img/favicon.png">
                <input name= "password" type="password" 
                       class="pass"
                       placeholder="Senha" id="pass" required>
                <button class="login" type="submit" value="Login">Login</button>
              </form>
            </div>
          </div>
       
    </div>
 
</body>
</html>