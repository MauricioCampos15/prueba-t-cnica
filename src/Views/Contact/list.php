<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Conductores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- +qd44RtADyWxFMQZDx6nDsQWn1eU8z/7ArTXJR2vbzCvzOskh4Kg2pKb1V+Is0VM" crossorigin="anonymous">
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
  <div class="container">
    <h2 class="mt-5">Lista de contactos</h2>
    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th>#</th>
          <th>Identificación</th>
          <th>Tipo</th>
          <th>Primer nombre</th>
          <th>Segundo nombre</th>
          <th>Apellidos</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Ciudad</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($params['contacts'] as $contact) { ?>
        <tr>
          <td><?= $contact->id ?></td>
          <td><?= $contact->identification ?></td>
          <td><?= $contact->type ?></td>
          <td><?= $contact->firstname ?></td>
          <td><?= $contact->secondname ?></td>
          <td><?= $contact->lastname ?></td>
          <td><?= $contact->residence ?></td>
          <td><?= $contact->phonenumber ?></td>
          <td><?= $contact->city ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
