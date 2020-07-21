<form action="" method="post">
<fieldset class="direccion">
        <legend>Direcciones de Envio</legend>

            <label for="estado">Estado</label>
            <select id="estado">
                <option value="" selected disabled>-Seleccionar-</option>
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM estado";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                ?>
                
                <?php
                    while($estados = $resultado->fetch_assoc()){?>
                        <option value="" name="estado">
                            <?php
                                echo $estados['nombre'];
                            }?>
                        </option>
            </select>
            
            <label for="municipio">Municipio</label>
            <select name="municipio" id="municipio">
            <option value="" selected disabled>-Seleccionar-</option>
            <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM municipios";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                ?>
                
                <?php
                while($muni = $resultado->fetch_assoc()){
                    if($estado['id']=$muni['estado_id'])
                        {
                        while($mun = $resultado->fetch_assoc()){?>
                            <option value="">
                        <?php
                                echo $mun['nombre'];
                            }
                        }else{
                            echo "<h2>ERROR<h2>";
                        }
                    }?>
                            </option>
                <?php
                    $conn->close();
                ?>
            </select>
            <label for="calle">Calle</label>
            <input type="text" id="calle" placeholder="Ingrese su calle">
            
            <label for="no.Int">No. Interior</label>
            <input type="text" id="no.Int" placeholder="Ingrese su no.Int">
           
            <label for="no.Ext">No. Exterior</label>
            <input type="text" id="no.Ext" placeholder="Ingrese su no.Exte">
            
            <label for="codigo postal">Codigo Postal</label>
            <input type="text" id="codigo postal" placeholder="Ingrese su Nombre">
        </fieldset>
        <div class="agregar-direccion contenedor">
            <input type="submit"  value="Agregar Direccion de Envio" class="boton boton-azul-cielo">
        </div>
</form>