<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.code' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php';

return $this->privates['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), $this->targetDirs[3], 'UTF-8');
