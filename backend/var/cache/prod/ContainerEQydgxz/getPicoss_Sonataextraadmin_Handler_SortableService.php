<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'picoss.sonataextraadmin.handler.sortable' shared service.

include_once $this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Handler/SortableHandler.php';

return $this->privates['picoss.sonataextraadmin.handler.sortable'] = new \Picoss\SonataExtraAdminBundle\Handler\SortableHandler(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));
