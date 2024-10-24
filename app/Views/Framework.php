<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frameworks</title>
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
    <h1 class="text-center">Frameworks</h1>

    <div class="row-content">
      <div>
        <h2>Concepto</h2>
        <p>Un framework es una estructura o base de trabajo predefinida para el desarrollo de software. Proporciona herramientas, bibliotecas y buenas prácticas que facilitan la creación y organización de aplicaciones de manera eficiente y estructurada.</p>
      </div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3nrkO69vEhVDpEb0UDp12MAFEiZVNLrFpcw&s" alt="Framework Concepto" class="img-fluid">
    </div>

    <div class="row-content">
      <div>
        <h2>Ventajas y Desventajas</h2>
        <h3>Ventajas</h3>
        <ul>
          <li>Aceleran el desarrollo al proporcionar herramientas preconstruidas.</li>
          <li>Promueven buenas prácticas y estándares en el código.</li>
          <li>Facilitan la colaboración en equipos grandes de desarrollo.</li>
        </ul>
        <h3>Desventajas</h3>
        <ul>
          <li>Pueden tener una curva de aprendizaje pronunciada.</li>
          <li>Limitan la flexibilidad ya que hay que adaptarse a la estructura del framework.</li>
          <li>Algunos frameworks pueden ser pesados y aumentar el tamaño final de la aplicación.</li>
        </ul>
      </div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKaKMEzJcmwDUbKXl-ivKOKCvA0TOrhxsHQA&s" alt="Ventajas y Desventajas" class="img-fluid">
    </div>

    <div class="row-content">
      <div>
        <h2>Frameworks Frontend más usados</h2>
        <ul>
          <li><strong>React.js:</strong> Biblioteca de JavaScript para construir interfaces de usuario. Desarrollada por Facebook.</li>
          <li><strong>Angular:</strong> Framework desarrollado por Google para la creación de aplicaciones web SPA.</li>
          <li><strong>Vue.js:</strong> Un framework progresivo de JavaScript para construir interfaces de usuario.</li>
        </ul>
      </div>
      <img src="https://www.arimetrics.com/wp-content/uploads/2020/01/Frontend-1.png" alt="Frameworks Frontend" class="img-fluid">
    </div>

    <div class="row-content">
      <div>
        <h2>Frameworks Backend más utilizados</h2>
        <ul>
          <li><strong>Laravel (PHP):</strong> Framework para PHP con un enfoque moderno y eficiente en el desarrollo de aplicaciones web.</li>
          <li><strong>Django (Python):</strong> Framework para Python que sigue el principio "No te repitas", diseñado para desarrollar aplicaciones de manera rápida.</li>
          <li><strong>Spring Boot (Java):</strong> Framework para Java que simplifica el desarrollo de aplicaciones empresariales basadas en Spring.</li>
          <li><strong>Node.js + Express (JavaScript):</strong> Conjunto para desarrollo backend usando JavaScript, especialmente útil para aplicaciones en tiempo real.</li>
        </ul>
      </div>
      <img src="https://images.prismic.io/juneikerc/48b0f14c-b3ce-450b-be09-5e62eb117701_lenguajes-backend.png" alt="Frameworks Backend" class="img-fluid">
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
