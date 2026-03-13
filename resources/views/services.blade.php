<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nos Services</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #FF2D20;
            margin-bottom: 40px;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #FF2D20;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .service:hover {
            transform: translateY(-5px);
        }

        .service h3 {
            margin-top: 0;
            color: #333;
        }

        .prix {
            color: #FF2D20;
            font-weight: bold;
            font-size: 18px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>Nos Services</h1>

    <div class="services">

        @foreach ($services as $service)

        <div class="service">
            <h3>{{ $service['nom'] }}</h3>
            <p class="prix">Prix : {{ $service['prix'] }}</p>
        </div>

        @endforeach

    </div>

</div>

</body>
</html>
