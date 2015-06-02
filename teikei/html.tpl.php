<!DOCTYPE html>
<html>
	<head>

<?php print $head; ?>
<title><?php print $head_title; ?></title>

<?php if ($is_front):  ?>

      <link rel="image_src" href="<?php print base_path() . path_to_theme() .'/' ?>img/capa-fb.jpg" />
      <meta name="robots" content="all" />
      <meta name="description" content="A Teikei é especializada em soluções em tecnologia endoscopica" />
      <meta name="keywords" content="endoscopia, tecnologia, teikei" />

      <meta property="og:locale" content="pt_BR">
      <meta property="og:url" content="http://www.teikei.com.br">
      <meta property="og:title" content="<?php print $head_title; ?>">
      <meta property="og:site_name" content="Teikei">
      <meta property="og:description" content="A Teikei é especializada em soluções em tecnologia endoscopica">
      <meta property="og:image" content="">
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
<link href='http://fonts.googleapis.com/css?family=Lato:400,900,300' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONT-->

</head>
<body data-spy="scroll" data-target=".navbar" class="<?php print $classes; ?>" <?php print $attributes;?>>


<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>



</body>
</html>
