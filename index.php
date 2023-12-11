<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oradores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header class="container-fluid gx-0" style="background-color: #353A40;height: 100%;">
    <nav class="navbar d-flex justify-content-evenly" style="height: 100%;">
      <div class="d-flex align-items-center col-md-4">
        <img src="img/codoacodo.png" style="width: 25%;" alt="logo codo a codo">
        <h4 class="" style="color: white;height: 100%;">Conf Bs As</h4>
      </div>

      <div class="navbar d-flex justify-content-evenly col-lg-6 col-md-12">
        <a class="col-lg-auto col-md-12 col-sm-12 col-12" href="#conferencia"
          style="color: white; text-decoration: none;">La conferencia</a>
        <a class="col-lg-auto col-md-12 col-sm-12 col-12" href="#oradores"
          style="color: grey;text-decoration: none;">Los oradores</a>
        <a class="col-lg-auto col-md-12 col-sm-12 col-12" href="#lugar_fecha"
          style="color: grey;text-decoration: none;">El lugar y la fecha</a>
        <a class="col-lg-auto col-md-12 col-sm-12 col-12" href="#ser_orador"
          style="color: grey;text-decoration: none;">Conviértete en orador</a>
        <a class="col-lg-auto col-md-12 col-sm-12 col-12"
          href="https://levsistemas.github.io/tp_integrador_js_responsive/"
          style="color: green;text-decoration: none;">Comprar tickets</a>
      </div>
    </nav>
  </header>

  <main>
    <section>
      <div class="d-flex">
        <div
          class="w-100 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center"
          id="conferencia"
          style="background-image: url(./img/ba1.jpg);filter: brightness(60%);background-position: center;background-size: cover;background-repeat: no-repeat;height: 100vh;">
          <div
            class="row gx-0 d-flex align-content-lg-end align-content-md-center align-content-sm-center align-content-center me-lg-5"
            style="width: 50vh;height: 100vh;">
            <div class="align-content-center align-items-center text-lg-end" style="height: 50vh;width: 100vw;">
              <h2 class="col-lg-12 col-md-12 col-sm-12 col-12" style="color: white;">Conf Bs As</h2>
              <p class="col-lg-12 col-md-12 col-sm-12 col-12" style="color: white;">Bs As llega por primera vez a
                Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos
                que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de
                Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light">Quiero ser orador</button>
              <button class="btn btn-success me-md-2" type="button">Comprar tickets</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <section>
    <div class="container-fluid gx-0 justify-content-lg-evenly col-lg-12 col-md-12 col-sm-12 col-12" id="oradores">
      <p style="text-align: center;">CONOCE A LOS</p>
      <h3 style="text-align: center;">ORADORES</h3>
      <div
        class="row gx-0 d-flex col-lg-12 col-md-12 col-sm-12 col-12 justify-content-lg-center justify-content-md-center">
        <div class="m-2 col-lg-3 col-md-3 col-sm-12 col-11">
          <div class="card">
            <img src="img/steve.jpg" class="img-fluid" alt="Steve">
            <div class="card-body">
              <span class="badge text-bg-warning">Javascript</span>
              <span class="badge text-bg-info">React</span>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum praesentium beatae,
                deleniti incidunt numquam sequi delectus repellendus ullam hic cupiditate. Veritatis assumenda eius
                excepturi odit sed, ab incidunt consequuntur totam!</p>
            </div>
          </div>
        </div>
        <div class="m-2 col-lg-3 col-md-3 col-sm-12 col-11">
          <div class="card">
            <img src="img/bill.jpg" class="img-fluid" alt="Bill">
            <div class="card-body">
              <span class="badge text-bg-warning">Javascript</span>
              <span class="badge text-bg-info">React</span>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam odio maxime unde
                sunt. Atque nesciunt vero pariatur veritatis laboriosam vel odit quisquam! Sunt temporibus voluptatibus
                repudiandae dolore quia fugit mollitia!</p>
            </div>
          </div>
        </div>
        <div class="m-2 col-lg-3 col-md-3 col-sm-12 col-11">
          <div class="card">
            <img src="img/ada.jpeg" class="img-fluid" alt="Ada">
            <div class="card-body">
              <span class="badge text-bg-secondary">Negocios</span>
              <span class="badge text-bg-danger">Startups</span>
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis nemo excepturi
                voluptates, corrupti nihil laboriosam, aliquam fuga veniam labore neque voluptate magnam fugiat
                corporis, qui at possimus esse? Minus, cumque.</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section>
    <div class="container-fluid gx-0 d-flex justify-content-sm-center mt-5 col-lg-12 col-md-12 col-sm-12 col-12"
      id="lugar_fecha" style="padding-left: 0px;padding-right: 0px;">
      <div class="row gx-0">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
          <img src="img/honolulu.jpg" class="object-fit-lg-cover w-100" alt="Honolulu" style="height: 100%;">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12" style="background-color: #353A40;">
          <h2 class="mt-4 ms-3" style="color: white;">Bs As - Octubre</h2>
          <p class="ms-3" style="color: white;">Buenos Aires es la provincia y localidad más grande del estado de
            Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades
            estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de
            Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad
            (aproximadamente 600 km de superficie).
          </p>
          <button type="button" class="btn btn-outline-light ms-3 mb-3">Conocé más</button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid gx-0" id="ser_orador">
      <p class="mt-4" style="text-align: center;">CONVIÉRTETE EN UN</p>
      <h1 style="text-align: center;">ORADOR</h1>
      <p style="text-align: center;">Anótate como orador para dar una <span class="subrayado">charla ignite</span>.
        Cuéntanos de qué quieres hablar!</p>
      <form action="./insert.php" method="post">
        <div
          class="row gx-0 justify-content-md-center justify-content-sm-center justify-content-between col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="col-1"></div>
          <div class="col-1"></div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-4 pe-2">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" aria-label="First name">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-4 ps-2">
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" aria-label="Last name">
          </div>
          <div class="col-1"></div>
          <div class="col-1"></div>
        </div>

        <div class="row gx-0 justify-content-md-center justify-content-sm-center justify-content-center">
          <div class="mb-3 d-flex justify-content-lg-center justify-content-md-center justify-content-center">
            <div class="col-md-6 col-sm-6 col-8">
              <textarea class="form-control mt-4" name="tema" id="exampleFormControlTextarea1"
                rows="4">Sobre qué quieres hablar?</textarea>
            </div>
          </div>
          <div class="d-grid gap-2 col-md-6 col-sm-6 col-8 mx-auto">
            <p>Recuerda incluir un título para tu charla</p>
            <button class="btn btn-success" style="background-color: #96C93E;border-style: none;"
              type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="container-fluid mt-lg-5 pt-lg-1 pb-lg-2 gx-0"
    style="background: linear-gradient(to right, #1C3643, #1E5372);height: 100%;">
    <footer class="mt-3">
      <div class="container-fluid gx-0 container-lg container-md container-sm container">
        <nav
          class="navbar d-flex justify-content-lg-center justify-content-md-center text-lg-center text-md-center text-center align-items-lg-center align-items-md-center col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-1 col-md-12 col-sm-12 col-12" style="color: white;">Preguntas frecuentes</div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-12" style="color: white;">Contáctanos</div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-12" style="color: white;">Prensa</div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-12" style="color: white;">Conferencias</div>
          <div class="col-lg-1 col-md-12 col-sm-12 col-12" style="color: white;">Términos y condiciones</div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-12" style="color: white;">Privacidad</div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-12" style="color: white;">Estudiantes</div>
        </nav>
      </div>
    </footer>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>