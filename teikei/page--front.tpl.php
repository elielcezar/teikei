<!-- HEADER -->
 <header>
    <div class="extra-info">
        <div class="container">
            <span class="email">sac@teikei.com.br</span>
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
                   <li class="active"><a data-toggle="pill" href="#bemvindo">Quem Somos</a></li>
                   <li><a data-toggle="pill" href="#servicos">Serviços</a></li>
                   <li><a data-toggle="pill" href="#especialistas">Especialistas</a></li>
                   <li><a data-toggle="pill" href="#laboratorio">Estrutura</a></li>                   
                   <li><a data-toggle="pill" href="#contato">Contato</a></li>
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
<div id="principal">
    <section class="destaque">
      <div id="carousel-destaque" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
              <div class="item item-1 active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> </div>
                        <div class="col-md-6">
                            <h2>MANUTENÇÃO <br/><strong>APARELHOS ENDOSCÓPICOS</strong></h2>
                            <h4>Mantenha seu patrimônio em perfeito <br/>estado e passe a máxima confiabilidade <br/>para seu paciente.</h4>
                            
                        </div>
                    </div>
                </div><!-- container -->
              </div><!-- item 1 -->
              <div class="item item-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> </div>
                        <div class="col-md-6">
                            <h2>CAPACITAÇÃO <br/><strong>DE ENFERMEIROS</strong></h2>
                            <h4>Mantenha seu patrimônio em perfeito <br/>estado e passe a máxima confiabilidade <br/>para seu paciente.</h4>
                            
                        </div>
                    </div>
                </div><!-- container -->
              </div><!-- item 2 -->
              <div class="item item-3">
                <div class="container">
                    <div class="row">                        
                        <div class="col-md-6">
                            <h2><strong>ASSISTÊNCIA TÉCNICA</strong></h2>
                            <h4>Mantenha seu patrimônio em perfeito <br/>estado e passe a máxima confiabilidade <br/>para seu paciente.</h4>
                           
                          </div>
                          <div class="col-md-6"> </div>
                    </div>
                </div><!-- container -->
              </div><!-- item 3 -->
              
          </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-destaque" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#carousel-destaque" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      </div>  
       <!-- Contrate Ja -->
          <div class="modal fade" id="contrateja" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <?php
                         $block = module_invoke('webform', 'block_view', 'client-block-4');
                         print render($block['content']);
                      ?>
                </div>
              </div>
            </div>
        </div><!-- contrate ja -->
        
    </section>
<section id="bemvindo">
      <div class="container">        
        <?php print views_embed_view('bem_vindo', 'block_1'); ?>   
        <div class="sobre">
          <?php print views_embed_view('bem_vindo', 'block_2'); ?>
        </div>  
        <?php if(user_is_logged_in()){ ?>
            <a class="botao editar" href="http://teikei.com.br/node/30/edit?destination=admin/content">Editar</a>
        <?php }  ?>
    </div>
</section><!-- / bem vindo-->
<section id="servicos">
	<div class="container">
    <div class="row">
          <?php print views_embed_view('servicos', 'default'); ?>

          <?php if(user_is_logged_in()){ ?>
              <a class="botao editar" href="http://teikei.com.br/node/29/edit?destination=admin/content">Editar</a>
          <?php }  ?>
	  </div>
</section><!-- / servicos-->
<section id="especialistas">
	<div class="container">            

        <?php print views_embed_view('especialistas', 'block_1'); ?> 

        <div class="pessoas">  
          <?php print views_embed_view('especialistas', 'block_2'); ?>   
        </div>

        <?php if(user_is_logged_in()){ ?>
            <a class="botao editar" href="http://teikei.com.br/node/28/edit?destination=admin/content">Editar</a>
        <?php }  ?>

	</div>
</section><!-- / especialistas -->
<section id="laboratorio">
    <div class="container">
       <!--h3>Conheça nosso laboratório</h3>
       <p>A  Teikei Assistência em Endoscopia possui laborat’roio totalmente equipado com tecnologia necessaria para testes e resolução dos mais variados problemas. Local devidamente certificado pela Anvisa, sala de testes e almocarifado com registro e controle de cada cliente</p-->
        <?php print views_embed_view('laboratorio', 'default'); ?>     
       <div class="container">
                <div id="carousel-bounding-box">
                    <?php print views_embed_view('galeria_laboratorio_home', 'block_1'); ?>     
                    <?php print views_embed_view('galeria_laboratorio_home', 'attachment_1'); ?>                    
                </div>   
                <?php if(user_is_logged_in()){ ?>    
                    <a class="botao editar" href="http://teikei.com.br/node/21/edit?destination=admin/content">Editar</a>
                <?php }  ?>
        </div>
	</div>
