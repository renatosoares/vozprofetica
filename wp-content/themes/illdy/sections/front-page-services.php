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

					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Tardes para Cristo', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'A programação conta com uma variedade de louvores e pregrações, que vão ao ar de segunda-feira a sexta-feira nos horários das 13 às 14 horas podendo ter sua programação extendida do horário.', 'illdy' ) .'&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Sola Fide', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'Sola fide é o ensinamento de que a justificação (interpretada na teologia protestante como "sendo declarada apenas por Deus") é recebida somente pela fé, sem qualquer interferência ou necessidade de boas obras, embora na teologia protestante clássica, a fé salvadora é sempre evidenciada, mas não determinada, pelas boas obras. ', 'illdy' ) .'&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Noites boas novas', 'illdy' ) .'&icon=fa-volume-up&entry='. __( 'A programação traz uma seleção dos louvores evangelicos que engrandece a Cristo, indo ao ar de segunda-feira a sexta-feira nos horários das 22 às 23 horas. ', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->
