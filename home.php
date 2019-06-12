<?php include('vues/layouts/header.php'); ?>
  <body>
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Maison des Ligues</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adherents</a>
      <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Clubs</a>
		  <a class="dropdown-item" href="#">Liste des adherents</a>
	  </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bordereaux de note de frais</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Frais de deplacement</a>
	  </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activites sportives</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">Football</a>
          <a class="dropdown-item" href="#">Tennis</a>
          <a class="dropdown-item" href="#">Natation</a>
		  <a class="dropdown-item" href="#">Autres sports</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="config/deconnexion.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Deconnexion</button>
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Accueil </h1>
      <p>Bienvenue sur le site web de la Maison des Ligues</p>
     </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Bordereaux</h2>
        <p>Bordereau de note de frais comprenant les frais de deplacement composes de la date, du motif, du trajet, les kilometres parcourus, le cout du trajet, les peages, le repas, l'hebergement et le total</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ouvrir &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Adherents</h2>
        <p>Liste des adherents comprenant le numero de licence, le sexe, le nom, le prenom, la date de naissance, l'adresse, le code postal et la ville</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ouvrir &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Activites sportives</h2>
        <p>Ensemble des activites sportives</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ouvrir &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>
<?php include('vues/layouts/footer.php'); ?>
