
<form id="alta_usuario" action="../gestion/set/" method="POST">
    
    <div class="item_requerid"> Id </div>
    <div class="form_requerid"><input type="number" name="id" id="id" value="{id}" readonly></div>

    <div class="item_requerid"> Nombre </div>
    <div class="form_requerid"><input type="text" name="nombre" id="nombre" value="{nombre}" ></div>

    <div class="item_requerid"> Jugadores </div>
    <div class="form_requerid"><input type="text" name="jugadores" id="jugadores" value="{jugadores}" ></div>

    <div class="item_requerid"> Genero </div>
    <div class="form_requerid"><input type="text" name="genero" id="genero" value="{genero}"></div>

    <div class="item_requerid"> Costo </div>
    <div class="form_requerid"><input type="number" name="costo" id="costo" value="{costo}"></div>
    
    <div class="form_button"><input type="submit" name="enviar" id="enviar" value="Guardar"></div>
    

</form>