	<!--Footer start -->
	<footer>
	    <div class="container">
	    	<?php if ( function_exists('the_custom_logo') ) : ?>
		        <div class="ft-logo">
		            <?php the_custom_logo(); ?>
		        </div>
		    <?php endif;?>
	        <!--ft-logo end-->
	        <div class="clearfix"></div>
	    </div>
	</footer>
	<!-- Footer end-->
</div>
<?php wp_footer(); ?>
</body>
</html>
