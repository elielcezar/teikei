<!-- HEADER --> 
 <header>  
    <div class="container">
        <h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Golden Hair</a></h1>
    </div>
	</header>
<!-- / HEADER -->
<nav id="topnav" class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>   
    </div> 
    <div class="collapse navbar-collapse navbar-ex1-collapse">   
       <div class="menu-secoes">
       <ul id="menu-secoes" class="nav navbar-nav">
            <li class="active"><a href="<?php print $front_page; ?>">Home</a></li>
            <li><a href="<?php print $front_page; ?>#missao">O Salão</a></li>
            <li><a href="<?php print $front_page; ?>#servicos">Serviços</a></li>
            <li><a href="<?php print $front_page; ?>#novidades">Novidades</a></li> 
            <li><a href="<?php print $front_page; ?>#produtos">Produtos</a></li>             
            <li><a href="<?php print $front_page; ?>trabalhe-conosco">Trabalhe Conosco</a></li>             
            <li><a href="<?php print $front_page; ?>#contato">Contato</a></li> 
            <li class="facebook"><a href="https://www.facebook.com/goldenhairoficial" target="_blank">Facebook</a></li> 
            <li class="instagram"><a href="http://instagram.com/goldenhairoficial">Instagram</a></li> 
          </ul>  
      </div>
   </div><!-- /.navbar-collapse --> 
  </div>  
</nav>
<?php if (($title)&&(!$is_front)): ?>
		<div class="titulo-pagina">
			<div class="container">
				<div class="col-sm-12">
					<h1 class="title" id="page-title"><?php print $title; ?></h1>          
          		</div>
          	</div>
      	</div>
     <?php endif; ?>
<section id="principal">
	<div class="container">
		
		<div class="row">
			<div id="conteudo" class="col-sm-12">								
				 <?php if ($messages): ?>
		          <div id="messages">
		          	<div class="section clearfix">
		            <?php print $messages; ?>
		          </div></div> <!-- /.section, /#messages -->          
		          <?php endif; ?>
		          <?php if ($tabs): ?>
		            <div class="tabs">
		              <?php print render($tabs); ?>
		            </div>
		          <?php endif; ?>      		    
		          
		          <?php print render($page['content']); ?>		      	
	        </div> <!-- conteudo -->
			
		</div>	   
	</div><!-- container -->
</section><!-- principal -->
 
<!-- FOOTER-->
<div class="container">
<footer> 
        
        <?php print render($page['footer']); ?>
        
       
		<p class="legal">
			
		</p>
        
</footer>
</div>	 
 
<!--/ CONTENT -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/geral.js" type="text/javascript"></script>
