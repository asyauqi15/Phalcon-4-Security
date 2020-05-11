<?php

namespace KCVDashboard;

use Phalcon\Di\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([

            'KCVDashboard\Core\Domain\Event' => __DIR__ . '/Core/Domain/Event',
            'KCVDashboard\Core\Domain\Model' => __DIR__ . '/Core/Domain/Model',
            'KCVDashboard\Core\Domain\Repository' => __DIR__ . '/Core/Domain/Repository',
            'KCVDashboard\Core\Domain\Service' => __DIR__ . '/Core/Domain/Service',

            'KCVDashboard\Core\Application\Service' => __DIR__ . '/Core/Application/Service',
            'KCVDashboard\Core\Application\EventSubscriber' => __DIR__ . '/Core/Application/EventSubscriber',

            'KCVDashboard\Infrastructure\Persistence' => __DIR__ . '/Infrastructure/Persistence',

            'KCVDashboard\Presentation\Web\Controller' => __DIR__ . '/Presentation/Web/Controller',
            'KCVDashboard\Presentation\Web\Validator' => __DIR__ . '/Presentation/Web/Validator',
            'KCVDashboard\Presentation\Api\Controller' => __DIR__ . '/Presentation/Api/Controller',
            
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
        include_once __DIR__ . '/config/repository.php';
        include_once __DIR__ . '/config/usecase.php';
    }
}