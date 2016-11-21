<div class="container-fluid">
    <div class="row text-left">
        <form id="fecha" action="/enaipeVG/ventas/tabla" method="POST">
            Fecha Inicio
            <input type="date"  value="AAAA-MM-DD" name="tiempoIni" id="tiempoIni" >
            Fecha Final
            <input type="date"  value="AAAA-MM-DD" name="tiempoFin" id="tiempoFin" >

            <div class="btn btn-default"><input type="submit" name="enviar" id="enviar" value="Consultar"></div>
        </form>
    </div>
</div>