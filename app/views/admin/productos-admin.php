<?=$cabecera?>

<br>
    <br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($productos as $producto):?>
        <tr >
            <td><?=$producto['id'];?></td>
            <td><?=$producto['nombre'];?></td>
            <td><?=$producto['descripcion'];?></td>
            <td><?=$producto['precio'];?></td>
            <td><?=$producto['stock'];?></td>
            <td>
              <img class="img-thumbnail" 
              src="<?=base_url()?>uploads/<?=$producto['imagen'];?>" 
              alt="thumbnail"
              width=10%;>
            </td>
            <td> 
                <a href="<?=base_url('editar/'.$libro['id']);?>" class="btn btn-info" type="button">Editar</a>
                <a href="<?=base_url('borrar/'.$libro['id']);?>" class="btn btn-danger" type="button">Borrar</a>
              </td>
        </tr>
        <?php endforeach;?>
  </tbody>
</table>

<a href="<?=base_url('/crear')?>" >Crear Libro</a>
    




<?=$pie?>