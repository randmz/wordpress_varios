<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 $direccion = $_SERVER['REQUEST_URI']; 
 $direccion = preg_replace('/\/wp_codelco\//','',$direccion);
?>
  <!-- </div> --><!-- #wrapper -->
	<!-- </div> --><!-- #main -->
	</div><!-- #marco -->
	<div id="footer2" role="contentinfo">
	<?php if($direccion == ''):?>
		<div id="camion">
				<div id="carroceria"><p>Carroceria</p></div>
				<div id="rueda-delantera"><p>Rueda delantera</p></div>
				<div id="rueda-trasera"><p>Rueda trasera</p></div>
		</div>
	<?php else:?>
		<div id="camion2">
				<h1></h1>
		</div>
	<?php endif;?>
		<!--<div id="footer_cerros"></div>-->
		<div id="footer_bg">
			<div id="wrapper-2">
				<div id="footer" class="container">
					<div id="cuadro-textos-footer">
						<div id="footer-deportes">
							<div class="footer-titulo amarillo">Act&iacute;vate Deportes</div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 21 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>F&uacute;tbol</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 13 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Cl&iacute;nicas Deportivas</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 15 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Nataci&oacute;n</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 17 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Ski</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 19 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Convenios Deportivos</a></div>
							<!-- CUANDO SE DESACTIVE UNO, COLOCARLO ENTRE COMENTARIO, TAL COMO ESTÁ ESTE -->
							<!-- POR EJEMPLO: -->
							<!-- <div class="footer-menu blanco">- Rugby</div> -->
						</div>
						<div id="footer-fitness">
							<div class="footer-titulo amarillo">Act&iacute;vate Fitness &amp; Salud</div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 3 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Charlas y Nutrici&oacute;n</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 4 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Gimnasia Laboral &amp; Masaje Express</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 5 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Talleres de Pilates, Yoga y Zumba</a></div>
							<!-- CUANDO SE DESACTIVE UNO, COLOCARLO ENTRE COMENTARIO, TAL COMO ESTÁ ESTE -->
							<!-- POR EJEMPLO: -->
							<!-- <div class="footer-menu blanco">- Rugby</div> -->
						</div>
						<div id="footer-outdoors">
							<div class="footer-titulo amarillo">Act&iacute;vate Outdoors</div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 9 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Trekking</a></div>
							<div class="footer-menu blanco">- <a href="<?php echo esc_url(get_category_link( 10 )); ?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'>Running</a></div>
							<!-- CUANDO SE DESACTIVE UNO, COLOCARLO ENTRE COMENTARIO, TAL COMO ESTÁ ESTE -->
							<!-- POR EJEMPLO: -->
							<!-- <div class="footer-menu blanco">- Rugby</div> -->
						</div>
					</div>
					<div id="marcas">
						<div id="codelco"></div>
						<div id="adidas"></div>
						<div id="timex"></div>
						<div id="gatorade"></div>
						<div id="speedworks"></div>
					</div>
				</div>
				</div>
		</div>
		<div id="footer_bottom">
			<div id="footer-bottom-datos" class="blanco centrado"><span class="naranjo">SpeedWorks</span> | San Sebasti&aacute;n 2807 Oficina 915 Las Condes, Santiago de Chile | Tel&eacute;fono (+562) 2320332 | <span class="naranjo"><a href="mailto:contacto@speedworks.cl">contacto@speedworks.cl</a></span></div>
		</div>
	</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
