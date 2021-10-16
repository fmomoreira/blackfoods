<?php

//$conn = new mysqli("localhost", "root", "", "pizzaria");
$conn = new mysqli("localhost", "worl7587_black_foods", "63940624**", "worl7587_black_foods");
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');
$whatsapp = "5511978271382"
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cardapio - BlackFoods Pizza</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilopizza.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body  onload="filtrarPizza()">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" id="menu" href="#">
      <span id="spanlogo"> Pizzaria BlackFoods</span>
    </a>
  </nav>
   
     <section id="promocao" >

     <div id="carouselExampleCaptions"  id="carouselall"class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
  
  <?php
       $sql = "SELECT * FROM `cardapio` WHERE `promocao` = 'PROMOCAO' AND `codproduto` = 1 AND `status`= 'ATIVO' ";
       $active = 0;
       $result = $conn->query($sql);
       if ($result->num_rows >= 0) {
         while ($row = $result->fetch_array()) {
           if($active == 0){
             echo "
           <div class='carousel-item active' id='sectionpizza' data-interval='2000'>
                   <ul class='newopcao'>
           <img src='img/new-pizza.png'>
           <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span><b id='nomepizza'>" . $row['nomepizza'] . "</b> </li>
           <li class='preco'><b>Pizza Grande: " . $row['precopizza'] . "</b></li>
           <li class='preco'><b>Pizza Brotinho:" . $row['precobrotinho'] . "</b></li>
           <li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>
        <a class='navbar-brand'
                             href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                 
                         
   <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
           </ul> 
           </div>
           "
           ;
          
           }else{
           echo "
           <div class='carousel-item ' data-interval='3000'>
                   <ul class='newopcao'>
           <img src='img/new-pizza.png'>
           <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span><b id='nomepizza'>" . $row['nomepizza'] . "</b> </li>
           <li class='preco'><b>Pizza Grande: " . $row['precopizza'] . "</b></li>
           <li class='preco'><b>Pizza Brotinho:" . $row['precobrotinho'] . "</b></li>
           <li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>
        <a class='navbar-brand'
                             href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                 
                         
   <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
           </ul> 
           </div>
           ";
           }
           $active ++;
         }
       }
       ?>


     

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next pl-3" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </section>
  
  
  <section>

    <div class="titulosecao">
      <h1>Pizzas Salgadas</h1>
    </div>

    
    <div class=" form-group d-flex justify-content-center flex-column" style="width:100%; margin-top:2rem; margin-bottom:2rem;">
    
    <label for="filtrar-pizza" id='nomepizza' align="center">Pesquise por ingrediente</label>
    <div class="row" style="justify-content:center">
    <div class="d-flex " style="width: 68%;flex-direction: column;align-items: center;">
       
    <input class="col-sm-10 col-md-8 form-control" id="filtrar-pizza" placeholder="Digite o ingrediente desejado..."></input>
    <p class="col-sm-12 col-md-8" id="encontrado" style="display:none">Veja todas as pizzas salgadas encontradas...</p> 
    <p class="col-sm-12 col-md-8" id="naoencontrado" style="display:none"><i class="fas fa-exclamation-circle pr-2"></i>Nenhuma pizza salgada encontrada, escolha outro ingrediente...</p> 
       
      </div>
    
    </div>
    </div>
    <div class="cardapio">
      <?php
      $sql = "SELECT * FROM `cardapio` WHERE `tipo`= 'PIZZA SALGADA' AND `codproduto` = 1 AND `status`= 'ATIVO' ";
      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
          echo "
                  <ul class='newopcao' id='pizzasalgadafilter'>
          <img src='img/new-pizza.png'>
          <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span>
          <b id='nomepizza'>".$row['nomepizza']."</b> </li>
          <li class='preco'><b>Pizza Grande: " . $row['precopizza'] . "</b></li>
          <li class='preco'><b>Pizza Brotinho:" . $row['precobrotinho'] . "</b></li>
