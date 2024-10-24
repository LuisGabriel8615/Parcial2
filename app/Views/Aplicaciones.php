<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicaciones Web</title>
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
            <a class="nav-link" href="<?= base_url() ?>Aplicacion"> Aplicaciones web</a>
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

  <style>
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

<div class="container mt-5">
  <h1 class="text-center">Aplicaciones Web</h1>

  
  <div class="row-content">
    <div>
      <h2>Frontend</h2>
      <p>El frontend es la parte visual de la aplicación web, es lo que el usuario ve y con lo que interactúa. El objetivo principal del frontend es proporcionar una interfaz atractiva y fácil de usar.</p>
    </div>
    <img src="https://www.interviewbit.com/blog/wp-content/uploads/2021/09/frontend.jpg" alt="Frontend" class="img-fluid">
  </div>


  <div class="row-content">
    <div>
      <h3>Tecnologías Frontend</h3>
      <p><strong>HTML:</strong> Lenguaje de marcado que estructura el contenido de las páginas web.</p>
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/375px-HTML5_logo_and_wordmark.svg.png" alt="HTML" class="img-fluid">
  </div>

  <div class="row-content">
    <div>
      <p><strong>CSS:</strong> Hojas de estilo que se utilizan para dar formato y diseño a las páginas web.</p>
    </div>
    <img src="https://programacionfacil.org/blog/wp-content/uploads/2023/01/css-logo.png" alt="CSS" class="img-fluid">
  </div>

  <div class="row-content">
    <div>
      <p><strong>JavaScript (JS):</strong> Lenguaje de programación que permite añadir interactividad y dinamismo a las páginas web.</p>
    </div>
    <img src="https://desarrolloweb.com/storage/serie_images/SiXTEAgkHYnvpf5x9grsKz4YQDcbUBE2EuLLSaR8.jpeg" alt="JavaScript" class="img-fluid">
  </div>

 
  <div class="row-content">
    <div>
      <h2>Backend</h2>
      <p>El backend es la parte del servidor de la aplicación web, que se encarga de manejar la lógica de negocio, el procesamiento de datos, y la interacción con bases de datos y otros servicios.</p>
    </div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgI-h8wd1UIOEogA3-DD4dPZd5NtktWgBkZg&s" alt="Backend" class="img-fluid">
  </div>


  <div class="row-content">
    <div>
      <h3>Tecnologías Backend</h3>
      <p><strong>Base de Datos:</strong> Un sistema que almacena y gestiona datos de manera estructurada. Ejemplos: MySQL, PostgreSQL, MongoDB.</p>
    </div>
    <img src="https://img.freepik.com/vector-premium/diseno-base-datos_24877-33550.jpg" alt="Base de Datos" class="img-fluid">
  </div>

  <div class="row-content">
    <div>
      <p><strong>Servidor Web:</strong> Software que gestiona las solicitudes del navegador y entrega el contenido solicitado. Ejemplos: Apache, Nginx.</p>
    </div>
    <img src="https://w7.pngwing.com/pngs/140/759/png-transparent-web-server-illustration-web-server-computer-servers-web-hosting-service-data-center-server-computer-network-electronics-globe-thumbnail.png" alt="Servidor Web" class="img-fluid">
  </div>

  <div class="row-content">
    <div>
      <p><strong>Lenguajes de Programación:</strong> Lenguajes más utilizados para desarrollar el backend de aplicaciones web. Ejemplos: PHP, Python, Node.js, Java.</p>
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Pauscal_lenguaje_de_programaci%C3%B3n.png/400px-Pauscal_lenguaje_de_programaci%C3%B3n.png" alt="Lenguajes de Programación" class="img-fluid">
  </div>

  
  <div class="row-content">
    <div>
      <h2>FullStack</h2>
      <p>El desarrollo FullStack abarca tanto el frontend como el backend. Un desarrollador FullStack tiene habilidades para trabajar en ambas partes de una aplicación web, comprendiendo tanto la interfaz de usuario como la lógica del servidor y las bases de datos.</p>
    </div>
    <img src="https://static.platzi.com/media/user_upload/HTML-e19c2528-ea5a-4f96-8a61-b518452a7be6.jpg" alt="FullStack" class="img-fluid">
  </div>

</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  