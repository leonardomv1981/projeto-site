<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'header.php';
require 'menu.php'; 
require 'texto.php';
?>
    <main>
        <div class="col-12">
            <div class="row" id="posts">
            <div class="col-md-12">
                    <h2>Destaques</h2>
                </div>
                <?php 
                $i = 0; 
                foreach($arrayPosts['destaque'] as $key => $post) {                                  
                    $acao = 0;
                    $linhaExib = 0;
                    $tipoPost = 'destaque';
                    include __DIR__ . '/post.php';
                    $i++;
                } ?>
                
                <div class="col-md-12">     
                    <h2>Comum</h2>
                </div>  
                <?php                
                $linhaExib = 0;
                $tipoPost = 'comum';
                require_once __DIR__ . '/posts-comum.php';
                ?>
                 
            </div>
            <div class="text-center">
            <button type="button" class="btn btn-primary" id="feed-button" name="feed-button">carregar mais</button>
            </div>
        </div>
    </main>
<?php require 'footer.php'; ?> 