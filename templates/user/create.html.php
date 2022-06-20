<section id="formPanel">
    <?php if($_SESSION){?>
        <h1>Poster une musique</h1>
    
    <form class="container" method="POST" action="index.php?controller=user&task=create">
      <div class="form-group">
        <label>Titre de la musique</label>
        <input name="title" type="text" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Description de la musique</label>
        <textarea name="description" class="form-control" rows="3" required></textarea>
      </div>
        
    <div class="form-group">
        <label>Version du projet</label>
        <input name="version" type="text" class="form-control" placeholder="Release" required>
      </div>
        
      <div class="form-group">
        <label>Date début du projet (Format obligatoire JJ/MM/AA)</label>
        <input name="start_project" type="text" class="form-control" placeholder="09/12/03" required>
      </div>
      
      <div class="form-group">
        <label>Date fin du projet (Format obligatoire JJ/MM/AA)</label>
        <input name="end_project" type="text" class="form-control" placeholder="09/07/17" required>
      </div>
        
      <div class="form-group">
        <label>Credit / Créateur de la musique</label>
        <select name="credit" class="form-control" required>
        <?php foreach($users as $user) { 
            
                    if($user->id === $_SESSION["user"]["id"]){
                        echo '<option value="'. $user->name .'">'. $user->name .' (Toi)</option>';
                    }
              }
    
              foreach($users as $user) { 
            
                if($user->id !== $_SESSION["user"]["id"]){
                    
                    echo '<option value="'. $user->name .'">'. $user->name .'</option>';
                    
                }
              }
         ?>
        </select>
      </div>
        
    <div class="form-group">
        <label>Plateforme de publication de la musique</label>
        <select name="host" multiple class="form-control" required>
            <option value="1">Instagram</option>
            <option value="0">Soundcloud</option>
        </select>
    </div>
        
    <div class="form-group">
        <label>Url de la musique</label>
        <input name="url" type="text" class="form-control" required>
    </div>
        
    <div class="form-group">
        <label>Url de l'idrame de la musique</label>
        <input name="iframe" type="text" class="form-control" required>
    </div>
        
        
        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Envoyé</button>
        </div>
        
    </form>
    
    <br><br>
    
    <?php } else { ?>
    
    <h1>404 Erreur</h1>
    
    <?php } ?>

</section>

<section id="footer" class="<?php if(!$_SESSION){ echo "fixed-bottom"; }?>">
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
        margin-top: 20px;
        margin-left: 80px;
        margin-right: 80px;
    }
    
    select.form-control[multiple], select.form-control[size] {
        height: 56px;
    }
    
    form button.btn-primary{
        background-color: #0000a3;
        border: 1px solid #00007e;
        margin-top: 15px;
        width: 100%;    
    }
</style>