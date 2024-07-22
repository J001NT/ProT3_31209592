<div class="container-fluid bg-danger bg-opacity-10 border-hd-bottom border-3">
  <div class="container p-2">
    <div class="card">
      <div class="card-header">
        Listado de Usuarios
      </div>
      <?php if (session('msj')) { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Todo OK!</strong> <?= session('msj'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


      <?php } ?>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Usuario</th>
              <th scope="col">Email</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datos as $data) : ?>
              <tr>
                <th scope="row"><?php echo $data['id_usuario']; ?></th>
                <td><?php echo $data['nombre']; ?></td>
                <td><?php echo $data['apellido']; ?></td>
                <td><?php echo $data['usuario']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a class="btn btn-primary" href="<?= base_url('edit/'.$data['id_usuario'] )?>">Editar</a><a class="btn btn-danger" href="<?= base_url('delete'.$data['id_usuario'] )?>">Eliminar</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a href="<?= base_url('add') ?>" class="btn btn-success">Nuevo</a>
      </div>
    </div>
  </div>
</div>