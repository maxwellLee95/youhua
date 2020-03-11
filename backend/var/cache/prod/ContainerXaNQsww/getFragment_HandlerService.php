<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.handler' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\ServiceLocator(array('inline' => function () {
    return ($this->privates['fragment.renderer.inline'] ?? $this->load('getFragment_Renderer_InlineService.php'));
})), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), false);
