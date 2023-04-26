<div><h5>Captura de Clientes</h5></div>
<div class="row bg-success">
    <div class="col-4">

        <form method="post" action="uno" enctype="multipart/from-data">
        <h4>nombre</h4> <input type="text" name="txtNombre" required>
        <h4>apellidos</h4> <input type="text" name="txtApellidos" required>
        <h4>email</h4> <input type="text" name="txtEmail" required>
        <h4>telefono</h4> <input type="text" name="txtTelefono" required>
        <h4>direccion</h4> <input type="text" name="txtDireccion" required>
        <button type="">guardar</button>
        </form>

    </div>
    <div class="col-8">
    <?php echo $mensaje; ?>
    </div>
</div>