		</div>

		<script type="text/javascript">var base = '<?php echo theme_url(); ?>';</script>
		<!--[if lt IE 9]>
			<script src="<?php echo theme_url('/js/polyfill.min.js'); ?>"></script>
		<![endif]-->
		<script type="text/javascript" async src="<?php echo theme_url('/js/main.min.js'); ?>"></script>

		<!-- Special JS for individual articles -->
		<?php if(customised()): ?>
    		<!--  Custom Javascript -->
    		<script type="text/javascript" async><?php echo article_js(); ?></script>
		<?php endif; ?>

		<!-- Google: putting the 'anal' in Analytics -->
		<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-18052288-3', 'auto');ga('send', 'pageview');</script>
  </body>
</html>