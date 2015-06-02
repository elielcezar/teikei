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
                   <li class="active"><a data-toggle="pill" href="#bemvindo">Bem vindo</a></li>
                   <li><a data-toggle="pill" href="#especialistas">Especialistas</a></li>
                   <li><a data-toggle="pill" href="#laboratorio">Estrutura</a></li>
                   <li><a data-toggle="pill" href="#depoimentos">Depoimentos</a></li>
                   <li><a data-toggle="pill" href="#contato">Contato</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-6"> </div>
                <div class="col-sm-6">

                    <h2>MANUTENÇÃO <br/><strong>APARELHOS ENDOSCÓPICOS</strong></h2>
                    <h4>Mantenha seu patrimônio em perfeito <br/>estado e passe a máxima confiabilidade <br/>para seu paciente.</h4>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contrateja">Contrate Já</button>
                    <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#saibamais">Saiba Mais</button>

                            <!-- Contrate Ja -->
                            <div class="modal fade" id="contrateja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                          <!-- Saiba Mais -->
                          <div class="modal fade" id="saibamais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <h4 id="overflowing-text-to-show-scroll-behavior">Overflowing text to show scroll behavior<a class="anchorjs-link" href="#overflowing-text-to-show-scroll-behavior"><span class="anchorjs-icon"></span></a></h4>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                              </div>
                            </div>
                        </div><!-- saiba mais -->

                </div>
            </div>


        </div>
    </section>

<section id="bemvindo">
      <div class="container">
         <h3>Bem vindo a Teikei Assistência <br/>em aparelhos endoscópicos</h3>
        <p>A Teikei é especializada em soluções em tecnologia endoscópica</p>
        <div class="sobre">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/missao.jpg" alt="Missao" class="img-responsive" />
                    <h4>Missão</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/valores.jpg" alt="Missao" class="img-responsive" />
                    <h4>Valores</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/solucoes.jpg" alt="Missao" class="img-responsive" />
                    <h4>Nossas Soluções</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- / bem vindo-->


<section id="servicos">
	<div class="container">

        <div class="row">

          <div class="col-sm-4">
              <div class="servico manutencao">
                    <i></i>
                    <h3>Manutenção</h3>
                    <p>Manutenção preventiva</p>
                    <span class="saibamais"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#manutencao">Contrate Já</button></span>

                            <!-- Saiba Mais -->
                            <div class="modal fade" id="manutencao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-body">
                                    <h4 id="overflowing-text-to-show-scroll-behavior">Manutenção</h4>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  </div>
                                </div>
                              </div>
                          </div><!-- saiba mais -->

                </div>
          </div>

          <div class="col-sm-4">
              <div class="servico treinamentos">
                  <i></i>
                <h3>Treinamentos</h3>
                <p>Treine sua equipe para manter seu equipamente em perfeito estado e evitar manutenções corriqueiras</p>
                <span class="saibamais"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#treinamentos">Contrate Já</button></span>

                            <!-- Saiba Mais -->
                            <div class="modal fade" id="treinamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-body">
                                    <h4 id="overflowing-text-to-show-scroll-behavior">Treinamentos</h4>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  </div>
                                </div>
                              </div>
                          </div><!-- saiba mais -->
            </div>
          </div>

          <div class="col-sm-4">
            <div class="servico assistencia">
                <i></i>
                <h3>Assistência Técnica</h3>
                <p>Assistência especializada em processadoras de alta technologia com laboratório para testes</p>
                <span class="saibamais"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#assistencia">Contrate Já</button></span>

                            <!-- Saiba Mais -->
                            <div class="modal fade" id="assistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-body">
                                    <h4 id="overflowing-text-to-show-scroll-behavior">Assistência Técnica</h4>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  </div>
                                </div>
                              </div>
                          </div><!-- saiba mais -->
            </div>
          </div>

        </div>

	</div>
</section><!-- / servicos-->



