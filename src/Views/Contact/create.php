<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar contacto</title>
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
        <h1 class="mb-4">Agregar contacto</h1>
        <form action="/contact/create" method="post">

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type" required>
                    <option value="">Seleccionar tipo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="identification" class="form-label">Número de cédula</label>
                <input type="number" class="form-control" id="identification" name="identification" required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Primer nombre</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="secondname" class="form-label">Segundo nombre</label>
                <input type="text" class="form-control" id="secondname" name="secondname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="residence" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="residence" name="residence" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" id="city" name="city" required>
                    <option value="">Seleccionar ciudad</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384- +FVSMvu88pMQ0UMGQgogGBFND8j+0Sh8xj6kXO7YVvm+Gk5rAz/kFvTZ4Z+dVfgT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <script src="/resources/js/create_contact.js" ></script>
</body>
</html>
