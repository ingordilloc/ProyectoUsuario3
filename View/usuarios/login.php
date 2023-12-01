<?php
use Controller\UsuarioController;
$usuario = new UsuarioController();

?>

<h1>Login</h1>

<div class="container">

    <form method="POST" id="formulario" data-intro='Formulario del Usuario'>
       

        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Usuario</label>
                </div>
                <div class="col-10"><input class="form-control" type="text" name="usuario" data-intro='Ingresar su Usuario' required></div>
            </div>

        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Contraseña</label>
                </div>
                <div class="col-10"><input type="password" name="password" class="form-control" data-intro='Ingresar su Password' id="password"></div>
            </div>
        </div>

        <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Iniciar</button>
            </div>
        </div>

        <div id="passwordError" title="Error en Password" hidden>
        <p>La contraseña es muy corta.</p>
    </div>
        
    </form>
     
<?php 
$resultado = $usuario->login();
if($resultado === false){
    echo "<div class='alert alert-success mt-3' role=alert'>
    Error de los datos</div>";
}

?>
</div>

<script>
 introJs().setOptions({
           showProgress: true,
        }).start()

    document.addEventListener("DOMContentLoaded", function() {//Primer evento al momento de carga por completo de la pagina
  document.getElementById("formulario").addEventListener('submit', validarFormulario); //Submit esta asociado al boton type submit
});

function validarFormulario(evento) {
    evento.preventDefault();//Previene que la pagina se actualice.
    let password = document.getElementById('password').value;//Identifica el input que deseamos validar, su valor en este caso el password
    if (password.length < 2) { //.length es un metodo que permite leer el numero de caracteres.
        $.passwordError(); //Muestra mensaje de contraseña corta
    return; //Detiene toda la ejecucion.
  }
  this.submit(); //Enviar la informacion al servidor de  PHP.
}

$.passwordError =  function() {
    let element = document.getElementById("passwordError");
    element.removeAttribute("hidden");//Cuando se conecta, se quitara el atributo hidden al input.
    $( "#passwordError" ).dialog();//jQuery para mostrar ventana de dialogo.
    //$("#passwordError").show();
  };
</script>