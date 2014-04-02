<?php get_header(); ?>

<main id="post">
	
	<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
	<article>
		<h1><?php the_title(); ?></h1>
		<dl class="meta">
			<dt class="date"><?php __( 'Published', 'nortal' ); ?></dt>
			<dd><time datetime="<?php get_the_time('c');?>"><?php get_the_time(); ?> <?php get_the_date(); ?></time></dd>
			<dt class="category"><?php __( 'Category', 'nortal' ); ?></dt>
			<dd><?php echo get_the_category_list(); ?></dd>
			<dt class="tags"><?php __( 'Category', 'nortal' ); ?></dt>
			<dd><?php echo get_the_tag_list(', ');?></dd>
		</dl>
			
		<section>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</section>
	</article>
		
	<?php endwhile; ?>
		
	<?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>
		
	<?php else : ?>
		
	<article class="post error">
		<h1><?php __( 'No page aka 404!', 'nortal' ); ?></h1>
		<p><?php __( 'Well done! You found something we thought doesn\'t exist!', 'nortal' ); ?></p>
	</article>
	
	<?php endif; ?>

</main>
<?php get_footer(); ?>
