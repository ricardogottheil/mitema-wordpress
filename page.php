<?php get_header('nohome'); ?> <!-- header -->
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- post -->
							
							<article class="box post">
								<a href="#" class="image featured">
									<?php 

										// check if the post has a Post Thumbnail assigned to it.
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('page');
											// the_post_thumbnail('category-thumb', array('class' => 'alignleft'));
										} 

									?>
								</a>
								<header>
									<h2><?php the_title(); ?></h2>
								</header>
								<?php the_content(); ?>
							</article>

							<?php endwhile; ?>
								<!-- post navigation -->
							<?php else: ?>
								<!-- no posts found -->
								<p>No hay nada para mostrar</p>
							<?php endif; ?> 

					</div>
				</div>

			<!-- Footer -->
				<?php get_footer(); ?>