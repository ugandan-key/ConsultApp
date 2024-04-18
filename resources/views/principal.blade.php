<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Botones con efecto de zoom</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('https://th.bing.com/th/id/R.5955cb7fa6598375d839ca622cae1dcc?rik=KX1B0VrvDFQeqw&pid=ImgRaw&r=0'); /* Cambia 'fondo.jpg' por la ruta de tu imagen de fondo */
    background-size: cover;
  }

  .button-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    width: 80%;
    height: 80%;
  }

  .button {
    width: 30%;
    height: 30%;
    background-color: blue;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5em;
    border: none;
    cursor: pointer;
    transition: transform 0.3s, background-color 0.3s; /* Agregamos la transición para el cambio de color */
    border-radius: 10%;
  }

  .button:hover {
    transform: scale(1.1);
    background-color: rgb(57, 172, 211); /* Cambiamos el color al pasar el cursor sobre el botón */
  }
</style>
</head>
<body>
  
  

<div class="button-container">
  <button class="button">Consultas</button>
  <button class="button">Pacientes</button>
  <button class="button">Registros</button>
  <button class="button">Mas</button>
  <button class="button">Mas</button>
  <button class="button">Mas</button>
</div>
</body>
</html>

