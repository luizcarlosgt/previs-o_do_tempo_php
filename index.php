<?php
include "controllers/controller.php";

$dados = getDadosApi();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Previsão do Tempo - OlaMundo Weather</title>
  </head>
  <body style='margin:auto;'>
    
  <div class='cabecalho' style='width:100%; height:50px;
  background-color:orange;'></div>

  <br><br>
    <div class="box-clima">
    <center><h1>PREVISÃO DO TEMPO</h1></center>
    <br><br>

    <center>
    
    <?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
    <?php echo $dados['results']['description']; ?><br>
    Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
    Velocidade do vento: <?php echo $dados['results']['wind_speedy']; ?><br>
    <img src="imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>
    </div>
    </center>
  </body>
</html>