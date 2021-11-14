let typed = new Typed('.typed', {
    strings: ['<i class="promdemes">BIENVENIDOS</i>',
        '<i class="promdemes">TEAM 10 TRAVEL</i>',
        '<i class="promdemes">EXPERIENCES</i>'
    ],

    stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
    typeSpeed: 100, // Velocidad en mlisegundos para poner una letra,
    startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
    backSpeed: 100, // Velocidad en milisegundos para borrrar una letra,
    smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
    shuffle: false, // Alterar el orden en el que escribe las palabras.
    backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
    loop: true, // Repetir el array de strings
    loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
    showCursor: true, // Mostrar cursor palpitanto
    cursorChar: '|', // Caracter para el cursor
    contentType: 'html', // 'html' o 'null' para texto sin formato
});

let client = new Typed('.clients', {
    strings: ['<i class="happy">CLIENTES FELICES</i>'],

    stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
    typeSpeed: 100, // Velocidad en mlisegundos para poner una letra,
    startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
    backSpeed: 100, // Velocidad en milisegundos para borrrar una letra,
    smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
    shuffle: false, // Alterar el orden en el que escribe las palabras.
    backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
    loop: true, // Repetir el array de strings
    loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
    showCursor: true, // Mostrar cursor palpitanto
    cursorChar: '|', // Caracter para el cursor
    contentType: 'html', // 'html' o 'null' para texto sin formato

});



/* MENU */

$("#menu").click(function() {

    if ($(".menu-movil").hasClass("show")) {
        $(".menu-movil").removeClass("show");
        $(".log-2").removeClass("invisible");
    } else {
        $(".menu-movil").addClass("show");
        $(".log-2").addClass("invisible");
    }

});

$("#navm a").click(function() {

    if ($(".menu-movil").hasClass("show")) {
        $(".menu-movil").removeClass("show");
        $(".log-2").removeClass("invisible");
    }

});