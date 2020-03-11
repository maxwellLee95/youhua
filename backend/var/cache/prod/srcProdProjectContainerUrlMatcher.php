<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/mpapp/login_or_create' => array(array('_route' => 'mpapp_login_or_create', '_api_receive' => false, '_api_resource_class' => 'App\\Entity\\Consumer', '_api_collection_operation_name' => 'mp_login_or_create', '_controller' => 'App\\Controller\\WechatMpapp::loginOrCreateAction'), null, array('GET' => 0), null),
                    '/mpapp/pay/notify' => array(array('_route' => 'pay_notify', '_controller' => 'App\\Controller\\WechatMpapp::payNotify'), null, array('GET' => 0, 'POST' => 1), null),
                    '/mpapp/refund/notify' => array(array('_route' => 'refund_notify', '_controller' => 'App\\Controller\\WechatMpapp::refundNotify'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/' => array(array('_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), null, null, null),
                    '/admin/dashboard' => array(array('_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), null, null, null),
                    '/admin/core/get-form-field-element' => array(array('_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'), null, null, null),
                    '/admin/core/append-form-field-element' => array(array('_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'), null, null, null),
                    '/admin/core/set-object-field-value' => array(array('_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'), null, null, null),
                    '/admin/search' => array(array('_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), null, null, null),
                    '/admin/core/get-autocomplete-items' => array(array('_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), null, null, null),
                    '/admin/app/banner/list' => array(array('_route' => 'admin_app_banner_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_list'), null, null, null),
                    '/admin/app/banner/create' => array(array('_route' => 'admin_app_banner_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_create'), null, null, null),
                    '/admin/app/banner/batch' => array(array('_route' => 'admin_app_banner_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_batch'), null, null, null),
                    '/admin/app/goods/list' => array(array('_route' => 'admin_app_goods_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_list'), null, null, null),
                    '/admin/app/goods/create' => array(array('_route' => 'admin_app_goods_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_create'), null, null, null),
                    '/admin/app/goods/batch' => array(array('_route' => 'admin_app_goods_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_batch'), null, null, null),
                    '/admin/app/goods/export' => array(array('_route' => 'admin_app_goods_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_export'), null, null, null),
                    '/admin/app/classifygoods/list' => array(array('_route' => 'admin_app_classifygoods_list', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::listAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_list'), null, null, null),
                    '/admin/app/classifygoods/create' => array(array('_route' => 'admin_app_classifygoods_create', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::createAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_create'), null, null, null),
                    '/admin/app/classifygoods/batch' => array(array('_route' => 'admin_app_classifygoods_batch', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::batchAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_batch'), null, null, null),
                    '/admin/app/classifygoods/export' => array(array('_route' => 'admin_app_classifygoods_export', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::exportAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_export'), null, null, null),
                    '/admin/app/goodsbanner/list' => array(array('_route' => 'admin_app_goodsbanner_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_list'), null, null, null),
                    '/admin/app/goodsbanner/create' => array(array('_route' => 'admin_app_goodsbanner_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_create'), null, null, null),
                    '/admin/app/goodsbanner/batch' => array(array('_route' => 'admin_app_goodsbanner_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_batch'), null, null, null),
                    '/admin/app/goodsbanner/export' => array(array('_route' => 'admin_app_goodsbanner_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_export'), null, null, null),
                    '/admin/app/marketing/list' => array(array('_route' => 'admin_app_marketing_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_list'), null, null, null),
                    '/admin/app/marketing/batch' => array(array('_route' => 'admin_app_marketing_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_batch'), null, null, null),
                    '/admin/app/marketing/export' => array(array('_route' => 'admin_app_marketing_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_export'), null, null, null),
                    '/admin/app/custompage/list' => array(array('_route' => 'admin_app_custompage_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_list'), null, null, null),
                    '/admin/app/custompage/create' => array(array('_route' => 'admin_app_custompage_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_create'), null, null, null),
                    '/admin/app/custompage/batch' => array(array('_route' => 'admin_app_custompage_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_batch'), null, null, null),
                    '/admin/app/custompage/export' => array(array('_route' => 'admin_app_custompage_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_export'), null, null, null),
                    '/admin/app/consumer/list' => array(array('_route' => 'admin_app_consumer_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.consumer', '_sonata_name' => 'admin_app_consumer_list'), null, null, null),
                    '/admin/app/consumer/batch' => array(array('_route' => 'admin_app_consumer_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.consumer', '_sonata_name' => 'admin_app_consumer_batch'), null, null, null),
                    '/admin/app/consumer/export' => array(array('_route' => 'admin_app_consumer_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.consumer', '_sonata_name' => 'admin_app_consumer_export'), null, null, null),
                    '/admin/app/receiptinfo/list' => array(array('_route' => 'admin_app_receiptinfo_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.receipt_infos', '_sonata_name' => 'admin_app_receiptinfo_list'), null, null, null),
                    '/admin/app/receiptinfo/batch' => array(array('_route' => 'admin_app_receiptinfo_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.receipt_infos', '_sonata_name' => 'admin_app_receiptinfo_batch'), null, null, null),
                    '/admin/app/receiptinfo/export' => array(array('_route' => 'admin_app_receiptinfo_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.receipt_infos', '_sonata_name' => 'admin_app_receiptinfo_export'), null, null, null),
                    '/admin/app/order/list' => array(array('_route' => 'admin_app_order_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.order', '_sonata_name' => 'admin_app_order_list'), null, null, null),
                    '/admin/app/order/batch' => array(array('_route' => 'admin_app_order_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.order', '_sonata_name' => 'admin_app_order_batch'), null, null, null),
                    '/admin/app/order/export' => array(array('_route' => 'admin_app_order_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.order', '_sonata_name' => 'admin_app_order_export'), null, null, null),
                    '/admin/app/orderbill/list' => array(array('_route' => 'admin_app_orderbill_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.order_bill', '_sonata_name' => 'admin_app_orderbill_list'), null, null, null),
                    '/admin/app/orderbill/batch' => array(array('_route' => 'admin_app_orderbill_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.order_bill', '_sonata_name' => 'admin_app_orderbill_batch'), null, null, null),
                    '/admin/app/orderbill/export' => array(array('_route' => 'admin_app_orderbill_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.order_bill', '_sonata_name' => 'admin_app_orderbill_export'), null, null, null),
                    '/admin/sonata/media/media/list' => array(array('_route' => 'admin_sonata_media_media_list', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_list'), null, null, null),
                    '/admin/sonata/media/media/create' => array(array('_route' => 'admin_sonata_media_media_create', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_create'), null, null, null),
                    '/admin/sonata/media/media/batch' => array(array('_route' => 'admin_sonata_media_media_batch', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_batch'), null, null, null),
                    '/admin/sonata/media/media/export' => array(array('_route' => 'admin_sonata_media_media_export', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_export'), null, null, null),
                    '/admin/sonata/media/media/ckeditor_browser' => array(array('_route' => 'admin_sonata_media_media_ckeditor_browser', '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_ckeditor_browser'), null, null, null),
                    '/admin/sonata/media/media/ckeditor_upload' => array(array('_route' => 'admin_sonata_media_media_ckeditor_upload', '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_ckeditor_upload'), null, null, null),
                    '/admin/sonata/media/gallery/list' => array(array('_route' => 'admin_sonata_media_gallery_list', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_list'), null, null, null),
                    '/admin/sonata/media/gallery/create' => array(array('_route' => 'admin_sonata_media_gallery_create', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_create'), null, null, null),
                    '/admin/sonata/media/gallery/batch' => array(array('_route' => 'admin_sonata_media_gallery_batch', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_batch'), null, null, null),
                    '/admin/sonata/media/gallery/export' => array(array('_route' => 'admin_sonata_media_gallery_export', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_export'), null, null, null),
                    '/admin/sonata/media/galleryhasmedia/list' => array(array('_route' => 'admin_sonata_media_galleryhasmedia_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list'), null, null, null),
                    '/admin/sonata/media/galleryhasmedia/create' => array(array('_route' => 'admin_sonata_media_galleryhasmedia_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create'), null, null, null),
                    '/admin/sonata/media/galleryhasmedia/batch' => array(array('_route' => 'admin_sonata_media_galleryhasmedia_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch'), null, null, null),
                    '/admin/sonata/media/galleryhasmedia/export' => array(array('_route' => 'admin_sonata_media_galleryhasmedia_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export'), null, null, null),
                    '/admin/sonata/user/user/list' => array(array('_route' => 'admin_sonata_user_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_list'), null, null, null),
                    '/admin/sonata/user/user/create' => array(array('_route' => 'admin_sonata_user_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_create'), null, null, null),
                    '/admin/sonata/user/user/batch' => array(array('_route' => 'admin_sonata_user_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_batch'), null, null, null),
                    '/admin/sonata/user/user/export' => array(array('_route' => 'admin_sonata_user_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_export'), null, null, null),
                    '/admin/sonata/user/group/list' => array(array('_route' => 'admin_sonata_user_group_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_list'), null, null, null),
                    '/admin/sonata/user/group/create' => array(array('_route' => 'admin_sonata_user_group_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_create'), null, null, null),
                    '/admin/sonata/user/group/batch' => array(array('_route' => 'admin_sonata_user_group_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_batch'), null, null, null),
                    '/admin/sonata/user/group/export' => array(array('_route' => 'admin_sonata_user_group_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_export'), null, null, null),
                    '/media/gallery/' => array(array('_route' => 'sonata_media_gallery_index', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction'), null, null, null),
                    '/admin/login' => array(array('_route' => 'sonata_user_admin_security_login', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction'), null, null, null),
                    '/admin/login_check' => array(array('_route' => 'sonata_user_admin_security_check', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction'), null, array('POST' => 0), null),
                    '/admin/logout' => array(array('_route' => 'sonata_user_admin_security_logout', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction'), null, null, null),
                    '/admin/resetting/request' => array(array('_route' => 'sonata_user_admin_resetting_request', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction'), null, array('GET' => 0), null),
                    '/admin/resetting/send-email' => array(array('_route' => 'sonata_user_admin_resetting_send_email', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction'), null, array('POST' => 0), null),
                    '/admin/resetting/check-email' => array(array('_route' => 'sonata_user_admin_resetting_check_email', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction'), null, array('GET' => 0), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/m(?'
                        .'|papp/(?'
                            .'|orders/([^/]++)/pay(*:39)'
                            .'|consumers/([^/]++)/marketings/([^/]++)/pay(*:88)'
                        .')'
                        .'|edia/(?'
                            .'|gallery/view/(.*)(*:121)'
                            .'|view/([^/]++)(?:/([^/]++))?(*:156)'
                            .'|download/(.*)(?:/([^/]++))?(*:191)'
                        .')'
                    .')'
                    .'|/a(?'
                        .'|pi(?'
                            .'|(?:/(index)(?:\\.([^/]++))?)?(*:239)'
                            .'|/(?'
                                .'|docs(?:\\.([^/]++))?(*:270)'
                                .'|c(?'
                                    .'|lassifies(?'
                                        .'|(?:\\.([^/]++))?(*:309)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:346)'
                                            .'|([^/]++)/goods(?:\\.([^/]++))?(*:383)'
                                        .')'
                                    .')'
                                    .'|onsumers(?'
                                        .'|(?:\\.([^/]++))?(*:419)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:459)'
                                            .')'
                                            .'|([^/]++)/(?'
                                                .'|receipt_infos(?:\\.([^/]++))?(?'
                                                    .'|(*:511)'
                                                .')'
                                                .'|orders(?:\\.([^/]++))?(?'
                                                    .'|(*:544)'
                                                .')'
                                                .'|member(?:\\.([^/]++))?(*:574)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ustom_pages/([^/\\.]++)(?:\\.([^/]++))?(*:622)'
                                .')'
                                .'|m(?'
                                    .'|arketings(?'
                                        .'|(?:\\.([^/]++))?(*:662)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:696)'
                                    .')'
                                    .'|embers/([^/\\.]++)(?:\\.([^/]++))?(*:737)'
                                .')'
                                .'|banners(?'
                                    .'|(?:\\.([^/]++))?(*:771)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:805)'
                                .')'
                                .'|goods(?'
                                    .'|(?:\\.([^/]++))?(*:837)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:871)'
                                .')'
                                .'|receipt_infos/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:922)'
                                .')'
                                .'|order(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(*:958)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:995)'
                                            .'|([^/]++)/logistics(?:\\.([^/]++))?(*:1036)'
                                        .')'
                                    .')'
                                    .'|_bills/([^/\\.]++)(?:\\.([^/]++))?(*:1079)'
                                .')'
                            .')'
                        .')'
                        .'|dmin/(?'
                            .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:1153)'
                            .'|app/(?'
                                .'|banner/([^/]++)/(?'
                                    .'|edit(*:1192)'
                                    .'|delete(*:1207)'
                                    .'|show(*:1220)'
                                .')'
                                .'|goods(?'
                                    .'|/([^/]++)/(?'
                                        .'|edit(*:1255)'
                                        .'|delete(*:1270)'
                                        .'|show(*:1283)'
                                    .')'
                                    .'|banner/([^/]++)/(?'
                                        .'|edit(*:1316)'
                                        .'|delete(*:1331)'
                                        .'|show(*:1344)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|lassifygoods/([^/]++)/(?'
                                        .'|edit(*:1388)'
                                        .'|delete(*:1403)'
                                        .'|show(*:1416)'
                                        .'|move/([^/]++)(*:1438)'
                                    .')'
                                    .'|ustompage/([^/]++)/(?'
                                        .'|edit(*:1474)'
                                        .'|delete(*:1489)'
                                        .'|show(*:1502)'
                                    .')'
                                    .'|onsumer/([^/]++)/(?'
                                        .'|show(*:1536)'
                                        .'|receiptinfo/(?'
                                            .'|list(*:1564)'
                                            .'|batch(*:1578)'
                                            .'|([^/]++)/(?'
                                                .'|edit(*:1603)'
                                                .'|show(*:1616)'
                                            .')'
                                            .'|export(*:1632)'
                                        .')'
                                        .'|order/(?'
                                            .'|list(*:1655)'
                                            .'|batch(*:1669)'
                                            .'|([^/]++)/(?'
                                                .'|edit(*:1694)'
                                                .'|show(*:1707)'
                                            .')'
                                            .'|export(*:1723)'
                                            .'|([^/]++)/orderbill/(?'
                                                .'|list(*:1758)'
                                                .'|batch(*:1772)'
                                                .'|([^/]++)/(?'
                                                    .'|edit(*:1797)'
                                                    .'|show(*:1810)'
                                                .')'
                                                .'|export(*:1826)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|marketing/([^/]++)/(?'
                                    .'|edit(*:1865)'
                                    .'|delete(*:1880)'
                                    .'|show(*:1893)'
                                .')'
                                .'|receiptinfo/([^/]++)/(?'
                                    .'|edit(*:1931)'
                                    .'|show(*:1944)'
                                .')'
                                .'|order(?'
                                    .'|/([^/]++)/(?'
                                        .'|edit(*:1979)'
                                        .'|show(*:1992)'
                                        .'|orderbill/(?'
                                            .'|list(*:2018)'
                                            .'|batch(*:2032)'
                                            .'|([^/]++)/(?'
                                                .'|edit(*:2057)'
                                                .'|show(*:2070)'
                                            .')'
                                            .'|export(*:2086)'
                                        .')'
                                    .')'
                                    .'|bill/([^/]++)/(?'
                                        .'|edit(*:2118)'
                                        .'|show(*:2131)'
                                    .')'
                                .')'
                            .')'
                            .'|sonata/(?'
                                .'|media/(?'
                                    .'|media/([^/]++)/(?'
                                        .'|edit(*:2184)'
                                        .'|delete(*:2199)'
                                        .'|show(*:2212)'
                                    .')'
                                    .'|gallery(?'
                                        .'|/([^/]++)/(?'
                                            .'|edit(*:2249)'
                                            .'|delete(*:2264)'
                                            .'|show(*:2277)'
                                        .')'
                                        .'|hasmedia/([^/]++)/(?'
                                            .'|edit(*:2312)'
                                            .'|delete(*:2327)'
                                            .'|show(*:2340)'
                                        .')'
                                    .')'
                                .')'
                                .'|user/(?'
                                    .'|user/([^/]++)/(?'
                                        .'|edit(*:2381)'
                                        .'|delete(*:2396)'
                                        .'|show(*:2409)'
                                    .')'
                                    .'|group/([^/]++)/(?'
                                        .'|edit(*:2441)'
                                        .'|delete(*:2456)'
                                        .'|show(*:2469)'
                                    .')'
                                .')'
                            .')'
                            .'|resetting/reset/([^/]++)(*:2505)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 459:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_consumers_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_consumers_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Consumer', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_consumers_get_item;
                        }

                        return $ret;
                        not_api_consumers_get_item:

                        // api_consumers_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_consumers_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Consumer', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_consumers_put_item;
                        }

                        return $ret;
                        not_api_consumers_put_item:

                        break;
                    case 511:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_consumers_receipt_infos_get_subresource
                        $ret = $this->mergeDefaults(array('_route' => 'api_consumers_receipt_infos_get_subresource') + $matches, array('_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\ReceiptInfo', '_api_subresource_operation_name' => 'api_consumers_receipt_infos_get_subresource', '_api_subresource_context' => array('property' => 'receiptInfos', 'identifiers' => array(array('id', 'App\\Entity\\Consumer', true)), 'collection' => true, 'operationId' => 'api_consumers_receipt_infos_get_subresource')));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_consumers_receipt_infos_get_subresource;
                        }

                        return $ret;
                        not_api_consumers_receipt_infos_get_subresource:

                        // api_receipt_infos_api_consumers_receipt_infos_post_subresource_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_receipt_infos_api_consumers_receipt_infos_post_subresource_collection') + $matches, array('_controller' => 'App\\Controller\\ReceiptInfoSpecial', '_format' => null, '_api_resource_class' => 'App\\Entity\\ReceiptInfo', '_api_collection_operation_name' => 'api_consumers_receipt_infos_post_subresource'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_receipt_infos_api_consumers_receipt_infos_post_subresource_collection;
                        }

                        return $ret;
                        not_api_receipt_infos_api_consumers_receipt_infos_post_subresource_collection:

                        break;
                    case 544:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_consumers_orders_get_subresource
                        $ret = $this->mergeDefaults(array('_route' => 'api_consumers_orders_get_subresource') + $matches, array('_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_subresource_operation_name' => 'api_consumers_orders_get_subresource', '_api_subresource_context' => array('property' => 'orders', 'identifiers' => array(array('id', 'App\\Entity\\Consumer', true)), 'collection' => true, 'operationId' => 'api_consumers_orders_get_subresource')));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_consumers_orders_get_subresource;
                        }

                        return $ret;
                        not_api_consumers_orders_get_subresource:

                        // api_orders_api_consumers_orders_post_subresource_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_api_consumers_orders_post_subresource_collection') + $matches, array('_controller' => 'App\\Controller\\OrderSpecial', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_collection_operation_name' => 'api_consumers_orders_post_subresource'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_orders_api_consumers_orders_post_subresource_collection;
                        }

                        return $ret;
                        not_api_orders_api_consumers_orders_post_subresource_collection:

                        break;
                    case 922:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_receipt_infos_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_receipt_infos_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ReceiptInfo', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_receipt_infos_get_item;
                        }

                        return $ret;
                        not_api_receipt_infos_get_item:

                        // api_receipt_infos_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_receipt_infos_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ReceiptInfo', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_receipt_infos_put_item;
                        }

                        return $ret;
                        not_api_receipt_infos_put_item:

                        // api_receipt_infos_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_receipt_infos_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ReceiptInfo', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_receipt_infos_delete_item;
                        }

                        return $ret;
                        not_api_receipt_infos_delete_item:

                        break;
                    default:
                        $routes = array(
                            39 => array(array('_route' => 'mpapp_pay_order', '_api_receive' => false, '_api_resource_class' => 'App\\Entity\\Order', '_api_collection_operation_name' => 'mp_pay_order', '_controller' => 'App\\Controller\\WechatMpapp::payOrder'), array('id'), array('POST' => 0), null),
                            88 => array(array('_route' => 'mpapp_pay_member', '_api_receive' => false, '_api_resource_class' => 'App\\Entity\\Marketing', '_api_collection_operation_name' => 'mp_pay_member', '_controller' => 'App\\Controller\\WechatMpapp::payMember'), array('consumer_id', 'id'), array('POST' => 0), null),
                            121 => array(array('_route' => 'sonata_media_gallery_view', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction'), array('id'), null, null),
                            156 => array(array('_route' => 'sonata_media_view', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction', 'format' => 'reference'), array('id', 'format'), null, null),
                            191 => array(array('_route' => 'sonata_media_download', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction', 'format' => 'reference'), array('id', 'format'), null, null),
                            239 => array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null),
                            270 => array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null),
                            309 => array(array('_route' => 'api_classifies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ClassifyGoods', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null),
                            346 => array(array('_route' => 'api_classifies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ClassifyGoods', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            383 => array(array('_route' => 'api_classifies_goods_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Goods', '_api_subresource_operation_name' => 'api_classifies_goods_get_subresource', '_api_subresource_context' => array('property' => 'goods', 'identifiers' => array(array('id', 'App\\Entity\\ClassifyGoods', true)), 'collection' => true, 'operationId' => 'api_classifies_goods_get_subresource')), array('id', '_format'), array('GET' => 0), null),
                            419 => array(array('_route' => 'api_consumers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Consumer', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null),
                            574 => array(array('_route' => 'api_consumers_member_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Member', '_api_subresource_operation_name' => 'api_consumers_member_get_subresource', '_api_subresource_context' => array('property' => 'member', 'identifiers' => array(array('id', 'App\\Entity\\Consumer', true)), 'collection' => false, 'operationId' => 'api_consumers_member_get_subresource')), array('id', '_format'), array('GET' => 0), null),
                            622 => array(array('_route' => 'api_custom_pages_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CustomPage', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            662 => array(array('_route' => 'api_marketings_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Marketing', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null),
                            696 => array(array('_route' => 'api_marketings_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Marketing', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            737 => array(array('_route' => 'api_members_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Member', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            771 => array(array('_route' => 'api_banners_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Banner', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null),
                            805 => array(array('_route' => 'api_banners_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Banner', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            837 => array(array('_route' => 'api_goods_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Goods', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null),
                            871 => array(array('_route' => 'api_goods_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Goods', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            958 => array(array('_route' => 'api_orders_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null),
                            995 => array(array('_route' => 'api_orders_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            1036 => array(array('_route' => 'api_orders_get_logistics_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_item_operation_name' => 'get_logistics'), array('id', '_format'), array('GET' => 0), null),
                            1079 => array(array('_route' => 'api_order_bills_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderBill', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null),
                            1153 => array(array('_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format'), null, null),
                            1192 => array(array('_route' => 'admin_app_banner_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_edit'), array('id'), null, null),
                            1207 => array(array('_route' => 'admin_app_banner_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_delete'), array('id'), null, null),
                            1220 => array(array('_route' => 'admin_app_banner_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.banner', '_sonata_name' => 'admin_app_banner_show'), array('id'), null, null),
                            1255 => array(array('_route' => 'admin_app_goods_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_edit'), array('id'), null, null),
                            1270 => array(array('_route' => 'admin_app_goods_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_delete'), array('id'), null, null),
                            1283 => array(array('_route' => 'admin_app_goods_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.goods', '_sonata_name' => 'admin_app_goods_show'), array('id'), null, null),
                            1316 => array(array('_route' => 'admin_app_goodsbanner_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_edit'), array('id'), null, null),
                            1331 => array(array('_route' => 'admin_app_goodsbanner_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_delete'), array('id'), null, null),
                            1344 => array(array('_route' => 'admin_app_goodsbanner_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.goods_banner', '_sonata_name' => 'admin_app_goodsbanner_show'), array('id'), null, null),
                            1388 => array(array('_route' => 'admin_app_classifygoods_edit', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::editAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_edit'), array('id'), null, null),
                            1403 => array(array('_route' => 'admin_app_classifygoods_delete', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::deleteAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_delete'), array('id'), null, null),
                            1416 => array(array('_route' => 'admin_app_classifygoods_show', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::showAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_show'), array('id'), null, null),
                            1438 => array(array('_route' => 'admin_app_classifygoods_move', '_controller' => 'Picoss\\SonataExtraAdminBundle\\Controller\\ExtraAdminController::moveAction', '_sonata_admin' => 'app.admin.classify_goods', '_sonata_name' => 'admin_app_classifygoods_move'), array('id', 'position'), null, null),
                            1474 => array(array('_route' => 'admin_app_custompage_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_edit'), array('id'), null, null),
                            1489 => array(array('_route' => 'admin_app_custompage_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_delete'), array('id'), null, null),
                            1502 => array(array('_route' => 'admin_app_custompage_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.custom_page', '_sonata_name' => 'admin_app_custompage_show'), array('id'), null, null),
                            1536 => array(array('_route' => 'admin_app_consumer_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.consumer', '_sonata_name' => 'admin_app_consumer_show'), array('id'), null, null),
                            1564 => array(array('_route' => 'admin_app_consumer_receiptinfo_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.consumer|app.admin.receipt_infos', '_sonata_name' => 'admin_app_consumer_receiptinfo_list'), array('id'), null, null),
                            1578 => array(array('_route' => 'admin_app_consumer_receiptinfo_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.consumer|app.admin.receipt_infos', '_sonata_name' => 'admin_app_consumer_receiptinfo_batch'), array('id'), null, null),
                            1603 => array(array('_route' => 'admin_app_consumer_receiptinfo_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.consumer|app.admin.receipt_infos', '_sonata_name' => 'admin_app_consumer_receiptinfo_edit'), array('id', 'childId'), null, null),
                            1616 => array(array('_route' => 'admin_app_consumer_receiptinfo_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.consumer|app.admin.receipt_infos', '_sonata_name' => 'admin_app_consumer_receiptinfo_show'), array('id', 'childId'), null, null),
                            1632 => array(array('_route' => 'admin_app_consumer_receiptinfo_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.consumer|app.admin.receipt_infos', '_sonata_name' => 'admin_app_consumer_receiptinfo_export'), array('id'), null, null),
                            1655 => array(array('_route' => 'admin_app_consumer_order_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order', '_sonata_name' => 'admin_app_consumer_order_list'), array('id'), null, null),
                            1669 => array(array('_route' => 'admin_app_consumer_order_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order', '_sonata_name' => 'admin_app_consumer_order_batch'), array('id'), null, null),
                            1694 => array(array('_route' => 'admin_app_consumer_order_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order', '_sonata_name' => 'admin_app_consumer_order_edit'), array('id', 'childId'), null, null),
                            1707 => array(array('_route' => 'admin_app_consumer_order_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order', '_sonata_name' => 'admin_app_consumer_order_show'), array('id', 'childId'), null, null),
                            1723 => array(array('_route' => 'admin_app_consumer_order_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order', '_sonata_name' => 'admin_app_consumer_order_export'), array('id'), null, null),
                            1758 => array(array('_route' => 'admin_app_consumer_order_orderbill_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_consumer_order_orderbill_list'), array('id', 'childId'), null, null),
                            1772 => array(array('_route' => 'admin_app_consumer_order_orderbill_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_consumer_order_orderbill_batch'), array('id', 'childId'), null, null),
                            1797 => array(array('_route' => 'admin_app_consumer_order_orderbill_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_consumer_order_orderbill_edit'), array('id', 'childId', 'childChildId'), null, null),
                            1810 => array(array('_route' => 'admin_app_consumer_order_orderbill_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_consumer_order_orderbill_show'), array('id', 'childId', 'childChildId'), null, null),
                            1826 => array(array('_route' => 'admin_app_consumer_order_orderbill_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.consumer|app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_consumer_order_orderbill_export'), array('id', 'childId'), null, null),
                            1865 => array(array('_route' => 'admin_app_marketing_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_edit'), array('id'), null, null),
                            1880 => array(array('_route' => 'admin_app_marketing_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_delete'), array('id'), null, null),
                            1893 => array(array('_route' => 'admin_app_marketing_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.marketing', '_sonata_name' => 'admin_app_marketing_show'), array('id'), null, null),
                            1931 => array(array('_route' => 'admin_app_receiptinfo_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.receipt_infos', '_sonata_name' => 'admin_app_receiptinfo_edit'), array('id'), null, null),
                            1944 => array(array('_route' => 'admin_app_receiptinfo_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.receipt_infos', '_sonata_name' => 'admin_app_receiptinfo_show'), array('id'), null, null),
                            1979 => array(array('_route' => 'admin_app_order_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.order', '_sonata_name' => 'admin_app_order_edit'), array('id'), null, null),
                            1992 => array(array('_route' => 'admin_app_order_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.order', '_sonata_name' => 'admin_app_order_show'), array('id'), null, null),
                            2018 => array(array('_route' => 'admin_app_order_orderbill_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_order_orderbill_list'), array('id'), null, null),
                            2032 => array(array('_route' => 'admin_app_order_orderbill_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_order_orderbill_batch'), array('id'), null, null),
                            2057 => array(array('_route' => 'admin_app_order_orderbill_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_order_orderbill_edit'), array('id', 'childId'), null, null),
                            2070 => array(array('_route' => 'admin_app_order_orderbill_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_order_orderbill_show'), array('id', 'childId'), null, null),
                            2086 => array(array('_route' => 'admin_app_order_orderbill_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'app.admin.order|app.admin.order_bill', '_sonata_name' => 'admin_app_order_orderbill_export'), array('id'), null, null),
                            2118 => array(array('_route' => 'admin_app_orderbill_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'app.admin.order_bill', '_sonata_name' => 'admin_app_orderbill_edit'), array('id'), null, null),
                            2131 => array(array('_route' => 'admin_app_orderbill_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'app.admin.order_bill', '_sonata_name' => 'admin_app_orderbill_show'), array('id'), null, null),
                            2184 => array(array('_route' => 'admin_sonata_media_media_edit', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_edit'), array('id'), null, null),
                            2199 => array(array('_route' => 'admin_sonata_media_media_delete', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_delete'), array('id'), null, null),
                            2212 => array(array('_route' => 'admin_sonata_media_media_show', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction', '_sonata_admin' => 'sonata.media.admin.media', '_sonata_name' => 'admin_sonata_media_media_show'), array('id'), null, null),
                            2249 => array(array('_route' => 'admin_sonata_media_gallery_edit', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_edit'), array('id'), null, null),
                            2264 => array(array('_route' => 'admin_sonata_media_gallery_delete', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_delete'), array('id'), null, null),
                            2277 => array(array('_route' => 'admin_sonata_media_gallery_show', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction', '_sonata_admin' => 'sonata.media.admin.gallery', '_sonata_name' => 'admin_sonata_media_gallery_show'), array('id'), null, null),
                            2312 => array(array('_route' => 'admin_sonata_media_galleryhasmedia_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit'), array('id'), null, null),
                            2327 => array(array('_route' => 'admin_sonata_media_galleryhasmedia_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete'), array('id'), null, null),
                            2340 => array(array('_route' => 'admin_sonata_media_galleryhasmedia_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.media.admin.gallery_has_media', '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show'), array('id'), null, null),
                            2381 => array(array('_route' => 'admin_sonata_user_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_edit'), array('id'), null, null),
                            2396 => array(array('_route' => 'admin_sonata_user_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_delete'), array('id'), null, null),
                            2409 => array(array('_route' => 'admin_sonata_user_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_show'), array('id'), null, null),
                            2441 => array(array('_route' => 'admin_sonata_user_group_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_edit'), array('id'), null, null),
                            2456 => array(array('_route' => 'admin_sonata_user_group_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_delete'), array('id'), null, null),
                            2469 => array(array('_route' => 'admin_sonata_user_group_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_show'), array('id'), null, null),
                            2505 => array(array('_route' => 'sonata_user_admin_resetting_reset', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (2505 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
