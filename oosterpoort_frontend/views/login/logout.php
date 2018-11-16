<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section>
	<div class="box text-center middle-of-screen">
		<div class="row">
			<h1>Je bent uitgelogd</h1>
			<span><i class="fa fa-smile-beam fa-3x"></i></span>
		</div>
		<p>Je wordt doorgestuurd in <span id="counter">3</span> seconden.</p>
	</div>
</section>

<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>