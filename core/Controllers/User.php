<?php
namespace Controllers;

class User extends Controller
{

    protected $modelName = \Model\User::class;

    public function index()
    {



        $titreDeLaPage = "Panel Admin";


        \Rendering::render("user/login",
            compact( 'titreDeLaPage')
        );

    }

}