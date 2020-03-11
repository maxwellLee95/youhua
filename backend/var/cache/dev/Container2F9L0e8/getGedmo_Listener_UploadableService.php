<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'gedmo.listener.uploadable' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Uploadable/UploadableListener.php';

$this->privates['gedmo.listener.uploadable'] = $instance = new \Gedmo\Uploadable\UploadableListener();

$instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

return $instance;