<?php

namespace Template\home\Xss;

use Entity\Comment;
use Model\CommentModel;
use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class StoredController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $commentModel = new CommentModel();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $body = $_POST['body'];
            $newComment = new Comment(null, $name, $body);
            $commentModel->create($newComment);

        }

        return TwigCore::getEnvironment()->render(
            'xss/stored.html.twig',
            [
                'titre'   => 'OWASP XSS - Stored XSS',
                'requete' => $request,
                'comments' => $commentModel->fetchAll()
            ]
        );
    }
}