
<form id="alta_usuario" action="/enaipeVG/renta/extra" method="POST">

    <div class="item_requerid"> Id </div>
    <div class="form_requerid"><input type="number" name="id" id="id" value="{id}" readonly></div>

    <div class="item_requerid"> NOMBRE </div>
    <div class="form_requerid"><input type="text" name="nombre" id="nombre" value="{nombre}" readonly></div>
    
    <div class="item_requerid"> HORA INICIO </div>
    <div class="form_requerid"><input type="text" name="Hinicio" id="Hinicio" value="{Hinicio}" readonly></div>

    <div class="item_requerid"> HORA A FINALIZAR </div>
    <div class="form_requerid"><input type="text" name="Hfinal" id="Hfinal" value="{Hfinal}" readonly></div>

    <div class="item_requerid"> CONTROLES </div>
    <div class="form_requerid"><input type="number" name="controles" id="min" value="{controles}" min="0" max="5" step="1"></div>

    <div class="item_requerid"> HORA EXTRA </div>
    <div class="form_requerid"><input type="number" name="hora" value="0" id="hora" min="0" max="5" step="1"></div>

    <div class="item_requerid"> MIN EXTRA </div>
    <div class="form_requerid"><input type="number" name="min" value="0" id="min" min="0" max="59" step="1"></div>

    <div class="form_button"><input type="submit" name="guardar" id="guardar" value="Guardar"></div>


</form>