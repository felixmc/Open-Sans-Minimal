<form method="get" class="search-form" action="<?php bloginfo('url'); ?>/">
	<i class="icon-search"></i>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="search" />
</form>