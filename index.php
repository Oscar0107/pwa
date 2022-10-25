<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tutorial API JavaScript</title>

    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="./manifest.json">
    <script type="text/javascript">
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js");
  }
</script>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center pt-5 pb-4">Lista de películas</h1>
      <hr>
      <div id="contenedor">
        <!-- Lista de películas -->
      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
  const request = new XMLHttpRequest();
request.open('GET', 'https://ghibliapi.herokuapp.com/films', true);

request.onload = function () {
  if (request.status >= 200 && request.status < 400) {

    const data = JSON.parse(this.response);
    
    const contenedor = document.getElementById('contenedor');
    contenedor.setAttribute('class', 'card-columns');
    
    data.forEach((pelicula) => {
      
      // Creamos una tarjeta
      const tarjeta = document.createElement('div');
      tarjeta.setAttribute('class', 'card');

      // Creamos el la cabecera y el cuerpo de la tarjeta
      const cabeceraTarjeta = document.createElement('div');
      cabeceraTarjeta.setAttribute('class', 'card-header');

      const cuerpoTarjeta = document.createElement('div');
      cuerpoTarjeta.setAttribute('class', 'card-body');

      // Creamos el encabezado y le asignamos el título de la película
      const titulo = document.createElement('h5');
      titulo.setAttribute('class', 'card-title');
      titulo.textContent = pelicula.title;

      // Creamos la párrafo y le asignamos la descripción de la película
      pelicula.descripcion = pelicula.description.substring(0, 250);

      const descripcion = document.createElement('p');
      descripcion.setAttribute('class', 'card-text');
      descripcion.textContent = `${ pelicula.descripcion }...`;

      // Agregamos la tarjeta
      contenedor.appendChild(tarjeta);

      // Agregamos la cabecera y el cuerpo a la tarjeta
      tarjeta.appendChild(cabeceraTarjeta);
      tarjeta.appendChild(cuerpoTarjeta);

      // Agregamos el título a la cabecera
      cabeceraTarjeta.appendChild(titulo);
      
      // Agregamos la descripción al cuerpo
      cuerpoTarjeta.appendChild(descripcion);
    });
  } else {

    const contenedor = document.getElementById('contenedor');
    const mensajeError = document.createElement('div');

    mensajeError.setAttribute('class', 'alert alert-danger');
    mensajeError.textContent = `Ha ocurrido un error con código ${request.status}`;

    contenedor.appendChild(mensajeError);
  }
}

request.send();
</script>