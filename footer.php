		</div>
	</div>

	<!-- scripts concatenated and minified via build script -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/prism.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/webp.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/message.js"></script>
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
