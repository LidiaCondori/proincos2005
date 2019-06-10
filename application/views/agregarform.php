<div class="container">
<?php echo form_open_multipart('paises/agregardb'); ?>
<input type="text" name="pais" placeholder="Ingrese pais"></input>
<input type="text" name="capital" placeholder="Ingrese capital"></input>
<input type="text" name="poblacion" placeholder="Ingrese poblacion"></input>
<input type="text" name="hombres" placeholder="Ingrese cantidad"></input>
<input type="text" name="mujeres" placeholder="Ingrese cantidad"></input>
<button type="submit" class="btn btn-primary">Agregar</button>
<?php echo form_close(); ?>
</div>