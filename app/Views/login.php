<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Todos</title>
</head>
<body>
<div class="container-fluid">
    <header class="bg-light">
        <div class="jumbotron">
            <div style="font-size: 2.5em;text-align: center;">Aufgabenplaner: Login</div>
        </div>
    </header>
    <div class="row mt-4">
        <div class="col-2">
        </div>
        <div class="col-8">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Adresse</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Adresse eingeben">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Passwort</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Passwort">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    AGBs und Datenschutzbedingung akzeptieren
                </label>
            </div>
            <button type="button" class="btn btn-primary mt-3">Einloggen</button>
            <div>
                Noch nicht registriert
                <a class="text-decoration-none" href="registrierung.php">Registrierung</a>
            </div>
            <div>
                Da der Login noch nicht realisiert wurde:
                <a class="text-decoration-none" href="header.php">Überspringen</a>
            </div>


        </div>



    </div>
    <div class="col-2">
    </div>
</div>
</div>
</div>
</body>
<?include("footer.php"); ?>
