<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.api_platform.swagger.command.swagger_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/SwaggerCommand.php';

return $this->services['console.command.public_alias.api_platform.swagger.command.swagger_command'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(($this->privates['api_platform.swagger.normalizer.api_gateway'] ?? $this->getApiPlatform_Swagger_Normalizer_ApiGatewayService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '油画api', '', '0.0.0', $this->parameters['api_platform.formats']);
