<?php $validation = \Config\Services::validation(); ?>

<div class="container-fluid bg-danger text-dark bg-opacity-10 border-hd-bottom border-3">
    <div class="container bg-danger text-dark bg-opacity-10">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="fs-1 mt-3">Registrarse</h2>
                <form class="my-4 p-2" method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?=csrf_field();?>
                        <?=csrf_field();?>
                        <?php if(!empty (session()->getFlashdata('fail'))):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                        <?php endif?>
                            <?php if(!empty (session()->getFlashdata('success'))):?>
                            <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                            <?php endif?>
                    <div class="mb-3">
                        <label for="nombre" class="form-label fs-5">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre">
                        <!--Error-->
                            <?php if($validation->getError('nombre')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php }?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="apellido" class="form-label fs-5">Apellido</label>
                        <input name="apellido" type="text" class="form-control" id="apellido">
                        <!--Error-->
                        <?php if($validation->getError('apellido')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                        <!--Error-->
                        <?php if($validation->getError('email')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label fs-5">Usuario</label>
                        <input name="usuario" type="text" class="form-control" id="usuario">
                        <!--Error-->
                        <?php if($validation->getError('usuario')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('usuario'); ?>
                                </div>
                            <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label fs-5">Password</label>
                        <input name="pass" type="password" class="form-control" id="pass">
                        <!--Error-->
                        <?php if($validation->getError('pass')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php }?>
                    </div>
                    <button type="submit" class="mt-2 btn btn-primary">Guardar</button>
                    <button tupe="reset" class="mt-2 btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>