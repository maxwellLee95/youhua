<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.admin.media.manager' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Model/ModelManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Model/LockInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Model/ModelManager.php';

return $this->services['sonata.media.admin.media.manager'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(($this->services['doctrine'] ?? $this->getDoctrineService()));
