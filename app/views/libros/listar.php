<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    Listar Libros

    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombres</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($libro as $libro)?>
        <tr >
            <td><?php=$libro['id']?></td>
            <td><?php=$libro['imagen']?></td>
            <td><?php=$libro['nombre']?></td>
        </tr>
    
  </tbody>
</table>

    
</body>
</html>