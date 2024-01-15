<?php

namespace Controller\SqlInjection;

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
            'sql-injection/home.html.twig',
            [
                'titre'   => 'OWASP XSS - SQL Injection',
            ]
        );
    }
}