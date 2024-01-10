<?php

namespace Controller;

use Model\CommentModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;

class ResetDbController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $commentModel = new CommentModel();
        $commentModel->truncate();

        header('Location: /xss/stored');
    }
}