<?php
function dmc_add_svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'dmc_add_svg_mime_types');
>
