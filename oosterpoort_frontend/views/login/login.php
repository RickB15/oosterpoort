<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>	
    <link href="/<?php echo $file; ?>/resources/css/login.css" rel="stylesheet" type="text/css" />
</head>
<form id="login-form" action="/<?php echo $file; ?>/storage/database/login.inc.php" method="post" class="middle-of-box text-center m-t-30">
	<div class="row">
		<h1>Login</h1>
	</div>
	<div class="row">		
        <div class="c1-w8 p4">
          <a href="/<?php echo $file; ?>/index.php">
            <span class="login-icon"><i class="fa fa-user-circle fa-6x"></i></span>
          </a>
        </div>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="c1-w8">
				<small><span><i class="fa fa-user"></i></span></small>
				<input type="text" name="username" placeholder="gebruikersnaam of email" required="true" value="">
				<br>
				<small><span><i class="fa fa-unlock"></i></span></small>
				<input type="password" name="password" placeholder="wachtwoord" required="true" value="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="c1-w8">
				<a href="./register">nog geen account?</a><br>
				<a href="#">wachtwoord vergeten?</a>
			</div>
		</div>
	</div>		
	<div class="horizontal-middle horizontal-middle--c-middle pull-right">
     <label for="login-submit-button" class="login-submit-button">
       <span id="login-submit-span" class="fa-stack fa-size">
         <i class="fa fa-circle fa-stack-2x login-circle"></i>
         <small><i class="fa fa-arrow-right fa-stack-1x login-arrow"></i></small>
       </span>
     </label>
     <input id="login-submit-button" class="hidden" type="submit" name="login-submit"></input>
   </div>
</form>