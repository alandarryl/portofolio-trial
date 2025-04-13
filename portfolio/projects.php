<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .project-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .project-card:hover {
            transform: scale(1.05);
        }
        .project-card h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .project-card p {
            color: #6c757d;
        }
        .project-card a {
            text-decoration: none;
            color: #007bff;
        }
        .project-card a:hover {
            text-decoration: underline;
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
                    <li class="nav-item"><a class="nav-link active" href="projects.php">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu de la page -->
    <div class="container my-5">
        <h1 class="text-center mb-5">Mes Projets</h1>
        <div class="row g-4">
            <!-- Projet 1 -->
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="./images/project1.jpg" alt="Project 1">
                    <div class="card-body">
                        <h2>Nom du Projet 1</h2>
                        <p>Une brève description du projet 1. Ce projet met en avant mes compétences en développement web.</p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <!-- Projet 2 -->
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="./images/project2.jpg" alt="Project 2">
                    <div class="card-body">
                        <h2>Nom du Projet 2</h2>
                        <p>Une brève description du projet 2. Ce projet met en avant mes compétences en design UI/UX.</p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="./images/project3.jpg" alt="Project 3">
                    <div class="card-body">
                        <h2>Nom du Projet 3</h2>
                        <p>Une brève description du projet 3. Ce projet met en avant mes compétences en gestion de bases de données.</p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres projets ici -->
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