		</div>
	</div>

	<!--
		Temporarily removed the loading of JQuery and any of the sites JavaScript because currently
		it doesn't have any requirement for JS functionality.

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.8.1.min.js"><\/script>')</script>
	-->

	<!-- scripts concatenated and minified via build script -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/prism.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/webp.js"></script>
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
