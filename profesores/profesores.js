var API_URL = 'http://localhost:8000';
        
let miCookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith("token=")).split('=')[1];
console.log(miCookie);

const options = {
    headers: {
        "Authorization": miCookie// Incluye una cabecera de autorización con el token de acceso
    }
};

function mostrarProfesores(){

    fetch(API_URL + '/professors', {
        headers: {
            "Authorization": miCookie
        }
    })
    .then(response => response.json())
    .then(data => {
        var tabla = document.getElementById('tabla');
        console.log(data);  

                /*
                for (let i = 0; i < 26; i++) {
                    const objeto = new Object();
                    objeto.user = data.data[i].user;
                    objeto.name = data.data[i].name;
                    objeto.semester = data.data[i].semester;
                    objeto.group = data.data[i].group;
                    miColeccion.push(objeto);
                }
                */
        for (let i = 0; i < data.data.length; i++) {
            //if(data.data[i].is_active == 2 || data.data[i].type_id == 3){
                tabla.innerHTML += 
                    "<tr>"+
                        "<td>"+data.data[i].account+"</td>"+
                        "<td>"+data.data[i].name+"</td>"+
                        "<td>"+data.data[i].email+"</td>"+
                        "<td>"+data.data[i].is_active+"</td>"+
                        "<td>"+
                            "<a href='editarAlumno.php' class='btn btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>"+
                                "<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>"+
                                    "<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>"+
                                "</svg>"+
                            "</a>"+
                            "<a class='btn btn-danger ms-3'>"+
                                "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-archive-fill' viewBox='0 0 16 16'>"+
                                    "<path d='M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z'/>"+
                                "</svg>"+
                            "</a>"+
                        "</td>"+
                    "</tr>";
            //}                            
        }
    })
    .catch(error => {
        console.error(error);
    });

}


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
};