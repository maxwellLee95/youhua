<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\ClassifyGoodsRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sortable/Entity/Repository/SortableRepository.php';
include_once $this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Entity/Repository/SortableRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[3].'/src/DependencyInjection/ServiceSortEntityRepository.php';
include_once $this->targetDirs[3].'/src/Repository/ClassifyGoodsRepository.php';

return $this->privates['App\Repository\ClassifyGoodsRepository'] = new \App\Repository\ClassifyGoodsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
