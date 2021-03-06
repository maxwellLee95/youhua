<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.serializer.handler.gallery' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Serializer/SerializerHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Serializer/BaseSerializerHandler.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Serializer/GallerySerializerHandler.php';

return $this->privates['sonata.media.serializer.handler.gallery'] = new \Sonata\MediaBundle\Serializer\GallerySerializerHandler(($this->services['sonata.media.manager.gallery'] ?? $this->load('getSonata_Media_Manager_GalleryService.php')));
