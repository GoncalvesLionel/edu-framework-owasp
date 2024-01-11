<?php

namespace Controller\Tools;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\Service\DatabaseService;
use Studoo\EduFramework\Core\View\TwigCore;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class DataBaseTestController implements ControllerInterface
{
    /**
     * @param Request $request Requête HTTP
     * @return string|null
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws \Exception
     */
    public function execute(Request $request): string|null
    {
        // Connexion à la base de données
        $getConnectDb = DatabaseService::getConnect();
        // Requête SQL
        $healthCheckStmt = $getConnectDb->query("SELECT SHA2('connection established', 256)");
        // Récupération des données
        $healthCheck = $healthCheckStmt->fetch();

        return TwigCore::getEnvironment()->render(
            'home/db.html.twig',
            [
             'titre'     => 'Test de connextion à la base de données',
             'status' => $healthCheck,
            ]
        );
    }
}
