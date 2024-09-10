num1 = document.getElementById("numero1");
num2 = document.getElementById("numero2");
r = document.getElementById("resultado");

function sumar(){
    r.value = parseFloat(num1.value) + parseFloat(num2.value);
}
function restar(){
    r.value = parseFloat(num1.value) - parseFloat(num2.value);
}
function dividir(){
    r.value = parseInt(num1.value) / parseInt(num2.value);
}
function multiplicar(){
    r.value = parseInt(num1.value) * parseInt(num2.value);
}
function modulo(){
    r.value = parseInt(num1.value) % parseInt(num2.value);
}

document.getElementById("sumar").addEventListener('click',sumar);
document.getElementById("restar").addEventListener('click',restar);
document.getElementById("dividir").addEventListener('click',dividir);
document.getElementById("multiplicar").addEventListener('click',multiplicar);
document.getElementById("modulo").addEventListener('click',modulo);

