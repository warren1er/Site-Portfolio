<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8" content="text/html" http-equiv="content-type">
    <meta name="description" content="Site du développeur Web Kévin BOUSARDO présentation de mes réalisations">
    <title>Web Morningstar Agency</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- css de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>
    <section class="container">
      <div id="wrapper">
        <header><!-- en tête du site -->
          <?php include("php/menu.php"); ?>
        </header>

        <section class="content"><!-- contenu du site -->
          <div class="well row container">
            <article>
              <h1 id="Accueil" class="text-center">Bienvenue</h1>
              <p class="intro">Sur ce site vous trouvez quelques-unes de mes réalisations ainsi que des liens vers celles-ci.
                Je suis un Développeur Web Junior, je créer des sites web en utilisant des langages comme le <strong>Html5/CSS3</strong>, le <strong>JavaScript</strong>, pour ce qui est de partie que l'on nomme front,
                j'utilise aussi des frameworks comme <strong>Bootstrap</strong>, <strong>Angular</strong>, <strong>ReactJs</strong> sur lesquels je cherche toujours à me perfectionner.
                Je maîtrise aussi un langage dit "back" commme <strong>PHP/SQL</strong>  et suis en train d'apprepndre le <strong>Symphony</strong> afin d'atteindre mon objectif qui est de devenir <strong>Développeur Web Full-stack</strong>.
              </p>
            </article>
            <article id="Portfolio">
              <h2 class="Port">Portfolio</h2>

              <!-- slider contenant mes réalisations  avec des liens vers le repo qui corresponds ainsi que vers le site si heberger -->
              <div class="diaporama">
                
              </div>
              <div class="bouton text-center">
                <button class="btn btn-primary">
                  <a href="formulaire.html" class="pris-cont">Prise de contact</a>
                </button>
              </div>
            </article>
          </div>
        </section>

        <footer><!-- pieds de page du site lien pour me contacter etc -->
          <?php include("php/footer.php"); ?>
        </footer>
      </div>
    </section>
    <!-- importation du js et jQuery de bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
