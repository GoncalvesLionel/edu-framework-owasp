<?php

namespace Model;

use Entity\Comment;
use Entity\User;
use Exception;
use PDO;
use Studoo\EduFramework\Core\Service\DatabaseService;

class UserModel
{
    private PDO $bdd;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->bdd = DatabaseService::getConnect();
    }

    public function authenticate($username, $password): ?User
    {
        $request = $this->bdd->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $value = $request->fetch();
        if($value){
            return new User($value["id"],$value["username"],$value["password"]);
        }
        return null;
    }

    public function grep($username): bool
    {
        $request = $this->bdd->query("SELECT * FROM user WHERE username = '$username'");
        $value = $request->fetch();
        if($value){
            return true;
        }
        return false;
    }


}