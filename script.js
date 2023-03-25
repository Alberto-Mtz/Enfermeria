
document.getElementById('window-select').style.display = "none";

var API_URL = 'http://3.138.60.6:8000/';
let miCookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith("token=")).split('=')[1];
console.log(miCookie);

let subjects = new Array();
let materias2 = new Array();

fetch(API_URL + '/subjects', {
    headers: {
        "Authorization": miCookie
    }
})
.then(response => response.json())
.then(data => {
    let cont = 0;
    for(let i = 0; i < data.data.length; i++){
        if(data.data[i].is_active == 1){
            subjects[cont] = data.data[i].data;
            cont++;
        }
    }


})
.catch(error => {
    console.error(error);
});



var seleccion;
var value;
var materia;

/*
var materias = [
    "Enfermeria del adulto", 
    "El cuidado de enfermeria del adulto", 
    "Salud en etapa productiva", 
    "Relacion de ayuda I", 
    "Ingles V",
    "Optativa III: Adulto joven critico",
    "Optativa III: Terapias energeticas del biocampo"
];
*/

var dia;

function mostrar(name, value){
    var selectButton = document.getElementsByName(name);
    llenarSelect(name);
    document.getElementById('window-select').style.display = "block";
    seleccion = selectButton[value];

}

var close_button = document.getElementById('close-button');

close_button.addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("window-select").style.display = "none";
});

function ShowMateria(){
    var materias = document.getElementById('materias');
    materia = materias.options[materias.selectedIndex].text;
    console.log(materia);
    seleccion.innerHTML = materia;
}

function elegirHorario(value){
    var horas = document.getElementsByName('hora');
    var mañana = new Array('7:00 a 8:00','8:00 a 9:00','9:00 a 10:00','10:00 a 11:00','11:00 a 12:00','12:00 a 13:00','13:00 a 14:00');
    var tarde = new Array('14:00 a 15:00','15:00 a 16:00','16:00 a 17:00','17:00 a 18:00','18:00 a 19:00','19:00 a 20:00','20:00 a 21:00');

    for(var i = 0; i<horas.length; i++){
        if(value == 0){
            horas[i].innerHTML = mañana[i];
        }else if(value == 1){
            horas[i].innerHTML = tarde[i];
        }
    }
}

function llenarSelect(name){
    //Tu array de materias
    var select = document.getElementById("materias"); //Seleccionamos el select
    
    var cantidad = subjects.length;
    materias2 = subjects;

    if(name == dia){
        if(subjects.length<cantidad){
            for(var i=0; i < subjects.length; i++){
                if(materia == subjects[i]){
                    subjects.splice(i,1);
                }
            }
        
            for(var i=select.length; i>=0; i--){
                select.remove(i);
            }
        
            for(var i=0; i < subjects.length; i++){ 
                var option = document.createElement("option"); //Creamos la opcion
                option.innerHTML = subjects[i]; //Metemos el texto en la opción
                select.appendChild(option); //Metemos la opción en el select
            }
        }else{
            for(var i=0; i < materias2.length; i++){
                if(materia == materias2[i]){
                    materias2.splice(i,1);
                }
            }
        
            for(var i=select.length; i>=0; i--){
                select.remove(i);
            }
        
            for(var i=0; i < materias2.length; i++){ 
                var option = document.createElement("option"); //Creamos la opcion
                option.innerHTML = materias2[i]; //Metemos el texto en la opción
                select.appendChild(option); //Metemos la opción en el select
            }
        }
    }else{
        
        for(var i=select.length; i>=0; i--){
            select.remove(i);
        }
        for(var i=0; i < materias2.length; i++){ 
            var option = document.createElement("option"); //Creamos la opcion
            option.innerHTML = materias2[i]; //Metemos el texto en la opción
            select.appendChild(option); //Metemos la opción en el select
        }
    }
    dia = name;
    console.log(cantidad);
    
    console.log(subjects);
}


