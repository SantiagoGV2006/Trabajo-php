function realizarTodasOperaciones() {

    fetch('libreria/calcular.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
    },
    body: JSON.stringify({
        numero1: 1,
        numero2: 4
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
        } else {
            document.getElementById('resultadoSuma').textContent = `suma: ${data.suma}`;
            document.getElementById('resultadoResta').textContent = `resta: ${data.resta}`;
            document.getElementById('resultadoMultiplicacion').textContent = `Multiplicación: ${data.multiplicacion}`;
            document.getElementById('resultadoDivision').textContent = `División: ${data.division}`;
        }
    })
    .catch(error => console.error('Error:', error));
}
document.addEventListener("DOMContentLoaded", function() {
    realizarTodasOperaciones();
})