<?php $this->extend("plantilla");?>
<?php $this->section("titulo");?>
Info Usuario
<?php $this->endSection();?>
<?php $this->section("content");?>

<!--Views/usuarios/create-->
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
           <h3 class="card-titule">
            <?= $usuario["nombre"];?>
        </h3> 
        </div>
        <div class="card-body">
            <ul>
                <li>    
                    <b>Nombre </b> <?=$usuario["nombre"];?>
                </li>
                <li>
                    <b>Telefono </b> <?=$usuario["telefono"];?>
                </li>
                <li>
                <b>Correo</b> <?=$usuario["correo"];?>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php $this->endSection();?>