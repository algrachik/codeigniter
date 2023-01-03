<?php include ("templates/header.php");

$reiter = array (
    array (
        'id'=>1,
        'name'=> 'Todo',
        'beschreibung'=>'Was ist zu machen?'
    ),
    array(
        'id'=>2,
        'name'=>'Erledigt',
        'beschreibung'=>"Yay geschafft!!!"
    ),
    array(
        'id'=>3,
        'name'=>'Verschoben',
        'beschreibung'=>"Nix gut! :("
    )
);
//var_dump($mitglieder);
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Beschreibung</th>

    </tr>
    </thead>
    <tbody>


    <?php
    foreach ($reiter as $r){
        echo ('<tr>' .
            '<th scope="row">'.$r['id'].'</th>'.
            '<td>'.$r['name'].'</td>' .
            '<td>'.$r['beschreibung'].'</td>' .
            '</tr>');
    }


    ?>

    </tbody>
</table>

<div>
    <h4> Bearbeiten/erstellen: </h4>
    <form>
        <div class="form-group">
            <label for="reitersname">Bezeichnung des Reiters:</label>
            <input class="form-control" id="reitersname" placeholder="Reiter">
        </div>
        <div class="form-group">
            <label for="beschreibung">Beschreibung:</label>
            <textarea class="form-control" id="beschreibung" placeholder="Beschreibung" rows="3" ></textarea>
        </div>
    </form>
    <button type="button" class="btn btn-primary">Speichern</button>
    <button type="button" class="btn btn-secondary">Reset</button>
</div>

<?php include ("templates/footer.php");?>
