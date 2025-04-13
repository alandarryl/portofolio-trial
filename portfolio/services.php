<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .service-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card i {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 15px;
        }
        .service-card h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .service-card p {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
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
                    <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu de la page -->
    <div class="container my-5">
        <h1 class="text-center mb-5">Mes Services</h1>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="bi bi-code-slash"></i>
                    <h2>Développement Web</h2>
                    <p>Création de sites web modernes et responsives adaptés à vos besoins.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="bi bi-palette"></i>
                    <h2>Design UI/UX</h2>
                    <p>Conception d'interfaces utilisateur intuitives et esthétiques.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-card">
                    <i class="bi bi-server"></i>
                    <h2>Gestion de Bases de Données</h2>
                    <p>Configuration et gestion efficace de vos bases de données.</p>
                </div>
            </div>
            <!-- Ajoutez d'autres services ici -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-5 mt-5">
        <div class="container mt-5 py-3">
            <p>&copy; 2025 Mon Portfolio. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>