function realizarNomina() {
    fetch('libreria/calcular.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('resultadoSalario').textContent = `Salario: ${data.salario}`;
        document.getElementById('resultadoSalud').textContent = `Salud: ${data.salud}`;
        document.getElementById('resultadoPension').textContent = `Pensión: ${data.pension}`;
        document.getElementById('resultadoArl').textContent = `Arl: ${data.arl}`;
        document.getElementById('resultadoSubTrans').textContent = `Subsidio de transporte: ${data.subTrans}`;
        document.getElementById('resultadoRetencion').textContent = `Retención: ${data.retencion}`;
        document.getElementById('resultadoExtra').textContent = `Extra: ${data.extra}`;
        document.getElementById('resultadoDeducible').textContent = `Deducible: ${data.deducible}`;
        document.getElementById('resultadoTotalPagar').textContent = `Total a pagar: ${data.totalPagar}`;
    })
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", function(){
    realizarNomina();
});