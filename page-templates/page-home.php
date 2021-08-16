<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<section class="banner">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							
							<div class="left cell small-12 xmedium-6">
								<div class="inner">
									<h1><?php the_field('banner_heading');?></h1>
									<?php 
									$link = get_field('button_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									<div class="btn-wrap">
									    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="right cell small-12 xmedium-6">
								<div class="inner slider-wrap">
									<?php if( have_rows('banner_slider') ):?>
									<div class="img-slider fade">
										<?php while ( have_rows('banner_slider') ) : the_row();?>
										
											<?php 
											$image = get_sub_field('single_slide');
											if( !empty( $image ) ): ?>
											<div class="slide">
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif; ?>
									
										<?php endwhile;?>
									</div>
									<div class="slider-progress">
										<span></span>
									</div>								
									<?php endif;?>								
								</div>
							</div>			
							
						</div>			
					</div>
				</section>
				
				<section class="s1">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							<div class="left cell small-12 xmedium-4">
								<?php 
								$image = get_field('accent_image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
							</div>
							<div class="right cell small-12 xmedium-8">
								<h2 class="font-alt"><?php the_field('s1_heading');?></h2>
								<p><?php the_field('s1_copy');?></p>
							</div>					
						</div>
					</div>
				</section>

				<section class="s2">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<div class="heading-wrap cell small-12">
								<div class="grid-x grid-padding-x align-middle">	
									<div class="cell shrink">
										<h2 class="font-alt"><?php the_field('s2_heading');?></h2>
									</div>
									<div class="cell auto">
										<div class="line"></div>	
									</div>
								</div>
							</div>
							
							<div class="left cell small-12 xmedium-3">
								
								<?php if( have_rows('top_step_card') ):?>
								<div class="step-card">
									<div class="inner">
										
										<?php while ( have_rows('top_step_card') ) : the_row();?>
											<?php 
											$image = get_sub_field('icon');
											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>	
											
											<div class="text-wrap">
												<h3 class="h2"><?php the_sub_field('heading');?></h3>
												<p><?php the_sub_field('text');?></p>
												<?php 
												$link = get_sub_field('button_link_optional');
												if( $link ): 
												    $link_url = $link['url'];
												    $link_title = $link['title'];
												    $link_target = $link['target'] ? $link['target'] : '_self';
												    ?>
												<div class="btn-wrap">
												    <a class="button secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												</div>
												<?php endif; ?>
											</div>
									
										<?php endwhile;?>
										
									</div>
								</div>
								<?php endif;?>
						
							</div>
							<div class="right cell small-12 xmedium-9 large-7 large-offset-2">
								<?php
								// Load value.
								$iframe = get_field('s2_video_url');
								
								// Use preg_match to find iframe src.
								preg_match('/src="(.+?)"/', $iframe, $matches);
								$src = $matches[1];
								
								// Add extra parameters to src and replcae HTML.
								$params = array(
								    'controls'  => 0,
								    'hd'        => 1,
								    'autohide'  => 1
								);
								$new_src = add_query_arg($params, $src);
								$iframe = str_replace($src, $new_src, $iframe);
								
								// Add extra attributes to iframe HTML.
								$attributes = 'frameborder="0"';
								$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
								
								// Display customized HTML.
								echo $iframe;
								?>
								
								
								<?php the_field('homebot_script');?>
								
							</div>							
						</div>
						
						<div class="bottom grid-x grid-padding-x small-up-1 medium-up-2 xmedium-up-3">
							
							<?php if( have_rows('bottom_step_cards') ):?>
								<?php while ( have_rows('bottom_step_cards') ) : the_row();?>	
									<?php if( have_rows('single_step_card') ):?>
									<div class="step-card cell">
										<div class="inner">
											
											<?php while ( have_rows('single_step_card') ) : the_row();?>
												<?php 
												$image = get_sub_field('icon');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>	
												
												<div class="text-wrap">
													<h3 class="h2"><?php the_sub_field('heading');?></h3>
													<p><?php the_sub_field('text');?></p>
													<?php 
													$link = get_sub_field('button_link_optional');
													if( $link ): 
													    $link_url = $link['url'];
													    $link_title = $link['title'];
													    $link_target = $link['target'] ? $link['target'] : '_self';
													    ?>
													<div class="btn-wrap">
													    <a class="button secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
													</div>
													<?php endif; ?>
												</div>
										
											<?php endwhile;?>
											
										</div>
									</div>
									<?php endif;?>
								<?php endwhile;?>
							<?php endif;?>

						</div>
						
					</div>
				</section>
				
				<section class="offerings red-gray">
					<div class="grid-container fluid">
						<div class="grid-x grid-padding-x align-middle">
							
							<div class="cell small-12 xmedium-auto">	
						
								<div class="grid-x grid-padding-x">
						
									<div class="cell small-12 xmedium-shrink primary-bg">
										<div class="inner primary-bg">
											<h2 class="font-alt"><?php the_field('offerings_heading');?></h2>
										</div>
									</div>
		
									<div class="cell auto gray-bg">
											<div class="inner left">
												<h3 class="h2 color-secondary"><?php the_field('package_1_heading');?> <span class="color-white"><?php the_field('package_1_price');?></span></h3>
												<p class="color-white"><?php the_field('package_1_description');?></p>
											</div>
									</div>
									
								</div>
							
							</div>
									
							<div class="right cell small-12 large-shrink">
								<div class="inner">
									<?php 
									$image = get_field('offerings_accent_image');
									if( !empty( $image ) ): ?>
									    <img class="show-for-xmedium" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<div class="secondary-bg">
										<h3 class="h2"><?php the_field('addition_heading');?></h3>
										<p><?php the_field('addition_items');?></p>
									</div>
								</div>
							</div>
									

							
						</div>
					</div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">			
								<?php if( have_rows('offerings_slider') ):?>
									<div class="img-slider slide-left">
										<?php while ( have_rows('offerings_slider') ) : the_row();?>
										
											<?php 
											$image = get_sub_field('single_slide');
											if( !empty( $image ) ): ?>
											<div class="slide">
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif; ?>
									
										<?php endwhile;?>
									</div>
									<div class="slider-progress">
										<span></span>
									</div>	
								<?php endif;?>	
							</div>
						</div>
					</div>
					
				</section>	
				
				<section class="s4">
					<div class="bg" style="background-image: url(<?php the_field('s4_background_image');?>)"></div>
					<div class="mask"></div>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							<div class="cell small-12 medium-8">
								<h2 class="color-white"><?php the_field('s4_heading');?></h2>
								<h3 class="color-white"><?php the_field('s4_sub-heading');?></h3>
								<div class="color-white large-text"><?php the_field('s4_copy');?></div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="faqs">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="left cell small-12 xmedium-3">
								<h2 class="font-alt"><?php the_field('faqs_heading');?></h2>
							</div>
							<div class="right cell small-12 xmedium-9">
								
								<?php if( have_rows('faqs') ):?>
								<ul class="accordion" data-accordion data-allow-all-closed="true">
									<?php while ( have_rows('faqs') ) : the_row();?>
									
										<?php if( have_rows('single_faq') ):?>
											<?php while ( have_rows('single_faq') ) : the_row();?>	
												<li class="accordion-item" data-accordion-item>
													<a href="#" class="accordion-title"><?php the_sub_field('question');?></a>
												
													<div class="accordion-content" data-tab-content>
														<?php the_sub_field('answer');?>
													</div>
												</li>
											<?php endwhile;?>
										<?php endif;?>

									<?php endwhile;?>
								</ul>
								<?php endif;?>	
																
							</div>
						</div>
					</div>
				</section>	
				
				<section class="testimonials red-gray">
					<div class="grid-container fluid">
						<div class="grid-x grid-padding-x">	

							<div class="cell small-12 medium-shrink primary-bg">
								<div class="inner primary-bg">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg">
									<h2 class="font-alt"><?php the_field('testimonial_heading');?></h2>
								</div>
							</div>

							<div class="right cell auto gray-bg">
								<div class="grid-x grid-padding-x align-middle">
									<div class="inner left cell small-12">
										<?php if( have_rows('testimonial_slider') ):?>
										<div class="testimonial-slider">
											<?php while ( have_rows('testimonial_slider') ) : the_row();?>	
											
											<?php if( have_rows('single_testimonial') ):?>
												<?php while ( have_rows('single_testimonial') ) : the_row();?>	
												<div class="single-testimonial">
													<p class="color-white"><?php the_sub_field('quote');?></p>
													<p class="color-white"><?php the_sub_field('author');?></p>
												</div>
												<?php endwhile;?>
											<?php endif;?>
										
											<?php endwhile;?>
										</div>
										<div class="slider-progress">
											<span></span>
										</div>	
										<?php endif;?>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</section>	
				
				<section class="team">
					<div class="grid-container">
						<div class="heading grid-x grid-padding-x">
							<div class="cell small-12 medium-4 large-3"><h2 class="font-alt"><?php the_field('team_heading');?></h2></div>
							<div class="cell small-12 medium-8 large-9"><p><?php the_field('team_text');?></p></div>
						</div>
						<div class="team-grid grid-x grid-padding-x small-up-2 medium-up-4">
							
							<?php if( have_rows('team_members') ):?>
								<?php while ( have_rows('team_members') ) : the_row();?>	
								
								<?php if( have_rows('single_team_member') ):?>
									<?php while ( have_rows('single_team_member') ) : the_row();?>	
									
									<div class="cell">
										<?php 
										$image = get_sub_field('photo');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
										
										<div class="text-wrap">
											<h2><?php the_sub_field('name');?></h2>
											<p><?php the_sub_field('title');?></p>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
							
						</div>
					</div>
				</section>		
				
				<section class="cta">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							
							<div class="cell small-12 medium-shrink">
								<h2><?php the_field('cta_heading');?></h2>
							</div>
							
							<div class="cell small-12 medium-auto">
								<?php 
								$link = get_field('cta_button_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								<div class="btn-wrap text-right">
								    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</div>
								<?php endif; ?>
							</div>
							
						</div>
					</div>
				</section>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>