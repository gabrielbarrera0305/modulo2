const textoElemento = document.getElementById('texto');
const boton = document.getElementById('boton');

boton.addEventListener('click', function() {
    textoElemento.textContent = '¡El texto ha sido cambiado!';
});