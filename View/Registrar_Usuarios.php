
<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/Validaciones.js" type="text/javascript"> </script>
         <script src="../JS/maskedInput.js" type="text/javascript"></script>
                
         <script src="../JS/mensajes.js" type="text/javascript"></script>
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
         
      <script> 
            $(function(){ 
                $("#header").load("../View/Header.php");
            });
      </script> 
      
      <script>
      $(document).ready(function($){    
          $('#telefono').mask("9999 9999",{placeholder: "____-____"}); 
          $('#cedula').mask("9 0999 0999",{placeholder: "_-____-____"});
      });
      
      </script>     
    </head>
    
    <body>
        <div id="header"></div>
          <br><br><br><br>
    <center><h1 class="tituloRegistros"> Registrar Usuario</h1></center>
    
    <div class="iconoRegistro"><img src="../Image/registro.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/IngresarUsuarios.php" accept-charset="UTF-8" onsubmit="return  validar_envio()">
            
                <label for="tipoEmpleado">Tipo de Empleado:</label> <select name="tipoEmpleado" key="tipoEmpleado" class="tipoEmpleado" onChange="submit" required>
                             <option value="Empleado">Vendedor</option>
                             <option value="Vendedor">Administrador</option>
                            
                </select >
                <br/><br/>
                <br/><br/>
		<label for="nombreUsuario">Nombre:</label>
                <input type="text" id="name" name="nombreUsuario" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="apellidoUsuario">Apellido:</label>
                <input type="text" id="name" name="apellidoUsuario" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="cedulaUsuario">Cedula:</label>
                <input type="text" id="cedula" name="cedulaUsuario" min="7" maxlength="9"  onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required />
		<br><br>
                <label for="telefonoUsuario">Telefono:</label>
                <input type="text" id="telefono" name="telefonoUsuario" min="8" maxlength="8" required />
		<br><br>
                <label for="contrasenia1Usuario">Contrasenia:</label>
                <input type="password" id="password" name="contrasenia1Usuario" required/>
		<br><br>
                <label for="contrasenia2Usuario"> Confirmar Contrasenia:</label>
                <input type="password" id="confirmarPassword" name="contrasenia2Usuario" onkeyup="validar_password(this.value,this.id)" onchange="validar_password(this.value,this.name)"  required/>
		<br><br>
                <button class="submit" type="submit" onclick="return notificarInsertado()">Registrar</button>
		
	    </form>
        </div>        
    </body>
    
    <script>
    //onclick="return notificarInsertado()"    
    /*function notificarInsertado() {
            alert("Usuario insertado");
        }*/
    </script>
    <script>
        function alerta() {
            
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {
                
            });
        }
    </script>
    <footer>
        
    </footer>    
</html>
