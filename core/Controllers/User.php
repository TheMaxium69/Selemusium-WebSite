<?php
namespace Controllers;

class User extends Controller
{

    protected $modelName = \Model\User::class;

    public function login()
    {
        $reponse = null;


        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $usernameLogin = $_POST['username'];
            $passwordLogin = $_POST['password'];
            echo "coucou";
            $resultLogin = $this->model->login($usernameLogin, $passwordLogin);
            echo "coucouZ";
            if($resultLogin){
                \Http::redirect('index.php?controller=music&task=index');
            }else{
                $reponse = "Erreur de connexion";
            }

        }

        $titreDeLaPage = "Panel Admin";

        \Rendering::render("user/login",
            compact( 'titreDeLaPage', 'reponse')
        );

    }


    public function loggout()
    {
        session_unset();
        \Http::redirect('index.php?controller=music&task=index');
    }

}