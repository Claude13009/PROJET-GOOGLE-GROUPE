<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Google-Eco - Un Google plus respectueux de l'environnement</title>
        
        <meta charset="utf-8">
        <meta name="description" content="Google-Eco - Google évolue vers un service plus eco-responsable">
        <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.1, viewport-fit=cover">
        <meta name="color-scheme" content="dark light">

        <link rel="stylesheet"  href="css/outils.css">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <script src="https://kit.fontawesome.com/6c17918ad5.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


        <script type="text/javascript" src="scrol-menu-eco.min.js"></script>
   
        
        
    </head>


    <body>
     <main class="page">

        <!-- Header-->
        <?php include("header.php"); ?>


       <div id="container">

        <section class="left-side">
        <div class="bloc-1">
         <h2>Les outils pour une eco-conception réussie</h2>
         <p class="paragraphe">
          Les bonnes habitudes de développement se déclinent sur plusieurs axes : la conception fonctionnelle, graphique et technique, le contenu, le développement, l’ergonomie et l’hébergement du site Web.<br>

          Par exemple, au niveau de la conception, il est essentiel d’éliminer les fonctions superflues. <br>
          Plusieurs études démontrent que 70% des fonctionnalités demandées par les utilisateurs ne sont pas essentielles et que 45% ne sont jamais utilisées.
         </p>
         
         <ul class="navigation">
          
         
          <li class="toggleSubMenu" ><span id="performance"> Performance web   ▼   </span>
        
            <ul class="subMenu">
              <li class="test2">
          Pour vous aider à mettre en place ces actions
          correctives et ainsi développer votre site web de façon 
          eco-reponsable, Google met à votre disposition 
          un        <a href="https://developers.google.com/speed/pagespeed/insights/?hl=fr-FR" id="insi" target="blank">
            outil de performance</a> qui éprouve la vitesse de chargement de vos pages web et vous propose des solutions pour en alléger le contenu et limiter leur pollution numérique.         </li>
        </ul></li></ul>
      </div>




     <div class="bloc-2">
       <h2>Le dark mode, une économie d'énergie considérable</h2>
       <p class="paragraphe">
       Le dark mode est l’alternative qui permet de basculer vos couleurs vers un thème sombre qui offre plusieurs avantages.<br>

       En plus de réduire la fatigue oculaire de vos utilisateurs, c’est une source d’économie d’énergie qui peut sembler dérisoire à petite échelle mais représente un volume important sur l’amplitude mondiale. <br>

              En effet, un pixel noir consomme beaucoup moins d’énergie qu’un pixel blanc et l’utilisation de thèmes sombres <br>
              sur votre site ou de manière plus générale dans l’utilisation de vos applications aux quotidien engendre un impact significatif sur la réduction de leur empreinte carbone.</p>

              <button onclick="myFunction()">Dark mode</button>

              <script>
              function myFunction() {
                 var element = document.body;
                 element.classList.toggle("dark-mode");
              }</script>


        </li> </ul></li></ul>


      </div>
 



        </section>

        <section class="aside">
        <img src="img/performance.png" id="image_performance" alt="illustration d'un test de performance sur speed-insight-google" /> 
        <img src="img/graphique.png"  id="image_graphique" alt="illustration d'un test de performance sur speed-insight-google" /> 

        </section>
        <span class="lien-insight"><a href="https://developers.google.com/speed/pagespeed/insights/?hl=fr-FR" target="blank">
   
        
       </div>

      <!-- Footer -->    
      <?php include("footer.php"); ?>

       
     </main>
    </body> 

    </html>
