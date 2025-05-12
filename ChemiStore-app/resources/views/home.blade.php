<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChemiStore</title>
    <style>
        body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f3f4f6;
    color: #111;
}

header {
    background-color: #111827;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 32px;
}

main {
    padding: 30px;
    max-width: 1200px;
    margin: auto;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s ease-in-out;
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
    color: #1f2937;
}

.card-content p {
    font-size: 16px;
    color: #4b5563;
}

.card-content .price {
    font-weight: bold;
    color: #111827;
    margin-top: 10px;
}

footer {
    background-color: #111827;
    color: #fff;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}
    </style>
</head>
<body>
<header>
        <h1>ChemiStore</h1>
        <p>Tu tienda online de camisas de fútbol originales</p>
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
    </main>

    <footer>
        <p>&copy; 2025 ChemiStore. Todos los derechos reservados.</p>
    </footer>
</body>
</html>