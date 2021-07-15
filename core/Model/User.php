<?php

namespace Model;

class User extends Model
{

    protected $table = "users";

    public $id;
    public $name;
    public $email;
    private $password;
    public $role;

}
