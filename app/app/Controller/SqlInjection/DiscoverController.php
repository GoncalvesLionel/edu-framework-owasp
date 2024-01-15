<?php

namespace Controller\SqlInjection;

use Model\TicketModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class DiscoverController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $ticketModel = new TicketModel();
        if(isset($_GET['id'])){
            $ticket = $ticketModel->fetch($_GET['id']);
        }

        return TwigCore::getEnvironment()->render(
            'sql-injection/discover.html.twig',
            [
                'titre'   => 'OWASP SQL Injection',
                'requete' => $request,
                'ticket'=> $ticket ?? null
            ]
        );
    }
}