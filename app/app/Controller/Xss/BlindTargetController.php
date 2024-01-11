<?php

namespace Controller\Xss;

use Entity\Comment;
use Entity\Ticket;
use Model\CommentModel;
use Model\TicketModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class BlindTargetController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $ticketModel = new TicketModel();

        return TwigCore::getEnvironment()->render(
            'xss/blind-target.html.twig',
            [
                'titre'   => 'OWASP XSS - Blind XSS - Tickets listing',
                'requete' => $request,
                'tickets' => $ticketModel->fetchAll(),
            ]
        );
    }
}