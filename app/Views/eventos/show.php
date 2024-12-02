<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
Información sobre 
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
           <h3 class="card-titule">
            <?= $evento["nombre"];?>
        </h3> 
        </div>
        <div class="card-body">
            <ul>
                <li>    
                    <b>Evento= </b> <?=$evento["nombre"];?>
                </li>
                <li>
                    <b>Nombredel cliente= </b> <?=$evento["nombre_cliente"];?>
                </li>
                <li>
                <b>Categoria=</b> <?=$evento["nombre_categoria"];?>
                </li>
                <li>
                <b>Fecha=</b> <?=$evento["fecha_evento"];?>
                </li>
                <li>
                <b>Paquete=</b> <?=$evento["paquete_id"];?>
                </li>
                <li>
                <b>estado=</b> <?=$evento["estado"];?>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php $this->endSection();?>