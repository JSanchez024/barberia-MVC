<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div class="app">

    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Informacion cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div class="seccion" id="paso-1">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus Servicios a continuacion</p>
        <div class="listado-servicios"></div>
    </div>
    <div class="seccion" id="paso-2">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus Datos y Fecha de tu Cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" 
                value="<?php echo $nombre ?>" readonly>
            </div>

            <div class="campo">
                <label for="nombre">Fecha</label>
                <input type="date" id="fecha">
            </div>

            <div class="campo">
                <label for="nombre">Hora</label>
                <input type="time" id="hora">
            </div>
        </form> 

    </div>
    <div class="seccion" id="paso-3">
        <h2>Resumen</h2>
        <p class="text-center">Revisa que la Informacion sea Correcta</p>
    </div>

    <div class="paginacion">
        <button class="boton" id="anterior">
            &laquo; Anterior
        </button>
        <button class="boton" id="siguiente">
            Siguiente &raquo; 
        </button>
    </div>
</div>


<?php
    $script = "
        <script src='build/js/app.js'></script>
    ";

?>