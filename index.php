<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>LOCALHOST</title>
</head>

<body>

    <nav class="header navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">LOCALHOST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#Travail">Travail</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#Jeu">Jeu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#Discord">Discord</a>
                </li>
            </ul>
            <span class="navbar-text">
                WORKSPACE BY LUNI
            </span>
        </div>
    </nav>

    <!-- Back to top button -->
    <a id="button"></a>

    <div class="parallax-element" data-parallax="scroll" data-image-src="http://127.0.0.1/localhost/img/google.png" alt=""
        id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h1><img src="http://127.0.0.1/localhost/img/google-logo.png" width="200px;" alt=""></h1>

                <form action="https://www.google.com/search" method="GET">
                    <input class="searchbar" type="text" name="q"
                        placeholder="Effectuez une recherche sur Google ou saisissez une URL">
                    <input type="submit" value="Google Search" class="btn btn-primary">
                </form>

                <h2 class="card-title h2 my-4 py-2">
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <a class="btn btn-light peach-gradient" href="https://mail.google.com/mail/u/0/#inbox">
                        Gmail</a>
                    <a class="btn btn-light peach-gradient" href="https://www.google.com/intl/fr-CA/docs/about/">
                        Google Documents</a>
                    <a class="btn btn-light peach-gradient" href="https://www.youtube.com/">
                        Youtube</a>
                    <a class="btn btn-light peach-gradient"
                        href="https://myaccount.google.com/?gclid=Cj0KCQjwt5zsBRD8ARIsAJfI4Bh0XYCse6rxVwDhjhdtNQrZgM02ElBKFZo1UQN0PQ-Ht7wFjQ_X4TEaAiHjEALw_wcB">
                        Gestion compte google</a>
                    <a class="btn btn-light peach-gradient" href="https://remotedesktop.google.com/access/">
                        Serveur</a>
                    <a class="btn btn-light peach-gradient" href="https://calendar.google.com/calendar/r?pli=1">
                        Calendrier</a>
                    <a class="btn btn-light peach-gradient" href="https://drive.google.com/drive/u/0/my-drive">
                        Drive</a>
            </div>
        </div>
    </div>

    <div class="parallax-element" id="Travail" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/code-oppa.png" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <!-- <h1><img src="http://127.0.0.1/localhost/img/devcord.png" width="200px;" alt=""></h1> -->
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace de travail local !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <a class="btn btn-light peach-gradient" href="http://127.0.0.1/">
                        Aller au localhost</a>
                    <a class="btn btn-light peach-gradient" href="https://127.0.0.1/phpmyadmin/">
                        Aller a phpmyadmin</a>
                    <a class="btn btn-light peach-gradient" href="https://github.com/Linkels">
                        Github</a>
            </div>
        </div>
    </div>

    <div class="parallax-element" id="Jeu" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/battlenet.png" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Espace de jeu
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <a class="btn btn-light peach-gradient" href="https://fr.wowhead.com/">
                        Wowhead</a>
                    <a class="btn btn-light peach-gradient" href="https://fr.classic.wowhead.com/">
                        Wowhead classic</a>
                    <a class="btn btn-light peach-gradient" href="https://account.blizzard.com/">
                        Gestion compte Blizzard</a>
                    <a class="btn btn-light peach-gradient"
                        href="https://worldofwarcraft.com/fr-fr/character/eu/hyjal/saradrin">
                        Armerie wow</a>
            </div>
        </div>
    </div>

    <div class="parallax-element" id="Discord" data-parallax="scroll"
        data-image-src="https://assets.blacknutlemag.com/edito/discord-c-est-quoi/discord-c-est-quoi-hero-169_md.jpg"
        alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <!-- <h1><img src="http://127.0.0.1/localhost/img/devcord.png" width="200px;" alt=""></h1> -->
                <h2 class="card-title h2 my-4 py-2">Espace Discord
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <a class="btn btn-light peach-gradient" href="https://discordapp.com/channels/@me">
                        Discord</a>
                    <a class="btn btn-light peach-gradient" href="https://discordbots.org/me">
                        Discord bot list</a>
                    <a class="btn btn-light peach-gradient" href="https://disboard.org/fr/dashboard/servers">
                        Disboard</a>
                    <a class="btn btn-light peach-gradient" href="#">
                        Devcord</a>
            </div>
        </div>
    </div>

    <!-- LE JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="./script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- FIN DU JS -->

</body>

</html>