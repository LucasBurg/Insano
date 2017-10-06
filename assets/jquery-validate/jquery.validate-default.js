jQuery.validator.setDefaults({
    debug: true,
    onfocusout: function(element) { 
        if ($(element).valid()) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        }
    },
    lang: 'pt_BR',
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error').removeClass('has-success');
    },
    focusCleanup: true,
    errorElement: 'p',
    errorClass: 'text-danger',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});

jQuery.validator.addMethod(
    'brazilian_date',
    function(value, element) {
        if (value === '') { return true; } 
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    'Por favor informe a date no formato dd/mm/yyyy.'
);

jQuery.validator.addMethod(
    'telefone',
    function(value, element) {
        if (value === '') { return true; } 
        return value.match(/^\([1-9]{2}\)\s\d{4,5}-?\d{4}$/);
    },
    'Por favor informe um telefone valido.'
);

jQuery.validator.addMethod(
    'cpf',
    function (value, element) {
        if (value === '') { return true; } 
        cpf = value.replace(/[^\d]+/g,'');
        if (cpf.length !== 11 ||
            cpf === "00000000000" ||
            cpf === "11111111111" ||
            cpf === "22222222222" ||
            cpf === "33333333333" ||
            cpf === "44444444444" ||
            cpf === "55555555555" ||
            cpf === "66666666666" ||
            cpf === "77777777777" ||
            cpf === "88888888888" ||
            cpf === "99999999999")
            return false;
        add = 0;
        for (i=0; i < 9; i ++)
            add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev === 10 || rev === 11)
            rev = 0;
        if (rev !== parseInt(cpf.charAt(9)))
            return false;
        add = 0;
        for (i = 0; i < 10; i ++)
            add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev === 10 || rev === 11)
            rev = 0;
        if (rev !== parseInt(cpf.charAt(10)))
            return false;
        return true;
    },
    'Por favor informe um CPF valido.'
);


