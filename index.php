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
          <?php
          require_once "entrar.php"
         ?>
       
    </div>
 
</body>
</html>