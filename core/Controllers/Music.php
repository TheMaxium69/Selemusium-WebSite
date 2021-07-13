<?php
namespace Controllers;

class Music extends Controller
{

    protected $modelName = \Model\Music::class;

    public function index()
    {

        $musics = $this->model->findAll($this->modelName);

        $titreDeLaPage = "TyroMusic";

        $projectName = 'Insert un name';

        \Rendering::render("music/home",
            compact( 'titreDeLaPage', 'musics', 'projectName')
        );

    }


}