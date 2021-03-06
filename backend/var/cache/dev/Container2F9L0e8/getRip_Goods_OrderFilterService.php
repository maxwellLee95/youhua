<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'rip.goods.order_filter' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/OrderFilter.php';

return $this->privates['rip.goods.order_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL, 'order', ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), array('id' => 'desc', 'created_at' => NULL, 'name' => NULL, 'stock' => NULL, 'market_price' => NULL, 'deposit_price' => NULL));
