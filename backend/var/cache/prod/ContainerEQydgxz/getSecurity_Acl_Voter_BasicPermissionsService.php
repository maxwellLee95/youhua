<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.acl.voter.basic_permissions' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Voter/AclVoter.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/ObjectIdentityRetrievalStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Domain/ObjectIdentityRetrievalStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/PermissionMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/MaskBuilderRetrievalInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/BasicPermissionMap.php';

return $this->privates['security.acl.voter.basic_permissions'] = new \Symfony\Component\Security\Acl\Voter\AclVoter(($this->services['security.acl.provider'] ?? $this->load('getSecurity_Acl_ProviderService.php')), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? $this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy()), ($this->privates['security.acl.security_identity_retrieval_strategy'] ?? $this->load('getSecurity_Acl_SecurityIdentityRetrievalStrategyService.php')), ($this->privates['security.acl.permission.map'] ?? $this->privates['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap()), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), true);
