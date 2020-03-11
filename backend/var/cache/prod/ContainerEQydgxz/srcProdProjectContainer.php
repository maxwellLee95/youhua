<?php

namespace ContainerEQydgxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcProdProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    /*
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.formatter.twig.control_flow' => 'getSonata_Formatter_Twig_ControlFlowService',
            'sonata.formatter.twig.gist' => 'getSonata_Formatter_Twig_GistService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
        );
        $this->fileMap = array(
            'App\\Controller\\OrderSpecial' => 'getOrderSpecialService.php',
            'App\\Controller\\ReceiptInfoSpecial' => 'getReceiptInfoSpecialService.php',
            'App\\Controller\\WechatMpapp' => 'getWechatMpappService.php',
            'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController' => 'getExtraAdminControllerService.php',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService.php',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => 'getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand' => 'getDumpMappingCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand' => 'getGenerateCommandService.php',
            'Sonata\\MediaBundle\\Command\\AddMassMediaCommand' => 'getAddMassMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\AddMediaCommand' => 'getAddMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\CleanMediaCommand' => 'getCleanMediaCommandService.php',
            'Sonata\\MediaBundle\\Command\\FixMediaContextCommand' => 'getFixMediaContextCommandService.php',
            'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand' => 'getMigrateToJsonTypeCommandService.php',
            'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand' => 'getRefreshMetadataCommandService.php',
            'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand' => 'getRemoveThumbsCommandService.php',
            'Sonata\\MediaBundle\\Command\\SyncThumbsCommand' => 'getSyncThumbsCommandService.php',
            'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand' => 'getUpdateCdnStatusCommandService.php',
            'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand' => 'getTwoStepVerificationCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'api_platform.action.documentation' => 'getApiPlatform_Action_DocumentationService.php',
            'api_platform.action.entrypoint' => 'getApiPlatform_Action_EntrypointService.php',
            'api_platform.action.exception' => 'getApiPlatform_Action_ExceptionService.php',
            'api_platform.action.placeholder' => 'getApiPlatform_Action_PlaceholderService.php',
            'api_platform.graphql.action.entrypoint' => 'getApiPlatform_Graphql_Action_EntrypointService.php',
            'api_platform.swagger.action.ui' => 'getApiPlatform_Swagger_Action_UiService.php',
            'app.admin.banner' => 'getApp_Admin_BannerService.php',
            'app.admin.banner.template_registry' => 'getApp_Admin_Banner_TemplateRegistryService.php',
            'app.admin.classify_goods' => 'getApp_Admin_ClassifyGoodsService.php',
            'app.admin.classify_goods.template_registry' => 'getApp_Admin_ClassifyGoods_TemplateRegistryService.php',
            'app.admin.consumer' => 'getApp_Admin_ConsumerService.php',
            'app.admin.consumer.template_registry' => 'getApp_Admin_Consumer_TemplateRegistryService.php',
            'app.admin.custom_page' => 'getApp_Admin_CustomPageService.php',
            'app.admin.custom_page.template_registry' => 'getApp_Admin_CustomPage_TemplateRegistryService.php',
            'app.admin.goods' => 'getApp_Admin_GoodsService.php',
            'app.admin.goods.template_registry' => 'getApp_Admin_Goods_TemplateRegistryService.php',
            'app.admin.goods_banner' => 'getApp_Admin_GoodsBannerService.php',
            'app.admin.goods_banner.template_registry' => 'getApp_Admin_GoodsBanner_TemplateRegistryService.php',
            'app.admin.marketing' => 'getApp_Admin_MarketingService.php',
            'app.admin.marketing.template_registry' => 'getApp_Admin_Marketing_TemplateRegistryService.php',
            'app.admin.order' => 'getApp_Admin_OrderService.php',
            'app.admin.order.template_registry' => 'getApp_Admin_Order_TemplateRegistryService.php',
            'app.admin.order_bill' => 'getApp_Admin_OrderBillService.php',
            'app.admin.order_bill.template_registry' => 'getApp_Admin_OrderBill_TemplateRegistryService.php',
            'app.admin.receipt_infos' => 'getApp_Admin_ReceiptInfosService.php',
            'app.admin.receipt_infos.template_registry' => 'getApp_Admin_ReceiptInfos_TemplateRegistryService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'getDebugBlocksCommandService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService.php',
            'console.command.public_alias.api_platform.swagger.command.swagger_command' => 'getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService.php',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'rip.redis.pool' => 'getRip_Redis_PoolService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService.php',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService.php',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService.php',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService.php',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService.php',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService.php',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService.php',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService.php',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService.php',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService.php',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService.php',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService.php',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService.php',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService.php',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService.php',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService.php',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService.php',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService.php',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService.php',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService.php',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService.php',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService.php',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService.php',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService.php',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService.php',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService.php',
            'sonata.formatter.block.formatter' => 'getSonata_Formatter_Block_FormatterService.php',
            'sonata.media.admin.gallery' => 'getSonata_Media_Admin_GalleryService.php',
            'sonata.media.admin.gallery.template_registry' => 'getSonata_Media_Admin_Gallery_TemplateRegistryService.php',
            'sonata.media.admin.gallery_has_media' => 'getSonata_Media_Admin_GalleryHasMediaService.php',
            'sonata.media.admin.gallery_has_media.template_registry' => 'getSonata_Media_Admin_GalleryHasMedia_TemplateRegistryService.php',
            'sonata.media.admin.media' => 'getSonata_Media_Admin_MediaService.php',
            'sonata.media.admin.media.manager' => 'getSonata_Media_Admin_Media_ManagerService.php',
            'sonata.media.admin.media.template_registry' => 'getSonata_Media_Admin_Media_TemplateRegistryService.php',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService.php',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService.php',
            'sonata.media.block.gallery_list' => 'getSonata_Media_Block_GalleryListService.php',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService.php',
            'sonata.media.formatter.twig' => 'getSonata_Media_Formatter_TwigService.php',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService.php',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService.php',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService.php',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService.php',
            'sonata.user.admin.group.template_registry' => 'getSonata_User_Admin_Group_TemplateRegistryService.php',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService.php',
            'sonata.user.admin.user.template_registry' => 'getSonata_User_Admin_User_TemplateRegistryService.php',
            'sonata.user.form.roles_matrix_type' => 'getSonata_User_Form_RolesMatrixTypeService.php',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService.php',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
        );
        $this->aliases = array(
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'sonata.user.group_manager' => 'fos_user.group_manager',
            'sonata.user.user_manager' => 'fos_user.user_manager',
        );

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Cache/Psr6Cache.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ProxyTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Serializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/FileLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/fresh/doctrine-enum-bundle/Twig/Extension/AbstractEnumTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/fresh/doctrine-enum-bundle/Twig/Extension/EnumConstantTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/fresh/doctrine-enum-bundle/Twig/Extension/EnumValuesAsArrayTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/fresh/doctrine-enum-bundle/Twig/Extension/ReadableEnumValueTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/GlobalsInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FormTypeExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTextExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/StatusExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTemplateExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/Extension/BlockExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/Extension/TemplateRegistryExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/StringLoader.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRendererInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Twig/CKEditorExtension.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Twig/SerializerRuntimeExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Twig/Extension/MarkdownTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Twig/Extension/TextFormatterExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Twig/RolesMatrixExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/AdapterChain.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/DoctrineORMAdapter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockContextManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockContextManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderChain.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Loader/ServiceLoader.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockRendererInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockRenderer.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/HelperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/Helper.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/Helper/BlockHelper.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandler.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/MatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Matcher.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/ChainProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/Pool.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRenderer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Builder/JsonBuilder.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/Pool.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Security/DownloadStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Security/RolesDownloadStrategy.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Thumbnail/ThumbnailInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Thumbnail/FormatThumbnail.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/FileProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/ImageProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/BaseVideoProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/YouTubeProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/DailyMotionProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Provider/VimeoProvider.php';
            include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Browser.php';
            include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/ClientInterface.php';
            include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/AbstractClient.php';
            include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/AbstractCurl.php';
            include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/Curl.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Twig/Extension/MediaExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/StreamFactory.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/ChecksumCalculator.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/SizeCalculator.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/MimeTypeProvider.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/Local.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Filesystem/Local.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/ManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/BaseManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/BaseEntityManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/PageableManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Model/MediaManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Entity/MediaManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Generator/DefaultGenerator.php';
            include_once $this->targetDirs[3].'/vendor/imagine/imagine/lib/Imagine/Image/ImagineInterface.php';
            include_once $this->targetDirs[3].'/vendor/imagine/imagine/lib/Imagine/Image/AbstractImagine.php';
            include_once $this->targetDirs[3].'/vendor/imagine/imagine/lib/Imagine/Gd/Imagine.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resizer/ResizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resizer/SimpleResizer.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/ParserManager.php';
            include_once $this->targetDirs[3].'/vendor/michelf/php-markdown/Michelf/MarkdownInterface.php';
            include_once $this->targetDirs[3].'/vendor/michelf/php-markdown/Michelf/Markdown.php';
            include_once $this->targetDirs[3].'/vendor/michelf/php-markdown/Michelf/MarkdownExtra.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/MarkdownParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/MarkdownParser.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/Preset/Min.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/Preset/Light.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/Preset/Medium.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/Preset/Max.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Parser/Preset/Flavored.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/PoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/Pool.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/FormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/BaseFormatter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/MarkdownFormatter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/TextFormatter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/RawFormatter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Formatter/TwigFormatter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Extension/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Extension/BaseExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Extension/GistExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Extension/ControlFlowExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Twig/Loader/LoaderSelector.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Array.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Sandbox.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Sandbox/SecurityPolicyInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Twig/SecurityPolicyContainerAware.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Lexer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/RolesBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/ExpandableRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/PermissionLabelsBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/MatrixRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/MatrixRolesBuilder.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilder.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/SecurityRolesBuilder.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FormatsProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/OperationAwareFormatsProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FormatsProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Filter/QueryParameterValidateListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/MessageSelector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? $this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'), 250);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService());
        }, 1 => 'onKernelRequest'), 7);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService());
        }, 1 => 'onKernelRequest'), 4);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.write'] ?? $this->load('getApiPlatform_Listener_View_WriteService.php'));
        }, 1 => 'onKernelView'), 32);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService());
        }, 1 => 'onKernelRequest'), 2);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.serialize'] ?? $this->load('getApiPlatform_Listener_View_SerializeService.php'));
        }, 1 => 'onKernelView'), 16);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.respond'] ?? $this->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener());
        }, 1 => 'onKernelView'), 8);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['api_platform.listener.exception.validation'] ?? $this->load('getApiPlatform_Listener_Exception_ValidationService.php'));
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['api_platform.listener.exception'] ?? $this->load('getApiPlatform_Listener_ExceptionService.php'));
        }, 1 => 'onKernelException'), -96);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.validate'] ?? $this->load('getApiPlatform_Listener_View_ValidateService.php'));
        }, 1 => 'onKernelView'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onKernelRequest'), 1);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.fos_user.event_listener'] ?? $this->load('getApiPlatform_FosUser_EventListenerService.php'));
        }, 1 => 'onKernelView'), 24);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService());
        }, 1 => 'onKernelResponse'), -1);
        $instance->addListener('rip.wechat.member_pay', array(0 => function () {
            return ($this->privates['App\EventSubscriber\MemberPaySubscriber'] ?? $this->load('getMemberPaySubscriberService.php'));
        }, 1 => 'onRipWechatMemberPay'), 0);
        $instance->addListener('rip.wechat.order_pay', array(0 => function () {
            return ($this->privates['App\EventSubscriber\OrderPaySubscriber'] ?? $this->load('getOrderPaySubscriberService.php'));
        }, 1 => 'onRipWechatOrderPay'), 0);
        $instance->addListener('rip.wechat.notify_message', array(0 => function () {
            return ($this->privates['App\EventSubscriber\WechatNotifySubscriber'] ?? $this->load('getWechatNotifySubscriberService.php'));
        }, 1 => 'onRipWechatNotifyMessage'), 0);
        $instance->addListener('rip.wechat.success_refund', array(0 => function () {
            return ($this->privates['App\EventSubscriber\WechatPayRefundSubscriber'] ?? $this->load('getWechatPayRefundSubscriberService.php'));
        }, 1 => 'onRipWechatSuccessRefund'), 0);
        $instance->addListener('rip.wechat.success_pay', array(0 => function () {
            return ($this->privates['App\EventSubscriber\WechatPaySubscriber'] ?? $this->load('getWechatPaySubscriberService.php'));
        }, 1 => 'onRipWechatSuccessPay'), 0);
        $instance->addListener('rip.wechat.post_order', array(0 => function () {
            return ($this->privates['App\EventSubscriber\WechatPaySubscriber'] ?? $this->load('getWechatPaySubscriberService.php'));
        }, 1 => 'onRipWechatPostOrder'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? $this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('fos_user.security.implicit_login', array(0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.registration.confirmed', array(0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.change_password.edit.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.create.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.delete.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.edit.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.profile.edit.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.initialize', array(0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetInitialize'), 0);
        $instance->addListener('fos_user.resetting.reset.success', array(0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetSuccess'), 0);
        $instance->addListener('fos_user.resetting.reset.request', array(0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetRequest'), 0);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
            yield 1 => ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
            yield 2 => ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
        }, 7)));
    }

    /*
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->load('getKnpMenu_Voter_RouterService.php'));
            yield 1 => ($this->services['sonata.admin.menu.matcher.voter.admin'] ?? $this->load('getSonata_Admin_Menu_Matcher_Voter_AdminService.php'));
            yield 2 => ($this->services['sonata.admin.menu.matcher.voter.active'] ?? $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter());
        }, 3));
    }

    /*
     * Gets the public 'markdown.parser' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\ServiceLocator(array('routing.loader' => function (): \Symfony\Component\Config\Loader\LoaderInterface {
            return ($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php'));
        })))->withContext('router.default', $this), 'kernel::loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcProdProjectContainerUrlMatcher', 'strict_requirements' => NULL, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()));

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['api_platform.swagger.normalizer.api_gateway'] ?? $this->getApiPlatform_Swagger_Normalizer_ApiGatewayService());
        $b = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $c = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $d = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $e = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $f = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $g = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService());
        $h = ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService());

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => $a, 1 => $a, 2 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer(array(), NULL), 3 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(false), 4 => new \ApiPlatform\Core\GraphQl\Serializer\ItemNormalizer($b, $c, $d, $e, $f, NULL, $g, $h, false), 5 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer('Y-m-d H:i:s'), 6 => new \ApiPlatform\Core\Serializer\ItemNormalizer($b, $c, $d, $e, $f, NULL, $g, $h, false), 7 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 9 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer(), 10 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 12 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($g, NULL, $f, ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($g))), array(0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')));
    }

    /*
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /*
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, '油画', 'bundles/sonataadmin/logo_title.png', array('title_mode' => 'single_text', 'html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/fosckeditor/ckeditor.js', 22 => 'bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js', 23 => 'bundles/sonataformatter/markitup/sets/markdown/set.js', 24 => 'bundles/sonataformatter/markitup/sets/html/set.js', 25 => 'bundles/sonataformatter/markitup/sets/textile/set.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'admin/css/common.css', 15 => 'bundles/sonataformatter/markitup/skins/sonata/style.css', 16 => 'bundles/sonataformatter/markitup/sets/markdown/style.css', 17 => 'bundles/sonataformatter/markitup/sets/html/style.css', 18 => 'bundles/sonataformatter/markitup/sets/textile/style.css'), 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $instance->setTemplateRegistry(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
        $instance->setAdminServiceIds(array(0 => 'app.admin.banner', 1 => 'app.admin.goods', 2 => 'app.admin.classify_goods', 3 => 'app.admin.goods_banner', 4 => 'app.admin.marketing', 5 => 'app.admin.custom_page', 6 => 'app.admin.consumer', 7 => 'app.admin.receipt_infos', 8 => 'app.admin.order', 9 => 'app.admin.order_bill', 10 => 'sonata.media.admin.media', 11 => 'sonata.media.admin.gallery', 12 => 'sonata.media.admin.gallery_has_media', 13 => 'sonata.user.admin.user', 14 => 'sonata.user.admin.group'));
        $instance->setAdminGroups(array('sonata_admin_operate' => array('label' => 'sonata_admin_operate', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'app.admin.banner', 'label' => 'BannerAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'app.admin.marketing', 'label' => 'MarketingAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 2 => array('admin' => 'app.admin.custom_page', 'label' => 'CustomPageAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'sonata_admin_goods' => array('label' => 'sonata_admin_goods', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'app.admin.goods', 'label' => 'GoodsAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'app.admin.classify_goods', 'label' => 'ClassifyGoodsAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'sonata_admin_user' => array('label' => 'sonata_admin_user', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'app.admin.consumer', 'label' => 'ConsumerAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'sonata_admin_order' => array('label' => 'sonata_admin_order', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'app.admin.order', 'label' => 'OrderAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'app.admin.order_bill', 'label' => 'OrderBillAdmin', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'sonata_media' => array('label' => 'sonata_media', 'label_catalogue' => 'SonataMediaBundle', 'icon' => '<i class=\'fa fa-image\'></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.media.admin.media', 'label' => 'media', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.media.admin.gallery', 'label' => 'gallery', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'sonata_user' => array('label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class=\'fa fa-users\'></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.user.admin.user', 'label' => 'users', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.user.admin.group', 'label' => 'groups', 'route' => '', 'route_params' => array(), 'route_absolute' => false)))));
        $instance->setAdminClasses(array('App\\Entity\\Banner' => array(0 => 'app.admin.banner'), 'App\\Entity\\Goods' => array(0 => 'app.admin.goods'), 'App\\Entity\\ClassifyGoods' => array(0 => 'app.admin.classify_goods'), 'App\\Entity\\GoodsBanner' => array(0 => 'app.admin.goods_banner'), 'App\\Entity\\Marketing' => array(0 => 'app.admin.marketing'), 'App\\Entity\\CustomPage' => array(0 => 'app.admin.custom_page'), 'App\\Entity\\Consumer' => array(0 => 'app.admin.consumer'), 'App\\Entity\\ReceiptInfo' => array(0 => 'app.admin.receipt_infos'), 'App\\Entity\\Order' => array(0 => 'app.admin.order'), 'App\\Entity\\OrderBill' => array(0 => 'app.admin.order_bill'), 'App\\Application\\Sonata\\MediaBundle\\Entity\\Media' => array(0 => 'sonata.media.admin.media'), 'App\\Application\\Sonata\\MediaBundle\\Entity\\Gallery' => array(0 => 'sonata.media.admin.gallery'), 'App\\Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia' => array(0 => 'sonata.media.admin.gallery_has_media'), 'App\\Application\\Sonata\\UserBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'App\\Application\\Sonata\\UserBundle\\Entity\\Group' => array(0 => 'sonata.user.admin.group')));

        return $instance;
    }

    /*
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['translator'] ?? $this->getTranslatorService()), $this, ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /*
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.stats')))), ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array());
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', array(0 => 'admin'));
        $instance->add('sonata.media.block.media', 'sonata.media.block.media', array());
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media', array());
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery', array());
        $instance->add('sonata.media.block.gallery_list', 'sonata.media.block.gallery_list', array());
        $instance->add('sonata.formatter.block.formatter', 'sonata.formatter.block.formatter', array());

        return $instance;
    }

    /*
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        $a = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());
        $a->setDefaultFilter('debug_only');
        $a->setDefaultRenderer('throw');

        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $a, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), false);
    }

    /*
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension();
    }

    /*
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(($this->services['doctrine'] ?? $this->getDoctrineService())));

        return $instance;
    }

    /*
     * Gets the public 'sonata.formatter.twig.control_flow' shared service.
     *
     * @return \Sonata\FormatterBundle\Extension\ControlFlowExtension
     */
    protected function getSonata_Formatter_Twig_ControlFlowService()
    {
        return $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension();
    }

    /*
     * Gets the public 'sonata.formatter.twig.gist' shared service.
     *
     * @return \Sonata\FormatterBundle\Extension\GistExtension
     */
    protected function getSonata_Formatter_Twig_GistService()
    {
        return $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension();
    }

    /*
     * Gets the public 'sonata.media.manager.media' shared service.
     *
     * @return \Sonata\MediaBundle\Entity\MediaManager
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Entity\MediaManager('App\\Application\\Sonata\\MediaBundle\\Entity\\Media', ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the public 'sonata.media.metadata.proxy' shared service.
     *
     * @return \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this);
    }

    /*
     * Gets the public 'sonata.media.pool' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\Pool
     */
    protected function getSonata_Media_PoolService()
    {
        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', array(0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file', 4 => 'sonata.media.provider.vimeo'), array('default_small' => array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'default_big' => array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addDownloadStrategy('sonata.media.security.superadmin_strategy', new \Sonata\MediaBundle\Security\RolesDownloadStrategy(($this->services['translator'] ?? $this->getTranslatorService()), new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SUPER_ADMIN')));
        $instance->addProvider('sonata.media.provider.image', ($this->services['sonata.media.provider.image'] ?? $this->getSonata_Media_Provider_ImageService()));
        $instance->addProvider('sonata.media.provider.file', ($this->services['sonata.media.provider.file'] ?? $this->getSonata_Media_Provider_FileService()));
        $instance->addProvider('sonata.media.provider.youtube', ($this->services['sonata.media.provider.youtube'] ?? $this->getSonata_Media_Provider_YoutubeService()));
        $instance->addProvider('sonata.media.provider.dailymotion', ($this->services['sonata.media.provider.dailymotion'] ?? $this->getSonata_Media_Provider_DailymotionService()));
        $instance->addProvider('sonata.media.provider.vimeo', ($this->services['sonata.media.provider.vimeo'] ?? $this->getSonata_Media_Provider_VimeoService()));

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.dailymotion' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\DailyMotionProvider
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? $this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media')), ($this->privates['sonata.media.generator.default'] ?? $this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator()), ($this->privates['sonata.media.thumbnail.format'] ?? $this->privates['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg')), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)));

        $instance->setTemplates(array('helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_dailymotion.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.file' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\FileProvider
     */
    protected function getSonata_Media_Provider_FileService()
    {
        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? $this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media')), ($this->privates['sonata.media.generator.default'] ?? $this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator()), ($this->privates['sonata.media.thumbnail.format'] ?? $this->privates['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg')), array(0 => 'pdf', 1 => 'txt', 2 => 'rtf', 3 => 'doc', 4 => 'docx', 5 => 'xls', 6 => 'xlsx', 7 => 'ppt', 8 => 'pptx', 9 => 'odt', 10 => 'odg', 11 => 'odp', 12 => 'ods', 13 => 'odc', 14 => 'odf', 15 => 'odb', 16 => 'csv', 17 => 'xml'), array(0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'), ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)));

        $instance->setTemplates(array('helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_file.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.image' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\ImageProvider
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? $this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media')), ($this->privates['sonata.media.generator.default'] ?? $this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator()), ($this->privates['sonata.media.thumbnail.format'] ?? $this->privates['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg')), array(0 => 'jpg', 1 => 'png', 2 => 'jpeg'), array(0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'), ($this->privates['sonata.media.adapter.image.gd'] ?? $this->privates['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine()), ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)));

        $instance->setTemplates(array('helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_image.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.vimeo' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\VimeoProvider
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? $this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media')), ($this->privates['sonata.media.generator.default'] ?? $this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator()), ($this->privates['sonata.media.thumbnail.format'] ?? $this->privates['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg')), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)));

        $instance->setTemplates(array('helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_vimeo.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'sonata.media.provider.youtube' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\YouTubeProvider
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? $this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media')), ($this->privates['sonata.media.generator.default'] ?? $this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator()), ($this->privates['sonata.media.thumbnail.format'] ?? $this->privates['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg')), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)), false);

        $instance->setTemplates(array('helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_youtube.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ($this->privates['translation.loader.csv'] ?? $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader());
        }, 'translation.loader.dat' => function () {
            return ($this->privates['translation.loader.dat'] ?? $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader());
        }, 'translation.loader.ini' => function () {
            return ($this->privates['translation.loader.ini'] ?? $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader());
        }, 'translation.loader.json' => function () {
            return ($this->privates['translation.loader.json'] ?? $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader());
        }, 'translation.loader.mo' => function () {
            return ($this->privates['translation.loader.mo'] ?? $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader());
        }, 'translation.loader.php' => function () {
            return ($this->privates['translation.loader.php'] ?? $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader());
        }, 'translation.loader.po' => function () {
            return ($this->privates['translation.loader.po'] ?? $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader());
        }, 'translation.loader.qt' => function () {
            return ($this->privates['translation.loader.qt'] ?? $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader());
        }, 'translation.loader.res' => function () {
            return ($this->privates['translation.loader.res'] ?? $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader());
        }, 'translation.loader.xliff' => function () {
            return ($this->privates['translation.loader.xliff'] ?? $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader());
        }, 'translation.loader.yml' => function () {
            return ($this->privates['translation.loader.yml'] ?? $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader());
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'zh_CN', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ar.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.bg.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.bg.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.bg.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.bg.xliff')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ca.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ca.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ca.xliff')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.cs.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.cs.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.de.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.de.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.de.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.de.xliff'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 10 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 11 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.de.xliff')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Resources/translations/PicossSonataExtraAdminBundle.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.en.xliff'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.en.xliff'), 10 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 11 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 12 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.en.xliff')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.es.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.es.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.es.xliff')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.eu.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.eu.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fa.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fa.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fi.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fi.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fi.xliff')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Resources/translations/PicossSonataExtraAdminBundle.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fr.xliff'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.fr.xliff'), 10 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 11 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 12 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fr.xliff')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hr.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hr.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hu.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.hu.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.hu.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hu.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.it.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.it.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.it.xliff')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ja.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ja.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.ja.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ja.xliff')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lb.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lb.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lt.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lt.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.lt.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.lt.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lv.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.nl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.nl.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.no.xliff')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.pl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.pl.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pl.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.pt_BR.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt_BR.xliff')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ro.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ro.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ro.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ru.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ru.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.ru.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/FOSUserBundle.ru.xliff'), 11 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ru.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sk.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.sk.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sk.xliff')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.sl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/translations/SonataFormatterBundle.sl.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sl.xliff')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')), 'tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.tr.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.uk.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.uk.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.uk.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 7 => ($this->targetDirs[3].'/translations/PicossSonataExtraAdminBundle.zh_CN.xliff'), 8 => ($this->targetDirs[3].'/translations/SonataAdminBundle.zh_CN.xliff'), 9 => ($this->targetDirs[3].'/translations/SonataMediaBundle.zh_CN.xliff'), 10 => ($this->targetDirs[3].'/translations/SonataUserBundle.zh_CN.xliff'), 11 => ($this->targetDirs[3].'/translations/messages.zh_CN.xliff'), 12 => ($this->targetDirs[3].'/translations/PicossSonataExtraAdminBundle.zh_CN.xliff'), 13 => ($this->targetDirs[3].'/translations/SonataAdminBundle.zh_CN.xliff'), 14 => ($this->targetDirs[3].'/translations/SonataMediaBundle.zh_CN.xliff'), 15 => ($this->targetDirs[3].'/translations/SonataUserBundle.zh_CN.xliff'), 16 => ($this->targetDirs[3].'/translations/messages.zh_CN.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.zh_TW.xliff')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ua.xlf')), 'sv_SE' => array(0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sv_SE.xliff')), 'zh_HK' => array(0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_HK.xliff')), 'bn' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')), 'bn_BD' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()));
        $instance->setFallbackLocales(array(0 => 'zh_CN', 1 => 'zh_CN'));

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService()), array('form_themes' => array(0 => 'form_div_layout.html.twig', 1 => '@SonataUser/Form/form_admin_fields.html.twig', 2 => '@SonataFormatter/Form/formatter.html.twig'), 'paths' => array(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, ($this->targetDirs[3].'/templates') => NULL), 'debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception::showAction', 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ($this->services['translator'] ?? $this->getTranslatorService());
        $b = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());

        $c = new \Knp\Menu\Util\MenuManipulator();
        $d = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), ($this->targetDirs[3].'/src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Fresh\DoctrineEnumBundle\Twig\Extension\EnumConstantTwigExtension($this->parameters['doctrine.dbal.connection_factory.types']));
        $instance->addExtension(new \Fresh\DoctrineEnumBundle\Twig\Extension\EnumValuesAsArrayTwigExtension($this->parameters['doctrine.dbal.connection_factory.types']));
        $instance->addExtension(new \Fresh\DoctrineEnumBundle\Twig\Extension\ReadableEnumValueTwigExtension($this->parameters['doctrine.dbal.connection_factory.types']));
        $instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension()));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard'));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\StatusExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTemplateExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(false, $a, ($this->services['sonata.core.model.adapter.chain'] ?? $this->getSonata_Core_Model_Adapter_ChainService())));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService())));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('list' => function () {
            return ($this->privates['knp_menu.renderer.list'] ?? $this->load('getKnpMenu_Renderer_ListService.php'));
        }, 'twig' => function () {
            return ($this->privates['knp_menu.renderer.twig'] ?? $this->load('getKnpMenu_Renderer_TwigService.php'));
        })), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), $c, $d), $d, $c));
        $instance->addExtension(($this->services['sonata.admin.twig.extension'] ?? $this->getSonata_Admin_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), $this));
        $instance->addExtension(new \Twig_Extension_StringLoader());
        $instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(($this->privates['fos_ck_editor.renderer'] ?? $this->getFosCkEditor_RendererService())));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(($this->privates['sonata.media.twig.extension'] ?? $this->getSonata_Media_Twig_ExtensionService()));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension(($this->privates['markdown.parser.parser_manager'] ?? $this->getMarkdown_Parser_ParserManagerService())));
        $instance->addExtension(new \Sonata\FormatterBundle\Twig\Extension\TextFormatterExtension(($this->privates['sonata.formatter.pool'] ?? $this->getSonata_Formatter_PoolService())));
        $instance->addExtension(new \Sonata\UserBundle\Twig\RolesMatrixExtension(($this->privates['sonata.user.matrix_roles_builder'] ?? $this->getSonata_User_MatrixRolesBuilderService())));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ($this->services['jms_serializer.twig_extension.serializer_runtime_helper'] ?? $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php'));
        }, 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageRuntime' => function () {
            return ($this->privates['sonata.core.flashmessage.twig.runtime'] ?? $this->load('getSonata_Core_Flashmessage_Twig_RuntimeService.php'));
        }, 'Sonata\\CoreBundle\\Twig\\Extension\\StatusRuntime' => function () {
            return ($this->privates['sonata.core.twig.status_runtime'] ?? $this->load('getSonata_Core_Twig_StatusRuntimeService.php'));
        }, 'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => function () {
            return ($this->privates['twig.runtime.security_csrf'] ?? $this->load('getTwig_Runtime_SecurityCsrfService.php'));
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ($this->privates['twig.runtime.httpkernel'] ?? $this->load('getTwig_Runtime_HttpkernelService.php'));
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ($this->privates['twig.form.renderer'] ?? $this->load('getTwig_Form_RendererService.php'));
        }))));
        $instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig')));
        $instance->addGlobal('sonata_admin', ($this->services['sonata.admin.twig.global'] ?? $this->getSonata_Admin_Twig_GlobalService()));
        $instance->addGlobal('sonata_media', new \Sonata\MediaBundle\Twig\GlobalVariables($this));
        $instance->addGlobal('sonata_user', new \Sonata\UserBundle\Twig\GlobalVariables($this));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->load('getAnnotations_CacheService.php')), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->privates['api_platform.cache.identifiers_extractor'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XjW9dRAHSQ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->privates['api_platform.cache.metadata.property'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qv-vqVOWG9', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->privates['api_platform.cache.metadata.resource'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('2y6JhQ0OzO', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->privates['api_platform.cache.route_name_resolver'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('YpR2s8HmoD', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->privates['api_platform.cache.subresource_operation_factory'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('w64d4oXrWx', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider
     */
    protected function getApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['api_platform.collection_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php'));
        }, 1));
    }

    /*
     * Gets the private 'api_platform.filter_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getApiPlatform_FilterLocatorService()
    {
        return $this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('rip.classify_goods.search' => function () {
            return ($this->privates['rip.classify_goods.search_filter'] ?? $this->load('getRip_ClassifyGoods_SearchFilterService.php'));
        }, 'rip.consumer_order.search' => function () {
            return ($this->privates['rip.consumer_order.search_filter'] ?? $this->load('getRip_ConsumerOrder_SearchFilterService.php'));
        }, 'rip.goods.order' => function () {
            return ($this->privates['rip.goods.order_filter'] ?? $this->load('getRip_Goods_OrderFilterService.php'));
        }, 'rip.goods.search' => function () {
            return ($this->privates['rip.goods.search_filter'] ?? $this->load('getRip_Goods_SearchFilterService.php'));
        }, 'rip.order.order' => function () {
            return ($this->privates['rip.order.order_filter'] ?? $this->load('getRip_Order_OrderFilterService.php'));
        }, 'rip.order.search' => function () {
            return ($this->privates['rip.order.search_filter'] ?? $this->load('getRip_Order_SearchFilterService.php'));
        }, 'rip.order_bill.search' => function () {
            return ($this->privates['rip.order_bill.search_filter'] ?? $this->load('getRip_OrderBill_SearchFilterService.php'));
        }));
    }

    /*
     * Gets the private 'api_platform.formats_provider' shared service.
     *
     * @return \ApiPlatform\Core\Api\FormatsProvider
     */
    protected function getApiPlatform_FormatsProviderService()
    {
        return $this->privates['api_platform.formats_provider'] = new \ApiPlatform\Core\Api\FormatsProvider(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /*
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL);
    }

    /*
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? $this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer());
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? $this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer());
        }, 2));
    }

    /*
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /*
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.subresource_data_provider'] ?? $this->getApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /*
     * Gets the private 'api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainItemDataProvider
     */
    protected function getApiPlatform_ItemDataProviderService()
    {
        return $this->privates['api_platform.item_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php'));
        }, 1));
    }

    /*
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /*
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /*
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['api_platform.collection_data_provider'] ?? $this->getApiPlatform_CollectionDataProviderService()), ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService()), ($this->privates['api_platform.subresource_data_provider'] ?? $this->getApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /*
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\Filter\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\Filter\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()));
    }

    /*
     * Gets the private 'api_platform.metadata.extractor.yaml' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Extractor\YamlExtractor
     */
    protected function getApiPlatform_Metadata_Extractor_YamlService()
    {
        return $this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array(0 => ($this->targetDirs[3].'/config/api_platform/resources/ClassifyGoods.yaml'), 1 => ($this->targetDirs[3].'/config/api_platform/resources/Marketing.yaml'), 2 => ($this->targetDirs[3].'/config/api_platform/resources/Consumer.yaml'), 3 => ($this->targetDirs[3].'/config/api_platform/resources/Banner.yaml'), 4 => ($this->targetDirs[3].'/config/api_platform/resources/Goods.yaml'), 5 => ($this->targetDirs[3].'/config/api_platform/resources/ReceiptInfo.yaml'), 6 => ($this->targetDirs[3].'/config/api_platform/resources/Member.yaml'), 7 => ($this->targetDirs[3].'/config/api_platform/resources/Order.yaml'), 8 => ($this->targetDirs[3].'/config/api_platform/resources/CustomPage.yaml'), 9 => ($this->targetDirs[3].'/config/api_platform/resources/OrderBill.yaml')));
    }

    /*
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? $this->getApiPlatform_Metadata_Extractor_YamlService()), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? $this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array()))))))))))));
    }

    /*
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? $this->getApiPlatform_Metadata_Extractor_YamlService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? $this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()))))));
    }

    /*
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? $this->getApiPlatform_Metadata_Extractor_YamlService()), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? $this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())))))))), $this->parameters['api_platform.formats']));
    }

    /*
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? $this->getApiPlatform_Metadata_Extractor_YamlService()), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->getParameter('api_platform.resource_class_directories'), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? $this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array()))))));
    }

    /*
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? $this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator())));
    }

    /*
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /*
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService()));
    }

    /*
     * Gets the private 'api_platform.security.resource_access_checker' shared service.
     *
     * @return \ApiPlatform\Core\Security\ResourceAccessChecker
     */
    protected function getApiPlatform_Security_ResourceAccessCheckerService()
    {
        return $this->privates['api_platform.security.resource_access_checker'] = new \ApiPlatform\Core\Security\ResourceAccessChecker(new \ApiPlatform\Core\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /*
     * Gets the private 'api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider
     */
    protected function getApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['api_platform.subresource_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php'));
        }, 1));
    }

    /*
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? $this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator())));
    }

    /*
     * Gets the private 'api_platform.swagger.normalizer.api_gateway' shared service.
     *
     * @return \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer
     */
    protected function getApiPlatform_Swagger_Normalizer_ApiGatewayService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $b = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());
        $c = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());

        return $this->privates['api_platform.swagger.normalizer.api_gateway'] = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer($a, ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver($b, $a), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver($b, ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $c), NULL, ($this->privates['api_platform.filter_locator'] ?? $this->getApiPlatform_FilterLocatorService()), NULL, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', array(), array(), $c, true, 'page', false, 'itemsPerPage', ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService())));
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), '', false)), array());
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('hErkFuB1zW', NULL, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('t+BtN8wAHw', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('g4VtA9iApD', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $c = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/prod.deprecations.log'), 100, true, NULL);
        $d = ($this->privates['monolog.processor.psr_log_message'] ?? $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor());

        $c->pushProcessor($d);
        $b = new \Monolog\Handler\FilterHandler($c, 100, 200, true);
        $b->pushProcessor($d);

        $a->pushHandler($b);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), false);
    }

    /*
     * Gets the private 'fos_ck_editor.renderer' shared service.
     *
     * @return \FOS\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getFosCkEditor_RendererService()
    {
        return $this->privates['fos_ck_editor.renderer'] = new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), (($this->has("twig")) ? ($this->get("twig")) : ($this->get("templating"))), (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)));
    }

    /*
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'knp_menu.menu_provider.chain' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProvider_ChainService()
    {
        return $this->privates['knp_menu.menu_provider.chain'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->load('getKnpMenu_MenuProvider_LazyService.php'));
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php'));
            yield 2 => ($this->privates['sonata.admin.menu.group_provider'] ?? $this->load('getSonata_Admin_Menu_GroupProviderService.php'));
        }, 3));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'zh_CN', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'markdown.parser.parser_manager' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\ParserManager
     */
    protected function getMarkdown_Parser_ParserManagerService()
    {
        $this->privates['markdown.parser.parser_manager'] = $instance = new \Knp\Bundle\MarkdownBundle\Parser\ParserManager();

        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $instance->addParser(($this->services['markdown.parser'] ?? $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max()), 'default');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/prod.log'), 100, true, NULL);
        $b = ($this->privates['monolog.processor.psr_log_message'] ?? $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor());

        $a->pushProcessor($b);

        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), array(0 => '^/'), 400), 0, true, true, NULL);

        $instance->pushProcessor($b);

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Nelmio\CorsBundle\Options\Resolver(array(0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults')))));
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()));
    }

    /*
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? $this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? $this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor());
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? $this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? $this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor());
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? $this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 1));
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.acl.voter.basic_permissions'] ?? $this->load('getSecurity_Acl_Voter_BasicPermissionsService.php'));
            yield 1 => ($this->privates['security.acl.voter.user_permissions'] ?? $this->load('getSecurity_Acl_Voter_UserPermissionsService.php'));
            yield 2 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 3 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load('getSecurity_Access_RoleHierarchyVoterService.php'));
            yield 4 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 5), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? $this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.main'] ?? $this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
        }, 3), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ($this->privates['security.firewall.map.context.admin'] ?? $this->load('getSecurity_Firewall_Map_Context_AdminService.php'));
        }, 'security.firewall.map.context.dev' => function () {
            return ($this->privates['security.firewall.map.context.dev'] ?? $this->load('getSecurity_Firewall_Map_Context_DevService.php'));
        }, 'security.firewall.map.context.main' => function () {
            return ($this->privates['security.firewall.map.context.main'] ?? $this->load('getSecurity_Firewall_Map_Context_MainService.php'));
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.zfHj2lW'] ?? $this->privates['.security.request_matcher.zfHj2lW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.6xxs_iP'] ?? $this->privates['.security.request_matcher.6xxs_iP'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.gt2QimV'] ?? $this->privates['.security.request_matcher.gt2QimV'] = new \Symfony\Component\HttpFoundation\RequestMatcher('.*'));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, 'user');

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $a = ($this->services['twig'] ?? $this->getTwigService());

        if (isset($this->privates['sensio_framework_extra.view.listener'])) {
            return $this->privates['sensio_framework_extra.view.listener'];
        }

        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), $a);
    }

    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 1 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Banner.yaml')), 2 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/ClassifyGoods.yaml')), 3 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Consumer.yaml')), 4 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/CustomPage.yaml')), 5 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Goods.yaml')), 6 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/GoodsBanner.yaml')), 7 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Marketing.yaml')), 8 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Member.yaml')), 9 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/Order.yaml')), 10 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/OrderBill.yaml')), 11 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/config/api_platform/serialization/ReceiptInfo.yaml')))), NULL), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService())));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('initialized_session' => function () {
            return ($this->services['session'] ?? null);
        }, 'session' => function () {
            return ($this->services['session'] ?? $this->load('getSessionService.php'));
        })));
    }

    /*
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->privates['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->getSonata_Block_Renderer_DefaultService()), ($this->services['sonata.block.context_manager.default'] ?? $this->getSonata_Block_ContextManager_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? $this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }

    /*
     * Gets the private 'sonata.formatter.pool' shared service.
     *
     * @return \Sonata\FormatterBundle\Formatter\Pool
     */
    protected function getSonata_Formatter_PoolService()
    {
        $this->privates['sonata.formatter.pool'] = $instance = new \Sonata\FormatterBundle\Formatter\Pool('text');

        $a = new \Sonata\FormatterBundle\Formatter\RawFormatter();

        $instance->setLogger(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
        $instance->add('markdown', new \Sonata\FormatterBundle\Formatter\MarkdownFormatter(($this->services['markdown.parser'] ?? $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max())), ($this->privates['sonata.formatter.twig.env.markdown'] ?? $this->getSonata_Formatter_Twig_Env_MarkdownService()));
        $instance->add('text', new \Sonata\FormatterBundle\Formatter\TextFormatter(), ($this->privates['sonata.formatter.twig.env.text'] ?? $this->getSonata_Formatter_Twig_Env_TextService()));
        $instance->add('rawhtml', $a, ($this->privates['sonata.formatter.twig.env.rawhtml'] ?? $this->getSonata_Formatter_Twig_Env_RawhtmlService()));
        $instance->add('richhtml', $a, ($this->privates['sonata.formatter.twig.env.richhtml'] ?? $this->getSonata_Formatter_Twig_Env_RichhtmlService()));
        $instance->add('twig', new \Sonata\FormatterBundle\Formatter\TwigFormatter(($this->services['twig'] ?? $this->getTwigService())), NULL);

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.markdown' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_MarkdownService()
    {
        $this->privates['sonata.formatter.twig.env.markdown'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService())), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension(($this->services['sonata.formatter.twig.control_flow'] ?? $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension()));
        $instance->addExtension(($this->services['sonata.formatter.twig.gist'] ?? $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension()));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.rawhtml' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_RawhtmlService()
    {
        $this->privates['sonata.formatter.twig.env.rawhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService())), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension(($this->services['sonata.formatter.twig.control_flow'] ?? $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension()));
        $instance->addExtension(($this->services['sonata.formatter.twig.gist'] ?? $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension()));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.richhtml' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_RichhtmlService()
    {
        $this->privates['sonata.formatter.twig.env.richhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService())), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension(($this->services['sonata.formatter.twig.control_flow'] ?? $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension()));
        $instance->addExtension(($this->services['sonata.formatter.twig.gist'] ?? $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension()));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /*
     * Gets the private 'sonata.formatter.twig.env.text' shared service.
     *
     * @return \Twig_Environment
     */
    protected function getSonata_Formatter_Twig_Env_TextService()
    {
        $this->privates['sonata.formatter.twig.env.text'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), ($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService())), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension(($this->services['sonata.formatter.twig.control_flow'] ?? $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension()));
        $instance->addExtension(($this->services['sonata.formatter.twig.gist'] ?? $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension()));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /*
     * Gets the private 'sonata.media.buzz.browser' shared service.
     *
     * @return \Buzz\Browser
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        $a = new \Buzz\Client\Curl();
        $a->setIgnoreErrors(true);
        $a->setMaxRedirects(5);
        $a->setTimeout(5);
        $a->setVerifyPeer(true);
        $a->setProxy(NULL);

        return $this->privates['sonata.media.buzz.browser'] = new \Buzz\Browser($a);
    }

    /*
     * Gets the private 'sonata.media.filesystem.local' shared service.
     *
     * @return \Gaufrette\Filesystem
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        return $this->privates['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem(new \Sonata\MediaBundle\Filesystem\Local(($this->targetDirs[3].'/public/uploads/media'), false));
    }

    /*
     * Gets the private 'sonata.media.resizer.simple' shared service.
     *
     * @return \Sonata\MediaBundle\Resizer\SimpleResizer
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        return $this->privates['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer(($this->privates['sonata.media.adapter.image.gd'] ?? $this->privates['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine()), 'inset', ($this->services['sonata.media.metadata.proxy'] ?? $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)));
    }

    /*
     * Gets the private 'sonata.media.twig.extension' shared service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\MediaExtension
     */
    protected function getSonata_Media_Twig_ExtensionService()
    {
        return $this->privates['sonata.media.twig.extension'] = new \Sonata\MediaBundle\Twig\Extension\MediaExtension(($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()), ($this->services['sonata.media.manager.media'] ?? $this->getSonata_Media_Manager_MediaService()));
    }

    /*
     * Gets the private 'sonata.user.matrix_roles_builder' shared service.
     *
     * @return \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder
     */
    protected function getSonata_User_MatrixRolesBuilderService()
    {
        $a = ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
        $b = ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService());
        $c = ($this->services['translator'] ?? $this->getTranslatorService());

        return $this->privates['sonata.user.matrix_roles_builder'] = new \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), new \Sonata\UserBundle\Security\RolesBuilder\AdminRolesBuilder($a, $b, $c), new \Sonata\UserBundle\Security\RolesBuilder\SecurityRolesBuilder($a, $b, $c, $this->parameters['security.role_hierarchy.roles']));
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src')))), $this->targetDirs[0]);
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    /*
     * Gets the private 'twig.loader.filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_Loader_FilesystemService()
    {
        $this->privates['twig.loader.filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/templates'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), '!SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), '!SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/templates/bundles/SonataAdminBundle'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/views'), '!SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), '!SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Resources/views'), 'PicossSonataExtraAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Resources/views'), '!PicossSonataExtraAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), 'FOSCKEditor');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), '!FOSCKEditor');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/views'), 'SonataMedia');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/views'), '!SonataMedia');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/views'), 'SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src/Resources/views'), '!SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Resources/views'), '!SonataUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/templates'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()))));
        $instance->addObjectInitializers(array(0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /*
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Sonata\\CoreBundle\\Validator\\InlineValidator' => function () {
            return ($this->services['sonata.admin.validator.inline'] ?? $this->load('getSonata_Admin_Validator_InlineService.php'));
        }, 'Sonata\\FormatterBundle\\Validator\\Constraints\\FormatterValidator' => function () {
            return ($this->privates['sonata.formatter.validator.formatter'] ?? $this->load('getSonata_Formatter_Validator_FormatterService.php'));
        }, 'Sonata\\MediaBundle\\Validator\\FormatValidator' => function () {
            return ($this->privates['sonata.media.validator.format'] ?? $this->load('getSonata_Media_Validator_FormatService.php'));
        }, 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load('getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load('getSecurity_Validator_UserPasswordService.php'));
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ($this->privates['validator.email'] ?? $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5'));
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
        }, 'doctrine.orm.validator.unique' => function () {
            return ($this->privates['doctrine.orm.validator.unique'] ?? $this->load('getDoctrine_Orm_Validator_UniqueService.php'));
        }, 'security.validator.user_password' => function () {
            return ($this->privates['security.validator.user_password'] ?? $this->load('getSecurity_Validator_UserPasswordService.php'));
        }, 'sonata.admin.validator.inline' => function () {
            return ($this->services['sonata.admin.validator.inline'] ?? $this->load('getSonata_Admin_Validator_InlineService.php'));
        }, 'sonata.core.validator.inline' => function () {
            return ($this->privates['sonata.core.validator.inline'] ?? $this->load('getSonata_Core_Validator_InlineService.php'));
        }, 'sonata.formatter.validator.formatter' => function () {
            return ($this->privates['sonata.formatter.validator.formatter'] ?? $this->load('getSonata_Formatter_Validator_FormatterService.php'));
        }, 'sonata.media.validator.format' => function () {
            return ($this->privates['sonata.media.validator.format'] ?? $this->load('getSonata_Media_Validator_FormatService.php'));
        }, 'validator.expression' => function () {
            return ($this->privates['validator.expression'] ?? $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator());
        })));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'rip.payment' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
        'nelmio_cors.defaults' => false,
        'api_platform.resource_class_directories' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'SwiftmailerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'FreshDoctrineEnumBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/fresh/doctrine-enum-bundle'),
                    'namespace' => 'Fresh\\DoctrineEnumBundle',
                ),
                'SonataCoreBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src'),
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'KnpMenuBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'SonataAdminBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'PicossSonataExtraAdminBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle'),
                    'namespace' => 'Picoss\\SonataExtraAdminBundle',
                ),
                'FOSCKEditorBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ),
                'SonataEasyExtendsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle/src'),
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ),
                'JMSSerializerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'SonataMediaBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src'),
                    'namespace' => 'Sonata\\MediaBundle',
                ),
                'ApplicationSonataMediaBundle' => array(
                    'path' => ($this->targetDirs[3].'/src/Application/Sonata/MediaBundle'),
                    'namespace' => 'App\\Application\\Sonata\\MediaBundle',
                ),
                'KnpMarkdownBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle'),
                    'namespace' => 'Knp\\Bundle\\MarkdownBundle',
                ),
                'SonataFormatterBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/src'),
                    'namespace' => 'Sonata\\FormatterBundle',
                ),
                'ApplicationSonataUserBundle' => array(
                    'path' => ($this->targetDirs[3].'/src/Application/Sonata/UserBundle'),
                    'namespace' => 'App\\Application\\Sonata\\UserBundle',
                ),
                'AclBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/acl-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\AclBundle',
                ),
                'FOSUserBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'SonataUserBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src'),
                    'namespace' => 'Sonata\\UserBundle',
                ),
                'NelmioCorsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'ApiPlatformBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ),
            ); break;
            case 'rip.payment': $value = array(
                'app_id' => 'wx7c0c304a87dddaca',
                'mch_id' => '1509749001',
                'key' => 'k6vC1uVczIN92AffoIXVRWwknGAMhApe',
                'cert_path' => '/data/apiclient_cert.pem',
                'key_path' => '/data/apiclient_key.pem',
                'notify_url' => 'http://www.nowhoarts.com/mpapp/pay/notify',
                'log' => array(
                    'default' => 'prod',
                    'channels' => array(
                        'prod' => array(
                            'driver' => 'daily',
                            'path' => ($this->targetDirs[2].'/log/prod_easywechat.log'),
                            'level' => 'error',
                        ),
                    ),
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'nelmio_cors.defaults': $value = array(
                'allow_origin' => array(
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ),
                'allow_credentials' => false,
                'allow_headers' => array(
                    0 => 'content-type',
                    1 => 'authorization',
                ),
                'expose_headers' => array(
                    0 => 'Link',
                ),
                'allow_methods' => array(
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ),
                'max_age' => 3600,
                'hosts' => array(

                ),
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ); break;
            case 'api_platform.resource_class_directories': $value = array(
                0 => ($this->targetDirs[3].'/config/api_platform/resources'),
                1 => ($this->targetDirs[3].'/vendor/picoss/sonata-extra-admin-bundle/Entity'),
                2 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Entity'),
                3 => ($this->targetDirs[3].'/src/Application/Sonata/MediaBundle/Entity'),
                4 => ($this->targetDirs[3].'/src/Application/Sonata/UserBundle/Entity'),
                5 => ($this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Entity'),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'FreshDoctrineEnumBundle' => 'Fresh\\DoctrineEnumBundle\\FreshDoctrineEnumBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'PicossSonataExtraAdminBundle' => 'Picoss\\SonataExtraAdminBundle\\PicossSonataExtraAdminBundle',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
                'ApplicationSonataMediaBundle' => 'App\\Application\\Sonata\\MediaBundle\\ApplicationSonataMediaBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'SonataFormatterBundle' => 'Sonata\\FormatterBundle\\SonataFormatterBundle',
                'ApplicationSonataUserBundle' => 'App\\Application\\Sonata\\UserBundle\\ApplicationSonataUserBundle',
                'AclBundle' => 'Symfony\\Bundle\\AclBundle\\AclBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcProdProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'zh_CN',
            'mailer_user' => 'rip',
            'redis_host' => 'localhost',
            'redis_port' => '6379',
            'rip.miniapp' => array(
                'app_id' => 'wx7c0c304a87dddaca',
                'secret' => '6b94a806f0bc5396211385744ab4f26d',
                'token' => '',
                'aes_key' => '',
            ),
            'rip.miniapp_message.ids' => array(
                'member_success' => 'r3qqjO16CXRe32HIP8hjIE9Z5hGltwVv4uxg4EttiCQ',
                'expired_notify' => '8BN6t1TH1JbYVzubx-tgFI3_tZBUjxugcuoZ0kAsNF8',
                'order_success' => '8BN6t1TH1JbYVzubx-tgFI3_tZBUjxugcuoZ0kAsNF8',
                'return_success' => 'ywXaPD7r9Dr_EuG9tpK0f1ps5GauajG5p6atqWH_LMc',
            ),
            'rip.miniapp_message.pages' => array(
                'member_success' => '',
                'expired_notify' => '',
                'order_success' => '',
                'return_success' => '',
            ),
            'rip.refund' => array(
                'notify_url' => 'http://www.nowhoarts.com/mpapp/refund/notify',
            ),
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'zh_CN',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
                1 => 'php',
            ),
            'templating.helper.form.resources' => array(
                0 => 'FOSCKEditorBundle:Form',
                1 => 'FrameworkBundle:Form',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'SexType' => array(
                    'class' => 'App\\DBAL\\Types\\SexType',
                    'commented' => true,
                ),
                'ConsumerType' => array(
                    'class' => 'App\\DBAL\\Types\\ConsumerType',
                    'commented' => true,
                ),
                'OrderType' => array(
                    'class' => 'App\\DBAL\\Types\\OrderType',
                    'commented' => true,
                ),
                'BannerType' => array(
                    'class' => 'App\\DBAL\\Types\\BannerType',
                    'commented' => true,
                ),
                'OrderBillType' => array(
                    'class' => 'App\\DBAL\\Types\\OrderBillType',
                    'commented' => true,
                ),
                'OrderActionType' => array(
                    'class' => 'App\\DBAL\\Types\\OrderActionType',
                    'commented' => true,
                ),
                'datetime' => array(
                    'class' => 'App\\DBAL\\Types\\PRCDateTimeType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'SONATA' => array(
                    0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => array(
                0 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@SonataUser/Form/form_admin_fields.html.twig',
                3 => '@SonataFormatter/Form/formatter.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.deprecation_filter' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'php',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.admin.block.stats' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.stats' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.twig.extension.x_editable_type_mapping' => array(
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ),
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.templates' => array(
                'user_block' => '@SonataUser/Admin/Core/user_block.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'layout' => '@SonataAdmin/standard_layout.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'right',
                    'type' => 'sonata.admin.block.admin_list',
                    'settings' => array(
                        'groups' => array(
                            0 => 'sonata_user',
                            1 => 'sonata_media',
                            2 => 'sonata_admin_order',
                        ),
                    ),
                    'roles' => array(

                    ),
                    'class' => 'col-md-4',
                ),
                1 => array(
                    'position' => 'left',
                    'type' => 'sonata.admin.block.admin_list',
                    'settings' => array(
                        'groups' => array(
                            0 => 'sonata_admin_operate',
                            1 => 'sonata_admin_goods',
                            2 => 'sonata_admin_user',
                        ),
                    ),
                    'roles' => array(

                    ),
                    'class' => 'col-md-4',
                ),
                2 => array(
                    'class' => 'col-lg-3 col-xs-6',
                    'position' => 'top',
                    'type' => 'sonata.admin.block.stats',
                    'settings' => array(
                        'code' => 'app.admin.consumer',
                        'icon' => 'fa-users',
                        'text' => 'stat_consumer',
                        'color' => 'bg-green',
                        'filters' => array(
                            'status' => array(
                                'type' => 3,
                                'value' => 0,
                            ),
                        ),
                    ),
                    'roles' => array(

                    ),
                ),
                3 => array(
                    'class' => 'col-lg-3 col-xs-6',
                    'position' => 'top',
                    'type' => 'sonata.admin.block.stats',
                    'settings' => array(
                        'code' => 'app.admin.goods',
                        'icon' => 'fa-leaf',
                        'text' => 'stat_goods',
                        'color' => 'bg-red',
                        'filters' => array(
                            'status' => array(
                                'type' => 3,
                                'value' => 0,
                            ),
                        ),
                    ),
                    'roles' => array(

                    ),
                ),
                4 => array(
                    'class' => 'col-lg-3 col-xs-6',
                    'position' => 'top',
                    'type' => 'sonata.admin.block.stats',
                    'settings' => array(
                        'code' => 'app.admin.order',
                        'icon' => 'fa-leaf',
                        'text' => 'stat_order',
                        'color' => 'bg-orange',
                        'filters' => array(
                            'status' => array(
                                'type' => 3,
                                'value' => 0,
                            ),
                        ),
                    ),
                    'roles' => array(

                    ),
                ),
            ),
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.breadcrumbs' => array(
                'child_admin_route' => 'edit',
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
                'uses' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => false,
            'sonata.admin.configuration.translate_group_label' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'image' => '@PicossSonataExtraAdmin/CRUD/list_image.html.twig',
                        'string_template' => '@PicossSonataExtraAdmin/CRUD/list_string_template.html.twig',
                        'progress_bar' => '@PicossSonataExtraAdmin/CRUD/list_progress_bar.html.twig',
                        'label' => '@PicossSonataExtraAdmin/CRUD/list_label.html.twig',
                        'badge' => '@PicossSonataExtraAdmin/CRUD/list_badge.html.twig',
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'integer' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataAdmin/CRUD/list_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ),
                    'show' => array(
                        'image' => 'admin/show_image.html.twig',
                        'string_template' => '@PicossSonataExtraAdmin/CRUD/show_string_template.html.twig',
                        'progress_bar' => '@PicossSonataExtraAdmin/CRUD/show_progress_bar.html.twig',
                        'label' => '@PicossSonataExtraAdmin/CRUD/show_label.html.twig',
                        'badge' => '@PicossSonataExtraAdmin/CRUD/show_badge.html.twig',
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'currency' => '@SonataAdmin/CRUD/show_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ),
                ),
                'history' => '@PicossSonataExtraAdmin/CRUD/history.html.twig',
                'history_revert' => '@PicossSonataExtraAdmin/CRUD/history_revert.html.twig',
                'history_revision_timestamp' => '@PicossSonataExtraAdmin/CRUD/history_revision_timestamp.html.twig',
                'trash' => '@PicossSonataExtraAdmin/CRUD/trash.html.twig',
                'untrash' => '@PicossSonataExtraAdmin/CRUD/untrash.html.twig',
                'inner_trash_list_row' => '@PicossSonataExtraAdmin/CRUD/list_trash_inner_row.html.twig',
                'button_trash' => '@PicossSonataExtraAdmin/Button/trash_button.html.twig',
                'form' => array(
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ),
            ),
            'picoss_sonata_extra_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'image' => '@PicossSonataExtraAdmin/CRUD/list_image.html.twig',
                        'string_template' => '@PicossSonataExtraAdmin/CRUD/list_string_template.html.twig',
                        'progress_bar' => '@PicossSonataExtraAdmin/CRUD/list_progress_bar.html.twig',
                        'label' => '@PicossSonataExtraAdmin/CRUD/list_label.html.twig',
                        'badge' => '@PicossSonataExtraAdmin/CRUD/list_badge.html.twig',
                    ),
                    'show' => array(
                        'image' => 'admin/show_image.html.twig',
                        'string_template' => '@PicossSonataExtraAdmin/CRUD/show_string_template.html.twig',
                        'progress_bar' => '@PicossSonataExtraAdmin/CRUD/show_progress_bar.html.twig',
                        'label' => '@PicossSonataExtraAdmin/CRUD/show_label.html.twig',
                        'badge' => '@PicossSonataExtraAdmin/CRUD/show_badge.html.twig',
                    ),
                ),
                'history' => '@PicossSonataExtraAdmin/CRUD/history.html.twig',
                'history_revert' => '@PicossSonataExtraAdmin/CRUD/history_revert.html.twig',
                'history_revision_timestamp' => '@PicossSonataExtraAdmin/CRUD/history_revision_timestamp.html.twig',
                'trash' => '@PicossSonataExtraAdmin/CRUD/trash.html.twig',
                'untrash' => '@PicossSonataExtraAdmin/CRUD/untrash.html.twig',
                'inner_trash_list_row' => '@PicossSonataExtraAdmin/CRUD/list_trash_inner_row.html.twig',
                'button_trash' => '@PicossSonataExtraAdmin/Button/trash_button.html.twig',
            ),
            'picoss.sonataextraadmin.handler.sortable.class' => 'Picoss\\SonataExtraAdminBundle\\Handler\\SortableHandler',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 1088,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => false,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.adapter.image.gd.class' => 'Imagine\\Gd\\Imagine',
            'sonata.media.adapter.image.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'sonata.media.adapter.image.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.block.gallery_list.class' => 'Sonata\\MediaBundle\\Block\\GalleryListBlockService',
            'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager',
            'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager',
            'sonata.media.admin.groupname' => 'sonata_media',
            'sonata.media.admin.groupicon' => '<i class=\'fa fa-image\'></i>',
            'sonata.media.admin.media.class' => 'Sonata\\MediaBundle\\Admin\\ORM\\MediaAdmin',
            'sonata.media.admin.media.controller' => 'SonataMediaBundle:MediaAdmin',
            'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin',
            'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin',
            'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin',
            'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD',
            'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin_format' => array(
                'width' => 200,
                'height' => false,
                'quality' => 90,
                'format' => 'jpg',
                'constraint' => true,
            ),
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'App\\Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.admin.gallery.entity' => 'App\\Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'App\\Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia',
            'sonata.media.media.class' => 'App\\Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.gallery.class' => 'App\\Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'sonata.formatter.text.markdown.class' => 'Sonata\\FormatterBundle\\Formatter\\MarkdownFormatter',
            'sonata.formatter.text.text.class' => 'Sonata\\FormatterBundle\\Formatter\\TextFormatter',
            'sonata.formatter.text.raw.class' => 'Sonata\\FormatterBundle\\Formatter\\RawFormatter',
            'sonata.formatter.text.twigengine.class' => 'Sonata\\FormatterBundle\\Formatter\\TwigFormatter',
            'sonata.formatter.block.formatter.class' => 'Sonata\\FormatterBundle\\Block\\FormatterBlockService',
            'sonata.formatter.ckeditor.extension.class' => 'Sonata\\FormatterBundle\\Admin\\CkeditorAdminExtension',
            'sonata.formatter.ckeditor.configuration.templates' => array(
                'browser' => '@SonataFormatter/Ckeditor/browser.html.twig',
                'upload' => '@SonataFormatter/Ckeditor/upload.html.twig',
            ),
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Application\\Sonata\\UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'rip' => 'rip',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'rip' => 'rip',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'App\\Application\\Sonata\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.label_catalogue' => 'SonataUserBundle',
            'sonata.user.admin.groupicon' => '<i class=\'fa fa-users\'></i>',
            'security.acl.user_voter.class' => 'Sonata\\UserBundle\\Security\\Authorization\\Voter\\UserAclVoter',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'App\\Application\\Sonata\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'App\\Application\\Sonata\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.default_avatar' => 'bundles/sonatauser/default_avatar.png',
            'sonata.user.impersonating' => false,
            'sonata.user.google.authenticator.enabled' => false,
            'nelmio_cors.map' => array(
                '^/' => array(

                ),
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'api_platform.enable_entrypoint' => true,
            'api_platform.enable_docs' => true,
            'api_platform.title' => '油画api',
            'api_platform.description' => '',
            'api_platform.version' => '0.0.0',
            'api_platform.exception_to_status' => array(
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException' => 400,
            ),
            'api_platform.formats' => array(
                'json' => array(
                    0 => 'application/json',
                ),
            ),
            'api_platform.error_formats' => array(
                'jsonproblem' => array(
                    0 => 'application/problem+json',
                ),
                'jsonld' => array(
                    0 => 'application/ld+json',
                ),
            ),
            'api_platform.allow_plain_identifiers' => false,
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.order' => 'DESC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.partial' => false,
            'api_platform.collection.pagination.client_enabled' => false,
            'api_platform.collection.pagination.client_items_per_page' => false,
            'api_platform.collection.pagination.client_partial' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name' => 'partial',
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => array(
                0 => 'Accept',
            ),
            'api_platform.http_cache.public' => NULL,
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes' => array(

            ),
            'api_platform.swagger.api_keys' => array(

            ),
            'api_platform.enable_swagger' => true,
            'api_platform.graphql.enabled' => false,
            'api_platform.graphql.graphiql.enabled' => false,
            'api_platform.validator.serialize_payload_fields' => array(

            ),
            'sonata.core.form.types' => array(
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.entity',
                3 => 'sonata.core.form.type.array',
                4 => 'sonata.core.form.type.boolean',
                5 => 'sonata.core.form.type.collection',
                6 => 'sonata.core.form.type.translatable_choice',
                7 => 'sonata.core.form.type.date_range',
                8 => 'sonata.core.form.type.datetime_range',
                9 => 'sonata.core.form.type.date_picker',
                10 => 'sonata.core.form.type.datetime_picker',
                11 => 'sonata.core.form.type.date_range_picker',
                12 => 'sonata.core.form.type.datetime_range_picker',
                13 => 'sonata.core.form.type.equal',
                14 => 'sonata.core.form.type.color_selector',
                15 => 'sonata.core.form.type.color',
                16 => 'sonata.block.form.type.block',
                17 => 'sonata.block.form.type.container_template',
                18 => 'sonata.admin.form.type.admin',
                19 => 'sonata.admin.form.type.model_choice',
                20 => 'sonata.admin.form.type.model_list',
                21 => 'sonata.admin.form.type.model_reference',
                22 => 'sonata.admin.form.type.model_hidden',
                23 => 'sonata.admin.form.type.model_autocomplete',
                24 => 'sonata.admin.form.type.collection',
                25 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                26 => 'sonata.admin.form.filter.type.number',
                27 => 'sonata.admin.form.filter.type.choice',
                28 => 'sonata.admin.form.filter.type.default',
                29 => 'sonata.admin.form.filter.type.date',
                30 => 'sonata.admin.form.filter.type.daterange',
                31 => 'sonata.admin.form.filter.type.datetime',
                32 => 'sonata.admin.form.filter.type.datetime_range',
                33 => 'fos_ck_editor.form.type',
                34 => 'sonata.media.form.type.media',
                35 => 'sonata.formatter.form.type.selector',
                36 => 'sonata.formatter.form.type.simple',
                37 => 'fos_user.username_form_type',
                38 => 'fos_user.profile.form.type',
                39 => 'fos_user.registration.form.type',
                40 => 'fos_user.change_password.form.type',
                41 => 'fos_user.resetting.form.type',
                42 => 'fos_user.group.form.type',
                43 => 'sonata.user.form.type.security_roles',
                44 => 'sonata.user.form.roles_matrix_type',
                45 => 'sonata.user.form.gender_list',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.upload.validator',
                5 => 'form.type_extension.csrf',
                6 => 'sonata.admin.form.extension.field',
                7 => 'sonata.admin.form.extension.field.mopa',
                8 => 'sonata.admin.form.extension.choice',
            ),
            'console.command.ids' => array(
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.doctrine_migrations.diff_command',
                5 => 'console.command.public_alias.doctrine_migrations.execute_command',
                6 => 'console.command.public_alias.doctrine_migrations.generate_command',
                7 => 'console.command.public_alias.doctrine_migrations.latest_command',
                8 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                9 => 'console.command.public_alias.doctrine_migrations.status_command',
                10 => 'console.command.public_alias.doctrine_migrations.version_command',
                11 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
                12 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
                13 => 'console.command.public_alias.Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
                14 => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
                15 => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
                16 => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
                17 => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
                18 => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
                19 => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
                20 => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
                21 => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
                22 => 'Sonata\\MediaBundle\\Command\\AddMassMediaCommand',
                23 => 'Sonata\\MediaBundle\\Command\\AddMediaCommand',
                24 => 'Sonata\\MediaBundle\\Command\\CleanMediaCommand',
                25 => 'Sonata\\MediaBundle\\Command\\FixMediaContextCommand',
                26 => 'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand',
                27 => 'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand',
                28 => 'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand',
                29 => 'Sonata\\MediaBundle\\Command\\SyncThumbsCommand',
                30 => 'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand',
                31 => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
                32 => 'console.command.public_alias.api_platform.swagger.command.swagger_command',
            ),
        );
    }
}
