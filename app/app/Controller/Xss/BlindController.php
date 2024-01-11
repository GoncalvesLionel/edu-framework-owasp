<?php

namespace Controller\Xss;

use Entity\Ticket;
use Model\TicketModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class BlindController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $ticketModel = new TicketModel();

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $message = $_POST['message'];
            $newTicket = new Ticket(null, $email, $message);
            $ticketModel->create($newTicket);

        }

        return TwigCore::getEnvironment()->render(
            'xss/blind.html.twig',
            [
                'titre'   => 'OWASP XSS - Blind XSS',
                'requete' => $request,
            ]
        );
    }
}