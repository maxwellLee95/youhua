<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.menu_builder' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Menu/MenuBuilder.php';

return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['knp_menu.factory'] ?? $this->load('getKnpMenu_FactoryService.php')), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
