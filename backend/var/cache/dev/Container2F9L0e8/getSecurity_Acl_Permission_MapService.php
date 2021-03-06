<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.acl.permission.map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/PermissionMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/MaskBuilderRetrievalInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/BasicPermissionMap.php';

return $this->privates['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap();
