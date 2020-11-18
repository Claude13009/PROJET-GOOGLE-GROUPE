<!DOCTYPE html>
<html>
    <head>  
        <!-- Balise pour définir le codade des caractères spéciaux -->
        <meta charset="utf-8" />
        <!-- Balise de lien pour le fichier CSS -->
        <link rel="stylesheet" type="text/css" href="css/google.css">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <!-- Titre de la page pour l'onglet de navigation -->
        <title>Google.co</title>
    </head>

    <body>
    <div id="main_wrap">

    <!-- Header-->
    <?php include("header.php"); ?>

    <div id="banniere_accueil">
        <h1>Google vous accompagne dans la transition écologique</h1>
    </div>

    <div id="wrap_accueil">
        < class="categorie_accueil">
            <img src="img/google_analytics_small.png" alt="Google Analytics" />
            <div class="onglets_accueil">
                <strong>Référencement</strong><br/><br/>
                <p>Conscients de l'urgence climatique et désireux d'oeuvrer pour l'avenir, nous entamons une transition majeure des critères de référencement pour intégrer la nécessité d'une eco-conception web généralisée.</p> <br/>
                <a href="referencement.php">En savoir plus sur le Référencement</a>
            </div>
        </div>

        <div class="categorie_accueil">
            <div class="onglets_accueil">
                <strong>Eco-conception web</strong><br/><br/>
                <p>Qu'est ce que l'éco-conception web ? Quelles sont les bonnes pratiques, simples à mettre en place, à retenir pour rendre votre site Internet moins gourmand en ressources énergétiques ? On vous guide pas à pas dans les différentes étapes pour développer un site éco-responsable.</p> <br/>
                <a href="eco_conception.php">En savoir plus sur l'éco-conception web</a>
            </div>
            <img src="img/google_eco_conception.jpg" alt="Eco-conception web" />
        </div>

        <div class="categorie_accueil">
            <img src="img/google_outils.jpg" alt="Outils Google" />
            <div class="onglets_accueil">
                <strong>Outils</strong><br/><br/>
                <p>Nous pensons que la mise à disposition d'outils pour aider les jeunes développeurs est un jalon essentiel pour la transition vers une éco-conception aboutie.</p> <br/>
                <a href="outils.php">Accéder aux Outils</a>
            </div>
        </div>

        <div class="categorie_accueil">
            <div class="onglets_accueil">
                <strong>Contact</strong><br/><br/>
                <p>Vous voulez nous faire parvenir vos commentaires, suggestions ou tout simplement un retour sur votre expérience d'utilisateur ? N'hésitez pas à nous contacter.</p> <br/>
                <a href="contact.php">Ouvrir le Formulaire de Contact</a>
            </div>
            <img src="img/google_contact.jpg" alt="Formulaire de contact" />
        </div>

        <div class="categorie_accueil">
            <img src="img/google_consommateurs.jpg" alt="Outils Infos Consommateurs" />
            <div class="onglets_accueil">
                <strong>Infos consommateurs</strong><br/><br/>
                <p>Chez Google, nous croyons que l'information doit être librement accessible. Retrouvez ici toutes les informations relatives à la bonne compréhension de nos services, en passant par l'utilisation de nos algorithmes jusqu'à la gestion des avis clients.</p> <br/>
                <a href="info_consommateurs.php">Lire les Infos consommateurs</a>
            </div>
        </div>

        <div id="categorie_accueil_confidentialite">
            <div class="onglets_accueil">
                <strong>Confidentialité</strong><br/><br/>
                <p>Lorsque vous utilisez nos services, vous nous faites confiance pour le traitement de vos informations. Nous savons qu'il s'agit d'une lourde responsabilité, c'est pourquoi nous nous efforçons de les protéger, tout en vous permettant d'en garder le contrôle.</p> <br/>
                <a href="confidentialite.php">Accéder aux paramètres de confidentialité</a>
            </div>
            <img src="img/google_confidentialite.jpg" alt="Formulaire de contact" />
        </div>


    </div>

    <!-- Footer -->    
    <?php include("footer.php"); ?>
       
    </div> 
    <scrip src=" https://unpkg.com/scrollreveal "></scrip></scrip>
    <scrip src = "ACCEUIL.js"></scrip>
    </body>

</html>