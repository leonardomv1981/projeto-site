<?php 
require 'header.php';
require 'menu.php';
?>
<main>
    <div class="col-12">
        <div class="row">
            <div class="caixa2 col-6">          
                <div id="form-alert" class="alert col-sm-12">
                    <span id="mensagem"></span>
                </div>
                <form id="insert-form" class="form-horizontal" role="form" action="actionsql.php" method="post">    
                    <label for="primeiro_nome">Primeiro Nome</label>
                    <input type="text" id="primeiro_nome" name="primeiro_nome">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="ultimo_nome" name="sobrenome">
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" >
                    <label for="login">Usuário</label>
                    <input type="text" id="login" name="usuario" >
                    <label for="passwd">Senha</label>
                    <input type="password" name="senha" id="senha">
                    <input type="hidden" name="tipo" value="inserir">
                    <div>
                        <button type="button" class="btn btn-primary" name="btn-insert" id="btn-insert">
                                Inserir
                        </button>
                    </div>
                </form>
                <div>
                <?php
                    
                        require_once __DIR__ . '/connection.php';
                    
                    $read = $connect->query('SELECT * FROM usuario')->fetchAll(PDO::FETCH_OBJ);
                    ?>
                </div>
            </div>
            <div class="caixa2 col-6">
                <img src="https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg">
            </div>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?> 

