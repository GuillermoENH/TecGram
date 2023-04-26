<div><h5>Captura de pedidos</h5></div>
<div class="row">
    <div class="col-4">

        <form method="post" action="home" enctype="multipart/from-data">
        <h4>fecha</h4> <input type="text" name="txtFecha" required>
        <h4>cliente</h4> <input type="text" name="txtCliente" required>
        <h4>destino</h4> <input type="text" name="txtDestino" required>
        <h4>costo</h4> <input type="text" name="txtCosto" required>
        <h4>observaciones</h4> <input type="text" name="txtObservaciones" required>
        <button type="">guardar</button>
        </form>

    </div>
    <div class="col-8">
    <?php echo $mensaje; ?>
    </div>
</div>