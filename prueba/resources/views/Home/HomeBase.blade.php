<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Base</title>
    <!--- Icon Font Awason --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--- stylesheet CSS --->
    <link rel="stylesheet" type="text/css" href="/lyvos/resources/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/lyvos/resources/css/css.css" />
    <link rel="stylesheet" href="/lyvos/resources/css/styleFrm.css" />
</head>

<body>
    
    <div class="container-fluid">
        <div class="row">

            <!-- Menú de navegación -->


            @include('estudiante.nav');
            <!-- Fin menú de navegación -->

            <!-- Cabecera de la página -->
            <!--header class="col-lg-9 text-white p-0 fixed-top " style="margin-left: 25%;">
                <div class="header-content bg-green ms-lg-3 p-lg-2 text-end">
                    <div class="me-lg-5 ">
                        <span class="me-lg-2 fs-5">yajairaposada@colegiopsicopedagogicoguilford.com</span>
                        <a class="icon-session" href="{{ url('/') }}">
                            <i class="fas fa-power-off"></i>
                            Cerrar Sesión
                        </a>
                    </div>
                </div>
            </header-->

            <!-- Fin Cabecera de la página -->

            <main class="col-lg-9 col-12 mt-lg-5  p-lg-0" style="margin-left: 25%;">
                <div class="m-lg-3 mt-lg-0 ">
                    <img style="width:100%; height: 300px;" src="img/homeBanner.jpg"  src="{{URL::asset('prueba/public/img/homeBanner.jpg')}}" class="img-fluid" alt="home banner">
                    <div>
                        <div class="row p-lg-3">
                            <div class="col-4">
                                <div class="card-home">
                                    <div class="card-body text-center fs-4">
                                        <h4 class="card-title fw-bold fs-auto ">Información inmersión a canada</h4>
                                        <p class="card-text">We transform lives web build the future</p>
                                        <img style="width: 80%; height: 200px;" src=" img/Canada_Banner.jpg" class="img-fluid" alt="Semillas Sembradas">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card-home">
                                    <div class="card-body text-center fs-4">
                                        <h4 class="card-title fw-bold fs-1.4 ">Escuela de padres</h4>
                                        <p class="card-text"> Por una crianza positiva: límites y hábitos </p>
                                        <img style="width: 80%; height: 200px;" src="img/Escuela.jpg" class="img-fluid" alt="Clientes Felices">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card-home">
                                    <div class="card-body text-center fs-4">
                                        <h4 class="card-title fw-bold fs-3">Protocolos de bioseguridad</h4>
                                        <p class="card-text">Guilford y Protocolos</p>
                                        <img style="width: 80%; height: 200px;" src="img/protocolo.jpg" class="img-fluid" alt="Empleos Generados">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
</body>

</html>