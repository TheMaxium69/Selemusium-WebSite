<main>
    <section id="home">
        <div class="container">
            <article>
                <h2 class="title">Sélémusium</h2>
                <br>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry<br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
                <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
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
                    <div class="row">
                        <div class="iframe">
                            <iframe class="a<?php echo $music->host; ?>" scrolling="no" frameborder="no" allow="autoplay" src="http://localhost/insta.html"></iframe>
                            <style>
                                div.Header{
                                    display: none;
                                }

                            </style>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $title = strtoupper($music->title); ?></h4>
                            <div class="container">
                            <p class="card-text"><?php echo $music->description; ?></p>
                            </div>
                            <div class="container">
                            <p class="card-text"><?php echo $music->credit; ?></p>
                            <a href="<?php echo $music->url; ?>" class="btn btn-primary"><!--img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/soundcloudWhite.png" alt="soundcloud"/>-->Lien vers la music</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } }

        if ($nbMusic > $total){
            ?>

            <a id="musicAffiche" href="index.php" class="btn btn-primary">retours</a>

            <?php

        } else if ($nbMusic <= $total ){ ?>



        <?php } else { ?>

            <a id="musicAffiche" href="index.php?controller=music&task=index&nb=<?php echo $nbBtn+1 ?>" class="btn btn-primary">Plus</a>

        <?php }

        ?>

    </section>
    <hr class="container" style="background-color: #808080">
    <section id="nosreseau" class="container">
        <h2 class="title">Nos Réseaux sociaux</h2>
        <ul>
            <li class="col align-self-center">
                <img class="imgRe" src="https://tyrolium.fr/Contenu/Image/icone/instagramWhite.png" alt="instagram">
                <h3 class="title">Instagram</h3>
                <p>Sur ce réseau social je poste mes avancées de productions musicales, vous pouvez donc suivre avec moi les étapes de mes créations.</p>
                <a target="_blank" href="#">Nous Follow</a>
            </li>
            <li id="discord" class="col align-self-center">
                <img class="imgRe" src="https://tyrolium.fr/Contenu/Image/icone/soundcloudWhite.png" alt="soundcloud">
                <h3 class="title">SoundCloud</h3>
                <p>Ici je poste mes productions musicales "work in progress" et mes prods finies que vous pouvez écouter gratuitement bien évidemment.</p>
                <a target="_blank" href="#">Nous Follow</a>
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
            <span>2020-2021 © SÉLÉMUSIUM<br>All Right Reserved © <a href="http://tyrolium.fr/"> TYROLIUM</a><br>Create by Maxime Tournier</span>
           <?php if(!$_SESSION){?>
               <button onclick="window.location.href = 'index.php?controller=user&task=login';" type="button" class="btn btn-primary">Panel</button>
           <?php } else { ?>
               <button onclick="window.location.href = 'index.php?controller=user&task=loggout';" type="button" class="btn btn-danger"><?php $tabUser = $_SESSION['user'];
                   echo "Deconnecter de ".$tabUser['name']; ?></button>
           <?php } ?>
        </div>
    </footer>
</section>