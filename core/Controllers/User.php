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
            $resultLogin = $this->model->login($usernameLogin, $passwordLogin);
            if($resultLogin){
                \Http::redirect('index.php?controller=music&task=index');
            }else{
                $reponse = "Erreur de connexion";
                \Http::redirect('index.php?controller=music&task=index');
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
    
    public function create()
    {
        
        $users = $this->model->findAll($this->modelName);
        
        
        if(!empty($_POST['title'])){
            
            $title = $_POST['title'];
            $description = $_POST['description'];
            $version = $_POST['version'];
            $start_project = $_POST['start_project'];
            $end_project = $_POST['end_project'];
            $credit = $_POST['credit'];
            $iframe = $_POST['iframe'];
            $url = $_POST['url'];
            $host = $_POST['host'];
            
        
            $this->model->createMusic($title, $description, $version, $start_project, $end_project, $credit, $iframe, $url, $host);
            
            \Http::redirect('index.php?controller=music&task=index');
           

        }
        

        $titreDeLaPage = "Create Admin";

        \Rendering::render("user/create",
            compact( 'titreDeLaPage', 'users')
        );

    }


}