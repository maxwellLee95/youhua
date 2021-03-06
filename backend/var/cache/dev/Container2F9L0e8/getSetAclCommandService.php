<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Symfony\Bundle\AclBundle\Command\SetAclCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/acl-bundle/src/Command/SetAclCommand.php';

$this->privates['Symfony\Bundle\AclBundle\Command\SetAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\SetAclCommand(($this->services['security.acl.provider'] ?? $this->load('getSecurity_Acl_ProviderService.php')));

$instance->setName('acl:set');

return $instance;
