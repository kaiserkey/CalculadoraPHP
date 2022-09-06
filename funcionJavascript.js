var display = document.getElementById("display");
var resultado = document.getElementById("resultado");
var datos_php = document.getElementById("datos_php");
var numeros = [];

function agregarDisplay(valor){
    if(valor!='del' && valor != 'ac'){
        numeros.push(valor);
        display.innerHTML = numeros.join("");
    }
    if(valor=='del'){
        numeros.pop();
        display.innerHTML = numeros.join("");
    }
    if(valor=='ac'){
        numeros = [];
        display.innerHTML = numeros.join("");
    }
    getDisplay();
}

function getDisplay(){
    datos_php.value = display.innerHTML;
}

