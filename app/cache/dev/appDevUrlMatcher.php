<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/js/6024d32')) {
            // _assetic_6024d32
            if ($pathinfo === '/js/6024d32.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6024d32',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6024d32',);
            }

            // _assetic_6024d32_0
            if ($pathinfo === '/js/6024d32_province-choices_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6024d32',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6024d32_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/compiled/frontend')) {
            // _assetic_c1bcf36
            if ($pathinfo === '/css/compiled/frontend.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c1bcf36',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/frontend_')) {
                // _assetic_c1bcf36_0
                if ($pathinfo === '/css/compiled/frontend_bootstrap.no-responsive.no-icons.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_0',);
                }

                if (0 === strpos($pathinfo, '/css/compiled/frontend_css?family=')) {
                    // _assetic_c1bcf36_1
                    if ($pathinfo === '/css/compiled/frontend_css?family=Lato:300,400,700_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_1',);
                    }

                    // _assetic_c1bcf36_2
                    if ($pathinfo === '/css/compiled/frontend_css?family=Croissant+One_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_2',);
                    }

                }

                // _assetic_c1bcf36_3
                if ($pathinfo === '/css/compiled/frontend_bootstrap-image-gallery.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_3',);
                }

                // _assetic_c1bcf36_4
                if ($pathinfo === '/css/compiled/frontend_main_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_4',);
                }

                // _assetic_c1bcf36_5
                if ($pathinfo === '/css/compiled/frontend_sections_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1bcf36',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_c1bcf36_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/c')) {
            if (0 === strpos($pathinfo, '/js/compiled/frontend')) {
                // _assetic_2353dcb
                if ($pathinfo === '/js/compiled/frontend.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2353dcb',);
                }

                if (0 === strpos($pathinfo, '/js/compiled/frontend_')) {
                    // _assetic_2353dcb_0
                    if ($pathinfo === '/js/compiled/frontend_jquery-1.10.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2353dcb_0',);
                    }

                    // _assetic_2353dcb_1
                    if ($pathinfo === '/js/compiled/frontend_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_2353dcb_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/compiled/frontend_jquery.')) {
                        // _assetic_2353dcb_2
                        if ($pathinfo === '/js/compiled/frontend_jquery.elevateZoom-2.6.0.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_2353dcb_2',);
                        }

                        // _assetic_2353dcb_3
                        if ($pathinfo === '/js/compiled/frontend_jquery.scrollPagination_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_2353dcb_3',);
                        }

                    }

                    // _assetic_2353dcb_4
                    if ($pathinfo === '/js/compiled/frontend_main_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2353dcb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_2353dcb_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/cc7bea7')) {
                // _assetic_cc7bea7
                if ($pathinfo === '/js/cc7bea7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cc7bea7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cc7bea7',);
                }

                // _assetic_cc7bea7_0
                if ($pathinfo === '/js/cc7bea7_Chart.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cc7bea7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cc7bea7_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/compiled/backend')) {
            // _assetic_0c7f960
            if ($pathinfo === '/css/compiled/backend.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0c7f960',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/backend_')) {
                // _assetic_0c7f960_0
                if ($pathinfo === '/css/compiled/backend_bootstrap-combined.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0c7f960_0',);
                }

                // _assetic_0c7f960_1
                if ($pathinfo === '/css/compiled/backend_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0c7f960_1',);
                }

                // _assetic_0c7f960_2
                if ($pathinfo === '/css/compiled/backend_bootstrap-image-gallery.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_0c7f960_2',);
                }

                // _assetic_0c7f960_3
                if ($pathinfo === '/css/compiled/backend_select2_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_0c7f960_3',);
                }

                // _assetic_0c7f960_4
                if ($pathinfo === '/css/compiled/backend_backend_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c7f960',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_0c7f960_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/compiled/backend')) {
                // _assetic_135f653
                if ($pathinfo === '/js/compiled/backend.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_135f653',);
                }

                if (0 === strpos($pathinfo, '/js/compiled/backend_')) {
                    // _assetic_135f653_0
                    if ($pathinfo === '/js/compiled/backend_jquery-1.10.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_135f653_0',);
                    }

                    // _assetic_135f653_1
                    if ($pathinfo === '/js/compiled/backend_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_135f653_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/compiled/backend_form-')) {
                        // _assetic_135f653_2
                        if ($pathinfo === '/js/compiled/backend_form-collection_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_135f653_2',);
                        }

                        // _assetic_135f653_3
                        if ($pathinfo === '/js/compiled/backend_form-spinner_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_135f653_3',);
                        }

                    }

                    // _assetic_135f653_4
                    if ($pathinfo === '/js/compiled/backend_select2_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_135f653_4',);
                    }

                    // _assetic_135f653_5
                    if ($pathinfo === '/js/compiled/backend_backend_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_135f653_5',);
                    }

                    // _assetic_135f653_6
                    if ($pathinfo === '/js/compiled/backend_load-image_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_135f653_6',);
                    }

                    // _assetic_135f653_7
                    if ($pathinfo === '/js/compiled/backend_bootstrap-image-gallery.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '135f653',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_135f653_7',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/8594173')) {
                // _assetic_8594173
                if ($pathinfo === '/js/8594173.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 8594173,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8594173',);
                }

                if (0 === strpos($pathinfo, '/js/8594173_')) {
                    // _assetic_8594173_0
                    if ($pathinfo === '/js/8594173_prototype-handler_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 8594173,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8594173_0',);
                    }

                    // _assetic_8594173_1
                    if ($pathinfo === '/js/8594173_dynamic-property-types_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 8594173,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8594173_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/ab0517d')) {
                // _assetic_ab0517d
                if ($pathinfo === '/js/ab0517d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab0517d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ab0517d',);
                }

                if (0 === strpos($pathinfo, '/js/ab0517d_')) {
                    // _assetic_ab0517d_0
                    if ($pathinfo === '/js/ab0517d_jquery.livequery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab0517d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ab0517d_0',);
                    }

                    // _assetic_ab0517d_1
                    if ($pathinfo === '/js/ab0517d_sylius-promotion_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab0517d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ab0517d_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // pigalle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pigalle_homepage');
            }

            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::indexAction',  '_route' => 'pigalle_homepage',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // pigalle_la_marca
            if ($pathinfo === '/la-marca') {
                return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::laMarcaAction',  '_route' => 'pigalle_la_marca',);
            }

            // pigalle_locales
            if ($pathinfo === '/locales') {
                return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::localesAction',  '_route' => 'pigalle_locales',);
            }

        }

        if (0 === strpos($pathinfo, '/online-store')) {
            // pigalle_product_index
            if (rtrim($pathinfo, '/') === '/online-store') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pigalle_product_index');
                }

                return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'paginate' => 9,    'template' => 'PigalleBundle:Product:index.html.twig',    'arguments' =>     array (      'spPageTemplate' => 'PigalleBundle:Product:indexSpPage.html.twig',    ),  ),  '_route' => 'pigalle_product_index',);
            }

            // pigalle_product_index_by_taxon
            if (0 === strpos($pathinfo, '/online-store/t') && preg_match('#^/online\\-store/t/(?P<permalink>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pigalle_product_index_by_taxon')), array (  '_controller' => 'sylius.controller.product:indexByTaxonAction',  '_sylius' =>   array (    'paginate' => 9,    'template' => 'PigalleBundle:Product:index.html.twig',    'arguments' =>     array (      'spPageTemplate' => 'PigalleBundle:Product:indexSpPage.html.twig',    ),  ),));
            }

            if (0 === strpos($pathinfo, '/online-store/p')) {
                // pigalle_product_show
                if (preg_match('#^/online\\-store/p/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pigalle_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Product:show.html.twig',    'criteria' =>     array (      'slug' => '$slug',    ),  ),));
                }

                // pigalle_product_quickview
                if ($pathinfo === '/online-store/p/quickview/id') {
                    return array (  '_controller' => 'sylius.controller.product:quickviewAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Product:quickview.html.twig',  ),  '_route' => 'pigalle_product_quickview',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/cart')) {
            // sylius_cart_clear
            if ($pathinfo === '/cart/clear') {
                return array (  '_controller' => 'sylius.controller.cart:clearAction',  '_route' => 'sylius_cart_clear',);
            }

            // sylius_cart_item_add
            if ($pathinfo === '/cart/add') {
                return array (  '_controller' => 'sylius.controller.cart_item:addAction',  '_route' => 'sylius_cart_item_add',);
            }

            // sylius_cart_item_remove
            if (preg_match('#^/cart/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_cart_item_remove')), array (  '_controller' => 'sylius.controller.cart_item:removeAction',));
            }

            // sylius_cart_summary
            if ($pathinfo === '/cart') {
                return array (  '_controller' => 'sylius.controller.cart:summaryAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Cart:summary.html.twig',  ),  '_route' => 'sylius_cart_summary',);
            }

            // sylius_cart_save
            if ($pathinfo === '/cart/save') {
                return array (  '_controller' => 'sylius.controller.cart:saveAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Cart:summary.html.twig',  ),  '_route' => 'sylius_cart_save',);
            }

        }

        if (0 === strpos($pathinfo, '/mi-cuenta')) {
            // sylius_account_profile
            if (rtrim($pathinfo, '/') === '/mi-cuenta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sylius_account_profile');
                }

                return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'sylius_account_profile',);
            }

            // sylius_account_change_password
            if ($pathinfo === '/mi-cuenta/password') {
                return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'sylius_account_change_password',);
            }

        }

        // pigalle_checkout_success
        if ($pathinfo === '/checkout/gracias') {
            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::checkoutSuccessAction',  '_route' => 'pigalle_checkout_success',);
        }

        // pigalle_unauthorized
        if ($pathinfo === '/sin-autorizacion') {
            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::unauthorizedAction',  '_route' => 'pigalle_unauthorized',);
        }

        if (0 === strpos($pathinfo, '/checkout')) {
            // sylius_checkout_start
            if (rtrim($pathinfo, '/') === '/checkout') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sylius_checkout_start');
                }

                return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'sylius_checkout',  '_route' => 'sylius_checkout_start',);
            }

            // sylius_checkout_display
            if (preg_match('#^/checkout/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_checkout_display')), array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',));
            }

            // sylius_checkout_forward
            if (preg_match('#^/checkout/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_checkout_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',  'scenarioAlias' => 'sylius_checkout',));
            }

            // sylius_checkout_security
            if ($pathinfo === '/checkout/login') {
                return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'login',  '_route' => 'sylius_checkout_security',);
            }

            // sylius_checkout_addressing
            if ($pathinfo === '/checkout/direccion') {
                return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'direccion',  '_route' => 'sylius_checkout_addressing',);
            }

            // sylius_checkout_shipping
            if ($pathinfo === '/checkout/envio') {
                return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'envio',  '_route' => 'sylius_checkout_shipping',);
            }

            // sylius_checkout_payment
            if ($pathinfo === '/checkout/metodo-de-pago') {
                return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'metodo-de-pago',  '_route' => 'sylius_checkout_payment',);
            }

            // sylius_checkout_finalize
            if ($pathinfo === '/checkout/resumen') {
                return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'resumen',  '_route' => 'sylius_checkout_finalize',);
            }

        }

        // sylius_province_choice_form
        if ($pathinfo === '/province/choice-form') {
            return array (  '_controller' => 'sylius.controller.province:choiceFormAction',  '_route' => 'sylius_province_choice_form',);
        }

        // pigalle_collection
        if ($pathinfo === '/colecciones') {
            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::collectionAction',  '_route' => 'pigalle_collection',);
        }

        if (0 === strpos($pathinfo, '/mayorista')) {
            // pigalle_mayorista_index
            if (rtrim($pathinfo, '/') === '/mayorista') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pigalle_mayorista_index');
                }

                return array (  '_controller' => 'pigalle.controller.mayorista:indexAction',  '_sylius' =>   array (    'paginate' => 9,    'template' => 'PigalleBundle:Mayorista:index.html.twig',    'arguments' =>     array (      'spPageTemplate' => 'PigalleBundle:Mayorista:indexSpPage.html.twig',    ),  ),  '_route' => 'pigalle_mayorista_index',);
            }

            // pigalle_mayorista_index_by_taxon
            if (0 === strpos($pathinfo, '/mayorista/t') && preg_match('#^/mayorista/t/(?P<permalink>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pigalle_mayorista_index_by_taxon')), array (  '_controller' => 'pigalle.controller.mayorista:indexByTaxonAction',  '_sylius' =>   array (    'paginate' => 9,    'template' => 'PigalleBundle:Mayorista:index.html.twig',    'arguments' =>     array (      'spPageTemplate' => 'PigalleBundle:Mayorista:indexSpPage.html.twig',    ),  ),));
            }

            if (0 === strpos($pathinfo, '/mayorista/p')) {
                // pigalle_mayorista_show
                if (preg_match('#^/mayorista/p/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pigalle_mayorista_show')), array (  '_controller' => 'pigalle.controller.mayorista:showAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Mayorista:show.html.twig',    'criteria' =>     array (      'slug' => '$slug',    ),  ),));
                }

                // pigalle_mayorista_quickview
                if ($pathinfo === '/mayorista/p/quickview/id') {
                    return array (  '_controller' => 'pigalle.controller.mayorista:quickviewAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Mayorista:quickview.html.twig',  ),  '_route' => 'pigalle_mayorista_quickview',);
                }

            }

            if (0 === strpos($pathinfo, '/mayorista/re')) {
                // pigalle_mayorista_order
                if ($pathinfo === '/mayorista/realizar-pedido') {
                    return array (  '_controller' => 'pigalle.controller.mayorista:orderAction',  '_sylius' =>   array (    'template' => 'PigalleBundle:Mayorista:ordered.html.twig',  ),  '_route' => 'pigalle_mayorista_order',);
                }

                // pigalle_mayorista_register_success
                if ($pathinfo === '/mayorista/registro/completo') {
                    return array (  '_controller' => 'pigalle.controller.mayorista:registerSuccessAction',  '_route' => 'pigalle_mayorista_register_success',);
                }

            }

        }

        // pigalle_faq
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::faqAction',  '_route' => 'pigalle_faq',);
        }

        // pigalle_contact
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'Gecko\\PigalleBundle\\Controller\\MainController::contactAction',  '_route' => 'pigalle_contact',);
        }

        if (0 === strpos($pathinfo, '/media/cache')) {
            if (0 === strpos($pathinfo, '/media/cache/sylius_')) {
                // _imagine_sylius_16x16
                if (0 === strpos($pathinfo, '/media/cache/sylius_16x16') && preg_match('#^/media/cache/sylius_16x16/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_16x16;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_16x16')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_16x16',));
                }
                not__imagine_sylius_16x16:

                // _imagine_sylius_50x40
                if (0 === strpos($pathinfo, '/media/cache/sylius_50x40') && preg_match('#^/media/cache/sylius_50x40/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_50x40;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_50x40')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_50x40',));
                }
                not__imagine_sylius_50x40:

                // _imagine_sylius_60x60
                if (0 === strpos($pathinfo, '/media/cache/sylius_60x60') && preg_match('#^/media/cache/sylius_60x60/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_60x60;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_60x60')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_60x60',));
                }
                not__imagine_sylius_60x60:

                // _imagine_sylius_138x138
                if (0 === strpos($pathinfo, '/media/cache/sylius_138x138') && preg_match('#^/media/cache/sylius_138x138/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_138x138;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_138x138')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_138x138',));
                }
                not__imagine_sylius_138x138:

                if (0 === strpos($pathinfo, '/media/cache/sylius_2')) {
                    // _imagine_sylius_200x200
                    if (0 === strpos($pathinfo, '/media/cache/sylius_200x200') && preg_match('#^/media/cache/sylius_200x200/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not__imagine_sylius_200x200;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_200x200')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_200x200',));
                    }
                    not__imagine_sylius_200x200:

                    // _imagine_sylius_262x255
                    if (0 === strpos($pathinfo, '/media/cache/sylius_262x255') && preg_match('#^/media/cache/sylius_262x255/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not__imagine_sylius_262x255;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_262x255')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_262x255',));
                    }
                    not__imagine_sylius_262x255:

                }

                // _imagine_sylius_610x600
                if (0 === strpos($pathinfo, '/media/cache/sylius_610x600') && preg_match('#^/media/cache/sylius_610x600/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_610x600;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_610x600')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_610x600',));
                }
                not__imagine_sylius_610x600:

                // _imagine_sylius_gallery
                if (0 === strpos($pathinfo, '/media/cache/sylius_gallery') && preg_match('#^/media/cache/sylius_gallery/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_sylius_gallery;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_gallery')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_gallery',));
                }
                not__imagine_sylius_gallery:

            }

            if (0 === strpos($pathinfo, '/media/cache/pigalle_')) {
                // _imagine_pigalle_60x60
                if (0 === strpos($pathinfo, '/media/cache/pigalle_60x60') && preg_match('#^/media/cache/pigalle_60x60/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_pigalle_60x60;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_pigalle_60x60')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'pigalle_60x60',));
                }
                not__imagine_pigalle_60x60:

                // _imagine_pigalle_220x220
                if (0 === strpos($pathinfo, '/media/cache/pigalle_220x220') && preg_match('#^/media/cache/pigalle_220x220/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_pigalle_220x220;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_pigalle_220x220')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'pigalle_220x220',));
                }
                not__imagine_pigalle_220x220:

                // _imagine_pigalle_460x460
                if (0 === strpos($pathinfo, '/media/cache/pigalle_460x460') && preg_match('#^/media/cache/pigalle_460x460/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_pigalle_460x460;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_pigalle_460x460')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'pigalle_460x460',));
                }
                not__imagine_pigalle_460x460:

                // _imagine_pigalle_900x900
                if (0 === strpos($pathinfo, '/media/cache/pigalle_900x900') && preg_match('#^/media/cache/pigalle_900x900/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_pigalle_900x900;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_pigalle_900x900')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'pigalle_900x900',));
                }
                not__imagine_pigalle_900x900:

            }

        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            if (0 === strpos($pathinfo, '/newsletter/suscribirse')) {
                // gecko_newsletter_subscriber_subscribe
                if ($pathinfo === '/newsletter/suscribirse') {
                    return array (  '_controller' => 'gecko_newsletter.controller.subscriber:subscribeAction',  '_route' => 'gecko_newsletter_subscriber_subscribe',);
                }

                // gecko_newsletter_subscriber_confirm
                if (0 === strpos($pathinfo, '/newsletter/suscribirse/confirmar') && preg_match('#^/newsletter/suscribirse/confirmar/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_subscriber_confirm')), array (  '_controller' => 'gecko_newsletter.controller.subscriber:confirmAction',));
                }

            }

            // gecko_newsletter_subscriber_unsubscribe
            if (0 === strpos($pathinfo, '/newsletter/desuscribirse') && preg_match('#^/newsletter/desuscribirse/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_subscriber_unsubscribe')), array (  '_controller' => 'gecko_newsletter.controller.subscriber:unsubscribeAction',));
            }

            if (0 === strpos($pathinfo, '/newsletter/subscriber')) {
                // gecko_newsletter_backend_subscriber_index
                if (rtrim($pathinfo, '/') === '/newsletter/subscriber') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gecko_newsletter_backend_subscriber_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gecko_newsletter_backend_subscriber_index');
                    }

                    return array (  '_controller' => 'gecko_newsletter.controller.subscriber:indexAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Subscriber:index.html.twig',  ),  '_route' => 'gecko_newsletter_backend_subscriber_index',);
                }
                not_gecko_newsletter_backend_subscriber_index:

                // gecko_newsletter_backend_subscriber_create
                if ($pathinfo === '/newsletter/subscriber/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gecko_newsletter_backend_subscriber_create;
                    }

                    return array (  '_controller' => 'gecko_newsletter.controller.subscriber:createAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Subscriber:create.html.twig',    'redirect' => 'gecko_newsletter_backend_subscriber_index',  ),  '_route' => 'gecko_newsletter_backend_subscriber_create',);
                }
                not_gecko_newsletter_backend_subscriber_create:

                // gecko_newsletter_backend_subscriber_update
                if (preg_match('#^/newsletter/subscriber/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_gecko_newsletter_backend_subscriber_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_subscriber_update')), array (  '_controller' => 'gecko_newsletter.controller.subscriber:updateAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Subscriber:update.html.twig',    'redirect' => 'gecko_newsletter_backend_subscriber_index',  ),));
                }
                not_gecko_newsletter_backend_subscriber_update:

                // gecko_newsletter_backend_subscriber_delete
                if (preg_match('#^/newsletter/subscriber/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_gecko_newsletter_backend_subscriber_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_subscriber_delete')), array (  '_controller' => 'gecko_newsletter.controller.subscriber:deleteAction',  '_sylius' =>   array (    'redirect' => 'gecko_newsletter_backend_subscriber_index',  ),));
                }
                not_gecko_newsletter_backend_subscriber_delete:

                if (0 === strpos($pathinfo, '/newsletter/subscriber-list')) {
                    // gecko_newsletter_backend_subscriber_list_index
                    if (rtrim($pathinfo, '/') === '/newsletter/subscriber-list') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_gecko_newsletter_backend_subscriber_list_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'gecko_newsletter_backend_subscriber_list_index');
                        }

                        return array (  '_controller' => 'gecko_newsletter.controller.subscriber_list:indexAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/SubscriberList:index.html.twig',  ),  '_route' => 'gecko_newsletter_backend_subscriber_list_index',);
                    }
                    not_gecko_newsletter_backend_subscriber_list_index:

                    // gecko_newsletter_backend_subscriber_list_create
                    if ($pathinfo === '/newsletter/subscriber-list/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_gecko_newsletter_backend_subscriber_list_create;
                        }

                        return array (  '_controller' => 'gecko_newsletter.controller.subscriber_list:createAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/SubscriberList:create.html.twig',    'redirect' => 'gecko_newsletter_backend_subscriber_list_index',  ),  '_route' => 'gecko_newsletter_backend_subscriber_list_create',);
                    }
                    not_gecko_newsletter_backend_subscriber_list_create:

                    // gecko_newsletter_backend_subscriber_list_update
                    if (preg_match('#^/newsletter/subscriber\\-list/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                            goto not_gecko_newsletter_backend_subscriber_list_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_subscriber_list_update')), array (  '_controller' => 'gecko_newsletter.controller.subscriber_list:updateAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/SubscriberList:update.html.twig',    'redirect' => 'gecko_newsletter_backend_subscriber_list_index',  ),));
                    }
                    not_gecko_newsletter_backend_subscriber_list_update:

                    // gecko_newsletter_backend_subscriber_list_delete
                    if (preg_match('#^/newsletter/subscriber\\-list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_gecko_newsletter_backend_subscriber_list_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_subscriber_list_delete')), array (  '_controller' => 'gecko_newsletter.controller.subscriber_list:deleteAction',  '_sylius' =>   array (    'redirect' => 'gecko_newsletter_backend_subscriber_list_index',  ),));
                    }
                    not_gecko_newsletter_backend_subscriber_list_delete:

                }

            }

            if (0 === strpos($pathinfo, '/newsletter/newsletter')) {
                // gecko_newsletter_backend_newsletter_index
                if (rtrim($pathinfo, '/') === '/newsletter/newsletter') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gecko_newsletter_backend_newsletter_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gecko_newsletter_backend_newsletter_index');
                    }

                    return array (  '_controller' => 'gecko_newsletter.controller.newsletter:indexAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Newsletter:index.html.twig',  ),  '_route' => 'gecko_newsletter_backend_newsletter_index',);
                }
                not_gecko_newsletter_backend_newsletter_index:

                // gecko_newsletter_backend_newsletter_create
                if ($pathinfo === '/newsletter/newsletter/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gecko_newsletter_backend_newsletter_create;
                    }

                    return array (  '_controller' => 'gecko_newsletter.controller.newsletter:createAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Newsletter:create.html.twig',    'redirect' => 'gecko_newsletter_backend_newsletter_index',  ),  '_route' => 'gecko_newsletter_backend_newsletter_create',);
                }
                not_gecko_newsletter_backend_newsletter_create:

                // gecko_newsletter_backend_newsletter_update
                if (preg_match('#^/newsletter/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_gecko_newsletter_backend_newsletter_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_newsletter_update')), array (  '_controller' => 'gecko_newsletter.controller.newsletter:updateAction',  '_sylius' =>   array (    'template' => 'GeckoNewsletterBundle:Backend/Newsletter:update.html.twig',    'redirect' => 'gecko_newsletter_backend_newsletter_index',  ),));
                }
                not_gecko_newsletter_backend_newsletter_update:

                // gecko_newsletter_backend_newsletter_delete
                if (preg_match('#^/newsletter/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_gecko_newsletter_backend_newsletter_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_newsletter_delete')), array (  '_controller' => 'gecko_newsletter.controller.newsletter:deleteAction',  '_sylius' =>   array (    'redirect' => 'gecko_newsletter_backend_newsletter_index',  ),));
                }
                not_gecko_newsletter_backend_newsletter_delete:

                // gecko_newsletter_backend_newsletter_send
                if (preg_match('#^/newsletter/newsletter/(?P<id>\\d+)/send$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gecko_newsletter_backend_newsletter_send')), array (  '_controller' => 'gecko_newsletter.controller.newsletter:sendAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sylius_backend_index
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/admin/dashboard',  'permanent' => true,  '_route' => 'sylius_backend_index',);
            }

            // sylius_backend_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'sylius_backend.controller.dashboard:mainAction',  '_route' => 'sylius_backend_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/slider')) {
                // sylius_backend_pigalle_slide_index
                if (rtrim($pathinfo, '/') === '/admin/slider') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_pigalle_slide_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_pigalle_slide_index');
                    }

                    return array (  '_controller' => 'sylius.controller.pigalle_slide:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:PigalleSlide:index.html.twig',  ),  '_route' => 'sylius_backend_pigalle_slide_index',);
                }
                not_sylius_backend_pigalle_slide_index:

                // sylius_backend_pigalle_slide_create
                if ($pathinfo === '/admin/slider/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_pigalle_slide_create;
                    }

                    return array (  '_controller' => 'sylius.controller.pigalle_slide:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:PigalleSlide:create.html.twig',    'redirect' => 'sylius_backend_pigalle_slide_index',  ),  '_route' => 'sylius_backend_pigalle_slide_create',);
                }
                not_sylius_backend_pigalle_slide_create:

                // sylius_backend_pigalle_slide_update
                if (preg_match('#^/admin/slider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_pigalle_slide_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_pigalle_slide_update')), array (  '_controller' => 'sylius.controller.pigalle_slide:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:PigalleSlide:update.html.twig',    'redirect' => 'sylius_backend_pigalle_slide_index',  ),));
                }
                not_sylius_backend_pigalle_slide_update:

                // sylius_backend_pigalle_slide_delete
                if (preg_match('#^/admin/slider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_pigalle_slide_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_pigalle_slide_delete')), array (  '_controller' => 'sylius.controller.pigalle_slide:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_pigalle_slide_index',  ),));
                }
                not_sylius_backend_pigalle_slide_delete:

            }

            if (0 === strpos($pathinfo, '/admin/locales')) {
                // sylius_backend_pigalle_local_index
                if (rtrim($pathinfo, '/') === '/admin/locales') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_pigalle_local_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_pigalle_local_index');
                    }

                    return array (  '_controller' => 'sylius.controller.local:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Local:index.html.twig',  ),  '_route' => 'sylius_backend_pigalle_local_index',);
                }
                not_sylius_backend_pigalle_local_index:

                // sylius_backend_pigalle_local_create
                if ($pathinfo === '/admin/locales/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_pigalle_local_create;
                    }

                    return array (  '_controller' => 'sylius.controller.local:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Local:create.html.twig',    'redirect' => 'sylius_backend_pigalle_local_index',  ),  '_route' => 'sylius_backend_pigalle_local_create',);
                }
                not_sylius_backend_pigalle_local_create:

                // sylius_backend_pigalle_local_update
                if (preg_match('#^/admin/locales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_pigalle_local_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_pigalle_local_update')), array (  '_controller' => 'sylius.controller.local:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Local:update.html.twig',    'redirect' => 'sylius_backend_pigalle_local_index',  ),));
                }
                not_sylius_backend_pigalle_local_update:

                // sylius_backend_pigalle_local_delete
                if (preg_match('#^/admin/locales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_pigalle_local_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_pigalle_local_delete')), array (  '_controller' => 'sylius.controller.local:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_pigalle_local_index',  ),));
                }
                not_sylius_backend_pigalle_local_delete:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // sylius_backend_user_index
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_user_index');
                    }

                    return array (  '_controller' => 'sylius.controller.user:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:User:index.html.twig',    'filterable' => true,    'sortable' => true,    'sorting' =>     array (      'id' => 'desc',    ),  ),  '_route' => 'sylius_backend_user_index',);
                }
                not_sylius_backend_user_index:

                // sylius_backend_user_update
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_update')), array (  '_controller' => 'sylius.controller.user:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:User:update.html.twig',    'redirect' => 'sylius_backend_user_show',    'form' => 'fos_user_admin',  ),));
                }
                not_sylius_backend_user_update:

                // sylius_backend_user_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_delete')), array (  '_controller' => 'sylius.controller.user:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_user_index',  ),));
                }
                not_sylius_backend_user_delete:

                // sylius_backend_user_show
                if (preg_match('#^/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_show')), array (  '_controller' => 'sylius.controller.user:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:User:show.html.twig',  ),));
                }
                not_sylius_backend_user_show:

                // sylius_backend_user_toggle_mayorista
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/toogle\\-mayorista$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_user_toggle_mayorista;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_toggle_mayorista')), array (  '_controller' => 'sylius.controller.user:toggleMayoristaAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_user_index',  ),));
                }
                not_sylius_backend_user_toggle_mayorista:

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                if (0 === strpos($pathinfo, '/admin/products')) {
                    // sylius_backend_product_index
                    if (rtrim($pathinfo, '/') === '/admin/products') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_product_index');
                        }

                        return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Product:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',    ),  ),  '_route' => 'sylius_backend_product_index',);
                    }
                    not_sylius_backend_product_index:

                    // sylius_backend_product_create
                    if ($pathinfo === '/admin/products/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_product_create;
                        }

                        return array (  '_controller' => 'sylius.controller.product:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Product:create.html.twig',    'redirect' => 'sylius_backend_product_show',  ),  '_route' => 'sylius_backend_product_create',);
                    }
                    not_sylius_backend_product_create:

                    // sylius_backend_product_update
                    if (preg_match('#^/admin/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                            goto not_sylius_backend_product_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_update')), array (  '_controller' => 'sylius.controller.product:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Product:update.html.twig',    'redirect' => 'sylius_backend_product_show',  ),));
                    }
                    not_sylius_backend_product_update:

                    // sylius_backend_product_delete
                    if (preg_match('#^/admin/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_delete')), array (  '_controller' => 'sylius.controller.product:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_product_index',  ),));
                    }
                    not_sylius_backend_product_delete:

                    // sylius_backend_product_filter_form
                    if ($pathinfo === '/admin/products/filter-form') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_filter_form;
                        }

                        return array (  '_controller' => 'sylius.controller.product:filterFormAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Product:filterForm.html.twig',  ),  '_route' => 'sylius_backend_product_filter_form',);
                    }
                    not_sylius_backend_product_filter_form:

                    // sylius_backend_product_show
                    if (preg_match('#^/admin/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Product:show.html.twig',  ),));
                    }
                    not_sylius_backend_product_show:

                }

                if (0 === strpos($pathinfo, '/admin/product-collections')) {
                    // sylius_backend_product_collection_index
                    if (rtrim($pathinfo, '/') === '/admin/product-collections') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_collection_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_product_collection_index');
                        }

                        return array (  '_controller' => 'sylius.controller.product_collection:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:ProductCollection:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',    ),  ),  '_route' => 'sylius_backend_product_collection_index',);
                    }
                    not_sylius_backend_product_collection_index:

                    // sylius_backend_product_collection_create
                    if ($pathinfo === '/admin/product-collections/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_product_collection_create;
                        }

                        return array (  '_controller' => 'sylius.controller.product_collection:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:ProductCollection:create.html.twig',    'redirect' => 'sylius_backend_product_collection_show',  ),  '_route' => 'sylius_backend_product_collection_create',);
                    }
                    not_sylius_backend_product_collection_create:

                    // sylius_backend_product_collection_update
                    if (preg_match('#^/admin/product\\-collections/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                            goto not_sylius_backend_product_collection_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_collection_update')), array (  '_controller' => 'sylius.controller.product_collection:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:ProductCollection:update.html.twig',    'redirect' => 'sylius_backend_product_collection_show',  ),));
                    }
                    not_sylius_backend_product_collection_update:

                    // sylius_backend_product_collection_delete
                    if (preg_match('#^/admin/product\\-collections/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_product_collection_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_collection_delete')), array (  '_controller' => 'sylius.controller.product_collection:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_product_collection_index',  ),));
                    }
                    not_sylius_backend_product_collection_delete:

                    // sylius_backend_product_collection_filter_form
                    if ($pathinfo === '/admin/product-collections/filter-form') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_collection_filter_form;
                        }

                        return array (  '_controller' => 'sylius.controller.product_collection:filterFormAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:ProductCollection:filterForm.html.twig',  ),  '_route' => 'sylius_backend_product_collection_filter_form',);
                    }
                    not_sylius_backend_product_collection_filter_form:

                    // sylius_backend_product_collection_show
                    if (preg_match('#^/admin/product\\-collections/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_product_collection_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_collection_show')), array (  '_controller' => 'sylius.controller.product_collection:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:ProductCollection:show.html.twig',  ),));
                    }
                    not_sylius_backend_product_collection_show:

                }

                if (0 === strpos($pathinfo, '/admin/products')) {
                    // sylius_backend_variant_create
                    if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_variant_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_variant_create')), array (  '_controller' => 'sylius.controller.variant:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Variant:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_variant_create:

                    // sylius_backend_variant_update
                    if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_variant_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_variant_update')), array (  '_controller' => 'sylius.controller.variant:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Variant:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_variant_update:

                    // sylius_backend_variant_delete
                    if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_variant_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_variant_delete')), array (  '_controller' => 'sylius.controller.variant:deleteAction',  '_sylius' =>   array (    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_variant_delete:

                    // sylius_backend_variant_generate
                    if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/generate$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_variant_generate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_variant_generate')), array (  '_controller' => 'sylius.controller.variant:generateAction',  '_sylius' =>   array (    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_variant_generate:

                }

            }

            if (0 === strpos($pathinfo, '/admin/options')) {
                // sylius_backend_option_index
                if (rtrim($pathinfo, '/') === '/admin/options') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_option_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_option_index');
                    }

                    return array (  '_controller' => 'sylius.controller.option:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Option:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_option_index',);
                }
                not_sylius_backend_option_index:

                // sylius_backend_option_create
                if ($pathinfo === '/admin/options/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_option_create;
                    }

                    return array (  '_controller' => 'sylius.controller.option:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Option:create.html.twig',    'redirect' => 'sylius_backend_option_index',  ),  '_route' => 'sylius_backend_option_create',);
                }
                not_sylius_backend_option_create:

                // sylius_backend_option_update
                if (preg_match('#^/admin/options/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_option_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_option_update')), array (  '_controller' => 'sylius.controller.option:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Option:update.html.twig',    'redirect' => 'sylius_backend_option_index',  ),));
                }
                not_sylius_backend_option_update:

                // sylius_backend_option_delete
                if (preg_match('#^/admin/options/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_option_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_option_delete')), array (  '_controller' => 'sylius.controller.option:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_option_index',  ),));
                }
                not_sylius_backend_option_delete:

            }

            if (0 === strpos($pathinfo, '/admin/taxonomies')) {
                // sylius_backend_taxonomy_index
                if (rtrim($pathinfo, '/') === '/admin/taxonomies') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_taxonomy_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_taxonomy_index');
                    }

                    return array (  '_controller' => 'sylius.controller.taxonomy:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxonomy:index.html.twig',    'sortable' => true,    'paginate' => 50,  ),  '_route' => 'sylius_backend_taxonomy_index',);
                }
                not_sylius_backend_taxonomy_index:

                // sylius_backend_taxonomy_create
                if ($pathinfo === '/admin/taxonomies/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_taxonomy_create;
                    }

                    return array (  '_controller' => 'sylius.controller.taxonomy:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxonomy:create.html.twig',    'redirect' => 'sylius_backend_taxonomy_show',  ),  '_route' => 'sylius_backend_taxonomy_create',);
                }
                not_sylius_backend_taxonomy_create:

                // sylius_backend_taxonomy_update
                if (preg_match('#^/admin/taxonomies/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_taxonomy_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_update')), array (  '_controller' => 'sylius.controller.taxonomy:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxonomy:update.html.twig',    'redirect' => 'sylius_backend_taxonomy_show',  ),));
                }
                not_sylius_backend_taxonomy_update:

                // sylius_backend_taxonomy_delete
                if (preg_match('#^/admin/taxonomies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_taxonomy_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_delete')), array (  '_controller' => 'sylius.controller.taxonomy:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_taxonomy_index',  ),));
                }
                not_sylius_backend_taxonomy_delete:

                // sylius_backend_taxonomy_show
                if (preg_match('#^/admin/taxonomies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_taxonomy_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_show')), array (  '_controller' => 'sylius.controller.taxonomy:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxonomy:show.html.twig',  ),));
                }
                not_sylius_backend_taxonomy_show:

                // sylius_backend_taxon_create
                if (preg_match('#^/admin/taxonomies/(?P<taxonomyId>[^/]++)/taxon/new$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_taxon_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_create')), array (  '_controller' => 'sylius.controller.taxon:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxon:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_create:

                // sylius_backend_taxon_update
                if (preg_match('#^/admin/taxonomies/(?P<taxonomyId>[^/]++)/taxon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_taxon_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_update')), array (  '_controller' => 'sylius.controller.taxon:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Taxon:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_update:

                // sylius_backend_taxon_delete
                if (preg_match('#^/admin/taxonomies/(?P<taxonomyId>[^/]++)/taxon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_taxon_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_delete')), array (  '_controller' => 'sylius.controller.taxon:deleteAction',  '_sylius' =>   array (    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_delete:

            }

            if (0 === strpos($pathinfo, '/admin/orders')) {
                // sylius_backend_order_index
                if (rtrim($pathinfo, '/') === '/admin/orders') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_order_index');
                    }

                    return array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',    ),  ),  '_route' => 'sylius_backend_order_index',);
                }
                not_sylius_backend_order_index:

                // sylius_backend_order_create
                if ($pathinfo === '/admin/orders/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_order_create;
                    }

                    return array (  '_controller' => 'sylius.controller.order:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:create.html.twig',    'redirect' => 'sylius_backend_order_show',  ),  '_route' => 'sylius_backend_order_create',);
                }
                not_sylius_backend_order_create:

                // sylius_backend_order_update
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_order_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_update')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:update.html.twig',    'redirect' => 'sylius_backend_order_show',  ),));
                }
                not_sylius_backend_order_update:

                // sylius_backend_order_delete
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_order_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_delete')), array (  '_controller' => 'sylius.controller.order:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_order_index',  ),));
                }
                not_sylius_backend_order_delete:

                // sylius_backend_order_filter_form
                if ($pathinfo === '/admin/orders/filter-form') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_filter_form;
                    }

                    return array (  '_controller' => 'sylius.controller.order:filterFormAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:filterForm.html.twig',  ),  '_route' => 'sylius_backend_order_filter_form',);
                }
                not_sylius_backend_order_filter_form:

                // sylius_backend_order_show
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:show.html.twig',  ),));
                }
                not_sylius_backend_order_show:

                // sylius_backend_order_by_user
                if (0 === strpos($pathinfo, '/admin/orders/u') && preg_match('#^/admin/orders/u/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_by_user')), array (  '_controller' => 'sylius.controller.order:indexByUserAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Order:indexByUser.html.twig',    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'desc',    ),  ),));
                }
                not_sylius_backend_order_by_user:

            }

            if (0 === strpos($pathinfo, '/admin/promotion')) {
                if (0 === strpos($pathinfo, '/admin/promotions')) {
                    // sylius_backend_promotion_index
                    if (rtrim($pathinfo, '/') === '/admin/promotions') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_promotion_index');
                        }

                        return array (  '_controller' => 'sylius.controller.promotion:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Promotion:index.html.twig',    'sortable' => true,  ),  '_route' => 'sylius_backend_promotion_index',);
                    }
                    not_sylius_backend_promotion_index:

                    // sylius_backend_promotion_create
                    if ($pathinfo === '/admin/promotions/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_create;
                        }

                        return array (  '_controller' => 'sylius.controller.promotion:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Promotion:create.html.twig',    'redirect' => 'sylius_backend_promotion_show',  ),  '_route' => 'sylius_backend_promotion_create',);
                    }
                    not_sylius_backend_promotion_create:

                    // sylius_backend_promotion_update
                    if (preg_match('#^/admin/promotions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_promotion_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_update')), array (  '_controller' => 'sylius.controller.promotion:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Promotion:update.html.twig',    'redirect' => 'sylius_backend_promotion_show',  ),));
                    }
                    not_sylius_backend_promotion_update:

                    // sylius_backend_promotion_delete
                    if (preg_match('#^/admin/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_delete')), array (  '_controller' => 'sylius.controller.promotion:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_promotion_index',  ),));
                    }
                    not_sylius_backend_promotion_delete:

                    // sylius_backend_promotion_show
                    if (preg_match('#^/admin/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_show')), array (  '_controller' => 'sylius.controller.promotion:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Promotion:show.html.twig',  ),));
                    }
                    not_sylius_backend_promotion_show:

                    // sylius_backend_promotion_coupon_index
                    if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_promotion_coupon_index');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_index')), array (  '_controller' => 'sylius.controller.promotion_coupon:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Coupon:index.html.twig',    'criteria' =>     array (      'promotion' => '$promotionId',    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_index:

                    // sylius_backend_promotion_coupon_create
                    if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_create')), array (  '_controller' => 'sylius.controller.promotion_coupon:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Coupon:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_create:

                    // sylius_backend_promotion_coupon_update
                    if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_update')), array (  '_controller' => 'sylius.controller.promotion_coupon:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Coupon:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_update:

                    // sylius_backend_promotion_coupon_delete
                    if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_coupon_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_delete')), array (  '_controller' => 'sylius.controller.promotion_coupon:deleteAction',  '_sylius' =>   array (    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_promotion_coupon_delete:

                    // sylius_backend_promotion_coupon_generate
                    if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/generate$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_generate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_generate')), array (  '_controller' => 'sylius.controller.promotion_coupon:generateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Coupon:generate.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_coupon_index',      'parameters' =>       array (        'promotionId' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_generate:

                }

                if (0 === strpos($pathinfo, '/admin/promotion-')) {
                    // sylius_backend_promotion_rule_delete
                    if (0 === strpos($pathinfo, '/admin/promotion-rules') && preg_match('#^/admin/promotion\\-rules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_rule_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_rule_delete')), array (  '_controller' => 'sylius.controller.promotion_rule:deleteAction',  '_sylius' =>   array (    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_promotion_rule_delete:

                    // sylius_backend_promotion_action_delete
                    if (0 === strpos($pathinfo, '/admin/promotion-actions') && preg_match('#^/admin/promotion\\-actions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_action_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_action_delete')), array (  '_controller' => 'sylius.controller.promotion_action:deleteAction',  '_sylius' =>   array (    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_promotion_action_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/shipments')) {
                // sylius_backend_shipment_index
                if (rtrim($pathinfo, '/') === '/admin/shipments') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_shipment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_shipment_index');
                    }

                    return array (  '_controller' => 'sylius.controller.shipment:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Shipment:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'desc',    ),  ),  '_route' => 'sylius_backend_shipment_index',);
                }
                not_sylius_backend_shipment_index:

                // sylius_backend_shipment_update
                if (preg_match('#^/admin/shipments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_shipment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_update')), array (  '_controller' => 'sylius.controller.shipment:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Shipment:update.html.twig',    'redirect' => 'sylius_backend_shipment_show',  ),));
                }
                not_sylius_backend_shipment_update:

                // sylius_backend_shipment_delete
                if (preg_match('#^/admin/shipments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_shipment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_delete')), array (  '_controller' => 'sylius.controller.shipment:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_shipment_index',  ),));
                }
                not_sylius_backend_shipment_delete:

                // sylius_backend_shipment_show
                if (preg_match('#^/admin/shipments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_shipment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_show')), array (  '_controller' => 'sylius.controller.shipment:showAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Shipment:show.html.twig',  ),));
                }
                not_sylius_backend_shipment_show:

            }

            if (0 === strpos($pathinfo, '/admin/payments')) {
                // sylius_backend_payment_index
                if (rtrim($pathinfo, '/') === '/admin/payments') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_payment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_payment_index');
                    }

                    return array (  '_controller' => 'sylius.controller.payment:indexAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Payment:index.html.twig',    'sortable' => true,  ),  '_route' => 'sylius_backend_payment_index',);
                }
                not_sylius_backend_payment_index:

                // sylius_backend_payment_create
                if ($pathinfo === '/admin/payments/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_payment_create;
                    }

                    return array (  '_controller' => 'sylius.controller.payment:createAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Payment:create.html.twig',    'redirect' => 'sylius_backend_payment_index',  ),  '_route' => 'sylius_backend_payment_create',);
                }
                not_sylius_backend_payment_create:

                // sylius_backend_payment_update
                if (preg_match('#^/admin/payments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_payment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_update')), array (  '_controller' => 'sylius.controller.payment:updateAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Payment:update.html.twig',    'redirect' => 'sylius_backend_payment_index',  ),));
                }
                not_sylius_backend_payment_update:

                // sylius_backend_payment_delete
                if (preg_match('#^/admin/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_payment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_delete')), array (  '_controller' => 'sylius.controller.payment:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_payment_index',  ),));
                }
                not_sylius_backend_payment_delete:

                // sylius_backend_payment_show
                if (preg_match('#^/admin/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_payment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_show')), array (  '_controller' => 'sylius.controller.payment:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusBackendBundle:Payment:show.html.twig',  ),));
                }
                not_sylius_backend_payment_show:

            }

            if (0 === strpos($pathinfo, '/admin/settings')) {
                // sylius_backend_general_settings
                if ($pathinfo === '/admin/settings/general') {
                    return array (  '_controller' => 'sylius.controller.settings:updateAction',  'namespace' => 'general',  'template' => 'SyliusBackendBundle:Settings:general.html.twig',  '_route' => 'sylius_backend_general_settings',);
                }

                // sylius_backend_taxation_settings
                if ($pathinfo === '/admin/settings/taxation') {
                    return array (  '_controller' => 'sylius.controller.settings:updateAction',  'namespace' => 'taxation',  'template' => 'SyliusBackendBundle:Settings:taxation.html.twig',  '_route' => 'sylius_backend_taxation_settings',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // sylius_installer
            if ($pathinfo === '/installer') {
                return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'sylius_installer',  '_route' => 'sylius_installer',);
            }

            if (0 === strpos($pathinfo, '/installer/flow')) {
                // sylius_flow_start
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                }

                // sylius_flow_display
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                }

                // sylius_flow_forward
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/mayorista/login')) {
            // fos_user_mayorista_security_login
            if ($pathinfo === '/mayorista/login') {
                return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::registerMayoristaAction',  '_route' => 'fos_user_mayorista_security_login',);
            }

            // fos_user_mayorista_security_check
            if ($pathinfo === '/mayorista/login_check') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_mayorista_security_check',);
            }

        }

        if (0 === strpos($pathinfo, '/cuenta/perfil')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/cuenta/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/cuenta/perfil/edit') {
                return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/registro')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/registro') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/registro/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/registro/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/registro/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/registro/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/registro/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/cuenta/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Gecko\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
