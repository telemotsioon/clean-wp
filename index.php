<?php get_header(); ?>

<main id="index">

	<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<article>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<dl class="meta">
			<dt class="date"><?php __( 'Published', 'nortal' ); ?></dt>
			<dd><time datetime="<?php get_the_time('c');?>"><?php get_the_time(); ?> <?php get_the_date(); ?></time></dd>
			<dt class="category"><?php __( 'Category', 'nortal' ); ?></dt>
			<dd><?php echo get_the_category_list(); ?></dd>
			<dt class="tags"><?php __( 'Category', 'nortal' ); ?></dt>
			<dd><?php echo get_the_tag_list(', ');?></dd>
		</dl>
		<?php the_content(__( 'Read more', 'nortal' )); ?>
		<?php wp_link_pages(); ?>
		
		<?php if(comments_open()) : ?>
		
		<p class="commentlink"><?php comments_popup_link( __( 'Comment', 'nortal' ), __( '1 Comment', 'nortal' ), __( '% Comments', 'nortal' ) ); ?></p>
		
		<?php endif; ?>
		
	</article>
	
	<?php endwhile; ?>
	
	<nav id="pagination">
		<ul>
			<li class="next"><?php previous_posts_link(__( 'Next', 'nortal' )); ?></li>
			<li class="previous"><?php next_posts_link(__( 'Previous', 'nortal' )); ?></li>
		</ul>
	</nav>

	<?php else : ?>
	
	<article class="post error">
		<h1><?php __( 'No page aka 404!', 'nortal' ); ?></h1>
		<p><?php __( 'Well done! You found something we thought doesn\'t exist!', 'nortal' ); ?></p>
	</article>
	
	<?php endif; ?>

</main>

<?php get_footer(); ?>