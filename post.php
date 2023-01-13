<?php
switch($acao) {
    case 0: ?>
        <div class="col-4">
            <div class="card caixa">
                <h4 class="card-title" ><?php echo $post["title"]; ?></h4>
                <img src="<?php echo $post['image']; ?>">
                <p class="card-text"><?php echo  mb_strimwidth($post['text'], 0, 150, '...'); ?> </p>
                <button type="button" id="modal-button" class="modal-button btn btn-light" 
                data-param='{"linha" : "<?php echo $linhaExib ?>", "coluna" : "<?php echo $i ?>", "tipo" : "<?php echo $tipoPost ?>", "acao" : "2"}' >Ler mais...</button>
            </div>
        </div>
        <?php break;
    case 1: ?>
        <div class="col-4">
            <div class="card caixa">
                <h4 class="card-title" ><?php echo $post["title"]; ?></h4>
                <p class="card-text"><?php echo  mb_strimwidth($post['text'], 0, 170, '...'); ?></p>
                <button type="button" id="modal-button" class="modal-button btn btn-light" 
                data-param='{"linha" : "<?php echo $linhaExib ?>", "coluna" : "<?php echo $i ?>", "tipo" : "<?php echo $tipoPost ?>", "acao" : "2"}' >Ler mais...</button>
            </div>
        </div>
        <?php break;
    case 2: ?>
        <div class="col-12">
            <div class="card caixa">
                <h4 class="card-title" ><?php echo $post["title"]; ?></h4>
                <img src="<?php echo $post['image']; ?>">
                <p class="card-text"><?php echo  $post['text']; ?> </p>
            </div>
        </div>
        <?php break;
    default:
        ?> <p class="trigger-alert">Ocorreu um erro!</p> <?php
        break;
};
?>
<!--  -->