<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Projet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .project-detail {
            padding: 60px 0;
        }
        .carousel img {
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .project-description h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .project-description p {
            font-size: 1.1rem;
            color: #6c757d;
        }
        .tech-list {
            margin-top: 30px;
        }
        .tech-list h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .tech-list ul {
            list-style-type: none;
            padding: 0;
        }
        .tech-list li {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 15px;
            margin: 5px 0;
            display: inline-block;
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
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu de la page -->
    <div class="container project-detail">
        <div class="row align-items-center">
            <!-- Carrousel d'images -->
            <div class="col-md-6">
                <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/project1-1.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/project1-2.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/project1-3.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </div>
            <!-- Description du projet -->
            <div class="col-md-6 project-description">
                <h1>Nom du Projet</h1>
                <p>
                    Ce projet est une solution innovante qui met en avant mes compétences en développement web. 
                    Il a été conçu pour répondre aux besoins spécifiques des utilisateurs tout en respectant les meilleures pratiques de l'industrie.
                </p>
            </div>
        </div>

        <!-- Technologies utilisées -->
        <div class="tech-list mt-5">
            <h2>Technologies utilisées</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Bootstrap</li>
            </ul>
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