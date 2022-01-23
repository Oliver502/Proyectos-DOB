<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/headerStyle.css">


      <!--alertar modificados Alert2-->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>	

      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  

      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!--Iconos boostrap-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

      <!--Iconos-->
      <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
      <title>Pizza Wario</title>
  </head>
  <?php
  include 'Funciones/ordenes.php';
  include("conexion/conexion.php");
  ?>
  <body class="font">
  <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-2">
                    <div class="">
                        <!--<img src="img/pizza.png" class="icon-pizza">-->
                    </div>
                </div>
                <div class="title-header col-lg-6 col-md-8 col-8">
                    <!--<h>Pizza Warrios</h>-->
                    <span>Pizza</span>
                    <span>Warios</span>
                </div>
                <div class="col-lg-3 col-md-2 col-2">
                </div>
                
                <div class="nav-header">
                    <nav class="nav-menu navbar-dark navbar-expand-lg navbar-expand-md">      
                        <div class="icon">
                            <span>¡ Lo mejor para ti !</span>
                            <ul>
                                <li><a href=""><i class="bi bi-handbag-fill"></i></a></li>
                            </ul>
                            <button class="navbar-toggler nav-botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="row collapse navbar-collapse menu" id="navbarText" >
                            <ul>
                                <div>
                                    <li class="col-lg-3 col-md-1"></li>
                                    <li class="col-lg-2 col-md-2 col-12 text"><a href="index.html"><i class="bi bi-house-door"></i> Inicio</a></li>
                                    <li class="col-lg-2 col-md-3 col-12 text"><a href="menu.php"><i class="bi bi-book-half"></i> Menús</a></li>
                                    <li class="col-lg-2 col-md-2 col-12 text"><a href="MostrarOrdenes.php"><i class="bi bi-handbag-fill"></i> Ordenes (<?php 
                                    echo (empty($_SESSION['ORDENES']))?0:count($_SESSION['ORDENES']);
                                    ?>)</a></li>
                                </div>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
      <div class="container">
      <br>
        <div class="row">
          <div class="col-lg-9 col-md-8 col-6">
            <h3><b>Lista de Ordenes</b></h3>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <h4><a href="menu.php" class="nav-link text-end text-dark">Ordenar Más <i class="fab fa-shopify Ofertas"></i></a></h4>
          </div>
        </div>
        <?php if(!empty($_SESSION['ORDENES'])){?>
       <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <th width="40%" >Descripcion</th>
                <th width="15%" class="text-center">Tamaño</th>
                <th width="20%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">--</th>
              </tr>
              <?php $total=0;?>
              <?php foreach($_SESSION['ORDENES'] as $indice=>$producto){?>
              <tr>
                <td width="40%" ><?php echo $producto['NOMBRE']?></td>
                <td width="15%" class="text-center"><?php echo $producto['TAMANIO']?></td>
                <td width="20%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
                <td width="20%" class="text-center">
                  Q<?php 
                  $tama=$producto['TAMANIO'];
                  $cant=$producto['CANTIDAD'];
                  if($tama==="Grande" && $cant==="1"){
                    $precio=90;
                    echo $precio;
                  }else if($tama==="Grande" && $cant==="2"){
                    $precio=150;
                    echo $precio;
                  }else if($tama==="Mediano" && $cant==="1"){
                    $precio=75;
                    echo $precio;
                  }else if($tama==="Mediano" && $cant==="2"){
                    $precio=130;
                    echo $precio;
                  }
                  else if($tama==="Pequeño" && $cant==="1"){
                    $precio=60;
                    echo $precio;
                  }
                  else if($tama==="Pequeño" && $cant==="2"){
                    $precio=105;
                    echo $precio;
                  }
                  ?>
                </td>
                <td width="5%" class="text-center">
                  <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $producto['ID'];?>">
                  <button 
                    class="btn btn-danger" 
                    type="submit"
                    name="btnAction"
                    value="Eliminar"
                    >Eliminar</button>
                  </form>
                </td>
              </tr>

              <?php $total=$total+($precio);?>
              <?php } ?>

              <tr>
                <td colspan="3" align="right"><h3>Total a pagar</h3></td>
                <td align="center"><h3>Q<?php echo number_format($total,2); ?></h3></td>
                <td></td>
              </tr>

              <!--Proceder el pago-->
              <tr>
                <td colspan="5">
                  <form action="MostrarOrdenes.php?m=1" method="POST">
                    <div class="alert alert-warning">
                      <div class="form-group">
                          <label for="my-input"><b>Telefono:</b> </label>
                          <input type="number" id="number" 
                            name="email" placeholder="Numero de telefono de contacto" 
                            class="form-control" required>
                      </div>
                      <div class="form-group">
                          <label for="my-input"><b>Direccion:</b> </label>
                          <input type="text" id="dire" 
                            name="dire" placeholder="Escribe la dirección para el envio de la ORDEN" 
                            class="form-control" required>
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        La Orden se enviara en esta direccion.
                      </small>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-success btn-lg" type="submit" name="btnOrdenar">
                        Ordenar
                      </button>
                    </div>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
       </div>
        <?php }else{?>
          <div class="alert alert-danger" role="alert">
            No hay ninguna Orden agregado.
          </div>
       <?php } ?>

       <!--condicion para alerta de eliminacion-->
       <?php
            if($resul=='eliminado'){
              echo "<script>
              Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Orden Eliminado',
                showConfirmButton: false,
                timer: 2000
              })
                </script>";
            }
          ?>
           <?php
            if($_GET['m']==1){
              ?> <script>
              Swal.fire({
              icon: 'success',
              title: 'Orden en Proceso',
              text: 'En 40 min le estaremos entregando su Orden.',
              footer: '<a href="MostrarOrdenes.php" class="btn btn-outline-warning text-dark">LISTO</a>',
              showConfirmButton: false,
              })
              </script>";
              <?php
                session_destroy();
            }
          ?>
      </div>
    </main>
    
  </body>
  <!--script JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>


