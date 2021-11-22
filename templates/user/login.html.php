<section id="formPanel">
    <?php if($_SESSION){?>
        <h1>TU EST DEJA CONNECTER</h1>
    <?php } else { ?><h3>Connecte toi !</h3>
        <h4><?php echo $reponse; ?></h4>
        <form class="container" method="POST" action="index.php?controller=user&task=login">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mots de passe</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Connect" class="btn btn-outline-light">
            </div>
        </form>
    <?php } ?>

</section>


<section id="footer" class="fixed-bottom">
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

<style>
    html{
        background-color: #1E2329;
    }
    #formPanel{
        height: 100%;
        margin-top: 130px;
        margin-left: 80px;
        margin-right: 80px;

    }
</style>