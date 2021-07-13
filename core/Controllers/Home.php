<?php
namespace Controllers;



class Home extends Controller
{

    protected $modelName = \Model\Home::class;
    

    /**
     * afficher l'accueil du site
     */

    public function index()
    {
        $exemple = "votre contenue";

        //on fixe le titre de la page
        $titreDeLaPage = "TyroMusic";

        //on affiche
        \Rendering::render("home/home",
            compact('exemple', 'titreDeLaPage')
        );

    }
}