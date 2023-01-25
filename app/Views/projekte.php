

<?php

    $name = '';
    $beschreiung = '';

if (isset($projekt)){
    $name = $projekt['name'];
    $beschreiung = $projekt['beschreibung'];
}


$dataID = [
    'name' => 'id',
    'class' => 'form-control mb-3',
    'id' => 'id',
    'options' => $projekte,
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
    'value' => $beschreiung,
];


$dataSaveButton = [
    'name' => 'save',
    'class' => 'btn btn-primary'
];

$dataEditButton = [
    'name' => 'edit',
    'class' => 'btn btn-primary'
];

$dataPickButton = [
    'name' => 'pick',
    'class' => 'btn btn-primary'
];

$dataDeleteButton = [
    'name' => 'delete',
    'class' => 'btn btn-danger'
];

$dataResetButton = [
    'name' => 'reset',
    'class' => 'btn btn-info'
];



?>


                <div class="col-10">
                    
                    <div class="form" style="width: 75%">
                        <?php echo form_open('') ?>
                        <h3>Projekt Auswählen:</h3>
                        <?php echo form_dropdown($dataID) ?>
                        <div class="buttons mb-3">
                            <?php echo form_submit($dataPickButton, 'Auswählen')?>
                            <?php echo form_submit($dataEditButton, 'Bearbeiten')?>
                            <?php echo form_submit($dataDeleteButton, 'Löschen')?>
                        </div>

                        <h3>Projekt bearbeiten/Erstellen:</h3>
                        <div class="mb-3">
                            <label for="name" class="form-label">Projektname:</label>
                            <?php echo form_input($dataName, set_value('name'))?>
                        </div>
                        <div class="mb-3">
                            <label for="beschreibung" class="form-label">Projektbeschreibung:</label>
                            <?php echo form_textarea($databeschreibung, set_value('beschreibung')) ?>
                        </div>
                        <div class="buttons mb-3">
                        <?php echo form_submit($dataSaveButton, 'Speichern')?>
                        <?php echo form_submit($dataResetButton, 'Reset')?>
                        </div>
                        <?php echo form_close() ?>
                        </div>


                    </div>
                 </div>
            </div>
            

        </div>
    </body>
</html>