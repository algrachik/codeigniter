<?php

$name = "";
$beschreibung = "";

if (isset($reiterData)){
    $beschreibung = $reiterData['beschreibung'];
    $name = $reiterData['name'];
}

$name = '';
$beschreibung = '';

$dataSaveButton = [
    'name' => 'save',
    'class' => 'btn btn-primary'
];

$dataResetButton = [
    'name' => 'reset',
    'class' => 'btn btn-info'
];

$dataName = [
    'name' => 'name',
    'placeholder' => 'Name',
    'class' => 'form-control',
    'id' => 'name',
    'value' => $name,
];

$databeschreibung = [
    'name' => 'beschreibung',
    'placeholder' => 'Beschreibung',
    'class' => 'form-control',
    'id' => 'beschreibung',
    'rows' => '3',
    'value' => $beschreibung,
];


?>


                    <div class="col-10" style="width: 75%">
                    
                    <div class="table" style="margin-bottom: 100px">
                    <table class="table table-light ">   
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Beschreibung</th>
                                <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            foreach ($reiter as $e){

                                echo "<tr>";
                                echo "<th>" . $e['Name'] . "</th>";
                                echo "<td>" . $e['Beschreibung'] . "</td>";
                                echo '<td><a href="'. base_url() . '/reiter/delete/'. $e['id'] .'"><i class="bi bi-trash" style="color: red"></i></a></td>';
                                echo "</tr>";
                            } ?>
                            </tbody>
                            </table>
                            </div>

                        <?php echo form_open() ?>
                        <h3>Bearbeiten/Erstellen</h3>
                        <div class="mb-3">
                            <label for="formName" class="form-label">Bezeichnung des Reiters:</label>
                            <?php echo form_input($dataName, set_value('name'))?>
                        </div>
                        <div class="mb-3">
                            <label for="beschreibung" class="form-label">Beschreibung:</label>
                            <?php echo form_textarea($databeschreibung, set_value('beschreibung'))?>
                        </div>
                        <div class="buttons mb-3">
                            <?php echo form_submit($dataSaveButton, 'Speichern')?>
                            <?php echo form_submit($dataResetButton, 'Reset')?>
                        </div>


                        <?php echo form_close()?>

                    </div>
                 </div>
            </div>
            

        </div>
    </body>
</html>