<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\OrderSpecial::__invoke' => function () {
    return ($this->privates['.service_locator.knSL7mE'] ?? $this->load('get_ServiceLocator_KnSL7mEService.php'));
}, 'App\\Controller\\ReceiptInfoSpecial::__invoke' => function () {
    return ($this->privates['.service_locator.znq3XXP'] ?? $this->load('get_ServiceLocator_Znq3XXPService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::batchActionDelete' => function () {
    return ($this->privates['.service_locator.uOx5GXH'] ?? $this->load('get_ServiceLocator_UOx5GXHService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::moveAction' => function () {
    return ($this->privates['.service_locator.7gt.7pH'] ?? $this->load('get_ServiceLocator_7gt_7pHService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::untrashAction' => function () {
    return ($this->privates['.service_locator.NVX3a_c'] ?? $this->load('get_ServiceLocator_NVX3aCService.php'));
}, 'App\\Controller\\OrderSpecial:__invoke' => function () {
    return ($this->privates['.service_locator.knSL7mE'] ?? $this->load('get_ServiceLocator_KnSL7mEService.php'));
}, 'App\\Controller\\OrderSpecial' => function () {
    return ($this->privates['.service_locator.knSL7mE'] ?? $this->load('get_ServiceLocator_KnSL7mEService.php'));
}, 'App\\Controller\\ReceiptInfoSpecial:__invoke' => function () {
    return ($this->privates['.service_locator.znq3XXP'] ?? $this->load('get_ServiceLocator_Znq3XXPService.php'));
}, 'App\\Controller\\ReceiptInfoSpecial' => function () {
    return ($this->privates['.service_locator.znq3XXP'] ?? $this->load('get_ServiceLocator_Znq3XXPService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController:batchActionDelete' => function () {
    return ($this->privates['.service_locator.uOx5GXH'] ?? $this->load('get_ServiceLocator_UOx5GXHService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController:moveAction' => function () {
    return ($this->privates['.service_locator.7gt.7pH'] ?? $this->load('get_ServiceLocator_7gt_7pHService.php'));
}, 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController:untrashAction' => function () {
    return ($this->privates['.service_locator.NVX3a_c'] ?? $this->load('get_ServiceLocator_NVX3aCService.php'));
})));
