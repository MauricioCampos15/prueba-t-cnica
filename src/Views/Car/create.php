<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- +qd44RtADyWxFMQZDx6nDsQWn1eU8z/7ArTXJR2vbzCvzOskh4Kg2pKb1V+Is0VM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet">
</head>
<body>
    <?php if ($params['showAlert']) { ?>
    <div id="message-flash" class="alert alert-<?= $params['alertType']; ?> text-center" role="alert">
        <?= $params['message']; ?>
    </div>
    <?php } ?>

    <div class="container mt-5">
        <a href="/app/menu" class="btn btn-primary">Inicio</a>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Agregar carro</h1>
        <form action="/car/create" method="post">
            <div class="mb-3">
                <label for="plate" class="form-label">Placa</label>
                <input type="text" class="form-control" id="plate" name="plate" required>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <select class="form-select" id="color" name="color" required>
                    <option value="">Seleccionar Color</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <select class="form-select" id="brand" name="brand" required>
                    <option value="">Seleccionar Marca</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kind" class="form-label">Tipo de servicio</label>
                <select class="form-select" id="kind" name="kind" required>
                    <option value="">Seleccionar tipo de servicio</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="owner_id" class="form-label">Propietario</label>
                <select class="form-select" id="owner_id" name="owner_id" required>
                    <option value="">Seleccionar propietario</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="driver_id" class="form-label">Conductor</label>
                <select class="form-select" id="driver_id" name="driver_id" required>
                    <option value="">Seleccionar conductor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384- +FVSMvu88pMQ0UMGQgogGBFND8j+0Sh8xj6kXO7YVvm+Gk5rAz/kFvTZ4Z+dVfgT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <script src="/resources/js/create_car.js" ></script>
</body>
</html>
