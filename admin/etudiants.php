<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <title>etudiants </title>
</head>
<body>
    <!-- Content Start -->
    <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Rechercher">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Lauraine Kiro</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon Profil</a>
                            <a href="#" class="dropdown-item">Paramètres</a>
                            <a href="#" class="dropdown-item">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


         

            <!-- Recent Sales Start -->
             <form action="" method="$_POST">
                         <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nometudiant"
                                    placeholder="nom de l'étudiant">
                                <label for="nom">Nom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="postnometudiant"
                                    placeholder="Post nom de l'étudant">
                                <label for="postnom">Post nom</label>
                            </div>
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="prenometudiant"
                                    placeholder="Prenom de l'étudant">
                                <label for="Prenom">Prenom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="genre"
                                    aria-label="Floating label select example">
                                    <option value="1">Masculin</option>
                                    <option value="2">Féminin</option>
                                </select>
                            </div>
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="telephone"
                                    placeholder="Téléhone">
                                <label for="text">Téléphone</label>
                            </div>
                             <div class="form-floating mb-3">
                                <select class="form-select" id="genre"
                                    aria-label="Floating label select example">
                                    <option value="1">Célibataire</option>
                                    <option value="2">Marié</option>
                                    <option value="3">Divorcé</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lieunaissance"
                                    placeholder="Lieu de naissance">
                                <label for="lieu naissance">Lieu de naissance</label>
                            </div>
                             <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="datenaissance"
                                    placeholder="Date de naissance">
                                <label for="datenaissance">Date de naissance</label>
                            </div>      
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nationalite"
                                    placeholder="Nationalité">
                                <label for="nationalite">Nationalité</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="province"
                                    placeholder="Province d'origine">
                                <label for="province">Province d'origine</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="villedorigine"
                                    placeholder="Ville d'origine">
                                <label for="villedorigine">Ville d'origine</label>
                            </div> 
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="territoirecommune"
                                    placeholder="Territoire/Commune">
                                <label for="territoirecommune">Territoire/Commune</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ecoleorigine"
                                    placeholder="Ecole d'origine">
                                <label for="ecoleorigine">Ecole d'origine</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pourcentages"
                                    placeholder="Pourcentages">
                                <label for="pourcentages">Pourcentages</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="anneediplome"
                                    placeholder="Année d'obtention du diplôme">
                                <label for="anneediplome">Année d'obtention du diplôme</label>
                            </div>
                             <button type="submit" class="btn btn-primary m-2">Enregistrer</button>
                        </div>
                    </div>
                    </form>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Numero</th>
                                    <th scope="col">Date d'inscription</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Post nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">genre</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Etat civil</th>
                                    <th scope="col">Lieu de naissance</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Modifier</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->
    <?php
    include_once('../Views/menu.php');
    ?>
</body>
<footer>
<?php
    include_once('../Views/footer.php');
    ?>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</html>