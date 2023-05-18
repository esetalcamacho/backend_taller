document.getElementById('filtro').addEventListener('input', function () {
    var filtro = this.value.toLowerCase();
    var filas = document.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    for (var i = 0; i < filas.length; i++) {
        var celdas = filas[i].getElementsByTagName('td');
        var mostrarFila = false;

        for (var j = 0; j < celdas.length; j++) {
            var contenido = celdas[j].textContent.toLowerCase();

            if (contenido.indexOf(filtro) > -1) {
                mostrarFila = true;
                break;
            }
        }

        filas[i].style.display = mostrarFila ? '' : 'none';
    }
});