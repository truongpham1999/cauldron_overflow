<?php

namespace ContainerTwPDREk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZrsoHlKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZrsoHlK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZrsoHlK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommentController::commentVote' => ['privates', '.service_locator.B2N.LKQ', 'get_ServiceLocator_B2N_LKQService', true],
            'App\\Controller\\QuestionController::show' => ['privates', '.service_locator.nJ6q1h0', 'get_ServiceLocator_NJ6q1h0Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CommentController:commentVote' => ['privates', '.service_locator.B2N.LKQ', 'get_ServiceLocator_B2N_LKQService', true],
            'App\\Controller\\QuestionController:show' => ['privates', '.service_locator.nJ6q1h0', 'get_ServiceLocator_NJ6q1h0Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CommentController::commentVote' => '?',
            'App\\Controller\\QuestionController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CommentController:commentVote' => '?',
            'App\\Controller\\QuestionController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
