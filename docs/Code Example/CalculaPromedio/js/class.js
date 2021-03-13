class Estudiante {
    // Construye y define varibles de primera instancia 
    constructor(nombre, cal1, cal2, cal3) {

        this.nombre = nombre;
        this.cal1 = cal1;
        this.cal2 = cal2;
        this.cal3 = cal3;
        this.valorexamen = 100;
        this.promedio = (((this.cal1 + this.cal2 + this.cal3) / (this.valorexamen * 3)).toFixed(2) * 100);
        this.fila = document.createElement("TR");
        this.campoNombre = document.createElement("TD");
        this.campoCal1 = document.createElement("TD");
        this.campoCal2 = document.createElement("TD");
        this.campoCal3 = document.createElement("TD");
        this.campoPromedio = document.createElement("TD");

    }
    //  devieklve resultados 
    getValorers() {

        return {

            nombre: this.nombre,
            cal1: this.cal1,
            cal2: this.cal2,
            cal3: this.cal3,

        }
    }

    getpromedio() {
        return this.promedio;

    }

    getmensajePromedio() {
        return "El promedio de " +
            this.nombre + " " + this.promedio;
    }
    getRecord() {
        this.campoNombre.innerHTML = this.nombre;
        this.campoCal1.innerHTML = this.cal1;
        this.campoCal2.innerHTML = this.cal2;
        this.campoCal3.innerHTML = this.cal3;
        this.campoPromedio.innerHTML = this.promedio;
        this.fila.appendChild(this.campoNombre);
        this.fila.appendChild(this.campoCal1);
        this.fila.appendChild(this.campoCal2);
        this.fila.appendChild(this.campoCal3);
        this.fila.appendChild(this.campoPromedio);

        return this.fila;
    }

}

let estudiante = [];
// estudiante.push(new Estudiante("Pepoe", 100, 100, 100));
// estudiante.push(new Estudiante("Juan", 50, 5, 10));
// estudiante.push(new Estudiante("Andea", 100, 20, 0));
// estudiante.push(new Estudiante("Lusa", 10, 30, 150));
function borra_nodos(argument) {

    while (argument.firstChild) {

        argument.removeChild(argument.lastChild);

    }
}
let agregar = document.getElementById("agregar");
agregar.addEventListener("click", function(argument) {
    let nombre = document.getElementById("nombre");
    let cal1 = document.getElementById("cal1");
    let cal2 = document.getElementById("cal2");
    let cal3 = document.getElementById("cal3");

    estudiante.push(

        new Estudiante(
            nombre.value,
            parseInt(cal1.value),
            parseInt(cal2.value),
            parseInt(cal3.value)
        )
    );
    let data_estudiantes = document.querySelector(".data_estudiantes");
    borra_nodos(data_estudiantes);

    for (var i = 0; i < estudiante.length; i++) {

        data_estudiantes.appendChild(estudiante[i].getRecord());

    }
});

CreaTabla(estudiante);