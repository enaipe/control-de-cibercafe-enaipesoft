<form action="/enaipeVG/renta/finalizar" method="POST" name="terminar" id="terminar" >
    <table class="table" >
        <thead> 
            <tr>
                <th>Id</th>
                <th>Nombre</th>   
                <th>HORA INICIO</th>
                <th>HORA A FINALIZAR</th>                
                <th>NUM.CONTROLES</th>
                <th class="alert-warning">TOTAL RENTA</th>
                <th class="">Tiempo Transurrido</th>
                <th>TIEMPO RENTA</th>
                <th>$ TOTAL A PAGAR</th>
                <th>$ TOTAL ACTUAL</th>
                <th></th>
                <th></th>


            </tr>
        </thead>
        <tbody>
            <?php
            //  require 'controller.php';
            clearstatcache();
            $ipAddress = $_SERVER['REMOTE_ADDR'];
            // print_r("ip: " . $_SERVER["REMOTE_ADDR"]);
            $bloqueo[0] = "192.168.1.67";
            $bloqueo[1] = "::1";
            $macAddr = false;

#run the external command, break output into lines
            $arp = `arp -a $ipAddress`;
            $lines = explode("\n", $arp);

#look for the output line describing our IP address
            foreach ($lines as $line) {
                $cols = preg_split('/\s+/', trim($line));
                if ($cols[0] == $ipAddress) {
                    $macAddr = $cols[1];
                }
            }
            print_r($macAddr);

// De esta manera con cuantas como deseemos

            if ($_SERVER['REMOTE_ADDR'] == $bloqueo[0]) {
                echo 'hola iphone';
            } else if ($_SERVER['REMOTE_ADDR'] == $bloqueo[1]) {
                echo 'hola master';
            } else {
                echo 'hola don nadie';
            }
//
//            echo '<pre>';
//            print_r($array);
//            echo '</pre>';

            $row = $array;
            $clase = "";
            $disa = "";
            for ($i = 0; $i < count($row); $i++) {
                $id = $row[$i]['id'];
                $pago = $row[$i]['pago'];
                $tiempo_final = $row[$i]['tiempo_finalizar'];
                if ($tiempo_final > "00:00:00") {
                    $clase = "alert-danger";
                    echo '<audio id="demo" src="/enaipeVG/sitie_media/audio/keyboard_desk.mp3" autoplay></audio>';
                    echo"<script type=\"text/javascript\">alert('termino'); </script>";
                } else {
                    $clase = "";
                }

                if ($row[$i]['pago'] == '1') {

                    $disa = "glyphicon glyphicon-thumbs-up";
                } else {
                    $disa = "glyphicon glyphicon-thumbs-down";
                }
                ?>
                <tr class="text-primary">
                    <td> <input type="text" id="<?php echo $id ?>" name="<?php echo $i ?>[id]" value="<?php echo $id; ?>"readonly size="1"></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['nombre']; ?>" size="15"  readonly ></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['Hinicio']; ?>"size="10" readonly></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['Hfinal']; ?>"size="10" readonly></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['controles']; ?>"size="2" readonly></td>
                    <td> <input type="text" class="<?php echo $clase ?>"name="" value="<?php echo $row[$i]['tiempo_finalizar']; ?>"size="10" title="Tiempo que le queda para que finalize su renta" readonly></td>
                    <td> <input type="text" class="" name="" value="<?php echo $row[$i]['tiempo_transcurrido']; ?>"size="10" title="Tiempo que le queda para que finalize su renta" readonly></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['tiempo_total']; ?>"size="10" title="Tiempo que lleva rentando" readonly></td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['total']; ?>"size="3" readonly>
                        <span class="<?php echo $disa ?>"></span>

                    </td>
                    <td> <input type="text" name="" value="<?php echo $row[$i]['total_Actual']; ?>"size="3" readonly></td>
                    <td> <input class="btn- btn-success btn-sm btn-block" type="button" value="Agregar" onclick="agregar_renta('<?php echo $row[$i]['id']; ?>');"></td>
                    <td> <input class="btn btn-danger btn-sm btn-block" type="button" value="Terminar" onclick="terminar_renta('<?php echo $i ?>');"></td>                
                    <td> <input class="btn btn-primary btn-sm btn-block" type="button"  value="Pagado" onclick="pagada_renta('<?php echo $id ?>');"></td>                


                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <!--    <div style="position: relative; padding: 100px;">
            <button id="b01">Play "beer_can_opening"</button>
    
            <button id="b02">Play "bell_ring"</button>
    
    
    
        </div>-->

    <input type="hidden" value="" name="form" id="form">
</form>
<script type="text/javascript">
    $(document).ready(function () {

        ion.sound({
            sounds: [
                {name: "beer_can_opening"},
                {name: "bell_ring"}
            ],
            path: "/enaipeVG/sitie_media/audio/",
            preload: true,
            volume: 1.0
        });


        $("#b01").on("click", function () {
            ion.sound.play("beer_can_opening");
        });

        $("#b02").on("click", function () {
            ion.sound.play("bell_ring");
        });


    });



</script>


<form action="/enaipeVG/renta/agregar" method="POST" name="agregar" id="agregar">
    <input type="hidden" value="" name="id_user_rentar" id="id_user_rentar">
</form>

<form action="/enaipeVG/renta/pagado" method="POST" name="pagado" id="pagado">
    <input type="hidden" value="" name="id_pagado" id="id_pagado">
</form>





