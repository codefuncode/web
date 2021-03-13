function test(argument) {
    for (var i = 0; i < estudiante.length; i++) {

        console.log(estudiante[i].getValorers());

    }
    for (var i = 0; i < estudiante.length; i++) {

        estudiante[i].setPromedio()
    }
    var todoslospromedios = 0;

    for (var i = 0; i < estudiante.length; i++) {

        todoslospromedios = todoslospromedios + estudiante[i].getpromedio();

    }
    console.log(todoslospromedios);
    console.log(todoslospromedios / estudiante.length);

    for (var i = 0; i < estudiante.length; i++) {

        console.log(estudiante[i].getmensajePromedio());
    }

}

function CreaTabla(estudiantes) {
    console.log(estudiantes);
    let filas;
    for (var i = 0; i < estudiantes.length; i++) {
        crea_campos(estudiantes[i])
    }

}

function crea_elemento(elemento) {
    return document.createElement(elemento)
}

function crea_campos(estudiante) {
    let record = crea_elemento("TR");

    var size = Object.size(estudiante);
    console.log(size);
    console.log(estudiante);
    console.log(estudiante["nombre"]);
    console.log(estudiante["cal1"]);
    console.log(estudiante["cal2"]);
    console.log(estudiante["cal3"]);

}
Object.size = function(obj) {
    var size = 0,
        key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

function CreaTd(argument) {
    // body...
}