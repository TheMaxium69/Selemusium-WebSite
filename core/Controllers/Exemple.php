<?php


namespace Controllers;



class Exemple extends Controller
{

    protected $modelName = \Model\Exemple::class;
    


    /**
     * afficher l'accueil du site
     *
     *
     */

    public function index()
    {


        //$exemple = $this->model->findAll($this->modelName);

        
        // $modelUser = new \Model\User();
        // $user = $modelUser->getUser();

        //on fixe le titre de la page
        // $titreDeLaPage = "titre d'une page";

        //on affiche
        \Rendering::render("exemple/exemple",
            compact('user', 'exemple', 'titreDeLaPage')
        );

    }

    public function indexApi()
    {

        //$exemple = $this->model->findAll($this->modelName);

        
        // $modelUser = new \Model\User();
        // $user = $modelUser->getUser();

        header('Access-Control-Allow-Origin: *');

        //Json
        echo json_encode(["test1"=>"truc1",
                          "test2"=>"truc2"]);

    }

    
    public function show(){



        // $exemple_id = null;

        // if(!empty($_GET['id']) && ctype_digit($_GET['id'])){

        //     $exemple_id = $_GET['id'];
        // }

        // if(!$exemple_id){
        //     die("il faut absolument entrer un id dans l'url pour que le script fonctionne");
        // }



        // $exempleUn = $this->model->find($exemple_id);

        // $modelAutreExemple = new \Model\AutreExemple();
        // $classAutreExemple = \Model\AutreExemple::class;
        // $AutreExemple = $modelAutreExemple->findAllByGateau($exemple_id, $classAutreExemple);
        
        // $titreDeLaPage = $exempleUn->name;

        \Rendering::render('exemple/unObjectExemple',
            compact('exempleUn', 'AutreExemple','titreDeLaPage')
        );
    }
    public function showApi(){



        // $exemple_id = null;

        // if(!empty($_GET['id']) && ctype_digit($_GET['id'])){

        //     $exemple_id = $_GET['id'];
        // }

        // if(!$exemple_id){
        //     die("il faut absolument entrer un id dans l'url pour que le script fonctionne");
        // }



        // $exempleUn = $this->model->find($exemple_id);

        // $modelAutreExemple = new \Model\AutreExemple();
        // $classAutreExemple = \Model\AutreExemple::class;
        // $AutreExemple = $modelAutreExemple->findAllByGateau($exemple_id, $classAutreExemple);
        
        header("Access-Control-Allow-Origin: *");

        //Json
        // echo json_encode(['exempleUn' => $exempleUn, 
        //                   'AutreExemple' => $AutreExemple]);
    }
}    
