<?php
/*
 Template Name: Home Page Test
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

			<div class="home-outer">
				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								

								<section class="entry-content cf" itemprop="articleBody">
								<header class="article-header">

									<h2 class="page-title"><strong>The Attea Group</strong></h2> <h3>enables foundations, nonprofits and philanthropists to achieve greater impact.</h3>


								</header>
								<div class="home-content">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

									?>
								</div>
								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

							

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							

						</main>

				</div>
			</div>
			<div id="services-outer" class="cf">
				<div class="inner-services wrap cf">
					<div class="services services-home cf">
					<a name="services"></a>
					<header class="article-header">
					<h2>Our Services</h2>
<h3>Optimizing and growing your organization involves careful planning, best-in-class leadership and operational excellence.</h3>
					</header>
			
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content services-wrap cf" itemprop="articleBody">
								<?php

									/*
									*  Loop through a Repeater field
									*/
									
									if( get_field('ag_services') ): ?>
									
										<?php while( has_sub_field('ag_services') ): ?>
									<div class="service">
										<h3><?php the_sub_field('ag_service_name'); ?></h3>
											    
										<section class="service-content"><?php the_sub_field('ag_service_info'); ?></section>
											
									</div>
									
										<?php endwhile; ?>
									
									<?php endif; ?>

							</section>


								<footer class="article-footer">

             

								</footer>

							

							</article>
								
						</div>
					</div>
				</div>

			<a name="testimonials"></a>
			<div class="testimonials-outer cf">
				<div class="testimonials-wrap wrap cf">
					
					<section class="ag-testimonials m-all cf">
					<?php echo do_shortcode('[hms_testimonials group="1" template="25" order="random" direction="ASC" limit="3"]'); ?>
					</section>

				</div>
			</div>

			<div class="approach-outer cf">
			<a name="approach"></a>
				<div class="approach-wrap wrap cf">
				
					<header class="article-header">
					<h2>Our Approach</h2>
					</header>


					<div class="approach">
						<?php the_field('ag_approach'); ?>
					</div>
					
				</div>
			</div>

			<div class="about-outer cf">
			<a name="about"></a>
				<div class="about-wrap wrap cf">
				
					<header class="article-header">
					<h2>About Us</h2>
					</header>


					<div class="about">
						<?php the_field('ag_about_us'); ?>
					</div>
					
				</div>
			</div>

			<div class="clients-outer cf">
			<a name="clients"></a>
				<div class="clients-wrap wrap cf">
				
					<header class="article-header">
					<h2>Our Clients</h2>
					</header>


					<div class="clients">
						<?php if( have_rows('ag_clients') ): ?>

	<ul class="nostyle client-list">

	<?php while( have_rows('ag_clients') ): the_row(); 

		// vars
		$image = get_sub_field('ag_client_logo');
		$name = get_sub_field('ag_client_name');
		$link = get_sub_field('ag_client_website');

		?>

		<li class="client">

			
				<a href="<?php echo $link; ?>">
			

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $name ?>" target="_blank" />

		 
				</a>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
					</div>
					
				</div>
			</div>

			</div>


<?php get_footer(); ?>
