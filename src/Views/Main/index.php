<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de opciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- +qd44RtADyWxFMQZDx6nDsQWn1eU8z/7ArTXJR2vbzCvzOskh4Kg2pKb1V+Is0VM" crossorigin="anonymous">
    <style>
        .menu-item {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Menú de opciones</h1>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-item">

                    <a href="/contact/create" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Agregar contacto</h5>
                            <p class="card-text">Permite agregar un nuevo contacto a la lista, conductores o propietarios.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-item">
                    <a href="/contact/list" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Lista de contactos</h5>
                            <p class="card-text">Lista de todos los contactos almacenados</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-item">
                    <a href="/car/create" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Agregar Carro</h5>
                            <p class="card-text">Agrega un nuevo carro a la base de datos.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-item">
                    <a href="/car/list" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Lista de carros</h5>
                            <p class="card-text">Lista con todos los carros agregados</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-item">
                    <a href="/car/report1" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Informe 1</h5>
                            <p class="card-text">Informe general con los datos de los carros almacenados</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .menu-item a {
            text-align: center;
            color: black;
            text-decoration: none;
        }

        .menu-item .card-title {
            color:  #6f90bc;
        }

        .menu-item:hover {
            color: black;
            background-color: #e9ecef;
            cursor: pointer;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>