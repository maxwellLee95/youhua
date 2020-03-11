<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'app.admin.custom_page' service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/AccessRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/FieldDescriptionRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/LifecycleHookProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/MenuBuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/ParentAdminInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/UrlGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/AdminInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/DomainObjectInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/AdminTreeInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdmin.php';
include_once $this->targetDirs[3].'/src/Admin/CustomPageAdmin.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Security/Handler/SecurityHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Security/Handler/NoopSecurityHandler.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/NativeLabelTranslatorStrategy.php';

$this->factories['app.admin.custom_page'] = function () {
    $instance = new \App\Admin\CustomPageAdmin('app.admin.custom_page', 'App\\Entity\\CustomPage', 'Sonata\\AdminBundle\\Controller\\CRUDController');

    $instance->setManagerType('orm');
    $instance->setModelManager(($this->services['sonata.admin.manager.orm'] ?? $this->load('getSonata_Admin_Manager_OrmService.php')));
    $instance->setFormContractor(($this->privates['sonata.admin.builder.orm_form'] ?? $this->load('getSonata_Admin_Builder_OrmFormService.php')));
    $instance->setShowBuilder(($this->privates['sonata.admin.builder.orm_show'] ?? $this->load('getSonata_Admin_Builder_OrmShowService.php')));
    $instance->setListBuilder(($this->privates['sonata.admin.builder.orm_list'] ?? $this->load('getSonata_Admin_Builder_OrmListService.php')));
    $instance->setDatagridBuilder(($this->privates['sonata.admin.builder.orm_datagrid'] ?? $this->load('getSonata_Admin_Builder_OrmDatagridService.php')));
    $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()), false);
    $instance->setConfigurationPool(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    $instance->setRouteGenerator(($this->services['sonata.admin.route.default_generator'] ?? $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')));
    $instance->setValidator(($this->services['validator'] ?? $this->getValidatorService()));
    $instance->setSecurityHandler(($this->privates['sonata.admin.security.handler.noop'] ?? $this->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()));
    $instance->setMenuFactory(($this->services['knp_menu.factory'] ?? $this->load('getKnpMenu_FactoryService.php')));
    $instance->setRouteBuilder(($this->services['sonata.admin.route.path_info'] ?? $this->load('getSonata_Admin_Route_PathInfoService.php')));
    $instance->setLabelTranslatorStrategy(($this->services['sonata.admin.label.strategy.native'] ?? $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()));
    $instance->setPagerType('default');
    $instance->setLabel('CustomPageAdmin');
    $instance->showMosaicButton(false);
    $instance->setTemplateRegistry(($this->services['app.admin.custom_page.template_registry'] ?? $this->load('getApp_Admin_CustomPage_TemplateRegistryService.php')));
    $instance->setSecurityInformation(array());
    $instance->initialize();
    $instance->addExtension(($this->services['sonata.admin.event.extension'] ?? $this->load('getSonata_Admin_Event_ExtensionService.php')));
    $instance->setFormTheme(array(0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig'));
    $instance->setFilterTheme(array(0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig'));
    $instance->setTemplate('history', '@PicossSonataExtraAdmin/CRUD/history.html.twig');
    $instance->setTemplate('history_revert', '@PicossSonataExtraAdmin/CRUD/history_revert.html.twig');
    $instance->setTemplate('history_revision_timestamp', '@PicossSonataExtraAdmin/CRUD/history_revision_timestamp.html.twig');
    $instance->setTemplate('trash', '@PicossSonataExtraAdmin/CRUD/trash.html.twig');
    $instance->setTemplate('untrash', '@PicossSonataExtraAdmin/CRUD/untrash.html.twig');
    $instance->setTemplate('inner_trash_list_row', '@PicossSonataExtraAdmin/CRUD/list_trash_inner_row.html.twig');
    $instance->setTemplate('button_trash', '@PicossSonataExtraAdmin/Button/trash_button.html.twig');
    $instance->setRouteBuilder(($this->privates['picoss.sonataextraadmin.route.entity'] ?? $this->load('getPicoss_Sonataextraadmin_Route_EntityService.php')));

    return $instance;
};

return $this->factories['app.admin.custom_page']();