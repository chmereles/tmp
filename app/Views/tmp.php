<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href='//fonts.googleapis.com/css?family=Roboto:200,400,600' rel='stylesheet' type='text/css'>
    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }

        .col-avatar {
            -ms-flex: 0 0 50px;
            flex: 0 0 50px;
            /* background-color: greenyellow; */
        }

        .col-texto {
            -ms-flex: 0 0 2500px;
            flex: 0 0 250px;
            /* background-color: grey; */
        }

        .col-detalle {
            -ms-flex: 0 0 130px;
            flex: 0 0 130px;
            background-color: yellow;
        }
        .col-boton {
            /* -ms-flex: 0 0 80px;
            flex: 0 0 80px;
            background-color: yellow; */
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="card mb-1">
            <div class="card-header shadow-none_ p-3_ mb-1_ bg-light_ rounded_">
                <div class="row">
                    <div class="col col-detalle">
                        <div>
                            Envio N°
                        </div>
                        <div><strong>XXX_1234567</strong></div>
                    </div>

                    <div class="col m-auto">
                        <button type="button" class="btn btn-outline-danger btn-sm float-right ml-1">Cancelar</button>
                        <button type="button" class="btn btn-outline-dark btn-sm float-right">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-1">
            <div class="card-header">
                <strong>General</strong>
            </div>
            <div class="row card-body">
                <div class="col bg-light_ rounded_">
                    <div>Origen</div>
                    <div><strong>Catamarca</strong></div>

                    <p></p>
                    <div>
                        <strong>Entrega:</strong> 1 de Nov de 2020 9:37
                    </div>
                    <div>
                        <strong>Destinatario:</strong> Destino prueba
                    </div>
                    <div>
                        <strong>Telefono:</strong> 383 - 4000000
                    </div>
                    <div>
                        <strong>Correo:</strong> correo@mail.com
                    </div>
                </div>

                <div class="col mb-1_ bg-light_ rounded_">
                    <div>Destino</div>
                    <div><strong>Cordoba</strong></div>

                    <p></p>
                    <div>
                        <strong>Creado:</strong> 1 de Nov de 2020 9:37
                    </div>
                    <div>
                        <strong>Medio de pago:</strong> <a href="#">Tarjeta de Crédito</a>
                    </div>
                    <div>
                        <strong>Valor de la Orden:</strong> <a href="#">0.00</a>
                    </div>
                    <div>
                        <strong>Paquetes: </strong><a href="#">2 Paquetes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-1">
            <div class="card-header">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-flag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z" />
                </svg>
                <strong>Incidencias</strong> <span class="badge badge-pill badge-danger">2</span>
            </div>

            <div class="card-body_">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Pendientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Resueltos</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">
                        <div class="table-responsive_">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Descripcion</th>
                                        <!-- <th>Comentarios</th> -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>27/04/2020 14:37</td>
                                        <td>Retraso finalizando la entrega</td>
                                        <td><button type="button" class="btn btn-outline-dark btn-sm">Resolver</button></td>
                                    </tr>
                                    <tr>
                                        <td>27/04/2020 14:37</td>
                                        <td>Retraso en la descarga</td>
                                        <td><button type="button" class="btn btn-outline-dark btn-sm">Resolver</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane container fade" id="menu1">2</div>
                    <div class="tab-pane container fade" id="menu2">3</div>
                </div>
            </div>
        </div>

        <div class="card mb-1">
            <div class="card-header">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
                <strong>Tareas</strong>
            </div>

            <div class="row mt-2">
                <div class="col col-avatar ml-2">
                    <img src="img/imagen1.svg" alt="Avatar" class="avatar">
                </div>
                <div class="col col-texto">
                    <div class="row">
                        <div class="col">
                            <div class="font-weight-bold">
                                Repartidor
                            </div>
                            <div class="font-weight-light">
                                Cel: <a href="#">383-1234</a>
                            </div>
                        </div>
                        <div class="col col-boton">
                            <button type="button" class="inline-block_ btn btn-outline-dark btn-sm">Reasignar</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div>
                <img src="img/imagen1.svg" alt="Avatar" class="avatar inline-block mr-2 float-left">
                <div class="inline-block_">
                    <div class="font-weight-bold">
                        Repartidor
                    </div>
                    <div class="font-weight-light">
                        Cel: <a href="#">383-40000000</a>
                    </div>
                </div>
                <div class="float-right">
                    <button type="button" class="inline-block btn btn-outline-dark btn-sm float-right_">Reasignar</button>
                </div>
            </div> -->

            <div>
                <ul class="timeline">
                    <li>
                        <p>
                            <div>
                                <a target="_blank" href="https://www.totoprayogo.com/#">Ingreso (Planta Catamarca)</a>
                            </div>
                            <div><strong>Comenzó: </strong>27 Abr 11:30</div>
                            <div><strong>Finalizó: </strong>27 Abr 11:30</div>
                        </p>
                    </li>

                    <li>
                        <p>
                            <div>
                                <a target="_blank" href="#">En tránsito</a>
                            </div>
                            <div><strong>Comenzó: </strong>27 Abr 11:30</div>
                        </p>
                    </li>

                    <li>
                        <p>
                            <div>
                                <a target="_blank" href="#">Arribo de mercadería</a>
                            </div>
                            <div>(27 Abr 11:30 AM, Optimo)</div>
                        </p>
                    </li>

                    <li>
                        <p>
                            <div>
                                <a target="_blank" href="#">Entrega (Planta Córdoba)</a>
                            </div>
                            <div>(27 Abr 11:30 AM, Optimo)</div>
                        </p>
                    </li>
                </ul>
            </div>

        </div>


        <!--container-->
    </div>
</body>

</html>