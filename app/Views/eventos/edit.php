<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
<h1>Editar Evento</h1>
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
            <h3 class="card-titule">evento</h3>
            <!--Views/usuarios/create-->

            <form action="/eventos/<?=$evento["id"];?>/update" method="POST" name="usuarioform">
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre del evento</label>
                    <input class="form-control" type="text" name="nombre" value="<?= $evento["nombre"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="categoria_id">Categoria</label>
                    <input class="form-control" type="num" name="categoria_id" value="<?= $evento["categoria_id"]; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cliente_id">Cliente</label>
                    <input class="form-control" type="num" name="cliente_id" value="<?= $evento["cliente_id"]; ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fecha_evento">Fecha</label>
                    <input class="form-control" type="date" name="fecha_evento" value="<?= $evento["fecha_evento"]; ?>"
                        required>
                </div>
                
                <div class="mb-3">
                    <select class="form-select" name="estado">
                        <option selected>Pendiente</option>
                        <option value="1">Realizado</option>
                        <option value="2">Entregado</option>
                        <option value="3">Cancelado</option>
                    </select>
                </div>
                <button class="btn btn-success" type="submit">Editar usuario</button>
            </form>




        </div>

    </div>
</section>


<?php $this->endSection();?>