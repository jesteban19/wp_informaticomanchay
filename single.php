<?php get_header();?>

<header id="page">	
	<div class="blog-header">
		<h1 class="blog-title"><?php bloginfo('name')?></h1>
		<p class="blog-description"><?php bloginfo('description')?></p>
	</div>
</header>

<div class="page-main-article">
	<article class="page-main">
		<?php if(have_posts()): ?>

        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content',get_post_format());?>

          <?php endwhile;?>
          <?php else: ?>
           <p> <?php __('No Page Found');?></p>
          <?php endif; ?>

	</article>
<?php get_footer();?>