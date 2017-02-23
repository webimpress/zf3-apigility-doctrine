<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014-2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Application;

use Zend\Mvc\MvcEvent;
use ZF\Apigility\Doctrine\Server\Event\DoctrineResourceEvent;
use ZF\ApiProblem\ApiProblem;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

//    public function onBootstrap(MvcEvent $event)
//    {
//        $sharedEvents = $event->getApplication()->getEventManager()->getSharedManager();
//
//        $sharedEvents->attach(
//            \ZF\Apigility\Doctrine\DoctrineResource::class,
//            DoctrineResourceEvent::EVENT_FETCH_ALL_PRE,
//            function(DoctrineResourceEvent $e) {
//                $e->stopPropagation();
//                return new ApiProblem(400, 'Stop API Creation');
//            }
//        );
//    }
}
