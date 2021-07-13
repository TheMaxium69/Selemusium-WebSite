<?php

namespace Model;

use PDO;

class User extends Model
{

    protected $table = "users";

    public $id;
    public $username;
    private $password;
    public $email;

    function findByUsername(string $username)
    {
        $resultat =  $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
        $resultat->execute([
            "username"=> $username
        ]);

        $user = $resultat->fetchObject();

        return $user;
    }

    function login(string $username, string $password)
    {
        $user = $this->findByUsername($username);

        if($user && $user->password == $password){
                $userTab = [
                    "id" => $user->id,
                    "name" => $user->username,
                    "email" => $user->email,
                    "password" => $user->password
                ];
                $_SESSION["user"]= $userTab;
                return true;
        }else{
            return false;
        }
    }

    function isLoggedIn(){
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user']; 
            if($user['id']){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function loggout(){
        session_unset();
    }

    function getUser(){
            $userSession = $_SESSION['user']; 
            $user = new User();
            $user->id = $userSession['id'];
            $user->username = $userSession['name'];
            $user->email = $userSession['email'];
            $user->password = $userSession['password'];
            return $user;
    }

    function signup(User $user){
        
        $maRequeteAddUser = $this->pdo->prepare("INSERT INTO users (username, email, password) 
          VALUES (:username, :email, :password)");

        $maRequeteAddUser->execute([
            'username' => $user->username,
            'email' => $user->email,
            'password' => $user->password
        ]);
    }


    function set(User $user, string $password){
        $user->password = $password;
    }
    
    function findByUser(int $user_id){
        $maRequeteUserFind =  $this->pdo->prepare("SELECT * FROM `users` WHERE `id`=:id");
        $maRequeteUserFind->execute(["id"=> $user_id]);

        $user = $maRequeteUserFind->fetchObject();
        return $user;
    }
}
