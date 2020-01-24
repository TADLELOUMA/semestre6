
<! DOCTYPE html>
<html>
    <head>
        <title>StopGaspillage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="../MVC1/assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </head>
    <body>
        <!-- barre de navigation-->
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">Stop Gaspi</label>
                    <ul>
                        <li><a class=""href="#">Acceuil </a> </li>
                        <li><a href="../MVC1/views/donner_view.php">Donnateur</a></li>
                        <li><a href="../MVC1/views/recevoir_view.php">Particulier</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="../MVC1/views/connexion_view.php">Se connecter</a></li>
                    </ul>
            </nav>
        <section id="main-image">
            <div class="wrapper">
                <h2> connecter Vous <br>
                    pour voir les dons partagés !</h2>
                <a href="../MVC1/views/connexion_view.php" class="button-1">Se connecter</a>
            </div>
        </section>
        <section id="steps">
            <div class="wrapper">
                <ul>
                    <li id="step1">
                    <h4> Partager</h4>
                        <p>"La cuisine, c'est l'envers du deco. Là où s'activent les hommes et les femmes pour le plaisir des autres"</p>
                    </li>
                    <li id="step2">
                    <h4> Sourire</h4>
                        <p> "Souriez, car vos dents ne sont pas seulement faites pour manger ou pour mordre"</p>
                    </li>
                    <li id="step3">
                    <h4> Bienveillance</h4>
                        <p> confiez nous vos reves confiez nous vos revesconfiez nous vos revesconfiez nous vos revesconfiez nous vos reves</p>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
        </section>
        <section id="possibilites">
            <div class="wrapper">
                <article style="background: url(../MVC1/assets/images/bouf.jpg) no-repeat">
                    <div class="overlay">
                        <h4> Reservez des dons</h4>
                        <p><small>Vous pouvez reservez de la nouriture offert par un donnateur</small></p>

                    <a href="#" class="button1">Plus d'infos</a>
                    </div>
                </article>

                <article style="background: url(../MVC1/assets/images/bouf.jpg) no-repeat">
                    <div class="overlay">
                        <h4> Reservez des dons</h4>
                        <p><small>Vous pouvez reservez de la nouriture offert par un donnateur</small></p>
                         <a href="#" class="button1">Plus d'infos</a>
                    </div>
                </article>
                <div class="clear"></div>
            </div>
        </section>
        <section id="contact">
            <div class="wrapper">
                <h3>Contacez nous</h3>
                <p></p>
                <form>
                    <label for="name" >Nom</label>
                    <input type="text" placeholder="votre nom" id="name">
                    <label for="email" >Email</label>
                    <input type="text" placeholder="votre email" id="email">
                    <input type="submit" value="Envoyer" class="button3">
                </form>
            </div>
        </section>

        <footer>
            <div class="wrapper">
                <h1>Stop Gaspillage</h1>
                <p>Made with<i class="fa fa-heart-o"></i> by Thierno Amadou </p>
            </div>
        </footer>
    </body>

</html>
