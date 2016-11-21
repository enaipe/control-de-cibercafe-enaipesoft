<!--<form id="alta_usuario" action="../usuarios/autentica/" method="POST" name="formulario">

    <div class="item_requerid">Usuario</div>
    <div class="form_requerid"><input type="text" name="usuario" id="usuario"></div>

    <div class="item_requerid">Password</div>
    <div class="form_requerid"><input type="password" name="clave" id="clave"></div>


    <div class="form_button"><input type="button" id="enviar" value="Buscar" onclick="validar_campos()"></div>
</form>-->


<div class="container">

    <form class="form-signin" id="alta_usuario" action="../usuarios/autentica/" method="POST" name="formulario">
        <h2 class="form-signin-heading"> Sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="clave" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
<!--<script type="text/javascript">

    function validar_campos() {
        //nos referimos a todo el documento html 
        var user = document.getElementById('usuario').value;
        var clave = document.getElementById('clave').value;
        //alert('usuario :'+user);

        if (user == '' || clave == '') {
            alert('tienes un camopo vacio');
            return false;
        } else {

            document.formulario.submit();
        }

    }


</script> -->



