<?php
//Añadir en el functions php del tema hijo (recomendado)
function agrega_mime_type ( $mime_types ) {
 $mime_types['webp'] = 'image/webp';
 $mime_types['svg'] = 'image/svg+xml';
 return $mime_types;}
add_filter('upload_mimes', 'agrega_mime_type', 1, 1);
