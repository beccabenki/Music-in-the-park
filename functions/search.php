<?php

function my_search_form( $form ) {
	$form = '<form role="search" method="get" class="searchform" action="' . home_url( '/jobs/' ) . '" >
		<div>
			<input type="text" value="' . get_search_query() . '" name="s" class="s" placeholder="Search" />
			<input type="submit" class="searchsubmit" value="" />
		</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'my_search_form' );