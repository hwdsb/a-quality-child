<?php
/**
 * Template Name: STAT Home
 */
?>

<div id="main" role="main">

	<?php appthemes_before_page_loop(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="ticket-manager-<?php the_ID(); ?>" <?php post_class( 'tabber' ); ?>>

			<?php appthemes_before_page(); ?>

			<?php get_template_part( 'templates/navigation', 'page' ); ?>

			<div class="panel">

				<div class="entry inner">

					<?php appthemes_before_page_title(); ?>

						<h1><?php the_title(); ?></h1>

					<?php appthemes_after_page_title(); ?>


					<?php appthemes_before_page_content(); ?>


				<div class='container'>

					<div class='map map-1' style="background-image:url('https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=f7d8101915f8f0a00e6e67df4b853401')">				
						
							<a href="/faq"><div class="quotes"><span>FREQUENTLY<span class='spacer'></span><br />ASKED<span class='spacer'></span><br />QUESTIONS</span></a>
						</div>
					</div>
					<div class='map map-2' style="background-image:url('https://images.unsplash.com/photo-1483213097419-365e22f0f258?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=5fec314b615fd6ed1b0f349354a5fc19')">
						
							<a href="/tutorials"><div class="quotes"><span>TUTORIALS</span></a>
						</div>
					</div>
					<div class='map map-3' style="background-image:url('https://images.unsplash.com/photo-1495364141860-b0d03eccd065?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=56c0e16fc6c4c5d00fd136516d5ca4f0')">
						
							<a href="/stat-appointments-desk"><div class="quotes"><span>APPOINTMENTS</span></a>
						</div>
					</div>
					  <div class='map map-4' style="background-image:url('https://images.unsplash.com/photo-1421757295538-9c80958e75b0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=870af5695114c3a6f30e993c31391a8d')">
						
							<a href="/create-ticket"><div class="quotes"><span>TICKETS</span></a>
						</div>
					</div>
				</div>

					<?php the_content(); ?>

					<?php appthemes_after_page_content(); ?>

				</div>

			</div>

			<?php appthemes_after_page(); ?>

		</div><!-- #post -->

	<?php endwhile; ?>

		<?php appthemes_after_page_endwhile(); ?>

	<?php else: ?>

		<?php appthemes_page_loop_else(); ?>

	<?php endif; ?>

	<?php appthemes_after_page_loop(); ?>

</div><!-- End #main -->
