<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.user.manager.user' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Entity/UserManagerProxy.php';

return $this->services['sonata.user.manager.user'] = new \Sonata\UserBundle\Entity\UserManagerProxy('App\\Application\\Sonata\\UserBundle\\Entity\\User', ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['fos_user.user_manager'] ?? $this->load('getFosUser_UserManagerService.php')));