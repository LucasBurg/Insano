<?php if (isset($_SESSION['sucesso'])) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('sucesso'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Seja bem vindo! <small>Informe seu usuário e senha para entrar na sua conta.</small></h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?= validation_errors() ?>
        <?=form_open('/autenticacao/entrar', array('autocomplete' => 'off'))?>
        <div class="form-group">
            <label class="control-label">Usuário</label>
            <input class="form-control" type="text" name="usu" value="<?=set_value('usu')?>">
        </div>
        <div class="form-group">
            <label class="control-label">Senha</label>
            <input class="form-control" type="password" name="sen" value="<?=set_value('sen')?>">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Entrar">
            <?= anchor('conta/criar', 'Crair uma conta') ?>
        </div>
        <?=form_close()?>
    </div>
</div>
