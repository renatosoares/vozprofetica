<?php
/**
 *	The template for displaying services section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$services_general_title = get_theme_mod( 'illdy_services_general_title', esc_html__( 'Services', 'illdy' ) );
$services_general_entry = get_theme_mod( 'illdy_services_general_entry', esc_html__( 'In order to help you grow your business, our carefully selected experts can advise you in in the following areas:', 'illdy' ) );
?>
<section id="services" class="front-page-section">
	<?php if( $services_general_title || $services_general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $services_general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo illdy_sanitize_html( $services_general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $services_general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<p><?php echo illdy_sanitize_html( $services_general_entry ); ?></p>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<?php
				if( is_active_sidebar( 'front-page-services-sidebar' ) ):
					dynamic_sidebar( 'front-page-services-sidebar' );
				else:
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 widget_illdy_service">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Sola Scriptura', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'Sola Scriptura é o ensinamento de que a Bíblia é a única palavra autorizada e inspirada por Deus e é única fonte para a doutrina cristã, sendo acessível a todos. Afirmar que a Bíblia não exige interpretação fora de si mesma está em oposição direta aos ensinamentos das tradições ortodoxa, ortodoxa oriental, anglo-católica e católica romana, que ensinam que a Bíblia só pode ser autenticamente interpretada pela tradição católica. ', 'illdy' ) .'&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Sola Fide', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'Sola fide é o ensinamento de que a justificação (interpretada na teologia protestante como "sendo declarada apenas por Deus") é recebida somente pela fé, sem qualquer interferência ou necessidade de boas obras, embora na teologia protestante clássica, a fé salvadora é sempre evidenciada, mas não determinada, pelas boas obras. ', 'illdy' ) .'&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Solus Christus ', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'Solus Christus ou Solo Christo é o ensinamento de que Cristo é o único mediador entre Deus e a humanidade, e que não há salvação através de nenhum outro (por isso, a frase é mostrada às vezes em caso ablativo (Cristo somente/sozinho) o que significa que a salvação é "somente por Cristo"). ', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->
