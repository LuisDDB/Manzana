<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
<h1>Editar usuario</h1>
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
            <h3 class="card-titule">Usuario</h3>
            <!--Views/usuarios/create-->

            <form action="/usuarios/<?=$usuario["Id"];?>/update" method="POST" name="usuarioform">
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input  class="form-control" type="text" name="nombre" value="<?= $usuario["nombre"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="correo">correo</label>
                    <input  class="form-control" type="email" name="correo" value="<?= $usuario["correo"]; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="telefono">telefono</label>
                    <input  class="form-control" type="tel" name="telefono" value="<?= $usuario["telefono"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_usuario">password_usuario</label>
                    <input  class="form-control" type="password" name="password_usuario" value="<?= $usuario["password_usuario"]; ?>"
                        required>
                </div>
                <button  class="btn btn-success" type="submit">Editar usuario</button>
            </form>




        </div>

    </div>
</section>


<?php $this->endSection();?>