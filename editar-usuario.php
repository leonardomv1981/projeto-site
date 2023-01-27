<?php
require 'header.php';
require 'menu.php';
require_once __DIR__ . '/connection.php';
$read = $connect->query('SELECT * FROM usuario')->fetchAll(PDO::FETCH_OBJ); ?>
<main>
    <div class="col-12">
        <div class="row">
            <div class="caixa2 col-6"> 
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Id:</th>
                        <th scope="col">Nome:</th>
                        <th scope="col">E-mail:</th>
                        <th scope="col">usuário:</th>
                        <th scope="col">Status:</th>
                        <th scope="col">Editar:</th>
                    </tr>
                        <?php foreach($read as $usuario){ ?>
                    <tr>
                        <th scope='row'> <?php echo $usuario->id; ?></th>
                            <td><p><?php echo $usuario->primeiro_nome . " " . $usuario->sobrenome ?></p></td>
                            <td><p><?php echo $usuario->email; ?></p></td>
                            <td><p><?php echo $usuario->usuario;?></p></td>
                            <?php if ($usuario->status == 0) { ?>
                                <td> Usuário inativo </td>
                            <?php } elseif ($usuario->status == 1){ ?>
                                <td> Usuário ativo </td>
                            <?php }; ?>
                            <td><button type="button" class="btn btn-primary btn-editar" name="btn-editar" data-param='{"id" : <?php echo $usuario->id; ?>}'>editar</button></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
            <div class="caixa2 col-6" id="dados-usuarios">
                <img src="https://png.pngtree.com/png-vector/20190919/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1742031.jpg">
            </div>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?> 
