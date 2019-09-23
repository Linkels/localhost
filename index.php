<!DOCTYPE html>
<html lang="en">
<!-- 
LLLLLLLLLLL                                                 iiii  
L:::::::::L                                                i::::i 
L:::::::::L                                                 iiii  
LL:::::::LL                                                       
  L:::::L               uuuuuu    uuuuuunnnn  nnnnnnnn    iiiiiii 
  L:::::L               u::::u    u::::un:::nn::::::::nn  i:::::i 
  L:::::L               u::::u    u::::un::::::::::::::nn  i::::i 
  L:::::L               u::::u    u::::unn:::::::::::::::n i::::i 
  L:::::L               u::::u    u::::u  n:::::nnnn:::::n i::::i 
  L:::::L               u::::u    u::::u  n::::n    n::::n i::::i 
  L:::::L               u::::u    u::::u  n::::n    n::::n i::::i 
  L:::::L         LLLLLLu:::::uuuu:::::u  n::::n    n::::n i::::i 
LL:::::::LLLLLLLLL:::::Lu:::::::::::::::uun::::n    n::::ni::::::i
L::::::::::::::::::::::L u:::::::::::::::un::::n    n::::ni::::::i
L::::::::::::::::::::::L  uu::::::::uu:::un::::n    n::::ni::::::i
LLLLLLLLLLLLLLLLLLLLLLLL    uuuuuuuu  uuuunnnnnn    nnnnnniiiiiiii 
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <li class="nav-item active">
                    <a class="nav-link" href="#Outil">Outil</a>
                </li>
            </ul>
            <span class="navbar-text">
                WORKSPACE BY LUNI
            </span>
        </div>
    </nav>

    <!-- Back to top button -->
    <a id="button"></a>

    <div class="parallax-element" data-parallax="scroll" data-image-src="http://127.0.0.1/localhost/img/google.png"
        alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h1><img src="http://127.0.0.1/localhost/img/google-logo.png" width="200px;" alt=""></h1>

                <form action="https://www.google.com/search" method="GET">
                    <input class="searchbar" type="text" name="q"
                        placeholder="Effectuez une recherche sur Google ou saisissez une URL">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-1x fa-search"></i></button>
                </form>

                <h2 class="card-title h2 my-4 py-2">

                    <a class="weatherwidget-io" href="https://forecast7.com/fr/49d764d73/charleville-mezieres/"
                        data-label_1="CHARLEVILLE-MÉZIÈRES" data-theme="original">CHARLEVILLE-MÉZIÈRES</a>
                    <script>
                        ! function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://weatherwidget.io/js/widget.min.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'weatherwidget-io-js');
                    </script>

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
                    <a class="btn btn-light peach-gradient" href="https://play.google.com/music/listen?hl=fr&u=0#/home">
                        Google Musique</a>
                    <a class="btn btn-light peach-gradient"
                        href="https://play.google.com/books?utm_source=emea_Med&utm_medium=hasem&utm_content=May2715&utm_campaign=Evergreen&pcampaignid=MKT-EG-emea-fr-all-Med-hasem-bk-Evergreen-May2715-1%7CONSEM_kwid_43700007275018831&gclid=CjwKCAjw2qHsBRAGEiwAMbPoDBC4a5JrmnpktmT-ehtmZDNRD1E3DoQPgbhGSUM2KNT7kazzYbyP6BoC0uAQAvD_BwE&gclsrc=aw.ds">
                        Google Livre</a>
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
        data-image-src="http://127.0.0.1/localhost/img/discord.png"
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
                        Devcord</a> <br><br>

                    <article>
                        <h1>
                              <img src="https://twemoji.maxcdn.com/2/72x72/1f1ea.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/24c2.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/2b55.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/1f1ef.png"class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/2139.png" class="picto">&nbsp;&nbsp;&nbsp;
                                    <img src="https://twemoji.maxcdn.com/2/72x72/1f1f9.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/1f1ea.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/1f1fd.png" class="picto">
                                    <img src="https://twemoji.maxcdn.com/2/72x72/1f1f9.png" class="picto">
                                    <span></h1>
                        <p>
                            <label>Ton texte :</label> <input classe="input_discord" type="text" id="input">
                        </p>
                        <p><label>A mettre dans Discord :</label></p>
                        <textarea classe="input_discord" id="output" readonly></textarea>
                        <p>
                            <label>Visuelle :</label> <span id="preview"></span>
                        </p>
                    </article>
                    <!-- partial -->
                    <script src="./script.js"></script>

            </div>
        </div>
    </div>

    <div class="parallax-element" id="Outil" id="Discord" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/outil.png" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <!-- <h1><img src="http://127.0.0.1/localhost/img/devcord.png" width="200px;" alt=""></h1> -->
                <h2 class="card-title h2 my-4 py-2">Espace Outil
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <a class="btn btn-light peach-gradient" href="https://pixabay.com/fr/">
                        pixabay</a>
                    <a class="btn btn-light peach-gradient" href="https://fontawesome.com/">
                        fontawesome</a>
                    <a class="btn btn-light peach-gradient" href="https://getbootstrap.com/">
                        Bootstrap</a>
                    <a class="btn btn-light peach-gradient" href="https://codepen.io/">
                        Code pen</a>
                    <a class="btn btn-light peach-gradient"
                        href="https://www.onlinevideoconverter.com/fr/youtube-converter">
                        Youtube MP3-4</a>
                    <a class="btn btn-light peach-gradient" href="https://www.draw.io/">
                        Draw.io</a>
                    <a class="btn btn-light peach-gradient" href="https://www.chartjs.org/">
                        chartjs</a>

                    <br><br>

                    <script src="jscolor.js"></script>

                    Color: <input id="to-copy" class="jscolor" value="0ff">


                    <button id="copy" type="button">Copier la couleur</button>

                    <script>
                        var toCopy = document.getElementById('to-copy'),
                            btnCopy = document.getElementById('copy');

                        btnCopy.addEventListener('click', function () {
                            toCopy.select();
                            document.execCommand('copy');
                            return false;
                        });
                    </script>

            </div>
        </div>
    </div>

    <!-- LE JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="./btt.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- FIN DU JS -->

</body>

</html>