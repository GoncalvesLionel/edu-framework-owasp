<?php

namespace Controller\Tools;

use Model\CommentModel;
use Model\TicketModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;

class TruncateTicketTableController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $ticketModel = new TicketModel();
        $ticketModel->truncate();

        header('Location: /xss/blind/target');
    }
}