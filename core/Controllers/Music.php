<?php
namespace Controllers;

class Music extends Controller
{

    protected $modelName = \Model\Music::class;

    public function index()
    {

        $musics = $this->model->findAllInverse($this->modelName);
        $total = $this->model->count();

        if(!empty($_GET['nb']) && $_GET['nb'] != 0){
            $nbBtn = $_GET['nb'];
        }else{
            $nbBtn = 0;
        }

        $titreDeLaPage = "Sélémusium";


        \Rendering::render("music/home",
            compact( 'titreDeLaPage', 'musics', 'nbBtn', 'total')
        );

    }

    public function indexApi()
    {

        if (!empty($_GET['id'])){
            $musicId = $_GET['id'];
            $music = $this->model->find($musicId);

        }else{

            $music = $this->model->findAll($this->modelName);
        }

        header('Access-Control-Allow-Origin: *');

        //Json
        echo json_encode($music);

    }

}