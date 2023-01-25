
<?php


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
    'placeholder' => 'Aufgabembezeichnung',
    'class' => 'form-control',
    'id' => 'name',
];

$databeschreibung = [
    'name' => 'beschreibung',
    'placeholder' => 'Aufgabenbeschreibung',
    'class' => 'form-control',
    'id' => 'beschreibung',
    'rows' => '3',
];

$dataErstellungsDatum = [
    'name' => 'erDatum',
    'placeholder' => '01.01.19',
    'class' => 'form-control',
    'id' => 'erDatum',
];

$dataFallDatum = [
    'name' => 'FallDatum',
    'placeholder' => '01.01.19',
    'class' => 'form-control',
    'id' => 'fallDatum',
];

$dataReiter = [
    'name' => 'reiter',
    'class' => 'form-control mb-3',
    'id' => 'reiter',
    'options' => $reiter,
];

$dataUser = [
    'name' => 'User',
    'class' => 'form-control mb-3',
    'id' => 'User',
    'options' => $user,
];



?>



                    <div class="col-10" style="width: 75%">
                    
                    <div class="table" style="margin-bottom: 100px">
                    <table class="table table-light ">   
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">Aufgabenbezeichnung:</th>
                                <th scope="col">Beschreibung der Aufgabe:</th>
                                <th scope="col">Reiter:</th>
                                <th scope="col">Zuständig:</th>
                                <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($aufgaben as $e){

                                echo "<tr>";
                                echo "<th>" . $e['Name'] . "</th>";
                                echo "<td>" . $e['Beschreibung'] . "</td>";
                                echo "<td>" . $reiter[$e['reiterID']] . "</td>";
                                echo "<td>" . $user[$e['erstellerID']] . "</td>";
                                echo '<td><a href="'. base_url() . '/aufgaben/delete/'. $e['id'] .'"><i class="bi bi-trash" style="color: red"></i></a></td>';
                                echo "</tr>";
                            } ?>
                            </tbody>
                            </table>
                            </div>

                        <h3>Bearbeiten/Erstellen</h3>
                        <?php echo form_open()?>
                        <div class="mb-3">
                            <label for="formName" class="form-label">Aufgabenbezeichnung:</label>
                            <?php echo form_input($dataName, set_value('name'))?>
                        </div>
                        <div class="mb-3">
                            <label for="beschreibung" class="form-label">Beschreibung der Aufgabe:</label>
                            <?php echo form_textarea($databeschreibung, set_value('beschreibung'))?>
                        </div>
                        <div class="mb-3">
                            <label for="erDatum" class="form-label">Erstellungsdatum:</label>
                            <?php echo form_input($dataErstellungsDatum, set_value('erDatum'))?>
                        </div>
                        <div class="mb-3">
                            <label for="fallDatum" class="form-label">Aufgabenbezeichnung:</label>
                            <?php echo form_input($dataFallDatum, set_value('fallDatum'))?>
                        </div>


                        <label for="reiter" class="form-label">Zugehöriger Reiter:</label>
                        <?php echo form_dropdown($dataReiter)?>
                        
                        <label for="person" class="form-label">Zustädig:</label>
                        <?php echo form_dropdown($dataUser)?>
                        

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