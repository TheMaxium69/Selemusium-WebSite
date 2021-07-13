<?php

namespace Model;

class Exemple extends Model
{

    protected $table = "exemple";

    public $id;
    public $pro1;
    public $pro2;
    public $user_id;


    /**
     * @param string $pro1
     * @param string $pro2
     *
     * ajout d'un exemple
     */
    function insert(string $pro1, string $pro2) : void
    {

        $maRequeteCreateGateau = $this->pdo->prepare("
        INSERT INTO `exemples` (`pro1`, `pro2`) VALUES (:pro1, :pro2)");

        $maRequeteCreateGateau->execute([
            'pro1' => $pro1,
            'pro2' => $pro2,
        ]);
    }
    /**
     * @param int $id
     * @param string $pro1
     * @param string $pro2
     *
     * update d'un exemple
     */
    function update(int $id, string $pro1, string $pro2) : void
    {

        $maRequeteUpdateGateau = $this->pdo->prepare("UPDATE exemple SET pro1=:pro1,pro1=:pro2 WHERE id=:id");

        $maRequeteUpdateGateau->execute([
            'id' => $id,
            'pro1' => $pro1,
            'pro2' => $pro2,
        ]);
    }
}
