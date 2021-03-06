<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.form.type.media' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Form/Type/MediaType.php';

$this->privates['sonata.media.form.type.media'] = $instance = new \Sonata\MediaBundle\Form\Type\MediaType(($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()), 'App\\Application\\Sonata\\MediaBundle\\Entity\\Media');

$instance->setLogger(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

return $instance;
