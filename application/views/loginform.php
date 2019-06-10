<div class="container">
<?php echo form_open_multipart('usuarios/validarusuario'); ?>
<input type="text" name="login" placeholder="Ingrese login"></input>
<input type="password" name="password" placeholder="Ingrese password"></input>
<button type="submit" class="btn btn-primary">ingresar</button>
<?php echo form_close(); ?>
</div>