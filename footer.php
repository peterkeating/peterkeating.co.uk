	</div>
	
	<footer>
		<div class="content">
			<div id="to-the-top">Top</div>
		</div>
	</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.8.0.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via build script -->
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<!-- end scripts -->

	<?php
	if(!current_user_can('level_10')) {
	?>
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	<?php } ?>
</body>
</html>
