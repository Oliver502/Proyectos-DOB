<?php

include("../conexion/conexion.php");

$consult="SELECT id, nombre, producto FROM $table2";
$result=mysqli_query($conexion,$consult);

while($row=$result->fetch_assoc())
{?>
    <div class="col-lg-3 col-6">
        <div class="content-menu">
            <img src="data:img/jpg;base64, <?php echo base64_encode($row['producto']);?>" class="img-menu">
            <form method="POST" action="">
                <div class="row">
                   <div class="col-12">
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"></input>
                        <input class="text-center" style="border:none; font-weight: 700;" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>"></input>
                   </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <select class="select-menu" id="tamanio" name="tamanio">
                                <option selected>Tamaño</option>
                                <option value="Grande">Grande</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Pequeño">Pequeño</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <select class="select-menu" id="cantidad" name="cantidad">
                                <option selected>Cantidad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="boton-menu">
                    <button type="submit" class="boton" name="btnAction" value="Agregar">Ordenar</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>