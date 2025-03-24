const campoTexto = document.getElementById('campoTexto');
const mensaje = document.getElementById('mensaje');

// Escuchar el evento "input" en el campo de texto
campoTexto.addEventListener('input', function () {
    // Obtener el valor del campo de texto
    const texto = campoTexto.value.trim();

    // Mostrar el mensaje dinámico
    if (texto === '') {
        mensaje.textContent = 'Aún no has escrito nada.';
    } else {
        mensaje.textContent = Has escrito: "${texto}";
    }
});