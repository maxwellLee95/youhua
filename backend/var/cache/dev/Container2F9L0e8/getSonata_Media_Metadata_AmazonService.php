<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.metadata.amazon' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Metadata/AmazonMetadataBuilder.php';

return $this->services['sonata.media.metadata.amazon'] = new \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder();
