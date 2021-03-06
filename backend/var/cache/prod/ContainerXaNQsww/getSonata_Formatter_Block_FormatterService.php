<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.formatter.block.formatter' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Block/FormatterBlockService.php';

return $this->services['sonata.formatter.block.formatter'] = new \Sonata\FormatterBundle\Block\FormatterBlockService('sonata.formatter.block.formatter', ($this->privates['sonata.templating'] ?? $this->load('getSonata_TemplatingService.php')));
