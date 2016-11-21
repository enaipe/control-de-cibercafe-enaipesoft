<form action="#" method="POST" name="" id="" >

    <div class="table table-responsive">
        <table class="table" >
            <thead> 
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>   
                    <th>Control</th>
                    <th>Inicio</th>                
                    <th>Finalizo</th>
                    <th>Tiempo</th>
                    <th>$Pago</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php
                clearstatcache();

                if (isset($array)) {
                    logica($array, $total);
                }

                function logica($row, $total) {
                    $clase = "";

                    for ($i = 0; $i < count($row); $i++) {
                        $id = $row[$i]['id'];
                        ?>

                        <tr class="text-primary">
                            <td> <label><?php echo $row[$i]['id']; ?></label></td>
                            <td> <label><?php echo $row[$i]['nombre']; ?></label></td>
                            <td> <label><?php echo $row[$i]['controles']; ?></label></td>
                            <td> <label><?php echo $row[$i]['Hinicio']; ?></label></td>
                            <td> <label><?php echo $row[$i]['fecha']; ?></label></td>                           
                            <td> <label><?php echo $row[$i]['cantidadHora']; ?></label></td>
                            <td> <label><?php echo $row[$i]['pago']; ?></label></td>
                        </tr>
                    <?php }
                    ?>
                <div class="row text-right">
                    <div class="col-xs-2 col-xs-offset-8">
                        <p>
                            <strong>
                                Tiempo : <br>
                                TAX : <br>
                                Total : <br>
                            </strong>
                        </p>
                    </div>
                    <div class="col-xs-2">
                        <strong>
                            <?php echo $total[0]['totalTime']; ?> <br>
                            N/A <br>
                            <?php echo $total[0]['totalCant']; ?> <br>
                        </strong>
                    </div>
                </div>
            
                <?php
            }
            ?>

            </tbody>
        </table>

    </div>
    <input type="hidden" value="" name="form" id="form">
</form>









