<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    body {
        background-image: url('{{ asset('imgen/8224351639_369be6a87d_o - copia.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de viajes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .tour-card {
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .tour-card h2 {
            margin-top: 0;
        }

        .tour-card p {
            margin-bottom: 10px;
        }

        .tour-card .btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</header>
<body>

    
    <div class="header">
    
    <h1 class="text-center fw-bold text-danger">tourist world</h1>
    
    <input type="TEXT"name="BUSCAR" placeholder="BUSCAR"/> 
    <input type="TEXT"name="DESTINO" placeholder="DESTINO"/> 
    <input type="TEXT"name="RESEÑA" placeholder="RESEÑA "/>  
    <input type="TEXT"name="GASTRONOMIA" placeholder="GASTRONOMIA "/>    
</body>
</html>