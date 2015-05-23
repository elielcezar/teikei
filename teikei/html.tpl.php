<!DOCTYPE html>
<html>
	<head>
 
<?php print $head; ?>
<title><?php print $head_title; ?></title>

<?php if ($is_front):  ?> 
       
      <link rel="image_src" href="<?php print base_path() . path_to_theme() .'/' ?>img/capa-fb.jpg" />
      <meta name="robots" content="all" />            
      <meta name="description" content="O Golden Hair Cabeleireiros e Estética tem como missão transformar o sonho da mulher em realidade, deixando-a mais linda, satisfeita, contente e com sua auto-estima elevada. Nós amamos o que fazemos!" />
      <meta name="keywords" content="salão de beleza, golden hair, estética, caeblo, maquiagem, podologia, depilação, manicure, pedicure" />

      <meta property="og:locale" content="pt_BR"> 
      <meta property="og:url" content="http://www.goldenhair.com.br">       
      <meta property="og:title" content="<?php print $head_title; ?>">
      <meta property="og:site_name" content="Golden Hair">       
      <meta property="og:description" content="O Golden Hair Cabeleireiros e Estética tem como missão transformar o sonho da mulher em realidade, deixando-a mais linda, satisfeita, contente e com sua auto-estima elevada. Nós amamos o que fazemos!">       
      <meta property="og:image" content="<?php print base_path() . path_to_theme() .'/' ?>img/capa-fb.jpg">
      <meta property="og:image:type" content="image/jpeg">       
      <meta property="og:type" content="website">
      
<?php endif; ?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php print $scripts; ?>
<link href="<?php print base_path() . path_to_theme() .'/' ?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php print base_path() . path_to_theme() .'/' ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php print base_path() . path_to_theme() .'/' ?>css/animate.css" rel="stylesheet">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php print $styles; ?>
        
<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,600,700,300' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONT-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body data-spy="scroll" data-target=".navbar" class="<?php print $classes; ?>" <?php print $attributes;?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '488099737997233',
      xfbml      : true,
      version    : 'v2.2'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4170806-20', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>