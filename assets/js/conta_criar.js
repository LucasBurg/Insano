"use strict";

var $form_conta_criar = $('#form_conta_criar');

$form_conta_criar.validate({
    rules: {
        nom: {
            required: true
        },
        dat_nas: {
            required: true,
        },
        ema: {
            required: true,
            email: true
        }
    } 
});