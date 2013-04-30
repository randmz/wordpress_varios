<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="wrapper" class="hfeed">
  <div id="main">
		<div id="container" class="container">
				
				<?php
				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				 
				 // sacando el link de la categoría
				$the_cat = get_the_category();
				$category_name = $the_cat[0]->cat_name;
				$category_id = $the_cat[0]->cat_ID;
				 
				 switch($category_id){
						case 3:
						case 4:
						case 5:
						case 9:
						case 10:
						case 13:
						case 15:
						case 17:
						case 19:
							?>
							<div id="content" role="main">
							<div id="nueve-cincuenta">
								<?php
							get_template_part( 'loop', 'normales' );
							?>
							<div id="sidebar"><?php get_sidebar('normales'); ?></div>
							</div><!-- #960 --><?php
							break;
						case 21:
							?>
							<div id="content" role="main">
							<div id="nueve-cincuenta">
								<?php
							get_template_part( 'loop', 'futbol' );
							?>
							<div id="sidebar"><?php get_sidebar('futbol'); ?></div>
							</div><!-- #950 --><?php
							break;
						case 22:
							?>
							<div id="content" role="main">
							<div id="nueve-cincuenta">
								<?php
							get_template_part( 'loop', 'futbol-fixture' );
							?>
							<div id="sidebar"><?php get_sidebar('futbol'); ?></div>
							</div><!-- #950 --><?php
							break;
						case 23:
							?>
							<div id="content" role="main">
							<div id="nueve-cincuenta">
								<?php
							get_template_part( 'loop', 'futbol-equipos' );
							?>
							<div id="sidebar"><?php get_sidebar('futbol'); ?></div>
							</div><!-- #950 --><?php
							break;
						case 24:
							?>
							<div id="content" role="main">
							<div id="nueve-cincuenta">
								<?php
							get_template_part( 'loop', 'futbol-fotos' );
							?>
							<div id="sidebar"><?php get_sidebar('futbol'); ?></div>
							</div><!-- #950 --><?php
							break;
						default:
							?><div id="content" role="main">
								<div id="nueve-cincuenta">
									<div id="izquierda"><?php
								get_template_part( 'loop', 'normales' );
								?></div><!-- izquierda -->
								<div id="sidebar"><?php get_sidebar(); ?></div>
								</div><!-- #950 --><?php
								break;						
						}
					
				?>

			</div><!-- #content -->
		</div><!-- #container -->
		</div> <!-- #wrapper -->
	</div> <!-- #main -->
<?php get_footer(); ?>
