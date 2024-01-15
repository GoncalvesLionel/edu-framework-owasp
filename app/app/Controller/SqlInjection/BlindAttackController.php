<?php

namespace Controller\SqlInjection;

use Model\UserModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class BlindAttackController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        if (isset($_POST['submit'])) {
            $search = $_POST["search"];
            $userModel = new UserModel();
            $result = $userModel->grep($search);
        }
        return TwigCore::getEnvironment()->render(
            'sql-injection/blind.html.twig',
            [
                'titre'   => 'OWASP SQL Injection - blind attack',
                'requete' => $request,
                'result'=> $result ?? null
            ]
        );
    }
}