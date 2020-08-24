<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-field" placeholder="&#x1F50D" style="text-indent: 5px;" value="<?php echo get_search_query() ?>" name="s" />
	</label>
</form>