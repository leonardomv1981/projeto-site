<?php
require_once __DIR__ . '/texto.php';

extract($_POST['param']);
$post = $arraynews[$linha][$coluna];
if ($tipo == 'destaque') {
    $post = $arrayPosts['destaque'][$coluna];
}

include __DIR__ . '/post.php';