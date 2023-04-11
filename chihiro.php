<!DOCTYPE html>
<html lang="pt-br">
<link>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Play Filmes</title>
    <link rel="shortcut icon" href="images/logo.png" type="imagem/x-icon">
    <link rel="stylesheet" href="style/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>



<!--NAVBAR, PAGINAS, ICONES, BARRA DE PESQUISA -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1C1C1C;">
    <div class="container-fluid">
  
      <!--COLOQUE A IMAGEM E TEXTO AQUI -->
     
      <a class="navbar-brand" href="index.php"> 
         <div class="imagem1">
           <img src="images/logo.png">
           </div>
            <div class="texto1"> Play <br> Filmes</div>
      </a>
  

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: #ffffff; background-color: #B22222;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
  
            <div class="formatacao1">
              <li class="nav-item">
        <a class="nav-link" href="#">Filmes</a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Indicações</a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Pessoas</a>
              </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Mais</a>
              </li>
        </div>
            </ul>
          </li>
        </ul>  


<!-- BARRA DE PESQUISA -->
       
<form class="d-flex">
  <div class="formatacao2">
  </div>
  <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
  <button class="btn btn-outline-dark" style="background-color: gr; color: white; background-image: linear-gradient( to right, #b22222, #8B0000, #b22222 ); font-weight: bolder; " type="submit">Buscar</button>
</form>
</div>
</div>
</nav>
  </nav>
  
  <br><br><br>

  <div class="name">A viagem de Chihiro</div>
  <br><br>

    <div class="imagefilme">
     <img src="images/aviagemdechihiro.jpg">
      </div>

      <br><br><br>

<div class="novo">

<?php
  $link="dados.xml";
  $xml=simplexml_load_file($link) -> catalog;
  
  foreach($xml -> filme01 as $book){
    echo "<strong> Filme: </strong>".utf8_decode($book -> filme). "<br/>";
    echo "<strong> Autor: </strong>".utf8_decode($book -> autor)."<br/>";
    echo "<strong> Genero: </strong>".utf8_decode($book -> genero)."<br/>";
    echo "<strong> Data de Publicação: </strong>".utf8_decode($book -> datadepublicacao)."<br/>";
    echo "<strong> Avaliação: </strong>".utf8_decode($book -> avaliacao). "<br/>";
    echo "<strong> Sinopse: </strong>".utf8_decode($book -> sinopse). "<br/>";
    echo "<strong> Preço: </strong>".utf8_decode($book -> preco). "<br/>";
    echo "<br/> <br/>";
  }
?>
</div>
</div>

      <div class="mx-auto2">
      <a href="form.html">
        <button class="btn" type="button">Comprar</button>
           </a>
      </div>

  <br><br><br><br>

 <!-- COMEÇO DA FOOTER -->
 <footer class="text-center text-lg-start  text-muted" style="background-color: #1C1C1C;">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block fw-bold" style="color: #ffffff;">
      <span>Siga nossas redes sociais e fique por dentro de tudo:</span>
    </div>

    <!--REDES SOCIAIS -->
    <div>
      <a href="" class="me-4 link-secondary">
          <img src="images/iconfacebook.png">
      </a>
      <a href="" class="me-4 link-secondary">
          <img src="images/iconlinkedin.png">
        </a>
      <a href="" class="me-4 link-secondary">
          <img src="images/iconinstagram.png">
        </a>
      <a href="" class="me-4 link-secondary">
        <img src="images/icontwitter.png">
      </a>
      <a href="#" class="me-4 link-secondary">
          <img src="images/icongithub.png">
        </a>
      <a href="#" class="me-4 link-secondary">
        <img src="images/icongoogle.png">
      </a>
    </div>
  </section>
 
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
          <!--LOGO E FRASE -->            
          <a class="navbar-brand" href="#">
            <div class="formatacao3">
              <div class="imagemfooter">
               <img src="images/logo.png">
                 </div>
               <div class="textofooter">Play <br> Filmes
                  </div>
                  </div>
            </a>
        </div>
        
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: #ffffff;">
          <h6 class="fw-bold mb-5" style="color:#B22222;">
            VEJA TAMBEM
          </h6>
          <p>
            <a href="#" class="text-reset" style="text-decoration: none;">Mais Informações</a>
          </p>
          <p>
            <a href="#" class="text-reset" style="text-decoration: none;">Politicas de Uso</a>
          </p>
          <p>
            <a href="#" class="text-reset" style="text-decoration: none;">Politica e Privacidade</a>
          </p>
          <p>
            <a href="#" class="text-reset" style="text-decoration: none;">Nossas Diretrizes</a>
          </p>
        </div>
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color: #ffffff;">
          <h6 class="fw-bold mb-4" style="color:#B22222;">
            HORÀRIOS DE ATENDIMENTO
          </h6>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Seg a Sex - 8h às 18h</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Sabados - 9h às 17h</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Domingos - 9h às 13h</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Feriados - Fechado</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color: #ffffff;">
          <h6 class="fw-bold mb-4" style="color:#B22222;">CONTATOS</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Av União da Ferroviarios, N° 1760, Centro, Jundiaí - SP</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            playfilmes@outlook.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +55 (11) 91234-5678</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> +55 (11) 4489-1234</p>
        </div>
      </div>
    </div>
  </section>
</footer>

<!--RODAPE-->

<footer class="bg-0 text-center" style="background-image: linear-gradient( to right, #b22222, #8B0000, #b22222 );">
  <div class="container p-0 pb-0 border-bottom">
    <section class="">
      <form action="">
        <br><br>
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2" style="color: #ffffff;">
              
              <strong>Inscreva-se na nossa newsletter:</strong>
            </p>
          </div>
          <div class="col-md-5 col-12">
            <div class="form-outline mb-4">
              <input type="email" id="form5Example27" class="form-control" />
              <label class="form-label" for="form5Example27"></label>
            </div>
          </div>
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn mb-4" style="background-color: #1C1C1C; color: white;">
              Inscreva-se
            </button>
          </div>
        </div>
      </form>
    </section>
  </div>
  <div class="text-center p-3 fw-bold" style="color: white;">
    © 2023 Copyright:
    <a class="text-white" href="#">www.playfilmes.com.br</a>
    <h6>Play Filmes - Todos os direitos reservados</h6>
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>