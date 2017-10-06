<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Crie uma conta e começe a usar nosso sistema</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?= form_open('/conta/criar', array('id' => 'form_conta_criar', 'autocomplete' => 'off')) ?>
        <div class="form-group">
            <label class="control-label">Nome</label>
            <input class="form-control" type="text" name="nom" placeholder="Informe seu nome" value="<?= set_value('nom') ?>">
            <?= form_error('nom') ?>
        </div>
        <div class="form-group">
            <label class="control-label">Data de nascimento</label>
            <input class="form-control" type="text" name="dat_nas" placeholder="Informe sua data de nascimento" value="<?= set_value('dat_nas') ?>">
            <?= form_error('dat_nas') ?>
        </div>
        <div class="form-group">
            <label class="control-label">E-mail</label>
            <input class="form-control" type="text" name="ema" placeholder="Informe seu e-mail" value="<?= set_value('ema') ?>">
            <?= form_error('ema') ?>
        </div>
        <div class="form-group">
            <label class="control-label">Usuário</label>
            <input class="form-control" type="text" name="usu" placeholder="Informe um usuário" value="<?= set_value('usu') ?>">
            <?= form_error('usu') ?>
        </div>
        <div class="form-group">
            <label class="control-label">Senha</label>
            <input class="form-control" type="password" name="sen" id="sen" placeholder="Informe uma senha" value="<?= set_value('sen') ?>">
            <?= form_error('sen') ?>
        </div>
        <div class="form-group">
            <label class="control-label">Confirmar a senha</label>
            <input class="form-control" type="password" name="conf_sen" id="conf_sen" placeholder="Confirmar a senha" value="<?= set_value('conf_sen') ?>">
            <?= form_error('conf_sen') ?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Criar">
            <?= anchor('/welcome', 'Voltar', array('class' => 'btn btn-default')) ?>
        </div>
        <?= form_close() ?>
    </div>
</div>

