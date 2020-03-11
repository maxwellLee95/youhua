<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\WechatMpapp' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Controller/WechatMpapp.php';
include_once $this->targetDirs[3].'/src/DependencyInjection/WechatPay.php';

$a = ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService());
$b = ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());

return $this->services['App\Controller\WechatMpapp'] = new \App\Controller\WechatMpapp($this->parameters['rip.miniapp'], new \App\DependencyInjection\WechatPay($this->getParameter('rip.payment'), $a, $b), $a, $b);
