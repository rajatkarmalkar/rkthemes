<?php 	



function rkthemes_pagination() {

	$allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		]
	];

	$args = [
		'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
		'after_page_number' => '</span>',
	];

	printf( '<nav class="rkthemes-pagination clearfix">%s</nav>', wp_kses( paginate_links( $args ), $allowed_tags ) );
}


 ?>