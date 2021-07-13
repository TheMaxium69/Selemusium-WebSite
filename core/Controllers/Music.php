<?php
namespace Controllers;

class Music extends Controller
{

    protected $modelName = \Model\Music::class;

    public function index()
    {

        $musics = $this->model->findAll($this->modelName);

        $titreDeLaPage = "Sélénium";


        \Rendering::render("music/home",
            compact( 'titreDeLaPage', 'musics')
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