<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Bootstrap template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<!-- Corps du Site -->
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
      <a class="navbar-brand" href="#">Logo</a>
      
      <!-- Links -->
      <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
      </li>

    </nav>



    <div class="container">
      <div class="jumbotron">
        <h2>Moi aussi !</h2> 
        <p>Trouver la personne qui vous convient le mieux !</p> 
        

        <!--Debut de la partie inscription-->
        <!-- Partie inscription accueil 1 -->
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
                <label for="sexe">Je suis </label>
                <select class="form-control" id="sexe">
                  <option>Un Homme </option>
                  <option>Une Femme</option>

                </select> 
            </div>
          </div>

          <div class="offset-md-1 col-md-3">
            <div class="form-group">
                <label for="sexesearch">Je cherche </label>
                <select class="form-control" id="sexesearch">
                  <option>Un Homme </option>
                  <option>Une Femme</option>
                </select> 
            </div>
          </div>
        </div>

         <!-- Partie inscription accueil 2 -->
        
          <div class="form-group">
              <label for="age">Age:</label>
                <input type="number" class="form-control" id="age">
          </div>
        
        <button type="submit" class="btn btn-primary btn-md">Etape Suivante</button>


      </div>
    </div>


    <div class="container">

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>