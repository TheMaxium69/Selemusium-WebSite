<main>
    <section id="home">
        <div class="container">
            <article>
                <h2 class="title">Sélénium</h2>
                <br>
                <h5>J'arrive dans mon astéroïde pour prendre ma place dans le rap<br>
                    En étant dans mon univers c'est de la réalité que je réchappe</h5>
                <br>
                <p>Je suis Rayqua je me lance dans le rap par passion et aussi parce que les gens me disent que j'ai un petit talent pour ça.
                    Mon projet Sélénium est là pour me permettre de m'échapper du monde et pour partager mes productions.</p>
            </article>
        </div>
    </section>
    <section id="title">
        <div class="container">
            <h2 class="title">Nos Musiques</h2>
        </div>
    </section>
    <section id="music" class="container">


        <?php foreach($musics as $music){?>
        <div class="card music">
            <div class="row">
                <div class="iframe">
                    <iframe scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $music->iframe; ?>"></iframe>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $music->title; ?></h4>
                    <p class="card-text"><?php echo $music->description; ?></p>
                    <p class="card-text"><?php echo $music->credit; ?></p>
                    <a href="<?php echo $music->url; ?>" class="btn"><!--img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/soundcloudWhite.png" alt="soundcloud"/>-->Lien vers la music</a>
                </div>
            </div>
        </div>
        <?php } ?>

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