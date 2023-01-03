<?php include ("templates/header.php");?>
<link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">

    <div>
        <h4> Projekt auswählen: </h4>
    </div>
    <div>
        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>- Bitte auswählen -</option>
            <option value="1">ToDos</option>
            <option value="2">Rettung der Schildkröten</option>
            <option value="3">Findet Nemo</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="button" class="btn btn-primary">Auswählen</button>
        <button type="button" class="btn btn-primary">Bearbeiten</button>
        <button type="button" class="btn btn-danger">Löschen</button>
    </div>

<div>
    <h4> Projekt erstellen: </h4>
    <form>
        <div class="form-group">
            <label for="projektname">Projekt name:</label>
            <input class="form-control" id="projektname" placeholder="Projekt">
        </div>
        <div class="form-group">
            <label for="projektbeschreibung">Projektbeschreibung:</label>
            <textarea class="form-control" id="projektbeschreibung" placeholder="Projektbeschreibung" rows="3" ></textarea>
        </div>
    </form>
    <button type="button" class="btn btn-primary">Speichern</button>
    <button type="button" class="btn btn-secondary">Reset</button>
</div>


</div>
<div class="col-2">
</div>
</div>

<?include("templates/footer.php"); ?>
