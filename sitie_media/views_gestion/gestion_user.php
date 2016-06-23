<link rel="stylesheet" type="text/css" href="../sitie_media/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="enaipeVG/boots_template/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="enaipeVG/boots_template/css/normalize.css">

<table class="table-condensed" >
    <thead> 
        <tr>
            <th>Id</th>
            <th>Nombre</th>   
            <th>Jugadores</th>
            <th>Genero</th>
            <th>Costo</th>
            <th></th>
            <th></th>
            <th></th>


        </tr>
    </thead>
    <tbody>
        <?php
        //  require 'controller.php';
        $row = $array_user;
        for ($i = 0; $i < count($row); $i++) {
            $id = $row[$i]['id'];
            ?>
        <tr class="text-info">
                <td> <?php echo $id; ?></td>
                <td><?php echo $row[$i]['nombre']; ?></td>
                <td><?php echo $row[$i]['jugadores']; ?></td>
                <td><?php echo $row[$i]['genero']; ?></td>
                <td><?php echo $row[$i]['costo']; ?></td>
                <td> <input type="button" class="btn-success" value="editar" onclick="editar_user('<?php echo $row[$i]['id']; ?>');"> </td>
                <td> <input type="button" class="btn-info" value="delete" onclick="eliminar_user('<?php echo $row[$i]['id']; ?>');"> </td>
                <td> <input type="button" class="btn-xs" value="rentar" onclick="renta_user('<?php echo $row[$i]['id']; ?>');"> </td>                


            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<form action="../gestion/edit/" method="POST" name="editar" id="editar">
    <input type="hidden" value="" name="id_user_edit" id="id_user_edit">

</form>

<form action="../gestion/eliminar/" method="POST" name="eliminar" id="eliminar">
    <input type="hidden" value="" name="id_user_delete" id="id_user_delete">

</form>

<form action="/enaipeVG/renta/" method="POST" name="rentar" id="rentar">
    <input type="hidden" value="" name="id_user_rentar" id="id_user_rentar">

</form>
