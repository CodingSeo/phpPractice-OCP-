<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * class Decorator
 */
abstract class Decorator implements RendererInterface
{
    /**
     * @var RendererInterface
     */
    protected $wrapped;

    /**
     * You must type-hint the wrapped component :
     * It ensures you can call renderData() in the subclasses !
     *
     * @param RendererInterface $wrappable
     */
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}