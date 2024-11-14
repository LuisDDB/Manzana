<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
Nuevo Usuario
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
           <h3 class="card-titule">Lista de usuarios</h3> 
        </div>
        <div class="card-body">
            <form action="/usuarios/store" method="POST" name="usuarioform">
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="correo">correo</label>
                    <input class="form-control" type="email" name="correo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="telefono">telefono</label>
                    <input type="tel" name="telefono" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_usuario">password_usuario</label>
                    <input type="password" name="password_usuario" class="form-control" required>
                </div>



                <button class="btn btn-success" type="submit">Crear usuario</button>
            </form>
        </div>
    </div>
</section>


<?php $this->endSection();?>