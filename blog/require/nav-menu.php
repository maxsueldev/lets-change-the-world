<?php $ativo; ?>

<nav class="navbar navbar-fixed-top navbar-inverse navbar-white">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
        <span class="sr-only">Menu de navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="barra-navegacao" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog" class= 
              <?php 
                if($ativo == 'inicio') { 
              ?> "ativo" 
              <?php } ?> >Início</a></li>
        
        <li><a href="https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog/sobre" class=
              <?php 
                if($ativo == 'sobre') { 
              ?> "ativo" 
              <?php } ?> >Sobre</a></li>
        
        <li><a href="https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog/contato" class=
              <?php 
                if($ativo == 'contato') { 
              ?> "ativo" 
              <?php } ?>
              >Contato</a></li>
      </ul>
    </div>
  </div>
</nav>