</section><!-- / laboratorio -->
<section id="depoimentos">
    <div class="container">
       <!--h3>Depoimentos de clientes</h3>
       <div class="row">
           <div class="col-sm-9">
               <div class="depoimento">
                   <blockquote>In tincidunt ut nunc in blandit. Aliquam tincidunt dui a ultrices faucibus. In quis pharetra leo, id gravida lorem. Praesent semper libero et quam gravida imperdiet. Integer et leo ut nibh eleifend tincidunt ultrices at lorem.</blockquote>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="autor">
                   <p class="nome">Dr. João</p>
                   <p class="empresa">Clinica CETAC-PR</p>
                </div>
           </div>
       </div-->
       <h3>Trabalhamos com as seguintes marcas</h3>
   </div>
   
   <div class="marcas">
    <div class="container">
          <div id="carousel-marcas" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item item-1 active">
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_olympus.png" alt="produto"></div>
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_fujifilm.png" alt="produto"></div>
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_pentax.png" alt="produto"></div>
              </div>
              <div class="item item-2">
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_olympus.png" alt="produto"></div>
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_fujifilm.png" alt="produto"></div>
                <div class="marca"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/marca_pentax.png" alt="produto"></div>
              </div>
            </div>
            <!-- Controls -->
             <a class="left carousel-control" href="#carousel-marcas" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
             <a class="right carousel-control" href="#carousel-marcas" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
  </div>
</section><!-- / laboratorio -->
<section id="contato">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="formulario-contato">
          <h4>Nos envie uma Mensagem</h4>
            <?php
                 $block = module_invoke('webform', 'block_view', 'client-block-4');
                 print render($block['content']);
              ?>
            <?php if(user_is_logged_in()){ ?>    
              <a class="botao editar" href="http://teikei.com.br/node/4/webform-results">Visualizar Mensagens</a>
            <?php }  ?>
        </div>
      </div>
      <div class="col-sm-6">
          <h4>Informações para Contato</h4>
          <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7204.236310276015!2d-49.2047572!3d-25.467729800000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfaaa7ea3ab8b%3A0xb76a833e43fe656b!2sR.+Jos%C3%A9+Duda%2C+12+-+Cajuru%2C+Curitiba+-+PR%2C+82970-140!5e0!3m2!1spt-BR!2sbr!4v1434660524673" width="475" height="550" style="border:0"></iframe>
            
          </div>
          
          <div class="row">
              <div class="col-sm-6 escritorio">
                  <div class="col-xs-2 escritorio">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/local.png" alt="local" />
                  </div>
                  <div class="col-xs-10 escritorio">
                    <h5>Escritório</h5>
                    <p>Rua José Duda, 12, <br/> bairro Cajuru</p>
                  </div>
              </div>
              <div class="col-sm-6 postagem">
                <div class="col-xs-2 escritorio">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/local.png" alt="local" />
                  </div>
                  <div class="col-xs-10 escritorio">
                      <h5>Postagem</h5>
                      <p>CEP: 82970-140<br/>Curitiba - PR</p>
                  </div>
              </div>
              <div class="col-sm-6 email">
                <div class="col-xs-2 escritorio">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/email.png" alt="local" />
                  </div>
                  <div class="col-xs-10 escritorio">
                      <h5>Endereço de Email</h5>
                      <p>teikei@teikei.com.br<br/>sac@teikei.com.br</p>
                  </div>
              </div>
              <div class="col-sm-6 telefone">
                <div class="col-xs-2 escritorio">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/telefone.png" alt="local"  />
                  </div>
                  <div class="col-xs-10 escritorio">
                      <h5>Telefone</h5>
                      <p>+55 41 3402-6348</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
 </section><!-- / contato -->
 </div><!-- / principal -->
 <footer>
     <div class="call">
         <div class="container">
             <h2>Não deixe seu patrimônio parado</h2>
             <p>Atendemos de Segunda a Sexta-feira das 9:00 as 17:30</p>
             <div class="botao ligue desktop">Ligue Agora: 41 3402-6348</div>
             <div class="botao ligue mobile"><a href="tel:4134036348">Ligue Agora: 41 3403-6348</a></div>
         </div>
     </div>
     <div class="assinatura">
         <div class="container">
         <span>Teikei © 2015 - Design by WKMT</span>
         <ul class="menu-rodape">
              <li class="active"><a data-toggle="pill" href="#bemvindo">Bem vindo</a></li>
              <li><a data-toggle="pill" href="#especialistas">Especialistas</a></li>
              <li><a data-toggle="pill" href="#laboratorio">Estrutura</a></li>
              <li><a data-toggle="pill" href="#depoimentos">Depoimentos</a></li>
              <li><a data-toggle="pill" href="#contato">Contato</a></li>
              <li><a href="<?php print $front_page; ?>user">Login</a></li>
            </ul>
        </div>
     </div>
 </footer>
<!-- / FOOTER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.nicescroll.min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.parallax-1.1.3.j" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>
<script src="<?php echo $directory; ?>/js/geral.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll({offset: {top:0}});
    jQuery('.menu-rodape').localScroll({offset: {top:0}});
    jQuery('.seta').localScroll({offset: {top:0}});
})
</script>
 <!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.inview.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/custom_inview.js"></script>
<!--<![endif]-->
<script type="text/javascript">
    /*var janela = $(window).width();    
    if(janela>767){
          $(document).scroll(function () {
              var y = $(this).scrollTop();
              if (y > 650) {
                $('#topnav').addClass('fixed-top');
              } else {
                $('.navbar').removeClass('fixed-top');
              }
          });
    }
    $('#myCarousel').carousel({
        interval: 4000
    });
    */
    var divs = $("#thumbcarousel .carousel-inner div");
    for(var i = 0; i < divs.length; i+=6) {
      divs.slice(i, i+6).wrapAll("<div class='item'></div>");
    }
</script>
