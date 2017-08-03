<div class="row">
    <div class="col-md-12">
        <?=form_open('/conta/criar', array('autocomplete' => 'off'))?>
            <div>
                <label>Nome</label>
                <?=form_error('nom')?>
                <input type="text" name="nom" placeholder="Informe seu nome" value="<?=set_value('nom')?>">
            </div>
            <div>
                <label>Data de nascimento</label>
                <?=form_error('datnas')?>
                <input type="text" name="datnas" placeholder="Informe sua data de nascimento" value="<?=set_value('datnas')?>">
            </div>
            <div>
                <label>E-mail</label>
                <?=form_error('ema')?>
                <input type="text" name="ema" placeholder="Informe seu e-mail" value="<?=set_value('ema')?>">
            </div>
            <div>
                <label>Usuário</label>
                <?=form_error('usu')?>
                <input type="text" name="usu" placeholder="Informe um usuário" value="<?=set_value('usu')?>">
            </div>
            <div>
                <label>Senha</label>
                <?=form_error('sen')?>
                <input type="password" name="sen" placeholder="Informe uma senha" value="<?=set_value('sen')?>">
            </div>
            <div>
                <input type="submit" class="btn btn-default" value="Criar">
            </div>
        <?=form_close()?>
    </div>
</div>


