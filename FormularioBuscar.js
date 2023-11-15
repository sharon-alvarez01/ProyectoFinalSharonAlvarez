


var c = document.getElementById('botonBuscarFormulario');
c.addEventListener('click', function(event){
    event.preventDefault();
    var y = document.getElementById('buscarPromociones');
    if (y.style.display==="block") {
        y.style.display = "none";
        y.style.display ='';
    }

    var x = document.getElementById('formularioBuscar');
    if (x.style.display === "none") {
        x.style.display = "block";
        x.style.display ='';

    } 
    var y = document.getElementById('formularioAgregar');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } 
})
    







/* BOTONES PRINCIPALES */




function buscarServicio(){
    var y = document.getElementById('buscarPromociones');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var y = document.getElementById('buscarServcio');
    if (y.style.display === "none") {
        y.style.display = "block";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
}

function buscarPromociones(){
    var y = document.getElementById('buscarServcio');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var y = document.getElementById('buscarPromociones');
    if (y.style.display === "none") {
        y.style.display = "block";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var x = document.getElementById('formularioBuscar');
    if (x.style.display === "block") {
        x.style.display = "none";
        x.style.display ='';
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById('formularioAgregar');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
}

/* MOSTRAR FORMULARIO BUSCAR DE SERVICIOS  
function mostrarFormularioBuscar(){
    var c = document.getElementById('botonBuscarFormulario');
    botonFormularioBuscar.addEventListener('click', function(event){
        event.preventDefault();
        var y = document.getElementById('buscarPromociones');
    if (y.style.display==="block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }

    var x = document.getElementById('formularioBuscar');
    if (x.style.display === "none") {
        x.style.display = "block";
        x.style.display ='';

    } else {
        x.style.display = "none";
    }
    var y = document.getElementById('formularioAgregar');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    })
    
}*/

/* MOSTRAR FORMULARIO AGREGAR DE SERVICIOS  */

function mostrarformularioAgregar(){
    
    var y = document.getElementById('formularioAgregar');
    if (y.style.display === "none") {
        y.style.display = "block";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var x = document.getElementById('formularioBuscar');
    if (x.style.display === "block") {
        x.style.display = "none";
        x.style.display ='';
    } else {
        x.style.display = "none";
    }
}

/* MOSTRAR FORMULARIO BUSCAR DE PROMOCIONES  */

function mostrarformularioBuscarPromociones(){
   
    var y = document.getElementById('formularioBuscarPromociones');
    if (y.style.display === "none") {
        y.style.display = "block";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var y = document.getElementById('formularioAgregarPromociones');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    
}

/* MOSTRAR FORMULARIO AGREGAR DE PROMOCIONES  */

function mostrarformularioAgregarPromociones(){
    
    var y = document.getElementById('formularioAgregarPromociones');
    if (y.style.display === "none") {
        y.style.display = "block";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
    var y = document.getElementById('formularioBuscarPromociones');
    if (y.style.display === "block") {
        y.style.display = "none";
        y.style.display ='';
    } else {
        y.style.display = "none";
    }
}
