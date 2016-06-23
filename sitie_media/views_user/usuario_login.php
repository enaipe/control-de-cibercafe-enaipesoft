<form id="alta_usuario" action="../usuarios/autentica/" method="POST" name="formulario">

    <div class="item_requerid">Usuario</div>
    <div class="form_requerid"><input type="text" name="usuario" id="usuario"></div>

    <div class="item_requerid">Password</div>
    <div class="form_requerid"><input type="password" name="clave" id="clave"></div>


    <div class="form_button"><input type="button" id="enviar" value="Buscar" onclick="validar_campos()"></div>
</form>

<script type="text/javascript">
        
    function validar_campos(){
        //nos referimos a todo el documento html 
        var user=document.getElementById('usuario').value;
        var clave=document.getElementById('clave').value;
        //alert('usuario :'+user);
              
        if(user==''|| clave=='' ){
            alert('tienes un camopo vacio');
            return false;
        }else{
                  
            document.formulario.submit();
        }

    }
    
    
</script> 



