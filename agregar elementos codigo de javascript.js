function agregarElemento() {
    const nuevoElemento = document.getElementById('nuevoElemento').value;

    if (nuevoElemento.trim() === '') {
        alert('Por favor, ingresa un elemento.');
        return;
    }

    const li = document.createElement('li');
    li.textContent = nuevoElemento;

    document.getElementById('lista').appendChild(li);

    document.getElementById('nuevoElemento').value = '';
}