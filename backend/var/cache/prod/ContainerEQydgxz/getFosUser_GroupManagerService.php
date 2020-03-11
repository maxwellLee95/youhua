<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.group_manager' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Model/GroupManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Model/GroupManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Doctrine/GroupManager.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Model/GroupManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Entity/GroupManager.php';

return $this->services['fos_user.group_manager'] = new \Sonata\UserBundle\Entity\GroupManager(($this->privates['fos_user.object_manager'] ?? $this->load('getFosUser_ObjectManagerService.php')), 'App\\Application\\Sonata\\UserBundle\\Entity\\Group');