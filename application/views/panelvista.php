<div class="container">
<h1>panel de usuario</h1>
<a href="<?php echo base_url(); ?>index/usuarios/logout">Cerrar sesion</a>

<h2>Bienvenid@ <?php echo $this->session->userdata('login');?></h2>
</div>