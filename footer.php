			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<a name="contact"></a>
				<div id="inner-footer" class="wrap cf">

					<div class="contact-outer">
						<div class="contact">
							<h2>Contact Us</h2>
							<?php the_field('ag_contact'); ?>
						</div>

					</div>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<script>
		jQuery(document).ready(function($){
  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:10000,
    nav: true,
    slideBy: 4,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,

        },
        1030:{
            items:3,
        },
        
    }		
});
});

jQuery(document).ready(function($) {
//all heading 1s
    $('h1, h2, h3, p').widowFix();

});
</script>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
