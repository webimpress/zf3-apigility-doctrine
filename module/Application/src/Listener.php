<?php
namespace Application;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use ZF\Apigility\Doctrine\Server\Event\DoctrineResourceEvent;

class Listener implements ListenerAggregateInterface
{
    /**
     * Attach one or more listeners
     *
     * Implementors may add an optional $priority argument; the EventManager
     * implementation will pass this to the aggregate.
     *
     * @param EventManagerInterface $events
     * @param int $priority
     * @return void
     */
    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $events->attach(DoctrineResourceEvent::EVENT_FETCH_ALL_PRE, [$this, 'pre']);
    }

    /**
     * Detach all previously attached listeners
     *
     * @param EventManagerInterface $events
     * @return void
     */
    public function detach(EventManagerInterface $events)
    {
        $stop = 2;
    }

    public function pre(DoctrineResourceEvent $event)
    {
        $stop = 2;
    }
}
