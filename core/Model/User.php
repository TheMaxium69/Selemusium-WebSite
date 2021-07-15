<?php

namespace Model;

class User extends Model
{

    protected $table = "users";

    public $id;
    public $name;
    public $email;
    private $password;
    public $role;

    function findByUsername(string $username)
    {
        $resultat =  $this->pdo->prepare('SELECT * FROM users WHERE name = :name');
        $resultat->execute([
            "name"=> $username
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
                "name" => $user->name,
                "email" => $user->email,
                "password" => $user->password,
                "role" => $user->role
            ];
            $_SESSION["user"]= $userTab;
            return true;
        }else{
            return false;
        }
    }

}
