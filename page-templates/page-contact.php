<?php 
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    <div class="grid-container">
				    
				    <div class="banner grid-x grid-padding-x">
					    
					    <div class="left cell small-12 xmedium-6 large-5 xlarge-4">
					    	<h1><?php the_field('heading');?></h1>
					    </div>
					    
					    <div class="right cell small-12 xmedium-6 large-7 xlarge-8">
						    <div class="secondary-bg">
						    	<p class="large-text"><?php the_field('copy');?></p>
						    </div>
					    </div>
					    
				    </div>

				    <div class="sub-banner grid-x grid-padding-x">
					    
					    <div class="left cell small-12 xmedium-6 large-5 xlarge-4">
					    	<h2 class="font-alt"><?php the_field('sub-heading');?></h1>
					    </div>
					    
					    <div class="right cell small-12 xmedium-6 large-7 xlarge-8">
							<div class="inner">
								<div><?php the_field('company_name', 'option');?></div>
								<div>
									<a href="tel:<?php the_field('phone_1', 'option');?>"><?php the_field('phone_1', 'option');?></a>
									<span>|</span>
									<a href="tel:<?php the_field('phone_2', 'option');?>"><?php the_field('phone_2', 'option');?></a>
								</div>
								<div><a href="mailto:<?php the_field('email_address', 'option');?>"><?php the_field('email_address', 'option');?></a></div>
								<div><a href="<?php the_field('directions_link', 'option');?>" target="_blank"><?php the_field('address', 'option');?></a></div>
							</div>
					    </div>
					    
				    </div>
				    
				    <div class="grid-x grid-padding-x">
					    <div class="cell small-12 medium-12 large-8 large-offset-2">
						<div class="book-text large-text text-center">
							
							<?php 
							$link = get_field('book_call_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
							
						</div>		
							<?php gravity_form( 1, false, false, false, '', true );?>							
					    </div>
				    </div>
			    </div>
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>