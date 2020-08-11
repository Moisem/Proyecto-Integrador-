<?php
include_once "includes/funciones/validar_sesion.php";
include_once "includes/templates/header_secundario.php";

$id=$_POST['id'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];
$estatus=$_POST['estatus'];
$costo=$_POST['subtotal'];
date_default_timezone_set ('America/Mexico_City');
$fecha_actual = date("Y-m-d");

if(isset($_POST['cancelar'])){
    if($fecha_actual >= $fecha_inicio){
        header('location: area_de_clientes.php?info="Solo se pueden cancelar pedidos antes de ser entregados"');
    }else{?>
        <div class="contenedor contenedor-pedido">
            <form class="formulario_pedido centrar-texto" action="eliminar_pedido.php" method="post">
                <fieldset>
                    <legend>Datos de Orden</legend>

                    <input id="id" type="hidden" name="id" value="<?php echo $id;?>">            
    
                    <label for="fecha_inicio" class="">Fecha estimada de entrega</label> 
                    <p><?php echo $fecha_inicio;?></p>   

                    <label for="fecha_final" class="">Tu Servicio vencerá el dia:</label>
                    <p><?php echo $fecha_fin;?></p>    

                    <label for="persona_que_recibe" class="">Nombre de quien recibirá el equipo</label>
                    <p><?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno'];?></p> 

                    <label class="centrar-texto"" for="total">Total a Pagar</label>   
                    <p class="precio centrar-texto">$<?php echo $costo?></p>
                </fieldset>
                <div class="contendor centrar-texto" id="contenedor-botones">
                    <input type="submit" value="Cancelar Pedido" class="boton boton-rojo" name="submit">
                </div>
            </form>
        </div>

    <?php
        }
    }
if(isset($_POST['editar'])){
    if($fecha_actual >= $fecha_inicio){
        header('location: area_de_clientes.php?info="Solo se pueden cancelar pedidos antes de ser entregados"');
    }else{?>
    
    <div class="contenedor contenedor-pedido">
            <form class="formulario_pedido centrar-texto" action="confirmar_pedido.php" method="post">
                <fieldset>
                    <legend>Datos de Orden</legend>

                    <input id="id" type="hidden" name="id" value="<?php echo $id;?>">            
    
                    <label for="fecha_inicio" class="">Fecha estimada de entrega</label> 
                    <p><?php echo $fecha_inicio;?></p>   
                    <input id="fecha_inicio" type="text" name="fecha_inicio" value="<?php echo $fecha_inicio;?>">

                    <label for="fecha_final" class="">Tu Servicio vencerá el dia:</label>
                    <p><?php echo $fecha_fin;?></p>    
                    <input id="fecha_final" type="hidden" name="fecha_final" value="<?php echo $fecha_fin;?>">

                    <label for="persona_que_recibe" class="">Nombre de quien recibirá el equipo</label>
                    <p><?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno'];?></p> 
                    <input id="persona_que_recibe" type="hidden" name="cliente" value="<?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno'];?>">

                    <label class="centrar-texto"" for="total">Total a Pagar</label>   
                    <p class="precio centrar-texto">$<?php echo $costo?></p>
                    <input id="costo" type="hidden" name="costo" value="<?php echo $costo;?>">

                    <input id="nombre_servicio" type="hidden" name="servicio" value="<?php echo $servicio;?>">
                    <input id="id_renta" type="hidden" name="id_renta" value="<?php echo $id_renta;?>">
                </fieldset>
                <div class="contendor centrar-texto" id="contenedor-botones">
                    <input type="submit" value="Guardar Cambios" class="boton boton-azul-cielo" name="submit">
                </div>
            </form>
        </div>
    <?php
        }
    }
?>
</body>
</html>
