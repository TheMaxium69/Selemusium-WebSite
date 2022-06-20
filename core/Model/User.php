<?php

namespace Model;

class User extends Model
{

    protected $table = "usermusic";

    public $id;
    public $name;
    public $email;
    private $password;
    public $role;

    function findByUsername(string $username)
    {
        $resultat =  $this->pdo->prepare('SELECT * FROM usermusic WHERE email = :name');
        $resultat->execute([
            "name"=> $username
        ]);

        $user = $resultat->fetchObject();

        return $user;
    }
    
    function createMusic($title, $description, $version, $start_project, $end_project, $credit, $iframe, $url, $host)
    {
        $resultat = $this->pdo->prepare('INSERT INTO music (title, description, version, start_project, end_project, credit, iframe, url, host) VALUES (:title, :description, :version, :start_project, :end_project, :credit, :iframe, :url, :host);');
        
        $resultat->execute([
            "title"=> $title,
            "description"=> $description,
            "version"=> $version,
            "start_project"=> $start_project,
            "end_project"=> $end_project,
            "credit"=> $credit,
            "iframe"=> $iframe,
            "url"=> $url,
            "host"=> $host
        ]);
    
    
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
