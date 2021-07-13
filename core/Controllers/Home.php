<?php
namespace Controllers;



class Home extends Controller
{

    protected $modelName = \Model\Exemple::class;
    

    /**
     * afficher l'accueil du site
     */

    public function index()
    {


        $exemple = "votre contenue";

        //on fixe le titre de la page
        $titreDeLaPage = "titre d'une page";

        //on affiche
        \Rendering::render("home/home",
            compact('exemple', 'titreDeLaPage')
        );

    }
}