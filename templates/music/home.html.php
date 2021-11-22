<main>
    <section id="home">
        <div class="container">
            <article>
                <h2 class="title">Sélémusium</h2>
                <br>
                <h5>Projet musical de l'entreprise Tyrolium,<br> qui réalise tout son branding musicial<br>
                mais qui aussi réalise des remix et musique original <br> qui les passionne et nous les mettons en avant ici</h5>
            </article>
        </div>
    </section>
    <section id="title">
        <div class="container">
            <h2 class="title">Nos Musiques</h2>
        </div>
    </section>
    <section id="music" class="container">


        <?php
        $temp = 0;
        $nbMusic = ($nbBtn+1) *5;

        if ($nbMusic >= $total){ ?>
            <p id="conteur"> <?php echo $total . " / ".  $total . "<br>"; ?></p>
        <?php } else{ ?>
            <p id="conteur"> <?php echo $nbMusic . " / ".  $total . "<br>"; ?></p>
        <?php }

        foreach($musics as $music){

            $temp = $temp + 1;

            if($temp <= $nbMusic){
                ?>
                <div class="card music">
                    <div class="">
                        <div class="iframe">
                            <iframe class="a<?php echo $music->host; ?>" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $music->iframe; ?>"></iframe>
                        </div>
                        <div class="card-body row">
                            <div style="width: 100%;">
                            <h4><?php echo $title = strtoupper($music->title); ?></h4>

                            <p class="card-text container" style="margin-top: 15px"><?php echo $music->description; ?></p>
                            </div>
                            <div class=" col-9">

                                <p class="card-text" style="margin-top: 15px">Auteur : <?php echo $music->credit; ?></p>

                                <p class="card-text">Version : <?php echo $music->version; ?></p>
                                <a id="btnDesk" href="<?php echo $music->url; ?>" class="btn btn-primary">Lien vers la music</a>
                            </div>
                            <div class="col-3">
                                <p><u>Date du projet</u></p>
                                <p class="card-text">Début : <?php echo $music->start_project; ?></p>
                                <?php if(!empty($music->end_project)) { ?>
                                <p class="card-text">Fin : <?php echo $music->end_project; ?></p>
                                <?php } ?>
                                <a id="btnMobil" href="<?php echo $music->url; ?>" class="btn btn-primary">Lien vers la music</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } }

        if ($nbMusic < $total){
            var_dump($nbMusic, $total);
            ?>

            <a id="musicAffiche" href="index.php" class="btn btn-primary">retours</a>

            <?php

        } else if ($nbMusic >= $total ){ ?>



        <?php } else { ?>

            <a id="musicAffiche" href="index.php?controller=music&task=index&nb=<?php echo $nbBtn+1 ?>" class="btn btn-primary">Plus</a>

        <?php }

        ?>

    </section>
    <hr class="" style="background-color: #808080">
    <section id="nosreseau" class="container">
        <h2 class="title">Nos Réseaux sociaux</h2>
        <ul>
            <li class="col align-self-center">
                <img class="imgRe" src="https://tyrolium.fr/Contenu/Image/icone/instagramWhite.png" alt="instagram">
                <h3 class="title">Instagram</h3>
                <p>Sur ce réseau social je poste mes avancées de productions musicales, vous pouvez donc suivre avec moi les étapes de mes créations.</p>
                <a target="_blank" href="https://www.instagram.com/selemusium/">Nous Follow</a>
            </li>
            <li id="discord" class="col align-self-center">
                <img class="imgRe" src="https://tyrolium.fr/Contenu/Image/icone/soundcloudWhite.png" alt="soundcloud">
                <h3 class="title">SoundCloud</h3>
                <p>Ici je poste mes productions musicales "work in progress" et mes prods finies que vous pouvez écouter gratuitement bien évidemment.</p>
                <a target="_blank" href="https://soundcloud.com/selemusium">Nous Follow</a>
            </li>
            <li class="col align-self-center">
                <img class="imgRe" src="https://tyrolium.fr/Contenu/Image/icone/discordWhite.png" alt="discord">
                <h3 class="title">Discord</h3>
                <p>Sur ce réseau social, sur le serveur de l'entreprise Tyrolium, je peux vous parler et répondre à d'éventuelles questions ou discuter chill avec vous.</p>
                <a target="_blank" href="https://discord.gg/km8h5jHezt">Rejoindre</a>
            </li>
        </ul>
    </section>
</main>

<section id="footer">
    <footer>
        <div class="container text-white d-flex align-items-center justify-content-between">
            <a id="logo1" href="#"><img src="https://tyrolium.fr/Contenu/Image/Selemusium%20Site.png" alt="logo-selenium"></a>
            <span>2021-2022 © SÉLÉMUSIUM<br>All Right Reserved © <a href="http://tyrolium.fr/"> TYROLIUM</a><br>Create by Maxime Tournier</span>
            <?php if(!$_SESSION){?>
                <button onclick="window.location.href = 'index.php?controller=user&task=login';" type="button" class="btn btn-primary">Panel</button>
            <?php } else { ?>
                <button onclick="window.location.href = 'index.php?controller=user&task=loggout';" type="button" class="btn btn-danger"><?php $tabUser = $_SESSION['user'];
                    echo "Deconnecter de ".$tabUser['name']; ?></button>
            <?php } ?>
        </div>
    </footer>
</section>