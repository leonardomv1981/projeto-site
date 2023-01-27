<?php 
require 'header.php';
require 'menu.php';
?>
<main>
    <div class="col-12">
        <div class="row">
            <div class="caixa2 col-6">          
                <div id="login-alert" class="alert alert-danger col-sm-12">
                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                    <span id="mensagem"></span>
                </div>    
                <form id="login-form" class="form-horizontal" role="form" action="action.php" method="post">    
                    <label for="login">Usuário</label>
                    <input type="text" id="login" name="usuario" >
                    <label for="passwd">Senha</label>
                    <input type="password" name="password" id="senha" >
                    <div>
                        <button type="button" class="btn btn-primary" name="btn-login" id="btn-login">
                                Entrar
                        </button>
                        <p><a href="inserir-usuario.php">Inserir usuário</a> | <a href="editar-usuario.php">Editar usuários</a></p>
                    </div>
                </form>
            </div>
            <div class="caixa2 col-6">
                <img src="https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg">
            </div>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?> 