<li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>
 <a class='navbar-brand'
                            href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                
                        
  <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
</ul>     
          ";
        }
      }
      ?>
    </div>
  </section>
 <section>
    <div class="titulosecao">
      <h1>Pizzas Doces</h1>
    </div>
    <div class="cardapio">
      <?php
      $sql = "SELECT * FROM `cardapio` WHERE `tipo`= 'PIZZA DOCE' AND `codproduto` = 1 AND `status`= 'ATIVO' ";

      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
          echo "
                  <ul class='newopcao'>
          <img src='img/new-pizza.png'>
          <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span><b id='nomepizza'>" . $row['nomepizza'] . "</b> </li>
          <li class='preco'><b>Pizza Grande: " . $row['precopizza'] . "</b></li>
          <li class='preco'><b>Pizza Brotinho:" . $row['precobrotinho'] . "</b></li>
<li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>
  <a class='navbar-brand'
                            href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                
                        
  <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
</ul>     
          ";
        }
      }
      ?>
    </div>
  </section>
   
  <section>
    <div class="titulosecao">
      <h1>Esfihas</h1>
    </div>
    <div class="cardapio">
      <?php
      $sql = "SELECT * FROM `cardapio` WHERE `tipo`= 'ESFIHA SALGADA' AND `codproduto` = 2 AND  `status`= 'ATIVO'";
      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
          echo "
                  <ul class='newopcao'>
          <img src='img/new-pizza.png' style='width: 70px;'>
          <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span><b id='nomepizza'>" . $row['nomepizza'] . "</b> </li>
          <li class='preco'><b>Preço: " . $row['precopizza'] . "</b></li>
<li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>

  <a class='navbar-brand'
                            href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                
                        
  <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
</ul>   
          ";
        }
      }
      ?>
    </div>
  </section>
  
  
  <section>
    <div class="titulosecao">
      <h1>Esfihas Doces</h1>
    </div>
    <div class="cardapio">
      <?php
      $sql = "SELECT * FROM `cardapio` WHERE `tipo`= 'ESFIHA DOCE' AND `codproduto` = 2 AND `status`= 'ATIVO'";

      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
          echo "
                  <ul class='newopcao'>
          <img src='img/new-pizza.png' style='width: 70px;'>
          <li class='titulo' align='center'><span class='numeropizza'>" . $row['codigo_pizza'] . "</span><b id='nomepizza'>" . $row['nomepizza'] . "</b> </li>
          <li class='preco'><b>Pizza Grande: " . $row['precopizza'] . "</b></li>
          <li class='preco'><b>Pizza Brotinho:" . $row['precobrotinho'] . "</b></li>
<li class='ingredientes' style='width:100%;' align='center' >" . $row['ingredientes'] . "</li>
  <a class='navbar-brand'
                            href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                
                        
  <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
</ul>     
          ";
        }
      }
      ?>
    </div>
  </section>

  <section id="bebidas">
    <div class="titulosecao">
      <h1>Todas Bebidas</h1>
    </div>
    <div class="cardapio">
      <?php
      $sql = "SELECT * FROM `cardapio` WHERE  `codproduto` = 3 AND `status` = 'ATIVO' ";
      $result = $conn->query($sql);
      if ($result->num_rows >= 0) {
        while ($row = $result->fetch_array()) {
          echo "
                  <ul class='newopcao'>      
          <li class='titulo' align='center' ><b id='nomepizza' style='color: white!important;'>" . $row['nomepizza'] . "</b> </li>
          <li class='preco'><b>Preço: " . $row['precopizza'] . "</b></li>
  <a class='navbar-brand'
                            href='https://api.whatsapp.com/send?phone=".$whatsapp."&text=Olá,%20quero%20fazer%20um%20pedido'>
                
                        
  <button class='pedirpizza btn btn-success'>pedir pizza</button></a>
</ul>   
          ";
        }
      }
      ?>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script src="filtropizza.js"></script>
</body>

</html>

