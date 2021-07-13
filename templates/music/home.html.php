<main>
    <section id="home">
        <div class="container">
            <article>
                <h2 class="title"><?php echo $projectName ?></h2>
                <br>
                <h4>Je suis Rayqua je me lance dans le rap par passion et aussi parce que les gens me disent que j'ai un petit talent pour ça.
                    Mon projet <?php echo $projectName ?> le nom est là pour me permettre de m'échapper du monde et pour partager mes productions.</h4>
                <br>
                <p>[Presentation txt]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt<br> incidunt inventore quos repudiandae! Ad alias culpa explicabo labore nemo nulla, quae.</p>
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
                    <h5 class="card-title"><?php echo $music->title; ?></h5>
                    <p class="card-text"><?php echo $music->description; ?></p>
                    <p class="card-text"><?php echo $music->credit; ?></p>
                    <a href="<?php echo $music->url; ?>" class="btn btn-primary">Lien vers la music</a>
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
                <img class="imgRe" src="assets/instagram.png" alt="instagram">
                <h3 class="title">Instagram</h3>
                <p>Sur ce réseau social je poste mes avancées de productions musicales, vous pouvez donc suivre avec moi les étapes de mes créations.</p>
                <a target="_blank" href="https://www.instagram.com/tyroliumserver/">Nous Follow</a>
            </li>
            <li id="discord" class="col align-self-center">
                <img class="imgRe" src="assets/discord.png" alt="soundcloud">
                <h3 class="title">SoundCloud</h3>
                <p>Ici je poste mes productions musicales "work in progress" et mes prods finies que vous pouvez écouter gratuitement bien évidemment.</p>
                <a target="_blank" href="https://discord.gg/km8h5jHezt">Nous Follow</a>
            </li>
            <li class="col align-self-center">
                <img class="imgRe" src="assets/twitter.png" alt="discord">
                <h3 class="title">Discord</h3>
                <p>Sur ce réseau social, sur le serveur de l'entreprise Tyrolium à laquelle mon projet est rattaché je peux vous parler et répondre à d'éventuelles questions ou même discuter chill avec vous de tout et de rien.</p>
                <a target="_blank" href="https://twitter.com/tyrolium">Rejoindre</a>
            </li>
        </ul>


    </section>
</main>