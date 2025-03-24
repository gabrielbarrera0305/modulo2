function eliminarElemento() {
    const elementoAEliminar = document.getElementById('elementoAEliminar').value.trim();

    if (elementoAEliminar === '') {
        alert('Por favor, ingresa un elemento para eliminar.');
        return;
    }

    const lista = document.getElementById('lista');
    const elementos = lista.getElementsByTagName('li');

    let elementoEliminado = false;

    for (let i = 0; i < elementos.length; i++) {
        if (elementos[i].textContent.toLowerCase() === elementoAEliminar.toLowerCase()) {
            lista.removeChild(elementos[i]);
            elementoEliminado = true;
            break; 
        }
    }

    if (!elementoEliminado) {
        alert(El elemento "${elementoAEliminar}" no se encontró en la lista.);
    }

    document.getElementById('elementoAEliminar').value = '';
}