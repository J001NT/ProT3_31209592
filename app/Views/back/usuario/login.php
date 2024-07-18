<!-- Mensaje de Error -->
<?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
    <?php endif;?>



<div class="container-fluid bg-danger text-dark bg-opacity-10 border-hd-bottom border-3">
    <div class="container bg-danger text-dark bg-opacity-10">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="fs-1 mt-3">Iniciar Sesion</h2>

<!-- Inicio del formulario de login -->
                <form class="my-4 p-2" method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label fs-5">Password</label>
                        <input name="pass" type="password" class="form-control" id="pass">
                    </div>
                    <input type="submit" value="Ingresar" class="btn mt-2 btn-primary">
                    <a href="<?php echo base_url('login'); ?>" class="mt-2 btn btn-danger">Cancelar</a>
                    <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>">Registrarse aquí</a></span>
                </form>
            </div>
        </div>
    </div>
</div>