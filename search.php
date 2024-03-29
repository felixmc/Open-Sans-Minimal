<?php get_header(); ?>

		<div id="content" class="wrapper">

		<?php if (have_posts()) : ?>

			<h2 class="pagetitle">Search Results</h2>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>


			<?php while (have_posts()) : the_post(); ?>

				<div class="post">
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<small><?php the_time('l, F jS, Y') ?></small>

					<p class="postmetadata"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_ID(); ?></a> | posted at <b><?php the_time('F jS, Y') ?></b> in <?php the_category(', ') ?> <?php the_tags('| Tags: ', ', ', ''); ?> <?php edit_post_link('Edit', ' | ', ''); ?></p>
				</div>

			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>

		<?php else : ?>

			<h2 class="pagetitle">No posts found. Try a different search?</h2>

		<?php endif; ?>

		</div>

<?php get_footer(); ?>