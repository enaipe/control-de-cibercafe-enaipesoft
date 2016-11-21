
<form id="alta_usuario" action="../renta/renta" method="POST">

    <div class="item_requerid"> Id </div>
    <div class="form_requerid"><input type="number" name="id" id="id" value="{id}" readonly></div>

    <div class="item_requerid"> Nombre </div>
    <div class="form_requerid"><input type="text" name="nombre" id="nombre" value="{nombre}" readonly></div>

    <div class="item_requerid"> Cantidad Rentar(horas) </div>
    <div class="form_requerid"><input type="number" name="hora" id="hora" min="0" max="10" step="1"></div>
    
    <div class="item_requerid"> Cantidad Rentar(minutos) </div>
    <div class="form_requerid"><input type="number" name="min" id="min" min="0" max="59" step="1"></div>
    
    <div class="item_requerid"> Numero de Controles </div>
    <div class="form_requerid"><input type="number" name="controles" id="controles" min="0" max="5" step="1"></div>
    
    <div class="form_button"><input type="submit" name="enviar" id="enviar" value="Guardar"></div>


</form>