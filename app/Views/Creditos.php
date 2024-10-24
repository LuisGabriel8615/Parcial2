<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Créditos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .navbar {
      background: linear-gradient(to right, #007bff, #ffffff);
    }
    .navbar-nav .nav-link {
      color: blue;
    }
    .navbar-nav .nav-link:hover {
      color: #ffffff;
      background-color: #007bff;
    }
    .custom-img {
      width: 100px;  
      height: 100px;
    }
    .row-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2rem;
    }
    .row-content img {
      width: 250px;
      height: 250px;
      object-fit: cover;
    }
    .row-content p {
      flex: 1;
      margin-right: 1rem;
    }
    .credits-content {
      text-align: center;
      margin-top: 2rem;
    }
    .credits-content img {
      margin: 0 20px;
      width: 150px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="https://www.efpemusac.org/"><img class="custom-img" src="https://ddo.usac.edu.gt/wp-content/uploads/2024/03/Logo-EFPEM.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('inicio') ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Aplicacion">Aplicaciones web</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>frameweb">Framework</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Creditos">Créditos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="text-center">Evaluación Parcial 2</h1>

    <div class="credits-content">
      <h2>Carnet</h2>
      <p>200615485</p>

      <h2>Nombre</h2>
      <p>Luis Arturo Gabriel Cruz</p>

      <h2>Estudiante de:</h2>
      <div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNBfZS05v3QeLk4PcyJ-HNWDTL6QMXy2Ww8g&s" alt="Logotipo USAC">
        <img src="https://ddo.usac.edu.gt/wp-content/uploads/2024/03/Logo-EFPEM.png" alt="Logotipo EFPEM">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>