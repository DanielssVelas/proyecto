<?php
    require_once "../../aut.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../css/umg.png" />
    <title>CRUD UMG</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poetsen One', sans-serif;
        }
        .navbar-brand {
            font-family: 'Poetsen One', sans-serif;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid p-2 mb-3">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/proyecto/view/head/head.php"><i class="bi bi-house-door"></i>Inicio</a>
            <a class="navbar-brand" href="logout.php">Salir<i class="bi bi-box-arrow-right"></i></a>
        </div>
    </nav>
    </div>
<div class="container-fluid">
<?php
    require_once "../username/index.php";
?>