<section id="especialistas">
	<div class="container">
        <h3>Conheça nosso time de especialistas</h3>
        <p>A Teikei tem os melhores profissionais do mercado, com certificações concedidas no<br/>exterior, finalmente homologadas pelas fabricantes.</p>

        <div class="pessoas">
        <div class="row">
            <div class="col-sm-3">
                <div class="foto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/milton-takei.jpg" alt="Missao" class="img-responsive" /></div>
                <div class="info">
                    <h4>Milton Takei</h4>
                    <p class="cargo">Especialista Sênior</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/anderson.jpg" alt="Missao" class="img-responsive" /></div>
                <div class="info">
                    <h4>Anderson Albuquerque</h4>
                    <p class="cargo">Especialista</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/garotao.jpg" alt="Missao" class="img-responsive" /></div>
                <div class="info">
                    <h4>Garotão</h4>
                    <p class="cargo">Técnico Responsável</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="foto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/dayane.jpg" alt="Missao" class="img-responsive" /></div>
                <div class="info">
                    <h4>Dayane</h4>
                    <p class="cargo">Atendimento</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        </div>

	</div>
</section><!-- / especialistas -->


<section id="laboratorio">
    <div class="container">
       <h3>Conheça nosso laboratório</h3>
       <p>A  Teikei Assistência em Endoscopia possui laborat’roio totalmente equipado com tecnologia necessaria para testes e resolução dos mais variados problemas. Local devidamente certificado pela Anvisa, sala de testes e almocarifado com registro e controle de cada cliente</p>

       <div class="container">

        <!-- main slider carousel -->
        <div class="row">
            <div class="col-md-12" id="slider">

                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab001.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="1">
                                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab002.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab003.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab004.jpg" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="4">
                                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab005.jpg" class="img-responsive">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>

            </div>
        </div>
        <!--/main slider carousel-->


      	<!-- thumb navigation carousel -->
        <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

            <!-- thumb navigation carousel items -->
            <ul class="list-inline">

              <li> <a id="carousel-selector-0" class="selected">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab_thumb001.jpg" class="img-responsive">
              </a></li>
              <li> <a id="carousel-selector-1">
                  <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab_thumb002.jpg" class="img-responsive">
              </a></li>
              <li> <a id="carousel-selector-2">
                  <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab_thumb003.jpg" class="img-responsive">
              </a></li>
              <li> <a id="carousel-selector-3">
                  <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab_thumb001.jpg" class="img-responsive">
              </a></li>
                    <li> <a id="carousel-selector-4">
                        <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/lab_thumb002.jpg" class="img-responsive">
              </a></li>

            </ul>

        </div>



</div>

	</div>
</section><!-- / laboratorio -->

<section id="depoimentos">
    <div class="container">
       <h3>Depoimentos de clientes</h3>
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
       </div>

       <h3>Trabalhamos com as seguintes marcas</h3>
   </div>
       <div id="carousel-marcas" class="carousel slide" data-ride="carousel">

           <div class="container">
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
             <a class="left carousel-control" href="#carousel-marcas" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
             <a class="right carousel-control" href="#carousel-marcas" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>


    </div>

	</div>
</section><!-- / laboratorio -->


<section id="contato">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
          <?php
               $block = module_invoke('webform', 'block_view', 'client-block-4');
               print render($block['content']);
            ?>
      </div>
      <div class="col-sm-6">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/mapa.jpg" alt="produto">
          <div class="row">
              <div class="col-sm-6">
                  <h4>Escritório</h4>
                  <p>Rua José Duda, 12, <br/> bairro Cajuru</p>
              </div>
              <div class="col-sm-6">
                  <h4>Escritório</h4>
                  <p>Rua José Duda, 12, <br/> bairro Cajuru</p>
              </div>
              <div class="col-sm-6">
                  <h4>Escritório</h4>
                  <p>Rua José Duda, 12, <br/> bairro Cajuru</p>
              </div>
              <div class="col-sm-6">
                  <h4>Escritório</h4>
                  <p>Rua José Duda, 12, <br/> bairro Cajuru</p>
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
             <p>Atendemos de Segunda a Sexta-feira das 9:00 as 18:00</p>
             <div class="button">Ligue Agora</div>
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
var janela = $(window).width();
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

    // handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id_selector = $(this).attr("id");
      var id = id_selector.substr(id_selector.length -1);
      id = parseInt(id);
      $('#myCarousel').carousel(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $(this).addClass('selected');
    });

    // when the carousel slides, auto update
    $('#myCarousel').on('slid', function (e) {
      var id = $('.item.active').data('slide-number');
      id = parseInt(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $('[id=carousel-selector-'+id+']').addClass('selected');
    });
</script>
