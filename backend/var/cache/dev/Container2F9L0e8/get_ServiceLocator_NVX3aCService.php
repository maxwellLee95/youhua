<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.NVX3a_c' shared service.

return $this->privates['.service_locator.NVX3a_c'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('trashManager' => function (): \Picoss\SonataExtraAdminBundle\Model\TrashManager {
    return ($this->privates['.errored..service_locator.NVX3a_c.Picoss\SonataExtraAdminBundle\Model\TrashManager'] ?? $this->load('getTrashManagerService.php'));
}));