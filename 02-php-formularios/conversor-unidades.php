<!DOCTYPE >
<html>
    <head></head>
    <body>
        <h1>Conversor de unidades</h1>
        <?php   
        
           if ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>  
        <div>
            <form method="post" name="formConvertir" target="conversor-unidades.php">
                <table>
                    <tr>
                        <td>
                            Selecciona la unidad de entrada
                        </td>
                        <td>
                            <input type="radio" checked="true" name="unidad" value="0">Metros
                            <input type="radio" name="unidad"  value="1">Kilometros
                        </td>
                     
                    </tr>
                    <tr>   
                        <td>Ingresa el valor a convertir:</td>
                        <td><input type="number" name="num1" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button value="Calcular" type="submit">Calular</button>
                        </td>
                    </tr>
                </table>
            </form>
          
        </div>
        <?php else : ?>
            <div>
            <!-- #region -->
             <?php  
             if (isset($_POST['num1'])):?>
                <div>numero ingresado :<?  echo $_POST['num1']; ?> </div>
             <? else : ?>
                <div>
                    no se ingreso ningun numero.
                </div>
             <? endif ?>   
            </div>
            <div>
            <?php  
             if (isset($_POST['unidad'])):?>
                <div>unidad ingresada :<?  if( $_POST['unidad']==="0") {echo "metros";} else echo "kilometros"; ?> </div>
             <? else : ?>
                <div>
                    no se ingreso ningun unidad.
                </div>
             <? endif ?>   
            </div>    
            <?php 
                $unidad = "0";  $num1=0; 
                if (isset($_POST['unidad'])&& isset($_POST['num1'])){
                    $unidad = $_POST['unidad'];
                    $num1 = $_POST['num1'];
                    print($unidad); 
                    //unidad metros convertir a kilometros
                }          
            ?>   
            <table>
                <tr>
                    <td colspan="2"> Convirtiendo : <? if ( $unidad==="0") { echo "metros a kilometros";} else { echo "kilometros a metros";} ?></td>
                </tr>
                <tr>
                    <td><? if ($unidad ==="0"){
                            $conv =  $num1 /1000;
                            $str = "$num1 mts  : $conv km";
                            print($str);
                        }else {
                            $conv =  $num1 *1000;
                            $str = "$num1 km : $conv mts";
                            print($str);
                        } ?> </td>
                </tr>
            </table> 
         <? endif?>
    </body>
</html>