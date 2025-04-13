<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de moi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .about-section {
            padding: 60px 0;
        }
        .about-section img {
            width: 100%;
            max-width: 300px;
            min-height: 380px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .about-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .skills {
            margin-top: 30px;
        }
        .skill-item {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 15px;
            margin: 5px;
            display: inline-block;
            font-size: 1rem;
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
                    <li class="nav-item"><a class="nav-link active" href="about.php">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-4 text-center">
                    <img src="./images/jonathan2.jpg" alt="Profile Image">
                </div>
                <!-- Text Section -->
                <div class="col-md-8">
                    <h1>Bonjour, je suis [Votre Nom]</h1>
                    <p class="mt-3">
                        Je suis un développeur passionné avec une expertise dans la création de solutions web modernes et efficaces. 
                        Avec quelques années d'expérience, j'ai travaillé sur divers projets allant de sites web simples à des applications complexes.
                        Mon objectif est de fournir des solutions qui répondent aux besoins des clients tout en respectant les meilleures pratiques de l'industrie.
                    </p>
                    <!-- Skills Section -->
                    <div class="skills">
                        <h3>Mes compétences :</h3>
                        <div class="mt-2">
                            <span class="skill-item">HTML</span>
                            <span class="skill-item">CSS</span>
                            <span class="skill-item">JavaScript</span>
                            <span class="skill-item">PHP</span>
                            <span class="skill-item">MySQL</span>
                            <span class="skill-item">Bootstrap</span>
                            <span class="skill-item">Git</span>
                            <!-- <span class="skill-item">Laravel</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container mt-5">
            <p>&copy; 2025 Mon Portfolio. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>