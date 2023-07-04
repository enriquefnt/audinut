// no me acuerdo :)

function llenarCampo(idCampo) {
    var campo = document.getElementById(idCampo);
    var valor = campo.value;

    if (valor.length === 3) {
        campo.value = valor + "-";
    } else if (valor.length > 3 && !valor.includes("-")) {
        var primeraParte = valor.substr(0, 3);
        var segundaParte = valor.substr(3);
        campo.value = primeraParte + "-" + segundaParte;
    }
}

window.addEventListener("DOMContentLoaded", function() {
    var camposCarga = document.querySelectorAll("[data-llenar-campo]");
    camposCarga.forEach(function(campo) {
        var idCampo = campo.dataset.llenarCampo;
        campo.addEventListener("keydown", function() {
            llenarCampo(idCampo);
        });
    });
});

 // pone la fecha del día por defecto en formulario de pedidos


document.addEventListener("DOMContentLoaded", function() {
    var fechaInput = document.getElementById("fecha_ped");
    var fechaActual = new Date();
    var dia = ("0" + fechaActual.getDate()).slice(-2);
    var mes = ("0" + (fechaActual.getMonth() + 1)).slice(-2);
    var fechaHoy = fechaActual.getFullYear() + "-" + mes + "-" + dia;

    fechaInput.value = fechaHoy;
  });

  // COntrola el switch en cargar producto

  const activoSwitch = document.getElementById('activoSwitch');
    const activoInput = document.getElementById('activoInput');

    activoSwitch.addEventListener('change', function() {
      activoInput.value = this.checked ? '1' : '0';
    });
  