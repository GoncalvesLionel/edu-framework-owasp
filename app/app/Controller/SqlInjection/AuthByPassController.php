<?php

namespace Controller\SqlInjection;

use Model\UserModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class AuthByPassController implements ControllerInterface
{


    public function execute(Request $request): string|null
    {

        if (isset($_POST['submit'])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $userModel = new UserModel();
            $auth = $userModel->authenticate($username, $password);

            if(!$auth){
                $errors = "Erreur d'authentification";
            }
        }

        return TwigCore::getEnvironment()->render(
            'sql-injection/auth-bypass.html.twig',
            [
                'titre'   => 'OWASP SQL Injection - Auth bypass',
                'requete' => $request,
                'auth'=> $auth ?? null,
                'errors'=> $errors ?? null,
            ]
        );
    }
}