<?php
require_once __DIR__ . '/connection.php';
$read = $connect->query("SELECT * FROM usuario WHERE id = $_POST[id]")->fetchAll(PDO::FETCH_OBJ); ?>
    <div id="form-alert" class="alert col-sm-12">
        <span id="mensagem"></span>
    </div>
    <form id="edit-form" class="form-horizontal" role="form" action="actionsql.php" method="post">
        <input type="hidden" name="id" value="<?php echo $read[0]->id; ?>" >  
        <label for="primeiro_nome" >Primeiro Nome</label>
        <input type="text" id="primeiro_nome" name="primeiro_nome"value="<?php echo $read[0]->primeiro_nome; ?>">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="ultimo_nome" name="sobrenome"value="<?php echo $read[0]->sobrenome; ?>">
        <label for="email">email</label>
        <input type="text" id="email" name="email"  value="<?php echo $read[0]->email; ?>">
        <label for="login" >Usuário</label>
        <input type="text" id="login" name="usuario" value="<?php echo $read[0]->usuario; ?>">
        <label for="status">Status do usuário</label>
        <select id="status" name="status">
            <?php if ($read[0]->status == 0) {
                echo '<option value="0">Inativo</option> <option value="1">Ativo</option>';
            } else {
                echo '<option value="1">Ativo</option>
                <option value="0">Inativo</option>';
            }; ?>
            
        </select>
        <input type="hidden" name="tipo" value="editar">
        <div>
            <button type="button" class="btn btn-primary" name="btn-edit" id="btn-edit">alterar</button>
        </div>
    </form>
