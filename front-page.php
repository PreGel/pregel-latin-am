<?php get_header(); ?>
	
	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="grid-x expanded">
				<div class="large-4 small-12 cell link gelato"><a href="https://pregelamericalatina.com/productos/"><h3>Gelato</h3></a></div>
				<div class="large-4 small-12 cell link froyo"><a href="https://pregelamericalatina.com/productos/"><h3>Helado Suave</h3></a></div>
				<div class="large-4 small-12 cell link pastry"><a href="https://pregelamericalatina.com/productos/"><h3>Pastelería<span>y</span><br>Confitería</h3></a></div>
				<!-- <div class="large-3 small-12 cell link bev"><a href="https://americalatina.pregel3.com/productos/"><h3>Bebidas<span>y</span><br>Confitería</h3></a></div> -->
			</div>
		</div>

		<!-- home widget grid -->
		<!-- IE does not support calc ?? - was using calc for full responsive homepage grid to offset title in overlay -->
		<!-- <style>
			@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
             /* IE10+ CSS here */
		    .pg-text-overlay .widgettitle {
			  	/*transform: translateY(-140%) !important;*/
			  	transform: translateY(140%) !important;
			  	/*transform: translateY(calc(-100% - 10px)) !important;*/
				}
			.pg-caption:hover .pg-text-overlay {
				 transform: translateY(20%); 
				}
		    } 
		</style> -->
		<div class="grid-x expanded large-collapse">
			<div class="large-4 cell">

				<div id="homeGridOne" class="homeGrid">

					<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid One');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>


						        <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>


					    </article>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid1');
					}
					?>


				</div> <!-- end homeGrid -->

			    </div> <!-- end column -->

			<div class="large-4 cell">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Two');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
	
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        </div>


					    </article>


					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid2');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
			 <!-- end column -->

			<div class="large-4 cell">

				<div id="homeGridThree" class="homeGrid">
				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Three');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        </div>


					    </article>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid3');
					}
					?>
			     </div>   <!-- end homeGrid -->
			</div>  <!-- end column -->


		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('link_bottom_banner');

						if( !empty($image) ): ?>
						<div class="alt-background-light-blue">
							<div class="row">
								<div class="small-12 cell ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>

	  <!-- <div id="gelato-shop" class="row expanded large-collapse">
	  	<div id="gelato-shop-img" class="large-6 cell"></div>
	  	<div id="gelato-shop-text" class="large-6 cell">
	  		
	  	</div>
	  </div> -->
	</div> <!-- end #content -->

<?php get_footer(); ?>