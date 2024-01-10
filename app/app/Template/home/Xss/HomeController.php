<?php

namespace Template\home\Xss;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class HomeController implements ControllerInterface
{

    /**
     * @inheritDoc
     */
    public function execute(Request $request): string|null
    {
        return TwigCore::getEnvironment()->render(
            'xss/home.html.twig',
            [
                'titre'   => 'OWASP XSS - Home',
            ]
        );
    }
}