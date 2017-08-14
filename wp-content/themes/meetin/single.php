<?php get_header(); ?>


	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<body class="interne">

	<?php get_template_part('menu'); ?>

		<header class="header-interne">
			<?php if(has_post_thumbnail()) : ?>
     			 <?php the_post_thumbnail(); ?>
			<?php endif; ?>

		</header>

		<div class="container contenu-interne">
			<?php if (have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					
					<h1><?php the_title() ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>

			<?php else : ?>
			<?php __('Erreur survenue'); ?>
			<?php endif; ?>

		</div><!-- /.container -->
		


		

<?php get_footer(); ?>