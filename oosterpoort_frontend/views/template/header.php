<?php if(!defined('BASEPATH'))exit('No direct script access allowed'); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="HTML,CSS,JavaScript,jQuery,php">
  <meta name="description" content="Oosterpoort Groningen theater">
  <meta name="author" content="Kevin Kerkhofs en Rick Blanksma">

  <title><?php echo $title; ?></title>

  <link href="<?php echo base_url(); ?>resources/img/favicon/favicon.png" rel="shortcut icon" type="image/png" />
  <!--<link href="<?php echo base_url(); ?>resources/css/style.ie.css" rel="stylesheet" type="text/css" />-->
  <!--<link href="" rel="license" />-->

  <script src="<?php echo base_url(); ?>resources/js/jquery/jquery-3.3.1.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/jquery/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/fontawesome/all.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/template/skeleton.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/template/nav.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/annimations/scroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/annimations/annimations.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>resources/js/img.error.js" type="text/javascript"></script>
  <?php
  if( file_exists(FCPATH.'resources/js/public_pages/'.$page.'.js') && filesize(FCPATH.'resources/js/public_pages/'.$page.'.js') > 0 ) {
  ?>
  <script src="<?php echo base_url(); ?>resources/js/public_pages/<?php echo $page; ?>.js" type="text/javascript"></script>
  <?php
  }
  ?>

  <noscript>Sorry, your browser does not support JavaScript!</noscript>

  <!--[if lt IE 9]><!-->
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <!--<![endif]-->
  <!--[if !IE]><!-->
  <link href="<?php echo base_url(); ?>resources/css/core/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/core/grid.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/core/spacing.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/template/nav.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/template/skeleton.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/template/footer.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/template/sections.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/fonts/fonts.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>resources/css/annimations/annimations.css" rel="stylesheet" type="text/css" />
  <?php
  if( file_exists(FCPATH.'resources/css/public_pages/'.$page.'.css') && filesize(FCPATH.'resources/css/public_pages/'.$page.'.css') > 0 ) {
  ?>
  <link href="<?php echo base_url(); ?>resources/css/public_pages/<?php echo $page; ?>.css" rel="stylesheet" type="text/css"></link>
  <?php
  }
  ?>
   <!--<![endif]-->
</head>