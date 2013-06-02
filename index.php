<?php get_header(); ?>

<?php get_sidebar(); ?>
		<div id="content" class="right-column">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<article class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<p class="post-meta">posted at <b><?php the_time('F jS, Y') ?></b> in <?php the_category(', ') ?> <?php the_tags('| tags: ', ', ', ''); ?> <?php edit_post_link('edit', ' | ', ''); ?></p>
				</article>
				<?php if(is_single()): ?>
					party
				<?php endif; ?>
			<?php endwhile; ?>

			<nav class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</nav>

		<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

		</div>

<?php get_footer(); ?>