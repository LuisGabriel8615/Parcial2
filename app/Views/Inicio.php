<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos de Software y Ciclo de Vida</title>
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
    .custom-card {
      padding: 2rem;
      border-radius: 10px;
      background-color: #f8f9fa;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 3rem;
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
      width: 350px;
      height: auto;
      object-fit: cover;
    }
    .row-content p {
      flex: 1;
      margin-right: 2rem;
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
    <div class="custom-card">
      <h1 class="text-center">Proyecto de Software</h1>
      <p class="text-center">Un proyecto de software es una iniciativa enfocada en la creación, desarrollo o mantenimiento de un programa informático, diseñado para cumplir con las necesidades específicas de los usuarios y/o empresas.</p>


      <div class="row-content">
        <div>
          <h2>Tipos de Proyectos de Software</h2>
          <ul>
            <li><strong>Aplicaciones Web:</strong> Programas accesibles a través de navegadores, como plataformas de gestión, tiendas en línea, y redes sociales.</li>
            <li><strong>Aplicaciones Móviles:</strong> Programas diseñados específicamente para dispositivos móviles, como aplicaciones de redes sociales o servicios bancarios.</li>
            <li><strong>Aplicaciones de Escritorio:</strong> Software que se instala directamente en computadoras personales, como suites de oficina o programas de edición.</li>
            <li><strong>Sistemas Embebidos:</strong> Software que forma parte de dispositivos hardware, como sistemas operativos en automóviles o electrodomésticos inteligentes.</li>
            <li><strong>Desarrollo de Videojuegos:</strong> Creación de software interactivo con fines recreativos en diversas plataformas como consolas, PC y móviles.</li>
          </ul>
        </div>
        <img src="https://img.tecnomagazine.net/2018/10/tipos-de-software.jpg" alt="Tipos de Proyectos de Software">
      </div>

      <div class="row-content">
        <div>
          <h2>Ciclo de Vida del Software y sus Fases</h2>
          <ul>
            <li><strong>Análisis de Requisitos:</strong> Se identifican las necesidades y expectativas del cliente para definir qué debe hacer el software.</li>
            <li><strong>Diseño:</strong> Se crean las especificaciones técnicas y los planos del sistema, incluyendo la arquitectura y la interfaz de usuario.</li>
            <li><strong>Desarrollo:</strong> Los desarrolladores escriben el código fuente que dará vida al software.</li>
            <li><strong>Pruebas:</strong> El software se prueba para garantizar que funcione correctamente y cumpla con los requisitos.</li>
            <li><strong>Implementación:</strong> El software se despliega en el entorno donde será utilizado, ya sea un servidor o dispositivos de los usuarios.</li>
            <li><strong>Mantenimiento:</strong> Se realizan mejoras y correcciones necesarias después de que el software ha sido entregado y está en uso.</li>
          </ul>
        </div>
        <img src="https://i.ytimg.com/vi/QHOu7CEJR88/sddefault.jpg" alt="Ciclo de Vida del Software">
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
