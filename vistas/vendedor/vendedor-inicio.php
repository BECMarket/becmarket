<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
    <?php if (isset($_SESSION['user'])) { ?>

        <?php if ($_SESSION['user']['tipo'] == 2) { ?>
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">BEC Market</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item pe-5">
                                <a href="vendedor-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                            </li>
                            <li class="nav-item pe-5">
                                <a href="vendedor-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../controladores/salir.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- BARRA DE NAVEGACION -->

            <!-- BARRA SECUNDARIA -->
            <div class="container">
                <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 500px;">
                    <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="vendedor-inicio.php">MI NEGOCIO</a>
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-productos.php" style="background-color: #adb5bd;">MIS PRODUCTOS</a>
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-pedidos.php" style="background-color: #adb5bd;">PEDIDOS</a>
                </nav>
            </div>
            <!-- BARRA SECUNDARIA -->

            <div class="container mt-5">
                <!-- DATOS NEGOCIO-->
                <div class="row mt-5 mx-5 d-flex justify-content-center justify-content-lg-evenly">
                    <div class="col-xl-5 border p-3 border-dark rounded mb-4" style="max-width: 480px;">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-7">
                                <img src="<?= $_SESSION['negocio']['imagen'] ?>" class="card-img py-2 mx-auto d-block" alt="" style="max-width: 230px;">
                                <div class="mb-3 d-flex justify-content-center flex-column">
                                    <input class="form-control form-control-sm mx-auto" id="formFileSm" type="file" style="max-width: 200px;">
                                    <button class="btn btn-dark mt-2 mx-auto btn-sm" style="max-width: 200px;">Cambiar imagen</button>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <!--VISTA >LG -->
                                <div class="d-none d-md-block">
                                    <div class="row mt-2">
                                        <div class="col-1  pb-3">
                                            <i class="fas fa-unlock"></i>
                                        </div>
                                        
                                        <?php if($_SESSION['negocio']['abierto_cerrado'] == 'abierto'){?>
                                            <div class="col-5">
                                                <span class="text-success"><?= strtoupper($_SESSION['negocio']['abierto_cerrado']) ?></span>
                                            </div>
                                            <div class="col-6">
                                                <a href="#">CERRAR ATENCIÓN</a>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="col-5">
                                                <span class="text-danger"><?= strtoupper($_SESSION['negocio']['abierto_cerrado']) ?></span>
                                            </div>
                                            <div class="col-6">
                                                <a href="#">ABRIR ATENCIÓN</a>
                                            </div>
                                        <?php } ?>
                                        
                                        <div class="col-1 pb-3">
                                            <i class="fas fa-cash-register fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span><?= $_SESSION['negocio']['nombre'] ?></span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-envelope fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span><?= $_SESSION['negocio']['email'] ?></span>
                                        </div>
                                        <div class="col-1 ">
                                            <i class="fas fa-map-marker-alt fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span><?= $_SESSION['negocio']['direccion'] ?></span>
                                        </div>
                                        <div class="col-1 ">
                                            <i class="fas fa-phone fs-5 pb-3"></i>
                                        </div>
                                        <div class="col-5">
                                            <span>+<?= $_SESSION['negocio']['telefono'] ?></span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-calendar-alt fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            Horario de atención <br>
                                            <span class="fw-bold"><?= $_SESSION['negocio']['diasAtencion'] ?></span>
                                            <span class="fw-bold">desde las</span>
                                            <span class="fw-bold"><?= $_SESSION['negocio']['horarioAtencion'] ?></span>
                                            <span class="fw-bold">hrs.</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-money-bill-alt fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            Costo envío <br>
                                            <span class="fw-bold">$<?= $_SESSION['negocio']['costoEnvio'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!--VISTA >LG -->

                                <!-- VISTA <LG -->
                                <div class="d-md-none">
                                    <div class="row mt-2">
                                        <?php if($_SESSION['negocio']['abierto_cerrado'] == 'abierto'){ ?>
                                            <div class="col-12 text-center">
                                                <i class="fas fa-unlock"></i>
                                                <span class="text-success"><?= strtoupper($_SESSION['negocio']['abierto_cerrado']) ?></span>
                                            </div>
                                            <div class="col-12 text-center pb-3">
                                                <a href="#">CERRAR ATENCIÓN</a>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="col-12 text-center">
                                                <i class="fas fa-unlock"></i>
                                                <span class="text-danger"><?= strtoupper($_SESSION['negocio']['abierto_cerrado']) ?></span>
                                            </div>
                                            <div class="col-12 text-center pb-3">
                                                <a href="#">ABRIR ATENCIÓN</a>
                                            </div>
                                        <?php } ?>
                                        
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-cash-register fs-5"></i>
                                            <span><?= $_SESSION['negocio']['nombre'] ?></span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-envelope fs-5"></i>
                                            <span><?= $_SESSION['negocio']['email'] ?></span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-map-marker-alt fs-5"></i>
                                            <span><?= $_SESSION['negocio']['direccion'] ?></span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-money-bill-alt fs-5"></i>
                                            Costo envío <br>
                                            <span class="fw-bold"><?= $_SESSION['negocio']['costoEnvio'] ?></span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-phone fs-5"></i>
                                            <span>+<?= $_SESSION['negocio']['telefono'] ?></span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-calendar-alt fs-5"></i>
                                            Horario de atención <br>
                                            <span class="fw-bold"><?= $_SESSION['negocio']['diasAtencion'] ?></span>
                                            <span class="fw-bold">desde las</span>
                                            <span class="fw-bold"><?= $_SESSION['negocio']['horarioAtencion'] ?></span>
                                            <span class="fw-bold">hrs.</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- VISTA <LG -->
                            </div>
                        </div>
                    </div>
                    <!-- DATOS NEGOCIO-->
                    <!-- EDITAR DATOS -->
                    <div class="col-xl-6 border p-3 border-dark rounded mb-4" style="max-width: 500px;" id="app">
                        <form action="../../controladores/EditarNegocio.php" method="POST">
                            <div class="row mt-2">
                                <div class="col-md-10 mx-auto">
                                    <label for="horario" class="form-label fw-bold">Horario de atención:</label>
                                    <select name="dias" class="form-select mb-3" id="horario" style="max-width: 380px;" v-model="dias">
                                        <option value="Lunes a viernes">Lunes a viernes</option>
                                        <option value="Lunes a sabado">Lunes a sabado</option>
                                        <option value="Todos los dias">Todos los dias</option>
                                    </select>
                                </div>
                                <div class="col-md-10 d-flex mx-auto">
                                    <div class="col-md-6 text-end d-flex me-1">
                                        <label for="desde" class="form-label me-2">Desde:</label>
                                        <input name="h1" v-model="h1" class="form-control form-control-sm" type="text" id="desde" placeholder="Hora" style="max-width: 70px;">
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <label for="hasta" class="form-label me-2">Hasta:</label>
                                        <input name="h2" v-model="h2" class="form-control form-control-sm" type="text" id="hasta" placeholder="Hora" style="max-width: 70px;">
                                    </div>
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="cd" class="form-label fw-bold">Teléfono:</label>
                                    <input name="tele" v-model="tele" type="text" class="form-control" id="cd" style="max-width: 400px;" placeholder="+56987654321">
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="ed" class="form-label fw-bold">E-mail:</label>
                                    <input name="email" v-model="email" type="text" class="form-control" id="ed" style="max-width: 400px;" placeholder="correo@example.com">
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="ed" class="form-label fw-bold">Costo envío:</label>
                                    <input name="costo" v-model="costo" type="text" class="form-control" id="ed" style="max-width: 400px;" placeholder="$999">
                                </div>
                            </div>
                            <button class="btn btn-dark mt-4 mx-auto d-block" style="max-width: 200px;">Cambiar datos</button>
                            
                            <p>
                                <?php 
                                    if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                ?>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- EDITAR DATOS -->
            </div>
        <?php } else { ?>
            <?php header("Location: ../cliente/cliente-inicio.php"); ?>
        <?php } ?>
    <?php } else { header("Location: ../../login.php"); ?>     
    <?php } ?>
    <!-- FOOTER -->
    <div class="container text-center" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md pb-5">
                <h2 class="display-5">BEC Market</h2>
            </div>
            <div class="col-md pb-5">
                <p class="lead pb-2"><strong>NUESTRAS REDES</strong></p>
                <a href="#"><i class="fab fa-facebook-f fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-twitter fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-instagram fs-4 text-dark"></i></a>
            </div>
            <div class="col-md pb-5">
                <p class="lead"><strong>CONTACTO</strong></p>
                <a href="MAILTO:contacto@example.com" class="text-decoration-none lead">contacto@example.com</a></span></p>
            </div>
        </div>
    </div>
    <!-- FIN FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="../../js/EditarDatosNegocio.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>

</html>