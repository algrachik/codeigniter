<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Todos</title>
</head>
<body>
<div class="container-fluid">
    <header class="bg-light">
        <div class="jumbotron">
            <div style="font-size: 2.5em;text-align: center;">Aufgabenplaner: ToDos</div>
        </div>
    </header>
    <div class="row">
        <div class="col-2" >
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="<?php echo base_url('/login'); ?>">Login</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url('/projekt'); ?>">Projekte</a>
                </li>
                <li class="list-group-item">
                   <a href="<?php echo base_url('/todos'); ?>">Aktuelles Projekt</a>
                </li>
                <li class="list-group-item" style="margin-left: 3em">
                    <a href="<?php echo base_url('/reiter'); ?>">Reiter</a>
                </li>
                <li class="list-group-item" style="margin-left: 3em">
                    <a href="<?php echo base_url('/aufgaben'); ?>">Aufgaben</a>
                </li>
                <li class="list-group-item" style="margin-left: 3em">
                    <a href="<?php echo base_url('/mitglieder'); ?>">Mitglieder</a>
                </li>
            </ul>
        </div>
        <div class="col">
