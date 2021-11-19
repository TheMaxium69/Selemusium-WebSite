<?php

namespace Model;

class Music extends Model
{

    protected $table = "music";

    public $id;
    public $title;
    public $description;
    public $version;
    public $start_project;
    public $end_project;
    public $time_song;
    public $credit;
    public $iframe;
    public $url;
    public $host;


    function count()
    {
        $request =  $this->pdo->prepare("SELECT * FROM music");
        $request->execute();

        $totalMusic = $request->rowCount();
        return $totalMusic;

    }



}