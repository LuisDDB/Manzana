<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
NuevoVentos
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
            <a href="<?= base_url();?>/eventos/create" class="btn btn-success btm-sm">
                <i class="bi bi-plus"></i>
                Nuevo evento
            </a>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>nombre</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Categoria</th>
                        <th>Paquete</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php //Inicio forEach 
                foreach($evento as $e):
                ?>
                    <tr class="align-middle">
                        <td><?= $e["id"]; ?> </td>
                        <td><?= $e["nombre"]; ?> </td>
                        <td> <?= $e["nombre_cliente"]; ?></td>
                        <td> <?= $e["estado"]; ?></td>
                        <td> <?= $e["nombre_categoria"]; ?></td>
                        <td> <?= $e["paquete_id"]; ?></td>
                        <td> <?= $e["fecha_evento"]; ?></td>

                        <td>
                            <a href="<?= base_url("/eventos/edit/".$e["id"]);?>" class="btn btn-primary btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                            </a>

                            <a href="<?= base_url("/eventos/".$e["id"]);?>" class="btn btn-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </a>

                            <button onClick="eliminar(<?= $e["id"];?>)" class="btn btn-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </button>

                        </td>

                    </tr>
                    <?php //Fin del forEach 
                endforeach;
                ?>

                </tbody>
            </table>

        </div>

    </div>
</section>
<!-- Libreria de alertas -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function eliminar(id) {
    Swal.fire({
        title: "Seguro de eliminarlo",
        text: "Se va a eliminar permanentemente",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si eliminalo"
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = "<?= base_url();?>/eventos/" + id + "/delete"
        }
    });
}
</script>


<?php $this->endSection();?>