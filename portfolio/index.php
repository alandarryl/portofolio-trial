


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for additional styling */
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f8f9fa;
        }
        .hero img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #ffc107;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Mon Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h1>Bienvenue sur mon site web</h1>
                    <p class="mt-3">Ceci est un exemple de page d'accueil.</p>
                    <div class="mt-4 d-flex justify-content-center justify-content-md-start">
                        <a href="about.php" class="btn btn-primary me-2">À propos de moi</a>
                        <a href="contact.php" class="btn btn-outline-dark ">Contactez-moi</a>
                    </div>
                    <div class="mt-4 d-flex justify-content-center justify-content-md-start">
                        <a href="#" class="btn btn-primary me-4">linkind</a>
                        <a href="#" class="btn btn-outline-dark me-4 ">github</a>
                        <a href="#" class="btn btn-outline-dark ">facebook</a>
                    </div>
                </div>
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <img src="./images/jonathan1.jpg" alt="Profile Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Mon Site Web. Tous droits réservés.</p>
            <p><a href="privacy.php">Politique de confidentialité</a> | <a href="terms.php">Conditions d'utilisation</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>