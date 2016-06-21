<?php
/**
 *	The template for displaying the header.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$img_logo = get_theme_mod( 'illdy_img_logo', esc_url( get_template_directory_uri() . '/layout/images/header-logo.png' ) );
$text_logo = get_theme_mod( 'illdy_text_logo', esc_html__('Illdy', 'illdy') );
$jumbotron_general_image = get_theme_mod( 'illdy_jumbotron_general_image', esc_url( get_template_directory_uri() . '/layout/images/front-page/front-page-header.png' ) );
$preloader_enable = get_theme_mod( 'illdy_preloader_enable', 1 );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<style media="screen">
			div.radioweb{
				position: absolute;
				left: 32%;
			}
		</style>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
			<!-- %%%%%%%%%%%%%%%%%%% link radio %%%%%%%%%%%%%%%%%%%%%%%%%%% -->

			<!-- ######################### mobile #######################-->

			<!-- ######################### /mobile #######################-->

		<div class="middle radioweb">

			<div class="half_portion">
				<center><!--
					<script type="text/javascript" src="http://vozprofeticafm.radio12345.com/flashaacplayer/jwplayer.js.pagespeed.jm.qoLZYYv1uD.js"></script>
					<script type="text/javascript" src="http://vozprofeticafm.radio12345.com/newflashradio/swfobject.js.pagespeed.jm.emwhrhy4AV.js"></script>
					<div id="mediaspace">
						<embed type="application/x-shockwave-flash" src="http://vozprofeticafm.radio12345.com/newflashradio/player.swf" width="500" height="25" style="undefined" id="mpl" name="mpl" quality="high" allowfullscreen="false" allowscriptaccess="always" wmode="opaque" flashvars="title=&amp;file=http://78.129.224.15:38256/;playlist.pls&amp;livestream.message=&amp;plugins=livestream-1&amp;livestream.file=http://78.129.224.15:38256/;playlist.pls&amp;type=sound&amp;backcolor=000000&amp;frontcolor=FFFFFF&amp;lightcolor=FF9900&amp;image=XXX.png&amp;autostart=true&amp;bufferlength=20">
					</div>
						<script type="text/javascript">var so=new SWFObject('http://vozprofeticafm.radio12345.com/newflashradio/player.swf','mpl','500','25','9');so.addParam('allowfullscreen','false');so.addParam('allowscriptaccess','always');so.addParam('wmode','opaque');so.addVariable('title','');so.addVariable('file','http://78.129.224.15:38256/;playlist.pls');so.addVariable('livestream.message','');so.addVariable('plugins','livestream-1');so.addVariable('livestream.file','http://78.129.224.15:38256/;playlist.pls');so.addVariable('livestream.message','');so.addVariable('type','sound');so.addVariable('backcolor','000000');so.addVariable('frontcolor','FFFFFF');so.addVariable('lightcolor','FF9900');so.addVariable('image','XXX.png');so.addVariable('autostart','true');so.addVariable('bufferlength','20');so.write('mediaspace');</script> -->
						<audio autoplay controls loop id="myAudio" src="http://78.129.224.15:38256/;playlist.pls&amp;livestream.message=&amp;plugins=livestream-1&amp;livestream.file=http://78.129.224.15:38256/;playlist.pls&amp;type=sound&amp;backcolor=000000&amp;frontcolor=FFFFFF&amp;lightcolor=FF9900&amp;image=XXX.png&amp;autostart=true&amp;bufferlength=20"> </audio>
					</center>
				</div>
			</div>
			<!-- <div >
				<embed src="http://78.129.224.15:38256/;playlist.pls&amp;livestream.message=&amp;plugins=livestream-1&amp;livestream.file=http://78.129.224.15:38256/;playlist.pls&amp;type=sound&amp;backcolor=000000&amp;frontcolor=FFFFFF&amp;lightcolor=FF9900&amp;image=XXX.png&amp;autostart=true&amp;bufferlength=20" >

			</div> -->

			<!-- %%%%%%%%%%%%%%%%%%% /link radio %%%%%%%%%%%%%%%%%%%%%%%%%%% -->


	 <?php // FIXME: 	<div class="radionomy-player"></div> ?>
		<?php if( $preloader_enable == 1 ): ?>
			<div class="pace-overlay"></div>
		<?php endif; ?>
		<header id="header" class="<?php if( is_front_page() ): echo 'header-front-page'; else: echo 'header-blog'; endif; ?>" style="background-image: url('<?php if( is_front_page() ): echo ( ( $jumbotron_general_image ) ? esc_url( $jumbotron_general_image ) : '' ); else: echo esc_url( get_header_image() ); endif; ?>');">
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<?php if( $img_logo ): ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><img src="<?php echo esc_url( $img_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo illdy_sanitize_html( $text_logo ); ?></a>
							<?php endif; ?>
						</div><!--/.col-sm-2-->
						<div class="col-sm-10">
							<nav class="header-navigation">
								<ul class="clearfix">
									<?php
									wp_nav_menu( array(
										'theme_location'	=> 'primary-menu',
										'menu'				=> '',
										'container'			=> '',
										'container_class'	=> '',
										'container_id'		=> '',
										'menu_class'		=> '',
										'menu_id'			=> '',
										'items_wrap'		=> '%3$s',
										'walker'			=> new MTL_Extended_Menu_Walker(),
										'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
									) );
									?>
								</ul><!--/.clearfix-->
							</nav><!--/.header-navigation-->
							<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
						</div><!--/.col-sm-10-->
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.top-header-->
			<nav class="responsive-menu">
				<ul>
					<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary-menu',
						'menu'				=> '',
						'container'			=> '',
						'container_class'	=> '',
						'container_id'		=> '',
						'menu_class'		=> '',
						'menu_id'			=> '',
						'items_wrap'		=> '%3$s',
						'walker'			=> new MTL_Extended_Menu_Walker(),
						'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
					) );
					?>
				</ul>
			</nav><!--/.responsive-menu-->
			<?php
			if( is_front_page() ):
				get_template_part( 'sections/front-page', 'bottom-header' );
			else:
				get_template_part( 'sections/blog', 'bottom-header' );
			endif;
			?>
		</header><!--/#header-->
