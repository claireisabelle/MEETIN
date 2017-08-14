		



		<nav class="navbar navbar-inverse navbar-fixed-top">
			
			<div class="container">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-blanc-mini.png" alt="" title="" /></a>
				</div>

				<?php
            		wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		                'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker())
            		);
        		?>

			</div><!-- /.container -->
		</nav>