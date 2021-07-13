<h3>Inscript toi !</h3>
            <h4><?php echo $reponse; ?></h4>
                <form method="POST" action="index.php?controller=user&task=signup">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="txt" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordConfirm">Confirmer votre Password</label>
                        <input type="password" class="form-control" name="passwordConfirm" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign-Up" class="btn btn-outline-light">
                    </div>
                </form>