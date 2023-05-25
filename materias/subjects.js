document.getElementById('window-select').style.display = "none";
var IDsubj;

var API_URL = 'http://localhost:8000';

let miCookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith("token=")).split('=')[1];
console.log(miCookie);

function mostrarMaterias(){
    fetch(API_URL + '/subjects', {
        headers: {
            "Authorization": miCookie // Incluye una cabecera de autorización con el token de acceso
        }
    })
    .then(response => response.json())
    .then(data => {
        var tabla = document.getElementById('tabla');
        var activa = document.getElementById('activas');

        tabla.innerHTML = "";
        
        if(activa.checked){
            for (let i = 0; i < data.data.length; i++) {
                tabla.innerHTML += 
                    "<tr>"+
                        "<td id='IDsubj'>"+data.data[i].id+"</td>"+
                        "<td>"+data.data[i].data+"</td>"+
                        "<td>"+data.data[i].professor_id +"</td>"+
                        "<td>"+data.data[i].is_active+"</td>"+
                        "<td>"+
                            "<button href='editarMateria.php' class='btn btn-success' onclick='editar("+data.data[i].id+")'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>"+
                                "<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>"+
                                    "<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>"+
                                "</svg>"+
                            "</button>"+
            
                            "<button type='button' class='btn btn-danger ms-3'>"+
                                "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-archive-fill' viewBox='0 0 16 16'>"+
                                    "<path d='M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z'/>"+
                                "</svg>"+
                            "</button>"+
                        "</td>"+
                    "</tr>";      
            }
        }else{
            for (let i = 0; i < data.data.length; i++){
                if(data.data[i].is_active != 0){
                    tabla.innerHTML += 
                            "<tr>"+
                                "<td id='IDsubj'>"+data.data[i].id+"</td>"+
                                "<td>"+data.data[i].data+"</td>"+
                                "<td>"+data.data[i].professor_id+"</td>"+
                                "<td>"+data.data[i].is_active+"</td>"+
                                "<td>"+
                                    "<button href='editarMateria.php' class='btn btn-success' onclick='editar("+data.data[i].id+")'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>"+
                                        "<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>"+
                                            "<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>"+
                                        "</svg>"+
                                    "</button>"+
                
                                    "<button type='button' class='btn btn-danger ms-3'>"+
                                        "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-archive-fill' viewBox='0 0 16 16'>"+
                                            "<path d='M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z'/>"+
                                        "</svg>"+
                                    "</button>"+
                                "</td>"+
                            "</tr>";
                }  
            }
        }
        
    })
    .catch(error => {
        console.error(error);
    });
    
};

/*
function agregarMateria(){
    var materia = document.getElementById("materia");
    var 
};
*/

function editar(ID){
    document.getElementById('window-select').style.display = "block";

                        
    console.log("funcion activa");
                        
    fetch(API_URL + '/subjects/' + ID, {
        headers: {
            "Authorization": miCookie
        }
    })
    .then(response => response.json())
    .then(data => {
        var popup = document.getElementById('window-select');

        popup.innerHTML += 
            "<div class='content'>"+
                "<div class='mb-3'>"+
                    "<label for='materia' class='form-label'>Materia</label>"+
                    "<input type='text' class='form-control' id='materia' value='"+ data.data.data +"'>"+
                "</div>"+

                "<div class='mb-3'>"+
                    "<label>Profesor:</label>"+
                    "<select class='form-select' aria-label='Default select example'>"+
                        "<option value='1'>Juan Jose Rosas</option>"+
                        "<option value='2'>Gullermina Lopez Rosales</option>"+
                        "<option value='3'>Luis Alberto Lopez</option>"+
                    "</select>"+
                "</div>"+

                "<div class='mb-3'>"+
                    "<label>Materia Activa:</label>"+
                    "<select class='form-select' aria-label='Default select example'>"+
                        "<option value='0'>Si</option>"+
                        "<option value='1'>No</option>"+
                "</select>"+
                "</div>"+

                "<div class='d-grid gap-2 col-6 mx-auto'>"+
                    "<button class='btn boton' type='button' id='close-button' onclick='modificar("+ data.data.id +")'>Guardar</button>"+
                "</div>"+
            "</div>";
        
        var close_button = document.getElementById('close-button');

        close_button.addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("window-select").style.display = "none";
            popup.innerHTML = "";
        });
    })
    .catch(error => {
        console.error(error);
    });               
};     

function modificar(ID){
    var materia = document.getElementById('materia').value;

    var datos = { 'data': materia};    

    fetch(API_URL + "/subjects/"+ ID, {
        method: 'PUT',
        headers: {
            "Authorization": miCookie,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    })
    .then(response => {
        if (response.ok) {
            console.log('Recurso actualizado exitosamente');
            mostrarMaterias();
        } else {
            console.error('Error al actualizar el recurso');
        }
    })
    .catch(error => console.error(error));  
};

function buscar() {
    var input = document.getElementById("busqueda");
    var filter = input.value.toUpperCase();
    var tabla = document.getElementById("tabla");
    var filas = tabla.getElementsByTagName("tr");
  
    for (var i = 0; i < filas.length; i++) {
        var celdas = filas[i].getElementsByTagName("td");
        var coincide = false;
        for (var j = 0; j < celdas.length; j++) {
            var texto = celdas[j].textContent || celdas[j].innerText;
            if (texto.toUpperCase().indexOf(filter) > -1) {
            coincide = true;
            break;
            }
        }
        if (coincide) {
            filas[i].style.display = "";
        } else {
            filas[i].style.display = "none";
        }
    }
}
  