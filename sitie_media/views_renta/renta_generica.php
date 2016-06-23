<select name="nombre">
        <option value="" ></option>
        <?php
        $row = array();
        for ($i = 0; $i < count($row); $i++) {
            echo "<option value=" . $row[i]['id'] . " > " . $row[i]['nombre'] . "</option>";
        }
        ?>

    </select>