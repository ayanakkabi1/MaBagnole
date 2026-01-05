<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MaBagnole | Louez en toute liberté</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #1a2a6c; --accent: #fdbb2d; }
        .hero-search { background: var(--primary); padding: 40px 0; color: white; border-radius: 0 0 20px 20px; }
        .car-card { transition: transform 0.3s; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .car-card:hover { transform: translateY(-10px); }
        .btn-reserve { background-color: var(--accent); color: #000; font-weight: bold; }
        .filter-sidebar { background: #f8f9fa; padding: 20px; border-radius: 10px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">🚗 MaBagnole</a>
        <div class="ms-auto">
            <a href="connexion.php" class="btn btn-outline-light btn-sm">Connexion</a>
        </div>
    </div>
</nav>

<header class="hero-search text-center mb-5">
    <div class="container">
        <h1>Trouvez le véhicule idéal</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <form class="input-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Modèle, marque...">
                    <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <aside class="col-lg-3 mb-4">
            <div class="filter-sidebar">
                <h5>Catégories</h5>
                <div class="form-check">
                    <input class="form-check-input filter-check" type="checkbox" value="Citadine" id="cat1">
                    <label class="form-check-label" for="cat1">Citadine</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-check" type="checkbox" value="SUV" id="cat2">
                    <label class="form-check-label" for="cat2">SUV</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-check" type="checkbox" value="Luxe" id="cat3">
                    <label class="form-check-label" for="cat3">Luxe</label>
                </div>
            </div>
        </aside>

        <main class="col-lg-9">
            <div class="row" id="vehiculeContainer">
               
               
                
                
            </div>

            <nav class="mt-4">
                
            </nav>
        </main>
    </div>
</div>

<script>
document.querySelectorAll('.filter-check').forEach(check => {
    check.addEventListener('change', function() {
        
        console.log("Filtrage en cours pour : " + this.value);
    });
});
</script>

</body>
</html>