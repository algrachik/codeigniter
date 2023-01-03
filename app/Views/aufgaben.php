<?php include ("templates/header.php");

$aufgaben = array (
    array (
        'id'=>1,
        'name'=> 'HTML Datei erstellen',
        'beschreibung'=>'HTML Datei erstellen',
        'reiter'=> 'ToDo',
        'datum'=>'07.12.2022'
    ),
    array (
        'id'=>2,
        'name'=> 'CSS Datei erstellen',
        'beschreibung'=>'Schöne Sachen erstellen',
        'reiter'=> 'ToDo',
        'datum'=>'10.12.2022'
    ),array (
        'id'=>3,
        'name'=> 'PC eingeschaltet',
        'beschreibung'=>'PC hochfahren und Programme starten',
        'reiter'=> 'Erledigt',
        'datum'=>'01.12.2022'
    ),array (
        'id'=>4,
        'name'=> 'Kaffee trinken',
        'beschreibung'=>'Kaffee muss sein',
        'reiter'=> 'Erledigt',
        'datum'=>'stündlich'
    ),array (
        'id'=>5,
        'name'=> 'Für die Uni lernen',
        'beschreibung'=>'Was muss, das muss',
        'reiter'=> 'Verschoben',
        'datum'=>'niemals'
    ),
);
//var_dump($mitglieder);
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Beschreibung</th>
        <th scope="col">Reiter</th>
        <th scope="col">Fälligkeitsdatum</th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach ($aufgaben as $aufgabe){
        echo ('<tr>' .
            '<th scope="row">'.$aufgabe['id'].'</th>'.
            '<td>'.$aufgabe['name'].'</td>' .
            '<td>'.$aufgabe['beschreibung'].'</td>' .
            '<td>'.$aufgabe['reiter'].'</td>' .
            '<td>'.$aufgabe['datum'].'</td>' .
            '</tr>');
    }


    ?>

    </tbody>
</table>

<div>
    <h4> Bearbeiten/erstellen: </h4>
    <form>
        <div class="form-group">
            <label for="aufgabebez">Aufgabenbezeichnung:</label>
            <input class="form-control" id="aufgabebez" placeholder="Aufgabe">
        </div>
        <div class="form-group">
            <label for="beschreibung">Beschreibung der Aufgabe:</label>
            <textarea class="form-control" id="beschreibung" placeholder="Beschreibung" rows="3" ></textarea>
        </div>
        <div class="form-group">
            <label for="date">Erstellungsdatum:</label>
            <input class="form-control" id="date" placeholder="01.01.11">
        </div>
        <div class="form-group">
            <label for="deadline">Fällig bis:</label>
            <input class="form-control" id="deadline" placeholder="01.01.11">
        </div>
        <div class="form-group">
            <label for="zureiter">Zugehörige Reiter:</label>
            <select class="form-control" id="zureiter">
                <option>Todo</option>
                <option>Erledigt</option>
                <option>Verscoben</option>
            </select>
        </div>
        <div class="form-group">
            <label for="zustaendig">Zuständig:</label>
            <select class="form-control" id="zureiter">
                <option>Alina</option>
                <option>Daniel</option>
                <option>Tilda</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="form-check-label" for="check">Dem Projekt zugeordnet </label>
        </div>
    </form>
    <br>
    <button type="button" class="btn btn-primary">Speichern</button>
    <button type="button" class="btn btn-secondary">Reset</button>
</div>
<?php include ("templates/footer.php");?>
