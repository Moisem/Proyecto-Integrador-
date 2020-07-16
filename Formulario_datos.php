<?php include_once "includes/templates/header_secundario.php";?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
            <center><h2>Informacion Personal</h2></center>
            </div>
            <div class="card-body">
                <form >
                <div class="form-group">
                    <label for="Nombre">NOMBRE:</label>
                    <input type="text" class="form-control-sm" id="Nombre" name="Nombre" placeholder="Tu Nombre">
                </div>
                <div class="form-group">
                    <label for="email">E-MAIL:</label>
                    <input type="email" class="form-control-sm" id="email" name="email" placeholder="Tu Correo electronico">
                </div>
                <div class="form-group">
                    <label for="telefono">TELEFONO:</label>
                    <input type="text" class="form-control-sm" id="telefono" name="telefono" placeholder="Tu Telefono">
                </div>
                <div class="form-group">
                   <label for="mensaje">MENSAJE:</label>
                    <TEXtarea type="text" id="mensaje" name="mensaje" cols="79" rows="10"></TEXtarea>
                </div>
                 <h3>CONTACTO</h3>
                <div class="form-group">
                    <label for="contacto">Como deseas ser contactado:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="contacto" id="contacto1" value="TELEFONO">
                        <label class="form-check-label" for="contacto1">TELEFONO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="contacto" id="contacto2" value="E-MAIL">
                        <label class="form-check-label" for="contacto2">E-MAIL</label>
                        <small id="contacto" class="form-text text-muted"aria-describedby="contacto">Si eligio Telefono,elija fecha y la hora</small>
                    </div>
                  <p><div class="form-group">
                    <label for="fecha">FECHA:</label>
                    <input type="text" class="form-control-sm" id="fecha" name="fecha" placeholder="dd/mm/aa">
                </p></div>
                <div class="form-group">
                    <label for="hora">HORA:</label>
                    <input type="time" class="form-control-sm" id="hora" name="hora" placeholder="--:-- ----">
                </div>
                <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i>Enviar</button>
                 </div>
                </form>
            </div>
        </div>      
    </div>
</body>
</html>