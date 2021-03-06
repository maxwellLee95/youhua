<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventSubscriber\WechatNotifySubscriber' shared autowired service.

include_once $this->targetDirs[3].'/src/EventSubscriber/WechatNotifySubscriber.php';
include_once $this->targetDirs[3].'/src/DependencyInjection/WechatMessage.php';

$a = ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());

return $this->privates['App\EventSubscriber\WechatNotifySubscriber'] = new \App\EventSubscriber\WechatNotifySubscriber($a, new \App\DependencyInjection\WechatMessage($this->parameters['rip.miniapp'], $this->parameters['rip.miniapp_message.ids'], $this->parameters['rip.miniapp_message.pages'], $a), ($this->privates['App\DependencyInjection\WechatPrePayIdStorage'] ?? $this->load('getWechatPrePayIdStorageService.php')));
