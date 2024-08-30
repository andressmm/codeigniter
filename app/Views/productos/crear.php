<h2>Guardar producto</h2>
<?= \Config\Services::validation()->listErrors()?>

<form action='<?php echo base_url('productos/guardar');?>' method='POST'>
<label for='nombre'>Nombre</label>
<input type='text' id='nombre' name='nombre' required>
<br><br><label for='descripcion'>Descripcion</label>
<input id='descripcion' name='descripcion' required>
<br><br><label for='precio'>Precio</label>
<input type='number' id='precio' name='precio' step="0.01" required>
<br><br>
<button type="submit">Guardar producto</button>
</form>

