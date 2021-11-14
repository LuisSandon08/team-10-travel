$(document).ready(function() {
    $(function() {
        let inputId = 0;
        let inputfieldId = 0;
        let inputiconId = 0;

        $('.inputfield').each(function() {
            inputfieldId++;
            $(this).attr('inputfield-id', inputfieldId);
        });

        $('.inputfield input').each(function() {
            inputId++;
            $(this).attr('input-id', inputId);
        });

        $('.inputfield i').each(function() {
            inputiconId++;
            $(this).attr('inputicon-id', inputiconId);
        });

    })
});

$('.formularioRegistro').each(function() {
    $(this).bind('keyup', validarForm);
    $(this).bind('click', validarForm);
})

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{2,40}$/, // Letras y espacios, pueden llevar acentos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    usuario: /^[a-zA-Z0-9_.+-]{4,40}/,
    password: /^.{4,12}$/,

}

function validarForm(e) {
    switch (e.target.name) {
        case "nombres":
            validarCampo(expresiones.nombre, e.target);
            break;
        case "apellidos":
            validarCampo(expresiones.nombre, e.target);
            break;
        case "usuario":
            validarCampo(expresiones.usuario, e.target);
            break;
        case "email":
            validarCampo(expresiones.email, e.target);
            break;
        case "password":
            validarCampo(expresiones.password, e.target);
            break;
        case "confirmar_password":
            validarCampo(expresiones.password, e.target);
            break;
    }
}

function validarCampo(expresion, input) {
    let inputID = input.attributes[5].nodeValue;
    let inputActivo = $(`.inputFormulario[input-id="${inputID}"]`);
    let inputfieldActivo = (`.inputfield[inputfield-id="${inputID}"]`);
    let inputiconActivo = (`.inputfield i[inputicon-id="${inputID}"]`);


    if (expresion.test(input.value)) {
        $(inputfieldActivo).removeClass('campoIncorrecto');
        $(inputiconActivo).removeClass('colorincorrecto');
        $(inputfieldActivo).addClass('campoCorrecto');
        $(inputiconActivo).addClass('colorcorrecto');

    } else {
        $(inputiconActivo).addClass('colorincorrecto');
        $(inputiconActivo).removeClass('colorcorrecto');
        $(inputfieldActivo).addClass('campoIncorrecto');
        $(inputfieldActivo).removeClass('campoCorrecto');
    }
}