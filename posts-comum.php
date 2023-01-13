<?php 
$linhaExib = ceil($linhaExib);
if (!empty($arraynews[($linhaExib)])) {
    $i = 0;
    foreach($arraynews[$linhaExib] as $key => $post) {
        $tipoPost = 'comum';   
        $acao = 1;
        include __DIR__ . '/post.php';
        $i++;
    }
    
};