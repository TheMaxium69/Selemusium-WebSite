            <h3>Connecte toi !</h3>
            <h4><?php echo $reponse; ?></h4>
                <form method="POST" action="index.php?controller=user&task=login">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Log in" class="btn btn-outline-light">
                    </div>
                </form>