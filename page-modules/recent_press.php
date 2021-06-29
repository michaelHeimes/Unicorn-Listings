<?php
	$num_posts = get_sub_field('number_of_post_to_show');
	$press_cat = get_sub_field('category_to_show');
?>

<section class="recent-press module green-bg<?php if ( $num_posts == 'all' ):?> all-posts<?php endif;?>">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x align-middle">

			<div class="cell auto text-center">
				<?php
					
					if ( $num_posts == 'all' ) {?>
						<div class="heading-wrap">
							<h2>				
								<svg xmlns="http://www.w3.org/2000/svg" width="66.909" height="35.162" viewBox="0 0 66.909 35.162">
								  <g id="Group_553" data-name="Group 553" transform="translate(-46.151 -261.497)">
								    <path id="Path_204" data-name="Path 204" d="M740.722,664.7a5.472,5.472,0,0,1-.271-1.787c.17-.144-.418-.534-.536-.553-.748-.123-.512,1.325-.542,1.782.177-.1.668-.467.773-.033-.671.758.617.828.575.59Z" transform="translate(-642.111 -371.306)" fill="#fff"/>
								    <path id="Path_205" data-name="Path 205" d="M749.913,706.576l.29-.079c-.417-.643-1.24-.931-1.271.118-.017.573-.239,1,.44,1s.406-.487.54-1.043C749.989,706.555,749.882,706.706,749.913,706.576Z" transform="translate(-650.932 -411.663)" fill="#fff"/>
								    <path id="Path_206" data-name="Path 206" d="M112.617,285.982c-2.139.049-4.276.075-6.415.056-.969-.008-1.936,0-2.9-.072,0-1.172-.157-2.373-.257-3.542-.38-4.469-.706-8.942-1.069-13.412-.165-2.03-.351-4.063-.465-6.1-.067-1.2.17-1.213-1.07-1.183-1.109.027-52.724-.223-53.756-.238-.355,0-.235,2.536-.252,2.912-.087,1.972-.2,3.943-.274,5.917-.1,2.868,1.492-.393,2.571-.579.672-.115.4-.365,1-.63.382-.17-.207-.413.472-.564.26-.058.256-.285.464-.377a5.462,5.462,0,0,0,1.155-.864,1.484,1.484,0,0,0,.381-.825c.281.033.545.195.677-.1.31.222.824.759,1.205.818.016,0,.526-.8.608-.882.779-.032.808-1.711,1.725-1.385-.183-.369.4-1.462.553-1.462a2.161,2.161,0,0,0,2.24,1.93,2.124,2.124,0,0,1,.708.3c.348.147.771-.03,1.148.039.771.142.581-.678,1.241-.426-.018-.128-.455-.862-.437-.873.24-.137.484.283.824.066.014-.009-.47-.6-.456-.745.09.047.58.391.693.318a.5.5,0,0,0,.013-.365c.3.049.291.057.374-.232.22.076,1.254.664,1.376.256.108-.362.7-.543.531-.876.851-.282,1.325-.479,2.157.148.429.323.608,1,1.035,1.262a1.219,1.219,0,0,0,.723-.039.661.661,0,0,0,.21.378c.33.073-.065-.547.566-.341.527.173.109-.331.677-.165,1.232.36-.473.905-.479,1.011s.4.638.441.865a.526.526,0,0,0,.491-.33c.023.138-.344.448-.276.5.516.376.663.042,1.113.183-.258.161-.6.86-.484,1.059.2.332.568.133.751.393.324.461-.094.505-.007.806.2.694-.375.8.531,1.1.46.152.581-.028,1.043.205.288.145.955.022,1.169.188.354.274.267.7.809.863,1.407.428.126,1.231-.151,1.923-.29.723,1.028,1.583,1.6,1.719a8.533,8.533,0,0,1,1.559.26c.7.31.8.374.868,1,.054.521.586.6.994.645.581.064.743.283,1.112.707l1.18-1.225,1.45,1.6c.582.64-.146.9-.673,1.423s-.874.777-.87,1.567c.005,1.015-.079.361-.554.779-.45.4-.841.6-.833,1.224,0,.385.455.865-.336.835-.575-.022-1.487,1.57-1.63,2.056a3.515,3.515,0,0,0,.358,2.34c.834,1.075,1.4-.694,2.036-.555.951.208,1.135-1.54,1.774.122.218.566.083,1.057.706,1.383a.78.78,0,0,1,.42.708l1.193.74a.65.65,0,0,0-.1-.855c1.047.061.321.663.69,1.1.45.538.829-.015,1.177.142.469.21,1.326.134,1.869.3.727.227.885.991,1.072,1.617.494-.39.707.271.914.614.137-.225.031-.367.162-.6.339-.593.5.574.716.493.174-.064,1.239,1.067,1.438,1.311a2.964,2.964,0,0,0-.113-1.042c-.083-.518.026-.47.108-.917s-1.007-1.728-1.17-2.25c-.106-.338.154-.495.312-.739.143-.22-.583-.3-.474-.674.1-.332.552-.862.2-1.207-.315-.31-.629-.691-.91-1.029a3.1,3.1,0,0,1-.966-2.178c.02-1.033-.394-2.064-.2-3.066.087-.455-.741-.341-.139-1.127.256-.334,1.208-1.52.263-1.458.164-.693.322-1.045.872-1.034-.016-.2.211-.749.014-.815-.139-.046-.409-.44-.141-.474.55-.07,1.4-.727.762-1.283s.205-1.516-.636-2.055c-.314-.2-1.8-.871-.949-1.434.3.34,1.084.669,1.34.3.173-.25.406-.359.593-.586.351-.429-.516-.412-.045-.681.51-.291-.105-.884.758-.6.234-.287.118-.633.012-1.009.666-.1.776.418.607,1,.475.029.248-.491.695-.7-.391-.691.309-.14.622-.419.411-.366.686-.679,1.1-1,.313-.241,1.19-.575,1.049-1-.151-.463-.624-.132-.752-.553-.206-.677.637-1.077,1.133-1.114.145-.011,1.112-.486,1.015.018-.063.33-.792,1.631-.575,1.879-.12-.137,1.049-.169.27.3-.113.067-.9.79-.67.9.381.189.518-.209.518.343-.41.151-.731-.064-1.174-.049-.612.02-.668.7-1.133.7-.658,0-.13.971-.7,1.242-.5.24-.821,1.509-.981,2-.191.589.46.835.593,1.516.064.325-.417,1.908.543,1.458-.382-.773-.207-1.655.758-1.518-.074.39-.4.435-.508.762-.115.351.531.829.184,1.07-.948.658-1.713.448-1.99-.817-.5.195-1.454,3.772-.924,3.964.09-.178.05-.432.363-.394s-.058-.9.319-1.071c.406.636.374-.34.725-.572a.4.4,0,0,0,.262.422c.364-.09-.229-.51.377-.443.582.064.373.981.407,1.356.026.281.357.922-.05,1.069-.49.178-.734-.409-.912-.717-.18-.041-.675.994-.74,1.162a3.357,3.357,0,0,0-.386,1.1c-.006.057-.079,1.326.072,1.238.5-.292.052-.674.4-1.161.1.078.429.483.612.361.152-.1.018-.363.261-.425.28-.072.358.6.52.836.595.882.06.029.739.417.2.115.5.475.253.7-.342.3-1.061.68-1.213.013-.745.446-.436.655-1.117,1.144.545.358.289.9.976.667.535.773-1.417.536-1.348,1.021.081.576.681.949.81,1.519.157.688.46.594.671,1.1-1.054.31.456.876.676,1.32a1.679,1.679,0,0,0,.559.8c.178.109.7-.011.493-.112-.361-.174-.671-.1-.77-.567-.1-.486.669-.161.856-.214.474-.134-.02.62.5.605.388-.011.4.617.91.655-.12-.383.136-1.078,0-1.307-.473-.8.04-.4.242-1.1.042-.148.191-1.023.555-.41.424.715-.021.886-.659,1.018.177.477,1.056.968.7,1.512,1.029-.307-.056-.366.407-.691.423-.3.681.669.889.761q.055-.152.107-.3c.162-.118.588.516.506.635-.141.2-.771.184-1.009.276-.5.194-.394.165-.511.586-.06.213-.282,1.08.22,1.08.125-.693,1.8-.812,1.553-.253-.174.4-1,.646-.566,1.232.162-.021.7-.481.849-.094.145.369-.821.473-.891.8-.109.515-.632,1.527-.231,2.033.343.434,1.435-.882,1.633-1.065.213-.2,1.592.046,1.865.138-.23.3-.01.266.344.326-.509-1.321,2.6-1.189,3.262-1.285.714-.1,1.428-.2,2.145-.282.828-.1.888-.46,1.24-1.2a37.7,37.7,0,0,0,1.343-4.233,16.166,16.166,0,0,0,.856-3.025l-.444.037Z" fill="#fff"/>
								  </g>
								</svg>
								
								Recent Press
							</h2>
						</div>
						
					<?php
						
					} else {?>
					
						<div class="heading-wrap">
							<h2><a href="<?php the_field('press_page_link', 'option');?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="66.909" height="35.162" viewBox="0 0 66.909 35.162">
								  <g id="Group_553" data-name="Group 553" transform="translate(-46.151 -261.497)">
								    <path id="Path_204" data-name="Path 204" d="M740.722,664.7a5.472,5.472,0,0,1-.271-1.787c.17-.144-.418-.534-.536-.553-.748-.123-.512,1.325-.542,1.782.177-.1.668-.467.773-.033-.671.758.617.828.575.59Z" transform="translate(-642.111 -371.306)" fill="#fff"/>
								    <path id="Path_205" data-name="Path 205" d="M749.913,706.576l.29-.079c-.417-.643-1.24-.931-1.271.118-.017.573-.239,1,.44,1s.406-.487.54-1.043C749.989,706.555,749.882,706.706,749.913,706.576Z" transform="translate(-650.932 -411.663)" fill="#fff"/>
								    <path id="Path_206" data-name="Path 206" d="M112.617,285.982c-2.139.049-4.276.075-6.415.056-.969-.008-1.936,0-2.9-.072,0-1.172-.157-2.373-.257-3.542-.38-4.469-.706-8.942-1.069-13.412-.165-2.03-.351-4.063-.465-6.1-.067-1.2.17-1.213-1.07-1.183-1.109.027-52.724-.223-53.756-.238-.355,0-.235,2.536-.252,2.912-.087,1.972-.2,3.943-.274,5.917-.1,2.868,1.492-.393,2.571-.579.672-.115.4-.365,1-.63.382-.17-.207-.413.472-.564.26-.058.256-.285.464-.377a5.462,5.462,0,0,0,1.155-.864,1.484,1.484,0,0,0,.381-.825c.281.033.545.195.677-.1.31.222.824.759,1.205.818.016,0,.526-.8.608-.882.779-.032.808-1.711,1.725-1.385-.183-.369.4-1.462.553-1.462a2.161,2.161,0,0,0,2.24,1.93,2.124,2.124,0,0,1,.708.3c.348.147.771-.03,1.148.039.771.142.581-.678,1.241-.426-.018-.128-.455-.862-.437-.873.24-.137.484.283.824.066.014-.009-.47-.6-.456-.745.09.047.58.391.693.318a.5.5,0,0,0,.013-.365c.3.049.291.057.374-.232.22.076,1.254.664,1.376.256.108-.362.7-.543.531-.876.851-.282,1.325-.479,2.157.148.429.323.608,1,1.035,1.262a1.219,1.219,0,0,0,.723-.039.661.661,0,0,0,.21.378c.33.073-.065-.547.566-.341.527.173.109-.331.677-.165,1.232.36-.473.905-.479,1.011s.4.638.441.865a.526.526,0,0,0,.491-.33c.023.138-.344.448-.276.5.516.376.663.042,1.113.183-.258.161-.6.86-.484,1.059.2.332.568.133.751.393.324.461-.094.505-.007.806.2.694-.375.8.531,1.1.46.152.581-.028,1.043.205.288.145.955.022,1.169.188.354.274.267.7.809.863,1.407.428.126,1.231-.151,1.923-.29.723,1.028,1.583,1.6,1.719a8.533,8.533,0,0,1,1.559.26c.7.31.8.374.868,1,.054.521.586.6.994.645.581.064.743.283,1.112.707l1.18-1.225,1.45,1.6c.582.64-.146.9-.673,1.423s-.874.777-.87,1.567c.005,1.015-.079.361-.554.779-.45.4-.841.6-.833,1.224,0,.385.455.865-.336.835-.575-.022-1.487,1.57-1.63,2.056a3.515,3.515,0,0,0,.358,2.34c.834,1.075,1.4-.694,2.036-.555.951.208,1.135-1.54,1.774.122.218.566.083,1.057.706,1.383a.78.78,0,0,1,.42.708l1.193.74a.65.65,0,0,0-.1-.855c1.047.061.321.663.69,1.1.45.538.829-.015,1.177.142.469.21,1.326.134,1.869.3.727.227.885.991,1.072,1.617.494-.39.707.271.914.614.137-.225.031-.367.162-.6.339-.593.5.574.716.493.174-.064,1.239,1.067,1.438,1.311a2.964,2.964,0,0,0-.113-1.042c-.083-.518.026-.47.108-.917s-1.007-1.728-1.17-2.25c-.106-.338.154-.495.312-.739.143-.22-.583-.3-.474-.674.1-.332.552-.862.2-1.207-.315-.31-.629-.691-.91-1.029a3.1,3.1,0,0,1-.966-2.178c.02-1.033-.394-2.064-.2-3.066.087-.455-.741-.341-.139-1.127.256-.334,1.208-1.52.263-1.458.164-.693.322-1.045.872-1.034-.016-.2.211-.749.014-.815-.139-.046-.409-.44-.141-.474.55-.07,1.4-.727.762-1.283s.205-1.516-.636-2.055c-.314-.2-1.8-.871-.949-1.434.3.34,1.084.669,1.34.3.173-.25.406-.359.593-.586.351-.429-.516-.412-.045-.681.51-.291-.105-.884.758-.6.234-.287.118-.633.012-1.009.666-.1.776.418.607,1,.475.029.248-.491.695-.7-.391-.691.309-.14.622-.419.411-.366.686-.679,1.1-1,.313-.241,1.19-.575,1.049-1-.151-.463-.624-.132-.752-.553-.206-.677.637-1.077,1.133-1.114.145-.011,1.112-.486,1.015.018-.063.33-.792,1.631-.575,1.879-.12-.137,1.049-.169.27.3-.113.067-.9.79-.67.9.381.189.518-.209.518.343-.41.151-.731-.064-1.174-.049-.612.02-.668.7-1.133.7-.658,0-.13.971-.7,1.242-.5.24-.821,1.509-.981,2-.191.589.46.835.593,1.516.064.325-.417,1.908.543,1.458-.382-.773-.207-1.655.758-1.518-.074.39-.4.435-.508.762-.115.351.531.829.184,1.07-.948.658-1.713.448-1.99-.817-.5.195-1.454,3.772-.924,3.964.09-.178.05-.432.363-.394s-.058-.9.319-1.071c.406.636.374-.34.725-.572a.4.4,0,0,0,.262.422c.364-.09-.229-.51.377-.443.582.064.373.981.407,1.356.026.281.357.922-.05,1.069-.49.178-.734-.409-.912-.717-.18-.041-.675.994-.74,1.162a3.357,3.357,0,0,0-.386,1.1c-.006.057-.079,1.326.072,1.238.5-.292.052-.674.4-1.161.1.078.429.483.612.361.152-.1.018-.363.261-.425.28-.072.358.6.52.836.595.882.06.029.739.417.2.115.5.475.253.7-.342.3-1.061.68-1.213.013-.745.446-.436.655-1.117,1.144.545.358.289.9.976.667.535.773-1.417.536-1.348,1.021.081.576.681.949.81,1.519.157.688.46.594.671,1.1-1.054.31.456.876.676,1.32a1.679,1.679,0,0,0,.559.8c.178.109.7-.011.493-.112-.361-.174-.671-.1-.77-.567-.1-.486.669-.161.856-.214.474-.134-.02.62.5.605.388-.011.4.617.91.655-.12-.383.136-1.078,0-1.307-.473-.8.04-.4.242-1.1.042-.148.191-1.023.555-.41.424.715-.021.886-.659,1.018.177.477,1.056.968.7,1.512,1.029-.307-.056-.366.407-.691.423-.3.681.669.889.761q.055-.152.107-.3c.162-.118.588.516.506.635-.141.2-.771.184-1.009.276-.5.194-.394.165-.511.586-.06.213-.282,1.08.22,1.08.125-.693,1.8-.812,1.553-.253-.174.4-1,.646-.566,1.232.162-.021.7-.481.849-.094.145.369-.821.473-.891.8-.109.515-.632,1.527-.231,2.033.343.434,1.435-.882,1.633-1.065.213-.2,1.592.046,1.865.138-.23.3-.01.266.344.326-.509-1.321,2.6-1.189,3.262-1.285.714-.1,1.428-.2,2.145-.282.828-.1.888-.46,1.24-1.2a37.7,37.7,0,0,0,1.343-4.233,16.166,16.166,0,0,0,.856-3.025l-.444.037Z" fill="#fff"/>
								  </g>
								</svg>
	
								Recent Press</a>
							</h2>
						</div>
						
				    <?php }
				    
				;?>
			
			</div>
		</div>
		
			
			
			<?php
				
				if ( $num_posts == 'all' ) {?>
					
					<div class="press-slider">
					
						<?php
							
						if ( $press_cat != false) {
							
						    $args = array(  
						        'post_type' => 'press_post',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        	
								'tax_query' => array(
								    array(
								    'taxonomy' => 'press_tax',
								    'field' => 'term_id',
								    'terms' => $press_cat
								     )
								)						        
						        
						    );
					    
					    } else {
						    
						    $args = array(  
						        'post_type' => 'press_post',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 					        
						    );						 
						    
					    }
					
					    $loop = new WP_Query( $args ); 
					        
						$counter = 0; while ( $loop->have_posts() ) : $loop->the_post();
	                       if ($counter % 4 == 0 && $counter != 0): ?>
	                      	</div>
	                      </div>
	                    <?php endif; ?>
	                    <?php if ($counter % 4 == 0 or $counter == 0): ?>
	                    <div>
		                    
							<div class="press-wrap grid-x grid-padding-x small-up-1 tablet-up-2">
	                    <?php endif; ?>
	                    
	                      <?php get_template_part('parts/loop', 'press'); ?>
	
	                    <?php $counter++; endwhile; ?>        
	                    	</div>
	                    </div>
					
					    <?php wp_reset_postdata();?>
					    
					</div>
					
					<div class="slider-controls">
						<button type="button" class="bg-slide-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
							  <g id="Group_472" data-name="Group 472" transform="translate(1575.966 2566.074) rotate(180)">
							    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
							      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
							        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
							      </g>
							      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
							    </g>
							  </g>
							</svg>

						</button>
						
						<div class="bg-slide-dots"></div>
						
						<button type="button" class="bg-slide-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
							  <g id="Group_473" data-name="Group 473" transform="translate(-1558.964 -2554.301)">
							    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
							      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
							        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
							      </g>
							      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
							    </g>
							  </g>
							</svg>

						</button>
					</div>
						
				<?php
						
				} else {?>
				
					<div class="press-wrap grid-x grid-padding-x small-up-1 tablet-up-2">

					<?php
													
					if ( $press_cat != false) {
						
					    $args = array(  
					        'post_type' => 'press_post',
					        'post_status' => 'publish',
					        'posts_per_page' => $num_posts, 
							'tax_query' => array(
							    array(
							    'taxonomy' => 'press_tax',
							    'field' => 'term_id',
							    'terms' => $press_cat
							     )
							)						    					        
					    );
					    
					} else {
						
					    $args = array(  
					        'post_type' => 'press_post',
					        'post_status' => 'publish',
					        'posts_per_page' => $num_posts, 
					    );						
						
					}
				
				    $loop = new WP_Query( $args ); 
				        
				    while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part('parts/loop', 'press');
				    endwhile;
				
				    wp_reset_postdata();?>
				    
					</div>
			    
			    <?php }
			    
			;?>
							
	</div>
</section>