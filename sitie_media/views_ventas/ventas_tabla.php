<link rel="stylesheet" type="text/css" href="../sitie_media/css/bootstrap.min.css">



      <div class="table-responsive">
        <table  class="table-bordered" >
            <thead> 
                <tr>
                    <th>Fechas</th>
                    <th>Horas</th>   
                    <th>Utilidad</th>



                </tr>
            </thead>
            <tbody>
                <?php
                $row = $array_fecha;
                for ($i = 0; $i < count($row); $i++) {
                    ?>
                    <tr >
                        <td> <input class="" type="text" name="fecha" id="fecha" value="<?php echo $row[$i]['fecha']; ?>" size="20" readonly></td>
                        <td> <input class="" type="text" name="horas" id="horas" value="<?php echo $row[$i]['horas'] . ' horas'; ?>" size="10" readonly></td>
                        <td> <input class="" type="text" name="utilidad" id="utilidad" value="<?php echo '$ ' . $row[$i]['utilidad']; ?>"size="10" readonly></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
