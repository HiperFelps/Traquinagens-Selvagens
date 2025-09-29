<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Título traquina</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Barra de Navagem</span>
        </div>
    </nav>
    <!-- inserir imagens no carrossel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br>
    <div class="group">
        <input type="text" class="input-nome">
        <label class="label-nome">Nome</label>
    </div>
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .group{
            position: relative;
        }
        input{
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 200px;
            outline: none;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }
        label{
            position: absolute;
            left: 5px;
            top: 10px;
        }
        input:focus~label{
            top: -20px;
            font-size: 14px;
            color: #19b5e9ff;
            transition: 0.2s;
        }
        input:focus{
            border-width: 2px;
            border-bottom-color: #19b5e9ff;

        }
    </style>
</body>
</html>
