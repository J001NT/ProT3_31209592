<div class="container-fluid bg-danger bg-opacity-10 border-hd-bottom border-3">
    <div class="container py-2">
        <div class="card">
            <div class="card-header">
                Editar Usuarios
            </div>

            <?php if (session('msj')) { ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> <?=session('msj'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


            <?php } ?>

            <form action="<?= base_url('add') ?>" method="post">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $dato['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $dato['apellido']?>">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $dato['usuario']?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $dato['email']?>">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-success">
                    <input type="hidden" name="id" value="<?= $dato['id_usuario'] ?> ">
                    <a href="<?= base_url('administrar') ?>" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>