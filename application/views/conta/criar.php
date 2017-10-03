<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Crie uma conta e começe a usar nosso sistema</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?= form_open('/conta/criar', array('autocomplete' => 'off')) ?>
        <div class="form-group">
            <label class="control-label">Nome</label>
            <?= form_error('nom') ?>
            <input class="form-control" type="text" name="nom" placeholder="Informe seu nome" value="<?= set_value('nom') ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Data de nascimento</label>
            <?= form_error('datnas') ?>
            <input class="form-control" type="text" name="datnas" placeholder="Informe sua data de nascimento" value="<?= set_value('datnas') ?>">
        </div>
        <div class="form-group">
            <label class="control-label">E-mail</label>
            <?= form_error('ema') ?>
            <input class="form-control" type="text" name="ema" placeholder="Informe seu e-mail" value="<?= set_value('ema') ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Usuário</label>
            <?= form_error('usu') ?>
            <input class="form-control" type="text" name="usu" placeholder="Informe um usuário" value="<?= set_value('usu') ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Senha</label>
            <?= form_error('sen') ?>
            <input class="form-control" type="password" name="sen" placeholder="Informe uma senha" value="<?= set_value('sen') ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Confirmar a senha</label>
            <?= form_error('conf_sen') ?>
            <input class="form-control" type="password" name="sen" placeholder="Confirmar a senha" value="<?= set_value('conf_sen') ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Criar">
            <?= anchor('/welcome', 'Voltar', array('class' => 'btn btn-default')) ?>
        </div>
        <?= form_close() ?>
    </div>
</div>

