<?php

namespace Controller\CommandInjection;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class DiscoverController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        if (isset($_POST['submit'])) {

            $output = null;
            exec( $_POST["cmd"],$output);
        }


        return TwigCore::getEnvironment()->render(
            'command-injection/discover.html.twig',
            [
                'titre'   => 'OWASP Command-injection - Discover',
                'output' => $output ?? null,
            ]
        );
    }
}