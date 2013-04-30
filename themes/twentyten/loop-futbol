<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
$paged = $_REQUEST['paged'];
if ($paged == null) $paged = 1;
 
$the_cat = get_the_category();
$category_name = $the_cat[0]->cat_name;
$category_id = $the_cat[0]->cat_ID;

$category_name = preg_replace('/ - Noticias/','',$category_name);
$category_name = preg_replace('/ - Fixture/','',$category_name);
$category_name = preg_replace('/ - Equipos/','',$category_name);
$category_name = preg_replace('/ - Fotos/','',$category_name);
?>



<?php
  /* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
	
	<div id="texto-titulos-normales">> <?php echo strtoupper($category_name);?></div>
	<div id="texto-subtitulos-normales">TABLA DE POSICIONES</div>
	<div id="izquierda"> <!-- izq -->
	
	<div id="bg-posiciones">
		<div id="tabla-posiciones">
		
		<?php query_posts('category_name="'.$category_name.' - Tabla de posiciones"&posts_per_page=1');?>
		<?php get_template_part( 'loop', 'futbol-tablas' );?>
		</div>
		<div id="futbol-tabla-leyenda">
		<span class="amarillo">Leyenda: POS:</span> Posici&oacute;n / <span class="amarillo">PJ:</span> Partidos Jugados / <span class="amarillo">PG:</span> Partidos Ganados / <span class="amarillo">PE:</span> Partidos Empatados <br /><span class="amarillo">PP:</span> Partidos Perdidos / <span class="amarillo">GF:</span> Goles a Favor / <span class="amarillo">GC:</span> Goles en Contra / <span class="amarillo">DIF:</span> Diferencia de Goles / <span class="amarillo">PTS:</span> Puntos
		</div>
	</div>
	
	<div id="texto-subtitulos-normales">NOTICIAS</div>
	<?php query_posts('cat='.$category_id.'&paged='.$paged);
	
	?>
<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display all other posts. */ ?>

		<!-- NOTICIAS -->
		<div id="margen">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					
					<div id="bg-noticias">
						<div id="noticias-content-general">
							<div id="noticias-meta">
								
								<?php twentyten_posted_on(); ?>
							</div><!-- .entry-meta -->
							<div id="img-noticias">
								<img src="<?php bdw_get_images(get_the_ID(),0,"medium")?>" width="460" height="200"/>
							</div>
							
							<div id="noticias-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
							<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
									<div id="noticias-summary">
										<?php the_excerpt(); ?>
									</div><!-- .entry-summary -->

							<?php else : ?>
									<div id="noticias-content">
										<?php the_content( __( 'Sigue leyendo <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
									</div><!-- .entry-content -->
							<?php endif; ?>
							
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div>

					</div><!-- .entry-content -->
					<?php
					// sacando el link de la categoría
					/*$the_cat = get_the_category();
					$category_name = $the_cat[0]->cat_name;
					$category_description = $the_cat[0]->category_description;
					$category_link = get_category_link( $the_cat[0]->cat_ID );*/
					?>
				</div><!-- #post-## -->
				</div><!-- margen -->
		<!-- FIN NOTICIAS -->

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Noticias antiguas', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Noticias m&aacute;s nuevas <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>

</div> <!-- fin izq -->

