<?php

namespace App\Service;
use Illuminate\Routing\RouteDependencyResolverTrait;
use Illuminate\Container\Container;

/**
 * 控制器内核分离重组
 * Class ControllerDispatcher
 * @package App\Service
 */
class ControllerDispatcher
{

    use RouteDependencyResolverTrait;

    protected $container;
    protected $controller;

    /**
     * ControllerDispatcher constructor.
     */
    public function __construct()
    {
        $this->container = new container;
    }

    /**
     * @param $controller
     * @param $method
     * @return mixed
     */
    public function dispatch($controller, $method)
    {
        $parameters = $this->resolveClassMethodDependencies(
            [], $controller, $method
        );

        if (method_exists($controller, 'callAction')) {
            return $controller->callAction($method, $parameters);
        }

        return $controller->{$method}(...array_values($parameters));
    }

    /**
     * @param $class
     * @return mixed
     */
    public function getController($class)
    {
        if (! $this->controller) {
            $this->controller = $this->container->make(ltrim($class, '\\'));
        }

        return $this->controller;
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     */
    public function run($controller, $action)
    {
       return $this->dispatch($this->getController($controller),$action);

        //return $controller.'\\'.$action;
    }
}