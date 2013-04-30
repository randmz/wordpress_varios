<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
$the_cat = get_the_category();
$category_name = $the_cat[0]->cat_name;
$category_id = $the_cat[0]->cat_ID;

$category_name = preg_replace('/ - Noticias/','',$category_name);
$category_name = preg_replace('/ - Fixture/','',$category_name);
$category_name = preg_replace('/ - Equipos/','',$category_name);
$category_name = preg_replace('/ - Fotos/','',$category_name);
?>

  	<div id="botones">
			<a href="javascript: return false;" id="a-btn2"><div id="btn-sidebar1"><div id="btn-flecha-normalb"><p>flecha normal</p></div><div id="btn-flecha-abajob"><p>flecha abajo</p></div> <div id="texto-btn-sidebar">INSCRIBETE</div></div></a>
			<div id="texto-inscribete"><?php echo do_shortcode('[contact-form-7 id="92" title="Inscripcion de actividades"]');?></div>
			<a href="<?php echo get_category_link( 22 );?>"><div id="btn-sidebar2"><div id="btn-flecha-normal2"><p>flecha normal</p></div> <div id="texto-btn-sidebar">FIXTURE</div></div></a>
			<a href="javascript: return false;" id="a-btn-goleadores"><div id="btn-sidebar1"><div id="btn-flecha-normalc"><p>flecha normal</p></div><div id="btn-flecha-abajoc"><p>flecha abajo</p></div> <div id="texto-btn-sidebar">GOLEADORES</div></div></a>
			<div id="texto-goleadores">
				<?php query_posts('category_name="'.$category_name.' - Goleadores"&posts_per_page=1');?>
				<?php get_template_part( 'loop', 'normales-informacion' );?>
			</div>
			<a href="javascript: return false;" id="a-btn-sancionados"><div id="btn-sidebar1"><div id="btn-flecha-normald"><p>flecha normal</p></div><div id="btn-flecha-abajod"><p>flecha abajo</p></div> <div id="texto-btn-sidebar">SANCIONADOS</div></div></a>
			<div id="tabla-sancionados">
				<div id="texto-sancionados-roja">Suspendidos</div>
				<?php query_posts('category_name="'.$category_name.' - Tarjetas Rojas"&posts_per_page=1');?>
				<?php get_template_part( 'loop', 'normales-informacion' );?>
			</div>
			<div id="tabla-sancionados-amarillo">
				<div id="texto-sancionados-amarilla">Al borde de la suspensi&oacute;n (1 amarilla)</div>
				<?php query_posts('category_name="'.$category_name.' - Tarjetas Amarillas"&posts_per_page=1');?>
				<?php get_template_part( 'loop', 'normales-informacion' );?>
			</div>
			<a href="javascript: return false;" id="a-btn-fotos"><div id="btn-sidebar1"><div id="btn-flecha-normale"><p>flecha normal</p></div><div id="btn-flecha-abajoe"><p>flecha abajo</p></div> <div id="texto-btn-sidebar">GALERIA DE FOTOS</div></div></a>
			<div id="texto-galeria">
			<?php 
		
			$category_name = preg_replace('/ /','-',$category_name);
			$category_name = preg_replace('/,/','',$category_name);
			$category_name = preg_replace('/---/','-',$category_name);

			echo do_shortcode('[nggallery id=Galeria-'.$category_name.'-Fotos]'); ?>
		</div>
		</div>

<?php
