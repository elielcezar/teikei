<!-- HEADER -->
 <header>
    <div class="extra-info">
        <div class="container">
            <span class="email"><a href="sac@teikei.com.br">sac@teikei.com.br</a></span>
            <span class="fone">+55 41 3402-6348</span>
            <span class="wpp">WhatsApp  +55 41 9176-3337</span>
        </div>
    </div>

    <div class="container">
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">

                <h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Teikei</a></h1>

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
                   <li><a href="<?php print $front_page; ?>#bemvindo">Bem vindo</a></li>
                   <li><a href="<?php print $front_page; ?>#especialistas">Especialistas</a></li>
                   <li><a href="<?php print $front_page; ?>#laboratorio">Estrutura</a></li>
                   <li><a href="<?php print $front_page; ?>#depoimentos">Depoimentos</a></li>
                   <li><a href="<?php print $front_page; ?>#contato">Contato</a></li>
                   <?php if(user_is_logged_in()){ ?>    
                    <li><a href="<?php print $front_page; ?>admin/people">Usuários</a></li>
                    <li><a href="<?php print $front_page; ?>user/logout">Sair</a></li>                    
                   <?php }  ?>  
                  </ul>
              </div>
           </div><!-- /.navbar-collapse -->
          </div>
        </nav>
    </div>
</header>
<!-- / HEADER -->


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
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
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
