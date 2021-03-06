<?php if(!defined('BASEPATH'))exit('No direct script access allowed'); ?>
<nav id="navbar" class="navbar navbar-extend fixed">
	<ul class="nav-extras">
		<div class="translate-toggle">
			<a class="extra-item"><span class="language-img language-img__nl"></span><li class="toggle-translate__text"><small>NL</small></li></a>
			<a class="extra-item"><span class="language-img language-img__en"></span><li class="toggle-translate__text"><small>EN</small></li></a>
		</div>
	</ul>
	<ul class="nav-logo pull-left">
		<li class="nav-item logo">
			<a href="<?php echo base_url(); ?>">
		    	<img id="logo-img" class="logo-img" src="<?php echo base_url(); ?>resources/img/logos/oosterpoort_logo.png" alt="Oosterpoort">
			</a>
		</li>
	</ul>
	<ul class="nav-content-mobile pull-right">
		<button id="js-mobile-toggle-button" class="mobile-toggle" type="button">
			<span><i class="fas fa-bars"></i></span>
			<span class="hidden"><i class="fa fa-times"></i></span>
		</button>
	</ul>
	<ul class="nav-content pull-right">
		<li class="nav-item nav-searchbox">
			<div class="inner-addon right-addon">
				<span class="icon"><i class="fa fa-search fa-sm"></i></span>
				<input class="searchbox-input" type="text" name="nav-searchbox" placeholder="Zoeken...">
			</div>
		</li>
		<a class="page-scroll nav-item" href="<?php echo base_url(); ?>register"><li class="nav-item__text">Registreren</li></a>
		<a class="page-scroll nav-item" href="<?php echo base_url(); ?>login"><li class="nav-item__text">Login</li></a>
	</ul>
	<ul class="nav-content nav-menu">
		<!-- public pages that are also shown when logged in -->
		<div>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>agenda"><li class="nav-item__text">Programma</li></a>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>locaties"><li class="nav-item__text">Locaties</li></a>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>geschiedenis"><li class="nav-item__text">Geschiedenis</li></a>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>restaurant"><li class="nav-item__text">Restaurant</li></a>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>contact"><li class="nav-item__text">Contact</li></a>
			<a class="page-scroll nav-item" href="<?php echo base_url(); ?>zakelijk"><li class="nav-item__text">Zakelijk</li></a>
		</div>
	</ul>
</nav>