

<div class="modal" id="SucessModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Se ha registrado correctamente el beneficiario </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Seleccione cargar un pedido a <b><?=$datosCaso['Nombres']. ' '.$datosCaso['Apellidos'] ?></b> o salga al inicio.</p>
      </div>
      <div class="modal-footer">
                <a href="/pedido/pedido?id=<?=$datosCaso['id_datos_benef']?>" class="btn btn-info" role="button">Carga Pedido</a>
                <a href="/" class="btn btn-info" role="button">Salir</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function() {$('#SucessModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
</script>