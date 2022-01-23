<?php
include 'Funciones/ordenes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/headerStyle.css">
        <link rel="stylesheet" href="css/footerStyle.css">
        <link rel="stylesheet" href="css/menuStyle.css">

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
<body>
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
                                    <li class="col-lg-2 col-md-1"></li>
                                    <li class="col-lg-2 col-md-2 col-12 text"><a href="index.html"><i class="bi bi-house-door"></i> Inicio</a></li>
                                    <li class="col-lg-2 col-md-3 col-12 text"><a href="menu.php"><i class="bi bi-book-half"></i> Menús</a></li>
                                    <li class="col-lg-2 col-md-3 col-12 text"><a href="#combos"><i class="bi bi-chat-left-dots"></i> Combos</a></li>
                                    <li class="col-lg-2 col-md-2 col-12 text"><a href="MostrarOrdenes.php"><i class="bi bi-handbag-fill"></i> Ordenes  (<?php 
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
        <div class="content-main">
            <div class="container">
                <div class="row">
                    <div class="title-menu">
                        <div>
                            <small><i class="fas fa-utensils"></i>
                                <i class="fas fa-book-open"></i>
                                <i class="fas fa-utensils"></i>
                            </small>
                        </div>
                        <div class="font1">
                            <h class="hone">Menú del día</h>
                        </div>
                    </div>
                </div>
               
                <?php if($mensaje!=""){?>
                    <div>
                    <script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Listo',
                        text: '<?php echo $mensaje;?>',
                        footer: '<a href="MostrarOrdenes.php" class="btn btn-outline-warning text-dark"> Procesar Ordenes</a>',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText:'Agregar +'
                    })
                    </script>
                    </div>
                <?php } ?>

                <div class="row" id ="productoslista">
                    <!--Listar menus de mi base de datos-->
                </div>
                <br>
            </div>
            <br>
        </div>

        <div class="container">
            <div class="content-combos">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="title-com">
                            <div class="content-title">
                                <h class="hcom">Combos</h>
                            </div>
                            <p>Te Ofrecemos el mejor descuento para que disfrutes el buen sabor
                                de Pizzeria Warios...!<br>
                                No lo pienses más y ordena enseguida tus deliciosas Pizzas, 
                                enseguida lo llevamos a la puerta de tu casa.<br>
                                <b>¡Te Esperamos!</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="info-des">
                            <img src="img/publididad/decuento.jpg" class="img-des">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="content-com">
                <div class="row">
                    <div class="col-lg-3 col-6 img-com">
                        <img src="img/publididad/promo1.jpg" >
                        <div class="text-center botonOr">
                            <button class="btn btn-warning btn-lg">Ordenar</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 img-com">
                        <img src="img/publididad/promo3.jpg">
                        <div class="text-center">
                            <button class="btn btn-warning btn-lg">Ordenar</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 img-com">
                        <img src="img/publididad/promo2.jpg">
                        <div class="text-center">
                            <button class="btn btn-warning btn-lg">Ordenar</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 img-com">
                        <img src="img/publididad/promo4.jpg">
                         <div class="text-center">
                            <button class="btn btn-warning btn-lg">Ordenar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--script JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/productos.js"></script>

    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="content-footer">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="final">
                                <h class="fh4">Pizzeria Wario´s <img src="img/pizza.png" class="img-footer"></h>
                                <p>Disfruta de la Mejor Pizza desde tu hogar
                                pizzawario@gmail.com<br>
                                233311 / 122299</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                            <div class="objetivo">
                                <h class="oh">Objetivo <i class="bi bi-building"></i></h>
                                <p>Ser la mejor empresa en calidad y servicio para poder satisfacer 
                                   las necesidades de nuestros clientes.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                            <div class="mision">
                                <h class="mh">Misión <i class="bi bi-journal-check"></i></h>
                                <p>Brindar un servicio de calidad a nivel regional, proporcionando a 
                                   nuestros clientes una variedad de productos.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                           <div class="vision">
                               <h class="vh"> Visión <i class="bi bi-journal-bookmark-fill"></i></h>
                               <p>Ser una pizzería líder a nivel nacional, con productos de calidad y 
                                  un servicio superior.</p>
                           </div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <center>
                                <p>Derechos de Autor Reservados Copyright©</p>
                            </center>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>