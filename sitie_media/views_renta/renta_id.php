<form id="alta_usuario" action="../renta/renta" method="POST" class="form-horizontal" style="margin:0 auto">
    <div class="form-group">
        <label class="col-lg-4 control-label">Id</label>
        <div class="col-lg-4">
            <input type="number" name="id" id="id" value="{id}" readonly>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-4 control-label">Equipo</label>
        <div class="col-lg-4">
            <input  class="form-control" type="text" name="nombre" id="nombre" value="{nombre}" readonly>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-4 control-label">Cantidad Rentar(hr)</label>
        <div class="col-lg-4">
            <input class="form-control"  type="number" name="hora" id="hora" required="true" min="0" max="10" step="1">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-4 control-label">Cantidad Rentar(min)</label>
        <div class="col-lg-4">
            <input class="form-control"  type="number" name="min" id="min" min="0" max="59" required="true" step="1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 control-label">Numero de Controles</label>
        <div class="col-lg-4">
            <input class="form-control" type="number" name="controles" id="controles" min="0" max="5" required="true" step="1">
        </div>
         <input class="btn btn-group-lg"type="submit" name="enviar" id="enviar" value="Guardar">  
    </div>


          
        
 

</form>



<!--<form id="alta_usuario" action="../renta/renta" method="POST">

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


</form>-->