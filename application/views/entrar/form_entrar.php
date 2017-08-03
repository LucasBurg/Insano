<div>
    <div>
        <?=form_open('/entrar', array('autocomplete' => 'off'))?>
        <div>
            <label>Usuário</label>
            <input type="text" name="usu" value="<?=set_value('usu')?>">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="sen" value="<?=set_value('sen')?>">
        </div>
        <div>
            <input type="submit" name="submit" value="Entrar">
        </div>
        <?=form_close()?>
    </div>
</div>

