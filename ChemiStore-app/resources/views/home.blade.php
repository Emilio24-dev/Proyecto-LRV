<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ChemiStore - Camisas</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
        }
        header, footer {
            background-color: #111827;
            color: white;
            text-align: center;
            padding: 20px;
        }
        main {
            max-width: 1200px;
            margin: auto;
            padding: 30px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card-content h3 {
            margin: 0;
            font-size: 20px;
        }
        .price {
            color: #111827;
            font-weight: bold;
            margin-top: 10px;
        }
        .link-button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #111827;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <h1>ChemiStore</h1>
    <p>Tu tienda de camisas de fútbol originales</p>
</header>

<main>
    <div class="grid">
        <div class="card">
            <img src="https://barraaltafutbol.com/wp-content/uploads/2024/07/RealMadridLocal2425Stadium.4.jpg" alt="Camisa Real Madrid">
            <div class="card-content">
                <h3>Real Madrid</h3>
                <p>Camiseta local 24/25</p>
                <p class="price">$34.99</p>
            </div>
        </div>
        <div class="card">
            <img src="https://soccerzoneusa.com/cdn/shop/files/aufront_1200x1200.webp?v=1722434654" alt="Camisa Barcelona">
            <div class="card-content">
                <h3>Barcelona</h3>
                <p>Camiseta local 24/25</p>
                <p class="price">$34.99</p>
            </div>
        </div>
    </div>

    <div style="text-align: center;">
        <a class="link-button" href="/balones">Ver Balones de Fútbol</a>
    </div>
</main>

<footer>
    <p>&copy; 2025 ChemiStore. Todos los derechos reservados.</p>
</footer>

</body>
</html>
