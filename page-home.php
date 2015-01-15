<?php
/*
 Template Name: Home Page
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

									<h1 class="page-title h2">The Attea Group</h2>


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

							<?php wp_reset_postdata(); ?>
							

						</main>

				</div>
			</div>
			<div id="services-outer" class="cf">
				<div class="inner-services wrap cf">
					<div class="services services-home cf">
					<a name="services"></a>
					<header class="article-header">
					<h2>Our Services</h2>
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
						<div class="owl-carousel">
					<?php // WP_Query arguments
							$args = array (
								'post_type'              => 'ag_testimonials',
								'post_status'            => 'publish',
								'posts_per_page'         => '8',
								'orderby'                => 'title',
								'order'					 => 'ASC',
							);
							
							// The Query
							$testmonial = new WP_Query( $args );
							
							// The Loop
							if ( $testmonial->have_posts() ) {
								while ( $testmonial->have_posts() ) {
									$testmonial->the_post(); ?>
									<div class="ag-testimonial-outer">
										<div class="ag-testimonial">
										<p><?php the_content(); ?></p>
										</div>
										<span class="testimonial-author"><?php the_field('testimonial_author'); ?></span><br>
										<span class="author-title"><?php the_field('author_title'); ?></span><br>
										<a class="author-company-link" href="<?php the_field('author_company_link'); ?>"><?php the_field('author_company'); ?></a>
									</div>

								<?php }
							} else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata(); ?>
							</div>
					</section>

				</div>
			</div>

			<div class="approach-outer cf">
			<a name="approach"></a>
				<div class="approach-wrap wrap cf">
				
					<header class="article-header">
					<h2>Our Approach</h2>
					</header>




					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content cf" itemprop="articleBody">

							<div class="approach-intro">
						<?php the_field('approach_intro'); ?>
					</div>
								<?php

									/*
									*  Loop through a Repeater field
									*/
									
									if( get_field('ag_approach') ): ?>
									
										<?php while( has_sub_field('ag_approach') ): ?>
									<div class="approach">
										<h3><?php the_sub_field('approach_name'); ?></h3>
											    
										<section class="approach-content"><?php the_sub_field('approach_content'); ?></section>
											
									</div>
									
										<?php endwhile; ?>
									
									<?php endif; ?>

							</section>


								<footer class="article-footer">

             

								</footer>

							

							</article>
					
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
					<h2>Select Clients</h2>
					</header>


					<div class="clients">
						<?php if( have_rows('ag_clients') ): ?>

						
							<ul class="nostyle client-list grid cs-style-3">

							<?php while( have_rows('ag_clients') ): the_row(); 

								// vars
								$image = get_sub_field('ag_client_logo');
								$name = get_sub_field('ag_client_name');
								$site = get_sub_field('ag_client_website');

								?>
								<li class="client">
									<figure>
										<div class="client-image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $name ?>" target="_blank" /></div>
										<figcaption>
											<h3><?php echo $name ?></h3>
											<?php if( have_rows('ag_client_services') ): ?>

											<div class="client-services-outer">

											<ul class="client-services">
										
											<?php while( have_rows('ag_client_services') ): the_row(); 
										
												// vars
												$service = get_sub_field('ag_client_service');
								
										
												?>
										
												<li class="client-service">
										
													<?php if( $service ): ?>
														<?php echo $service; ?>
													<?php endif; ?>
										
														
										
												</li>
										
											<?php endwhile; ?>
										
											</ul>

											</div>
										
										<?php endif; ?>
											<a class="client-trigger">See More</a>

											
										</figcaption>
									</figure>

									<div class="client-more">


										<h2><a href="<?php echo $site; ?>" target="_blank"><?php echo $name ?></a></h2>

											<p class="client-website"><a href="<?php echo $site; ?>" target="_blank"><?php echo $site; ?></a></p>
								

											<?php if( have_rows('ag_client_bullets') ): ?>

												<ul class="client-bullets">
											
												<?php while( have_rows('ag_client_bullets') ): the_row(); 


											
													// vars
													$bullet = get_sub_field('ag_client_bullet');
													
											
													?>
											
													<li class="client-bullet">
											
														<?php if( $bullet ): ?>
															<?php echo $bullet; ?>
														<?php endif; ?>
											
													</li>
											
												<?php endwhile; ?>
											
												</ul>
											
											<?php endif; ?>

											<a class="client-close">Close</a>

											</div>

							<?php endwhile; ?>

							</ul>

							<?php endif; ?>

							
					</div>
								</li>
					<div class="additional-clients-outer">
						<div class="additional-clients">
						<header class="article-header">
					<h2>Additional Work</h2>
					</header>
							<?php if( have_rows('ag_additional_clients') ): ?>

								<ul class="nostyle additional-clients-list">
							
								<?php while( have_rows('ag_additional_clients') ): the_row(); 
							
									// vars
									$name = get_sub_field('ag_additional_client_name');
									$service = get_sub_field('ag_additional_client_service');
									$link = get_sub_field('ag_additional_client_website');
							
									?>
							
									<li class="additional-client">

										<p><a href="<?php echo $link; ?>"><?php echo $name; ?></a> | <?php echo $service; ?></p>
							
							
									</li>
							
								<?php endwhile; ?>
							
								</ul>
							
							<?php endif; ?>
						</div>
					</div>
					
				</div>
			</div>

			</div>


<?php get_footer(); ?>
