<div class="container">

<h2>Lista de Paises</h2>

<?php echo form_open_multipart('paises/agregar'); ?>
<button type="submit" class="btn btn-primary">Agregar</button>
<?php echo form_close(); ?>

  
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Pais</th>
        <th>capital</th>
        <th>poblacion</th>
        <th>hombres</th>
        <th>mujeres</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $indice=1;
    foreach ($paises->result() as $row) {
      ?>
      <tr>
        <td><?php echo $indice; ?></td>
        <td><?php echo $row->pais; ?></td>
        <td><?php echo $row->capital; ?></td>
        <td><?php echo $row->poblacion; ?></td>
        <td><?php echo $row->hombres; ?></td>
        <td><?php echo $row->mujeres; ?></td>
        <td>
          <?php echo form_open_multipart('paises/modificar'); ?>
            <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
            <button type="submit" class="btn btn-primary">Modificar</button>
          <?php echo form_close(); ?>
        </td>
        <td>
          <?php echo form_open_multipart('paises/eliminardb'); ?>
            <input type="hidden" name="idpais" value="<?php echo $row->idpais; ?>"></input>
            <input type="hidden" name="pais" value="<?php echo $row->pais; ?>"></input>
            <input type="hidden" name="capital" value="<?php echo $row->capital; ?>"></input>
            <input type="hidden" name="poblacion" value="<?php echo $row->poblacion; ?>"></input>
            <input type="hidden" name="hombres" value="<?php echo $row->hombres; ?>"></input>
            <input type="hidden" name="mujeres" value="<?php echo $row->mujeres; ?>"></input>
            <button type="submit" class="btn btn-primary">Eliminar</button>
          <?php echo form_close(); ?>
        </td>
      </tr>
      <?php
      $indice++;
    }
    ?>
    </tbody>
  </table> 

 </div>
 