<?php include_once "includes/templates/header_secundario.php";?>

<main class="contenedor">

<form action="Registro_Exitoso.html" method="post">
    <h2 class="FW-900 centrar-texto">Crea una Nueva Cuenta en Abysmal Edge</h2>
        <fieldset>
            <legend>Datos de Usuario</legend>

            <div class="datos_personales">
                <label for="nombre">Nombre(s)</label>
                <label for="nombre">Primer Apellido</label>
                <label for="nombre">Segundo Apellido</label>
            </div>
            <div class="datos_personales">
                <input id="nombre" type="text" placeholder="Francisco" required>
                <input id="ap_paterno" type="text" placeholder="Garcia" required>
                <input id="ap_materno" type="text" placeholder="Juarez" required>
            </div>

            <label for="correo">Correo</label>   
            <input type="email" id="correo" placeholder="ejemplo@dominio.com" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" placeholder="6-16 Caracteres" id="contrasena">

            <label for="ConfirmarContrasena">Confirmar Contraseña</label>
            <input type="password" id="ConfirmarContrasena" placeholder="Confirma tu Contraseña">

            <label for="Numero">Numero Telefonico</label>
            <input type="tel" id="Numero" placeholder="+52" required>
        </fieldset>

        <fieldset class="direccion">
        <legend>Direcciones de Envio</legend>

            <label for="estado">Estado</label>
            <select id="estado">
                <option value="" disabled selected>Elegir Opcion</option>
                <option value="mexico">Mexico</option>
                <option value="cdmx">CDMX</option>
                <option value="veracruz">Veracruz</option>
            </select>
            
            <label for="municipio">Municipio</label>
            <select name="municipio" id="municipio">
                <option value="" disabled selected>Elegir Opcion</option>
                <option value="lerma">Lerma</option>
                <option value="azcapotzalco">azcapotzalco</option>
                <option value="acula">Acula</option>
            </select>
           
            <label for="calle">Calle</label>
            <input type="text" id="calle" placeholder="Ingrese su calle">
            
            <label for="no.Int">No. Interior</label>
            <input type="text" id="no.Int" placeholder="Ingrese su no.Int">
           
            <label for="no.Ext">No. Exterior</label>
            <input type="text" id="no.Ext" placeholder="Ingrese su no.Exte">
            
            <label for="codigo postal">Codigo Postal</label>
            <input type="text" id="codigo postal" placeholder="Ingrese su Nombre">

            <div class="agregar-direccion contenedor">
            <input type="submit"  value="+" class="boton boton-azul-cielo">
            </div>

        </fieldset>

    <div class="contendor centrar-texto iniciar_sesion">
        <input type="submit"  value="Crear Cuenta" class="boton boton-azul-cielo">
        <p>¿Ya tienes una cuenta? <a href="Inicio_Sesion.php" class="IS">Inicia Sesión</a></p>
    </div>
</form>
</main>
</body>
</html>