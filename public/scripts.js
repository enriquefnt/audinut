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