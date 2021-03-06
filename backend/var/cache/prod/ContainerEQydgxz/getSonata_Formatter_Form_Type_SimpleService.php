<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.formatter.form.type.simple' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Form/Type/SimpleFormatterType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManager.php';

return $this->privates['sonata.formatter.form.type.simple'] = new \Sonata\FormatterBundle\Form\Type\SimpleFormatterType(($this->privates['fos_ck_editor.config_manager'] ?? $this->load('getFosCkEditor_ConfigManagerService.php')), ($this->privates['fos_ck_editor.plugin_manager'] ?? $this->load('getFosCkEditor_PluginManagerService.php')), ($this->privates['fos_ck_editor.template_manager'] ?? $this->privates['fos_ck_editor.template_manager'] = new \FOS\CKEditorBundle\Model\TemplateManager()), ($this->privates['fos_ck_editor.styles_set_manager'] ?? $this->privates['fos_ck_editor.styles_set_manager'] = new \FOS\CKEditorBundle\Model\StylesSetManager()), ($this->privates['fos_ck_editor.toolbar_manager'] ?? $this->load('getFosCkEditor_ToolbarManagerService.php')));
