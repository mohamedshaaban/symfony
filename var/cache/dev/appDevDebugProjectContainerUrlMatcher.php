<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_home
            if ('/_profiler' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_home');
                }

                return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
            }

            if (0 === strpos($pathinfo, '/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
            }

            // _profiler_open_file
            if ('/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/_partial')) {
                    // sylius_admin_partial_address_log_entry_index
                    if (0 === strpos($pathinfo, '/admin/_partial/address/log-entry') && preg_match('#^/admin/_partial/address/log\\-entry/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_partial_address_log_entry_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_address_log_entry_index')), array (  '_controller' => 'sylius.controller.address_log_entry:indexAction',  '_sylius' =>   array (    'template' => '@SyliusUi/Grid/_history.html.twig',    'grid' => 'sylius_admin_address_log_entry',    'section' => 'admin',    'permission' => true,  ),));
                    }
                    not_sylius_admin_partial_address_log_entry_index:

                    // sylius_admin_partial_channel_index
                    if ('/admin/_partial/channels' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_partial_channel_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_partial_channel_index');
                        }

                        return array (  '_controller' => 'sylius.controller.channel:indexAction',  '_sylius' =>   array (    'repository' =>     array (      'method' => 'findAll',    ),    'template' => '$template',    'permission' => true,  ),  '_route' => 'sylius_admin_partial_channel_index',);
                    }
                    not_sylius_admin_partial_channel_index:

                    if (0 === strpos($pathinfo, '/admin/_partial/customers')) {
                        // sylius_admin_partial_customer_latest
                        if (0 === strpos($pathinfo, '/admin/_partial/customers/latest') && preg_match('#^/admin/_partial/customers/latest/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_customer_latest;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_customer_latest')), array (  '_controller' => 'sylius.controller.customer:indexAction',  '_sylius' =>   array (    'repository' =>     array (      'method' => 'findLatest',      'arguments' =>       array (        0 => '!!int $count',      ),    ),    'template' => '$template',    'permission' => true,  ),));
                        }
                        not_sylius_admin_partial_customer_latest:

                        // sylius_admin_partial_customer_show
                        if (preg_match('#^/admin/_partial/customers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_customer_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_customer_show')), array (  '_controller' => 'sylius.controller.customer:showAction',  '_sylius' =>   array (    'template' => '$template',    'vars' => '$vars',    'permission' => true,  ),));
                        }
                        not_sylius_admin_partial_customer_show:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/_partial/orders/latest')) {
                        // sylius_admin_partial_order_latest
                        if (preg_match('#^/admin/_partial/orders/latest/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_order_latest;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_order_latest')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'repository' =>     array (      'method' => 'findLatest',      'arguments' =>       array (        0 => '!!int $count',      ),    ),    'template' => '$template',    'permission' => true,  ),));
                        }
                        not_sylius_admin_partial_order_latest:

                        // sylius_admin_partial_order_latest_in_channel
                        if (preg_match('#^/admin/_partial/orders/latest/(?P<channelCode>[^/]++)/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_order_latest_in_channel;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_order_latest_in_channel')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'repository' =>     array (      'method' => 'findLatestInChannel',      'arguments' =>       array (        'count' => '!!int $count',        'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))',      ),    ),    'template' => '$template',    'permission' => true,  ),));
                        }
                        not_sylius_admin_partial_order_latest_in_channel:

                    }

                    // sylius_admin_partial_shipment_ship
                    if (0 === strpos($pathinfo, '/admin/_partial/orders') && preg_match('#^/admin/_partial/orders/(?P<orderId>[^/]++)/shipments/(?P<id>[^/]++)/ship$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_partial_shipment_ship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_shipment_ship')), array (  '_controller' => 'sylius.controller.shipment:updateAction',  '_sylius' =>   array (    'event' => 'ship',    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_shipment',      'transition' => 'ship',    ),    'section' => 'admin',    'permission' => true,    'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig',    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType',    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'orderId' => '$orderId',          'id' => '$id',        ),      ),    ),  ),));
                    }
                    not_sylius_admin_partial_shipment_ship:

                    // sylius_admin_partial_product_show
                    if (0 === strpos($pathinfo, '/admin/_partial/products') && preg_match('#^/admin/_partial/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_partial_product_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => '$template',    'vars' => '$vars',    'permission' => true,  ),));
                    }
                    not_sylius_admin_partial_product_show:

                    // sylius_admin_partial_promotion_show
                    if (0 === strpos($pathinfo, '/admin/_partial/promotions') && preg_match('#^/admin/_partial/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_partial_promotion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_promotion_show')), array (  '_controller' => 'sylius.controller.promotion:showAction',  '_sylius' =>   array (    'template' => '$template',    'vars' => '$vars',    'permission' => true,  ),));
                    }
                    not_sylius_admin_partial_promotion_show:

                    if (0 === strpos($pathinfo, '/admin/_partial/taxons')) {
                        // sylius_admin_partial_taxon_tree
                        if ('/admin/_partial/taxons/tree' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_taxon_tree;
                            }

                            return array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findRootNodes',    ),    'permission' => true,  ),  '_route' => 'sylius_admin_partial_taxon_tree',);
                        }
                        not_sylius_admin_partial_taxon_tree:

                        // sylius_admin_partial_taxon_show
                        if (preg_match('#^/admin/_partial/taxons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_partial_taxon_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_partial_taxon_show')), array (  '_controller' => 'sylius.controller.taxon:showAction',  '_sylius' =>   array (    'template' => '$template',    'vars' => '$vars',    'permission' => true,  ),));
                        }
                        not_sylius_admin_partial_taxon_show:

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/ajax')) {
                    if (0 === strpos($pathinfo, '/admin/ajax/taxons')) {
                        // sylius_admin_ajax_taxon_root_nodes
                        if ('/admin/ajax/taxons/root-nodes' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_ajax_taxon_root_nodes;
                            }

                            return array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findRootNodes',    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_taxon_root_nodes',);
                        }
                        not_sylius_admin_ajax_taxon_root_nodes:

                        if (0 === strpos($pathinfo, '/admin/ajax/taxons/leaf')) {
                            // sylius_admin_ajax_taxon_leafs
                            if ('/admin/ajax/taxons/leafs' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_taxon_leafs;
                                }

                                return array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findChildren',      'arguments' =>       array (        'parentCode' => '$parentCode',      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_taxon_leafs',);
                            }
                            not_sylius_admin_ajax_taxon_leafs:

                            // sylius_admin_ajax_taxon_by_code
                            if ('/admin/ajax/taxons/leaf' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_taxon_by_code;
                                }

                                return array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findBy',      'arguments' =>       array (        0 =>         array (          'code' => '$code',        ),      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_taxon_by_code',);
                            }
                            not_sylius_admin_ajax_taxon_by_code:

                        }

                        // sylius_admin_ajax_taxon_by_name_phrase
                        if ('/admin/ajax/taxons/search' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_ajax_taxon_by_name_phrase;
                            }

                            return array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findByNamePart',      'arguments' =>       array (        'phrase' => '$phrase',      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_taxon_by_name_phrase',);
                        }
                        not_sylius_admin_ajax_taxon_by_name_phrase:

                        // sylius_admin_ajax_generate_taxon_slug
                        if ('/admin/ajax/taxons/generate-slug' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_ajax_generate_taxon_slug;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_ajax_generate_taxon_slug');
                            }

                            return array (  '_controller' => 'sylius.controller.taxon_slug:generateAction',  '_format' => 'json',  '_route' => 'sylius_admin_ajax_generate_taxon_slug',);
                        }
                        not_sylius_admin_ajax_generate_taxon_slug:

                        // sylius_admin_ajax_taxon_move
                        if (preg_match('#^/admin/ajax/taxons/(?P<id>[^/]++)/move$#s', $pathinfo, $matches)) {
                            if ('PUT' !== $canonicalMethod) {
                                $allow[] = 'PUT';
                                goto not_sylius_admin_ajax_taxon_move;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_ajax_taxon_move')), array (  '_controller' => 'sylius.controller.taxon:updateAction',  '_sylius' =>   array (    'permission' => true,    'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType',  ),  '_format' => 'json',));
                        }
                        not_sylius_admin_ajax_taxon_move:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/ajax/product')) {
                        if (0 === strpos($pathinfo, '/admin/ajax/products')) {
                            // sylius_admin_ajax_generate_product_slug
                            if ('/admin/ajax/products/generate-slug' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_generate_product_slug;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_ajax_generate_product_slug');
                                }

                                return array (  '_controller' => 'sylius.controller.product_slug:generateAction',  '_format' => 'json',  '_route' => 'sylius_admin_ajax_generate_product_slug',);
                            }
                            not_sylius_admin_ajax_generate_product_slug:

                            // sylius_admin_ajax_product_by_name_phrase
                            if ('/admin/ajax/products/search' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_product_by_name_phrase;
                                }

                                return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findByNamePart',      'arguments' =>       array (        'phrase' => '$phrase',        'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()',      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_by_name_phrase',);
                            }
                            not_sylius_admin_ajax_product_by_name_phrase:

                            // sylius_admin_ajax_product_by_code
                            if ('/admin/ajax/products/code' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_product_by_code;
                                }

                                return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findBy',      'arguments' =>       array (        0 =>         array (          'code' => '$code',        ),      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_by_code',);
                            }
                            not_sylius_admin_ajax_product_by_code:

                            // sylius_admin_ajax_product_index
                            if ('/admin/ajax/products' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_product_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_ajax_product_index');
                                }

                                return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'permission' => true,    'grid' => 'sylius_admin_product',  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_index',);
                            }
                            not_sylius_admin_ajax_product_index:

                        }

                        // sylius_admin_ajax_product_taxons_update_position
                        if ('/admin/ajax/product-taxons/update' === $pathinfo) {
                            if ('PUT' !== $canonicalMethod) {
                                $allow[] = 'PUT';
                                goto not_sylius_admin_ajax_product_taxons_update_position;
                            }

                            return array (  '_controller' => 'sylius.controller.product_taxon:updatePositionsAction',  '_sylius' =>   array (    'permission' => true,  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_taxons_update_position',);
                        }
                        not_sylius_admin_ajax_product_taxons_update_position:

                        if (0 === strpos($pathinfo, '/admin/ajax/product-variants')) {
                            // sylius_admin_ajax_product_variants_update_position
                            if ('/admin/ajax/product-variants/update' === $pathinfo) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_sylius_admin_ajax_product_variants_update_position;
                                }

                                return array (  '_controller' => 'sylius.controller.product_variant:updatePositionsAction',  '_sylius' =>   array (    'permission' => true,  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_variants_update_position',);
                            }
                            not_sylius_admin_ajax_product_variants_update_position:

                            // sylius_admin_ajax_product_variants_by_phrase
                            if ('/admin/ajax/product-variants/search' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_product_variants_by_phrase;
                                }

                                return array (  '_controller' => 'sylius.controller.product_variant:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findByPhraseAndProductCode',      'arguments' =>       array (        'phrase' => '$phrase',        'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()',        'productCode' => '$productCode',      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_variants_by_phrase',);
                            }
                            not_sylius_admin_ajax_product_variants_by_phrase:

                            // sylius_admin_ajax_product_variants_by_codes
                            if ('/admin/ajax/product-variants' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_ajax_product_variants_by_codes;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_ajax_product_variants_by_codes');
                                }

                                return array (  '_controller' => 'sylius.controller.product_variant:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Autocomplete',    ),    'permission' => true,    'repository' =>     array (      'method' => 'findByCodesAndProductCode',      'arguments' =>       array (        0 => '$code',        1 => '$productCode',      ),    ),  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_product_variants_by_codes',);
                            }
                            not_sylius_admin_ajax_product_variants_by_codes:

                        }

                    }

                    // sylius_admin_ajax_render_province_form
                    if ('/admin/ajax/render-province-form' === $pathinfo) {
                        return array (  '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/Common/Form/_province.html.twig',  ),  '_format' => 'json',  '_route' => 'sylius_admin_ajax_render_province_form',);
                    }

                    // sylius_admin_ajax_get_version
                    if ('/admin/ajax/get-version' === $pathinfo) {
                        return array (  '_controller' => 'sylius.controller.admin.notification:getVersionAction',  '_format' => 'json',  '_route' => 'sylius_admin_ajax_get_version',);
                    }

                }

                // sylius_admin_dashboard
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_dashboard');
                    }

                    return array (  '_controller' => 'sylius.controller.admin.dashboard:indexAction',  '_route' => 'sylius_admin_dashboard',);
                }

                // sylius_admin_impersonate_user
                if (0 === strpos($pathinfo, '/admin/impersonate') && preg_match('#^/admin/impersonate(?:/(?P<username>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_impersonate_user')), array (  '_controller' => 'sylius.controller.impersonate_user:impersonateAction',  'username' => '$username',));
                }

                // sylius_admin_inventory_index
                if ('/admin/inventory' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_inventory_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_inventory_index');
                    }

                    return array (  '_controller' => 'sylius.controller.product_variant:indexAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/Crud/index.html.twig',    'grid' => 'sylius_admin_inventory',    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'icon' => 'history',      'templates' =>       array (        'breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig',      ),      'header' => 'sylius.ui.inventory',      'subheader' => 'sylius.ui.manage_inventory',    ),  ),  '_route' => 'sylius_admin_inventory_index',);
                }
                not_sylius_admin_inventory_index:

                if (0 === strpos($pathinfo, '/admin/users')) {
                    // sylius_admin_admin_user_index
                    if ('/admin/users' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_admin_user_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_admin_user_index');
                        }

                        return array (  '_controller' => 'sylius.controller.admin_user:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_admin_user',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel',      'templates' =>       array (        'form' => 'SyliusAdminBundle:AdminUser:_form.html.twig',      ),      'icon' => 'lock',    ),  ),  '_route' => 'sylius_admin_admin_user_index',);
                    }
                    not_sylius_admin_admin_user_index:

                    // sylius_admin_admin_user_create
                    if ('/admin/users/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_sylius_admin_admin_user_create;
                        }

                        return array (  '_controller' => 'sylius.controller.admin_user:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_admin_user_index',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel',      'templates' =>       array (        'form' => 'SyliusAdminBundle:AdminUser:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_admin_user_create',);
                    }
                    not_sylius_admin_admin_user_create:

                    // sylius_admin_admin_user_update
                    if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                            goto not_sylius_admin_admin_user_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_admin_user_update')), array (  '_controller' => 'sylius.controller.admin_user:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_admin_user_index',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel',      'templates' =>       array (        'form' => 'SyliusAdminBundle:AdminUser:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_admin_user_update:

                    // sylius_admin_admin_user_delete
                    if (preg_match('#^/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_sylius_admin_admin_user_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_admin_user_delete')), array (  '_controller' => 'sylius.controller.admin_user:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel',      'templates' =>       array (        'form' => 'SyliusAdminBundle:AdminUser:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_admin_user_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/channels')) {
                        // sylius_admin_channel_index
                        if ('/admin/channels' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_channel_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_channel_index');
                            }

                            return array (  '_controller' => 'sylius.controller.channel:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_channel',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.configure_channels_available_in_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Channel:_form.html.twig',      ),      'icon' => 'share alternate',    ),  ),  '_route' => 'sylius_admin_channel_index',);
                        }
                        not_sylius_admin_channel_index:

                        // sylius_admin_channel_create
                        if ('/admin/channels/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_channel_create;
                            }

                            return array (  '_controller' => 'sylius.controller.channel:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_channel_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.configure_channels_available_in_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Channel:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_channel_create',);
                        }
                        not_sylius_admin_channel_create:

                        // sylius_admin_channel_update
                        if (preg_match('#^/admin/channels/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_channel_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_channel_update')), array (  '_controller' => 'sylius.controller.channel:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_channel_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.configure_channels_available_in_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Channel:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_channel_update:

                        // sylius_admin_channel_delete
                        if (preg_match('#^/admin/channels/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_channel_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_channel_delete')), array (  '_controller' => 'sylius.controller.channel:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.configure_channels_available_in_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Channel:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_channel_delete:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/countries')) {
                        // sylius_admin_country_index
                        if ('/admin/countries' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_country_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_country_index');
                            }

                            return array (  '_controller' => 'sylius.controller.country:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_country',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_destinations',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Country:_form.html.twig',      ),      'icon' => 'flag',    ),  ),  '_route' => 'sylius_admin_country_index',);
                        }
                        not_sylius_admin_country_index:

                        // sylius_admin_country_create
                        if ('/admin/countries/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_country_create;
                            }

                            return array (  '_controller' => 'sylius.controller.country:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_country_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_destinations',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Country:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_country_create',);
                        }
                        not_sylius_admin_country_create:

                        // sylius_admin_country_update
                        if (preg_match('#^/admin/countries/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_country_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_country_update')), array (  '_controller' => 'sylius.controller.country:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_country_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_destinations',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Country:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_country_update:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/cu')) {
                        if (0 === strpos($pathinfo, '/admin/currencies')) {
                            // sylius_admin_currency_index
                            if ('/admin/currencies' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_currency_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_currency_index');
                                }

                                return array (  '_controller' => 'sylius.controller.currency:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_currency',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_currencies_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Currency:_form.html.twig',      ),      'icon' => 'dollar',    ),  ),  '_route' => 'sylius_admin_currency_index',);
                            }
                            not_sylius_admin_currency_index:

                            // sylius_admin_currency_create
                            if ('/admin/currencies/new' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_currency_create;
                                }

                                return array (  '_controller' => 'sylius.controller.currency:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_currency_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_currencies_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Currency:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_currency_create',);
                            }
                            not_sylius_admin_currency_create:

                            // sylius_admin_currency_update
                            if (preg_match('#^/admin/currencies/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                    goto not_sylius_admin_currency_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_currency_update')), array (  '_controller' => 'sylius.controller.currency:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_currency_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_currencies_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Currency:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_currency_update:

                        }

                        elseif (0 === strpos($pathinfo, '/admin/customers')) {
                            // sylius_admin_customer_index
                            if ('/admin/customers' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_customer_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_customer_index');
                                }

                                return array (  '_controller' => 'sylius.controller.customer:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_customer',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Customer:_form.html.twig',      ),      'icon' => 'users',    ),  ),  '_route' => 'sylius_admin_customer_index',);
                            }
                            not_sylius_admin_customer_index:

                            // sylius_admin_customer_create
                            if ('/admin/customers/new' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_customer_create;
                                }

                                return array (  '_controller' => 'sylius.controller.customer:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_customer_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Customer:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_customer_create',);
                            }
                            not_sylius_admin_customer_create:

                            // sylius_admin_customer_update
                            if (preg_match('#^/admin/customers/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                    goto not_sylius_admin_customer_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_customer_update')), array (  '_controller' => 'sylius.controller.customer:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_customer_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Customer:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_customer_update:

                            // sylius_admin_customer_show
                            if (preg_match('#^/admin/customers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_customer_show')), array (  '_controller' => 'sylius.controller.customer:showAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Customer:show.html.twig',    'permission' => true,  ),));
                            }

                            // sylius_admin_customer_order_index
                            if (preg_match('#^/admin/customers/(?P<id>[^/]++)/orders$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_customer_order_index;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_customer_order_index')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => '@SyliusAdmin/Crud/index.html.twig',    'grid' => 'sylius_admin_customer_order',    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          '$customerId' => '$id',        ),      ),      'templates' =>       array (        'breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig',        'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig',      ),      'subheader' => 'sylius.ui.process_your_orders',      'icon' => 'cart',    ),  ),));
                            }
                            not_sylius_admin_customer_order_index:

                        }

                        elseif (0 === strpos($pathinfo, '/admin/customer-groups')) {
                            // sylius_admin_customer_group_index
                            if ('/admin/customer-groups' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_customer_group_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_customer_group_index');
                                }

                                return array (  '_controller' => 'sylius.controller.customer_group:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_customer_group',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'header' => 'sylius.ui.customer_groups',      'subheader' => 'sylius.ui.manage_customer_groups',      'templates' =>       array (        'form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig',      ),      'icon' => 'archive',    ),  ),  '_route' => 'sylius_admin_customer_group_index',);
                            }
                            not_sylius_admin_customer_group_index:

                            // sylius_admin_customer_group_create
                            if ('/admin/customer-groups/new' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_customer_group_create;
                                }

                                return array (  '_controller' => 'sylius.controller.customer_group:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_customer_group_update',    'permission' => true,    'vars' =>     array (      'header' => 'sylius.ui.customer_groups',      'subheader' => 'sylius.ui.manage_customer_groups',      'templates' =>       array (        'form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_customer_group_create',);
                            }
                            not_sylius_admin_customer_group_create:

                            // sylius_admin_customer_group_update
                            if (preg_match('#^/admin/customer\\-groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                    goto not_sylius_admin_customer_group_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_customer_group_update')), array (  '_controller' => 'sylius.controller.customer_group:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_customer_group_update',    'permission' => true,    'vars' =>     array (      'header' => 'sylius.ui.customer_groups',      'subheader' => 'sylius.ui.manage_customer_groups',      'templates' =>       array (        'form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_customer_group_update:

                            // sylius_admin_customer_group_delete
                            if (preg_match('#^/admin/customer\\-groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_sylius_admin_customer_group_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_customer_group_delete')), array (  '_controller' => 'sylius.controller.customer_group:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'header' => 'sylius.ui.customer_groups',      'subheader' => 'sylius.ui.manage_customer_groups',      'templates' =>       array (        'form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_customer_group_delete:

                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/orders')) {
                    // sylius_admin_customer_orders_statistics
                    if ('/admin/orders-statistics' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_customer_orders_statistics;
                        }

                        return array (  '_controller' => 'sylius.controller.customer_statistics:renderAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,  ),  '_route' => 'sylius_admin_customer_orders_statistics',);
                    }
                    not_sylius_admin_customer_orders_statistics:

                    // sylius_admin_order_index
                    if ('/admin/orders' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_order_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_order_index');
                        }

                        return array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_order',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.process_your_orders',      'icon' => 'cart',    ),  ),  '_route' => 'sylius_admin_order_index',);
                    }
                    not_sylius_admin_order_index:

                    // sylius_admin_order_show
                    if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_order_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => 'SyliusAdminBundle:Order:show.html.twig',  ),));
                    }
                    not_sylius_admin_order_show:

                    // sylius_admin_order_history
                    if (preg_match('#^/admin/orders/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_order_history;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_history')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => 'SyliusAdminBundle:Order:history.html.twig',  ),));
                    }
                    not_sylius_admin_order_history:

                    // sylius_admin_order_update
                    if (preg_match('#^/admin/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                            $allow = array_merge($allow, array('GET', 'PUT'));
                            goto not_sylius_admin_order_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_update')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => 'SyliusAdminBundle:Order:update.html.twig',    'form' =>     array (      'options' =>       array (        'validation_groups' =>         array (          0 => 'sylius_shipping_address_update',        ),      ),    ),  ),));
                    }
                    not_sylius_admin_order_update:

                    // sylius_admin_order_cancel
                    if (preg_match('#^/admin/orders/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_sylius_admin_order_cancel;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_cancel')), array (  '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction',  '_sylius' =>   array (    'permission' => true,    'state_machine' =>     array (      'graph' => 'sylius_order',      'transition' => 'cancel',    ),    'redirect' => 'referer',  ),));
                    }
                    not_sylius_admin_order_cancel:

                    // sylius_admin_order_payment_complete
                    if (preg_match('#^/admin/orders/(?P<orderId>[^/]++)/payments/(?P<id>[^/]++)/complete$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_sylius_admin_order_payment_complete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_payment_complete')), array (  '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction',  '_sylius' =>   array (    'event' => 'complete',    'permission' => true,    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_payment',      'transition' => 'complete',    ),    'redirect' => 'referer',  ),));
                    }
                    not_sylius_admin_order_payment_complete:

                    // sylius_admin_order_payment_refund
                    if (preg_match('#^/admin/orders/(?P<orderId>[^/]++)/payments/(?P<id>[^/]++)/refund$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_sylius_admin_order_payment_refund;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_payment_refund')), array (  '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction',  '_sylius' =>   array (    'permission' => true,    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_payment',      'transition' => 'refund',    ),    'redirect' => 'referer',    'flash' => 'sylius.payment.refunded',  ),));
                    }
                    not_sylius_admin_order_payment_refund:

                }

                elseif (0 === strpos($pathinfo, '/admin/exchange-rates')) {
                    // sylius_admin_exchange_rate_index
                    if ('/admin/exchange-rates' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_exchange_rate_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_exchange_rate_index');
                        }

                        return array (  '_controller' => 'sylius.controller.exchange_rate:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_exchange_rate',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_exchange_rates',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig',      ),      'icon' => 'sliders',    ),  ),  '_route' => 'sylius_admin_exchange_rate_index',);
                    }
                    not_sylius_admin_exchange_rate_index:

                    // sylius_admin_exchange_rate_create
                    if ('/admin/exchange-rates/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_sylius_admin_exchange_rate_create;
                        }

                        return array (  '_controller' => 'sylius.controller.exchange_rate:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_exchange_rate_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_exchange_rates',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_exchange_rate_create',);
                    }
                    not_sylius_admin_exchange_rate_create:

                    // sylius_admin_exchange_rate_update
                    if (preg_match('#^/admin/exchange\\-rates/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                            goto not_sylius_admin_exchange_rate_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_exchange_rate_update')), array (  '_controller' => 'sylius.controller.exchange_rate:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_exchange_rate_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_exchange_rates',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_exchange_rate_update:

                    // sylius_admin_exchange_rate_delete
                    if (preg_match('#^/admin/exchange\\-rates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_sylius_admin_exchange_rate_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_exchange_rate_delete')), array (  '_controller' => 'sylius.controller.exchange_rate:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_exchange_rates',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_exchange_rate_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/locales')) {
                    // sylius_admin_locale_index
                    if ('/admin/locales' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_locale_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_locale_index');
                        }

                        return array (  '_controller' => 'sylius.controller.locale:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_locale',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_languages_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Locale:_form.html.twig',      ),      'icon' => 'translate',    ),  ),  '_route' => 'sylius_admin_locale_index',);
                    }
                    not_sylius_admin_locale_index:

                    // sylius_admin_locale_create
                    if ('/admin/locales/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_sylius_admin_locale_create;
                        }

                        return array (  '_controller' => 'sylius.controller.locale:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_locale_index',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_languages_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Locale:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_locale_create',);
                    }
                    not_sylius_admin_locale_create:

                    // sylius_admin_locale_update
                    if (preg_match('#^/admin/locales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                            goto not_sylius_admin_locale_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_locale_update')), array (  '_controller' => 'sylius.controller.locale:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_locale_index',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_languages_available_in_the_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Locale:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_locale_update:

                }

                // sylius_admin_order_shipment_ship
                if (preg_match('#^/admin/(?P<id>[^/]++)/ship$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_order_shipment_ship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_order_shipment_ship')), array (  '_controller' => 'sylius.controller.shipment:updateAction',  '_sylius' =>   array (    'event' => 'ship',    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_shipment',      'transition' => 'ship',    ),    'redirect' => 'referer',    'section' => 'admin',    'permission' => true,    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType',    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'orderId' => '$orderId',          'id' => '$id',        ),      ),    ),  ),));
                }
                not_sylius_admin_order_shipment_ship:

                if (0 === strpos($pathinfo, '/admin/p')) {
                    if (0 === strpos($pathinfo, '/admin/payment-methods')) {
                        // sylius_admin_payment_method_index
                        if ('/admin/payment-methods' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_payment_method_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_payment_method_index');
                            }

                            return array (  '_controller' => 'sylius.controller.payment_method:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_payment_method',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig',      ),      'icon' => 'payment',    ),  ),  '_route' => 'sylius_admin_payment_method_index',);
                        }
                        not_sylius_admin_payment_method_index:

                        // sylius_admin_payment_method_update
                        if (preg_match('#^/admin/payment\\-methods/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_payment_method_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_payment_method_update')), array (  '_controller' => 'sylius.controller.payment_method:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_payment_method_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_payment_method_update:

                        // sylius_admin_payment_method_delete
                        if (preg_match('#^/admin/payment\\-methods/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_payment_method_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_payment_method_delete')), array (  '_controller' => 'sylius.controller.payment_method:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_payment_method_delete:

                        // sylius_admin_payment_method_create
                        if (0 === strpos($pathinfo, '/admin/payment-methods/new') && preg_match('#^/admin/payment\\-methods/new/(?P<factory>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_payment_method_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_payment_method_create')), array (  '_controller' => 'sylius.controller.payment_method:createAction',  '_sylius' =>   array (    'section' => 'admin',    'factory' =>     array (      'method' => 'createWithGateway',      'arguments' =>       array (        'gatewayFactory' => '$factory',      ),    ),    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_payment_method_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers',      'templates' =>       array (        'form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig',      ),      'route' =>       array (        'parameters' =>         array (          'factory' => '$factory',        ),      ),    ),  ),));
                        }
                        not_sylius_admin_payment_method_create:

                    }

                    // sylius_admin_get_payment_gateways
                    if ('/admin/payment-gateways' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_get_payment_gateways;
                        }

                        return array (  '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction',  'template' => 'SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig',  '_route' => 'sylius_admin_get_payment_gateways',);
                    }
                    not_sylius_admin_get_payment_gateways:

                    if (0 === strpos($pathinfo, '/admin/pro')) {
                        if (0 === strpos($pathinfo, '/admin/products')) {
                            // sylius_admin_product_update
                            if (preg_match('#^/admin/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                    goto not_sylius_admin_product_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_update')), array (  '_controller' => 'sylius.controller.product:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_product_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Product:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_product_update:

                            // sylius_admin_product_delete
                            if (preg_match('#^/admin/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_sylius_admin_product_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_delete')), array (  '_controller' => 'sylius.controller.product:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Product:_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_product_delete:

                            // sylius_admin_product_index
                            if ('/admin/products' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_product_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_product_index');
                                }

                                return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'grid' => 'sylius_admin_product',    'template' => 'SyliusAdminBundle:Product:index.html.twig',    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'icon' => 'cube',    ),  ),  '_route' => 'sylius_admin_product_index',);
                            }
                            not_sylius_admin_product_index:

                            // sylius_admin_product_per_taxon_index
                            if (0 === strpos($pathinfo, '/admin/products/taxon') && preg_match('#^/admin/products/taxon/(?P<taxonId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_product_per_taxon_index;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_per_taxon_index')), array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'grid' => 'sylius_admin_product_from_taxon',    'template' => 'SyliusAdminBundle:Product:index.html.twig',    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'icon' => 'cube',    ),  ),));
                            }
                            not_sylius_admin_product_per_taxon_index:

                            if (0 === strpos($pathinfo, '/admin/products/new')) {
                                // sylius_admin_product_create
                                if ('/admin/products/new' === $pathinfo) {
                                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                        $allow = array_merge($allow, array('GET', 'POST'));
                                        goto not_sylius_admin_product_create;
                                    }

                                    return array (  '_controller' => 'sylius.controller.product:createAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_product_update',    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Product:_form.html.twig',      ),      'route' =>       array (        'name' => 'sylius_admin_product_create',      ),    ),  ),  '_route' => 'sylius_admin_product_create',);
                                }
                                not_sylius_admin_product_create:

                                // sylius_admin_product_create_simple
                                if ('/admin/products/new/simple' === $pathinfo) {
                                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                        $allow = array_merge($allow, array('GET', 'POST'));
                                        goto not_sylius_admin_product_create_simple;
                                    }

                                    return array (  '_controller' => 'sylius.controller.product:createAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'factory' =>     array (      'method' => 'createWithVariant',    ),    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_product_update',    'vars' =>     array (      'subheader' => 'sylius.ui.manage_your_product_catalog',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Product:_form.html.twig',      ),      'route' =>       array (        'name' => 'sylius_admin_product_create_simple',      ),    ),  ),  '_route' => 'sylius_admin_product_create_simple',);
                                }
                                not_sylius_admin_product_create_simple:

                            }

                            // sylius_admin_product_variant_index
                            if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/?$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_product_variant_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_product_variant_index');
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_variant_index')), array (  '_controller' => 'sylius.controller.product_variant:indexAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/ProductVariant/index.html.twig',    'grid' => 'sylius_admin_product_variant',    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'productId' => '$productId',        ),      ),      'templates' =>       array (        'breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig',      ),      'icon' => 'cubes',      'subheader' => 'sylius.ui.manage_variants',    ),  ),));
                            }
                            not_sylius_admin_product_variant_index:

                            // sylius_admin_product_variant_create
                            if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/new$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_product_variant_create;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_variant_create')), array (  '_controller' => 'sylius.controller.product_variant:createAction',  '_sylius' =>   array (    'factory' =>     array (      'method' => 'createForProduct',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))',      ),    ),    'template' => '@SyliusAdmin/Crud/create.html.twig',    'grid' => 'sylius_admin_product_variant',    'section' => 'admin',    'redirect' =>     array (      'route' => 'sylius_admin_product_variant_index',      'parameters' =>       array (        'productId' => '$productId',      ),    ),    'permission' => true,    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'productId' => '$productId',        ),      ),      'templates' =>       array (        'form' => '@SyliusAdmin/ProductVariant/_form.html.twig',        'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig',        'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_product_variant_create:

                            // sylius_admin_product_variant_update
                            if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT'));
                                    goto not_sylius_admin_product_variant_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_variant_update')), array (  '_controller' => 'sylius.controller.product_variant:updateAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/Crud/update.html.twig',    'grid' => 'sylius_admin_product_variant',    'section' => 'admin',    'redirect' =>     array (      'route' => 'sylius_admin_product_variant_index',      'parameters' =>       array (        'productId' => '$productId',      ),    ),    'permission' => true,    'repository' =>     array (      'method' => 'findOneByIdAndProductId',      'arguments' =>       array (        'id' => '$id',        'productId' => '$productId',      ),    ),    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'id' => '$id',          'productId' => '$productId',        ),      ),      'templates' =>       array (        'form' => '@SyliusAdmin/ProductVariant/_form.html.twig',        'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_product_variant_update:

                            // sylius_admin_product_variant_delete
                            if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_sylius_admin_product_variant_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_variant_delete')), array (  '_controller' => 'sylius.controller.product_variant:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'redirect' => 'referer',    'permission' => true,    'repository' =>     array (      'method' => 'findOneByIdAndProductId',      'arguments' =>       array (        'id' => '$id',        'productId' => '$productId',      ),    ),  ),));
                            }
                            not_sylius_admin_product_variant_delete:

                            // sylius_admin_product_variant_generate
                            if (preg_match('#^/admin/products/(?P<productId>[^/]++)/variants/generate$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_product_variant_generate;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_variant_generate')), array (  '_controller' => 'sylius.controller.product:updateAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/ProductVariant/generate.html.twig',    'section' => 'admin',    'permission' => true,    'redirect' =>     array (      'route' => 'sylius_admin_product_variant_index',      'parameters' =>       array (        'productId' => '$productId',      ),    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType',    ),    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => '$productId',      ),    ),    'flash' => 'sylius.product_variant.generate',  ),));
                            }
                            not_sylius_admin_product_variant_generate:

                        }

                        elseif (0 === strpos($pathinfo, '/admin/product-')) {
                            if (0 === strpos($pathinfo, '/admin/product-association-types')) {
                                // sylius_admin_product_association_type_index
                                if ('/admin/product-association-types' === $trimmedPathinfo) {
                                    if ('GET' !== $canonicalMethod) {
                                        $allow[] = 'GET';
                                        goto not_sylius_admin_product_association_type_index;
                                    }

                                    if (substr($pathinfo, -1) !== '/') {
                                        return $this->redirect($pathinfo.'/', 'sylius_admin_product_association_type_index');
                                    }

                                    return array (  '_controller' => 'sylius.controller.product_association_type:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_product_association_type',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_association_types_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig',      ),      'icon' => 'tasks',    ),  ),  '_route' => 'sylius_admin_product_association_type_index',);
                                }
                                not_sylius_admin_product_association_type_index:

                                // sylius_admin_product_association_type_create
                                if ('/admin/product-association-types/new' === $pathinfo) {
                                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                        $allow = array_merge($allow, array('GET', 'POST'));
                                        goto not_sylius_admin_product_association_type_create;
                                    }

                                    return array (  '_controller' => 'sylius.controller.product_association_type:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_product_association_type_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_association_types_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_product_association_type_create',);
                                }
                                not_sylius_admin_product_association_type_create:

                                // sylius_admin_product_association_type_update
                                if (preg_match('#^/admin/product\\-association\\-types/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                        $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                        goto not_sylius_admin_product_association_type_update;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_association_type_update')), array (  '_controller' => 'sylius.controller.product_association_type:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_product_association_type_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_association_types_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_association_type_update:

                                // sylius_admin_product_association_type_delete
                                if (preg_match('#^/admin/product\\-association\\-types/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                    if ('DELETE' !== $canonicalMethod) {
                                        $allow[] = 'DELETE';
                                        goto not_sylius_admin_product_association_type_delete;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_association_type_delete')), array (  '_controller' => 'sylius.controller.product_association_type:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_association_types_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_association_type_delete:

                            }

                            elseif (0 === strpos($pathinfo, '/admin/product-attributes')) {
                                // sylius_admin_product_attribute_index
                                if ('/admin/product-attributes' === $trimmedPathinfo) {
                                    if ('GET' !== $canonicalMethod) {
                                        $allow[] = 'GET';
                                        goto not_sylius_admin_product_attribute_index;
                                    }

                                    if (substr($pathinfo, -1) !== '/') {
                                        return $this->redirect($pathinfo.'/', 'sylius_admin_product_attribute_index');
                                    }

                                    return array (  '_controller' => 'sylius.controller.product_attribute:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_product_attribute',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_attributes_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig',      ),      'icon' => 'cubes',    ),  ),  '_route' => 'sylius_admin_product_attribute_index',);
                                }
                                not_sylius_admin_product_attribute_index:

                                // sylius_admin_product_attribute_update
                                if (preg_match('#^/admin/product\\-attributes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                        $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                        goto not_sylius_admin_product_attribute_update;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_attribute_update')), array (  '_controller' => 'sylius.controller.product_attribute:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_product_attribute_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_attributes_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_attribute_update:

                                // sylius_admin_product_attribute_delete
                                if (preg_match('#^/admin/product\\-attributes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                    if ('DELETE' !== $canonicalMethod) {
                                        $allow[] = 'DELETE';
                                        goto not_sylius_admin_product_attribute_delete;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_attribute_delete')), array (  '_controller' => 'sylius.controller.product_attribute:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_attributes_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_attribute_delete:

                                // sylius_admin_product_attribute_create
                                if (preg_match('#^/admin/product\\-attributes/(?P<type>[^/]++)/new$#s', $pathinfo, $matches)) {
                                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                        $allow = array_merge($allow, array('GET', 'POST'));
                                        goto not_sylius_admin_product_attribute_create;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_attribute_create')), array (  '_controller' => 'sylius.controller.product_attribute:createAction',  '_sylius' =>   array (    'section' => 'admin',    'factory' =>     array (      'method' => 'createTyped',      'arguments' =>       array (        'type' => '$type',      ),    ),    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_product_attribute_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_attributes_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig',      ),      'route' =>       array (        'parameters' =>         array (          'type' => '$type',        ),      ),    ),  ),));
                                }
                                not_sylius_admin_product_attribute_create:

                            }

                            elseif (0 === strpos($pathinfo, '/admin/product-options')) {
                                // sylius_admin_product_option_index
                                if ('/admin/product-options' === $trimmedPathinfo) {
                                    if ('GET' !== $canonicalMethod) {
                                        $allow[] = 'GET';
                                        goto not_sylius_admin_product_option_index;
                                    }

                                    if (substr($pathinfo, -1) !== '/') {
                                        return $this->redirect($pathinfo.'/', 'sylius_admin_product_option_index');
                                    }

                                    return array (  '_controller' => 'sylius.controller.product_option:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_product_option',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_configuration_options_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductOption:_form.html.twig',      ),      'icon' => 'options',    ),  ),  '_route' => 'sylius_admin_product_option_index',);
                                }
                                not_sylius_admin_product_option_index:

                                // sylius_admin_product_option_create
                                if ('/admin/product-options/new' === $pathinfo) {
                                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                        $allow = array_merge($allow, array('GET', 'POST'));
                                        goto not_sylius_admin_product_option_create;
                                    }

                                    return array (  '_controller' => 'sylius.controller.product_option:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_product_option_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_configuration_options_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductOption:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_product_option_create',);
                                }
                                not_sylius_admin_product_option_create:

                                // sylius_admin_product_option_update
                                if (preg_match('#^/admin/product\\-options/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                        $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                        goto not_sylius_admin_product_option_update;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_option_update')), array (  '_controller' => 'sylius.controller.product_option:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_product_option_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_configuration_options_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductOption:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_option_update:

                                // sylius_admin_product_option_delete
                                if (preg_match('#^/admin/product\\-options/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                    if ('DELETE' !== $canonicalMethod) {
                                        $allow[] = 'DELETE';
                                        goto not_sylius_admin_product_option_delete;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_option_delete')), array (  '_controller' => 'sylius.controller.product_option:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_configuration_options_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductOption:_form.html.twig',      ),    ),  ),));
                                }
                                not_sylius_admin_product_option_delete:

                            }

                            elseif (0 === strpos($pathinfo, '/admin/product-review')) {
                                if (0 === strpos($pathinfo, '/admin/product-reviews')) {
                                    // sylius_admin_product_review_index
                                    if ('/admin/product-reviews' === $trimmedPathinfo) {
                                        if ('GET' !== $canonicalMethod) {
                                            $allow[] = 'GET';
                                            goto not_sylius_admin_product_review_index;
                                        }

                                        if (substr($pathinfo, -1) !== '/') {
                                            return $this->redirect($pathinfo.'/', 'sylius_admin_product_review_index');
                                        }

                                        return array (  '_controller' => 'sylius.controller.product_review:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_product_review',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_reviews_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductReview:_form.html.twig',      ),      'icon' => 'newspaper',    ),  ),  '_route' => 'sylius_admin_product_review_index',);
                                    }
                                    not_sylius_admin_product_review_index:

                                    // sylius_admin_product_review_update
                                    if (preg_match('#^/admin/product\\-reviews/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                            $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                            goto not_sylius_admin_product_review_update;
                                        }

                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_review_update')), array (  '_controller' => 'sylius.controller.product_review:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_product_review_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_reviews_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductReview:_form.html.twig',      ),    ),  ),));
                                    }
                                    not_sylius_admin_product_review_update:

                                    // sylius_admin_product_review_delete
                                    if (preg_match('#^/admin/product\\-reviews/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                        if ('DELETE' !== $canonicalMethod) {
                                            $allow[] = 'DELETE';
                                            goto not_sylius_admin_product_review_delete;
                                        }

                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_review_delete')), array (  '_controller' => 'sylius.controller.product_review:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_reviews_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ProductReview:_form.html.twig',      ),    ),  ),));
                                    }
                                    not_sylius_admin_product_review_delete:

                                }

                                // sylius_admin_product_review_accept
                                if (preg_match('#^/admin/product\\-review/(?P<id>[^/]++)/accept$#s', $pathinfo, $matches)) {
                                    if ('PUT' !== $canonicalMethod) {
                                        $allow[] = 'PUT';
                                        goto not_sylius_admin_product_review_accept;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_review_accept')), array (  '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction',  '_sylius' =>   array (    'permission' => true,    'state_machine' =>     array (      'graph' => 'sylius_product_review',      'transition' => 'accept',    ),    'redirect' => 'referer',    'flash' => 'sylius.review.accept',  ),));
                                }
                                not_sylius_admin_product_review_accept:

                                // sylius_admin_product_review_reject
                                if (preg_match('#^/admin/product\\-review/(?P<id>[^/]++)/reject$#s', $pathinfo, $matches)) {
                                    if ('PUT' !== $canonicalMethod) {
                                        $allow[] = 'PUT';
                                        goto not_sylius_admin_product_review_reject;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_product_review_reject')), array (  '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction',  '_sylius' =>   array (    'permission' => true,    'state_machine' =>     array (      'graph' => 'sylius_product_review',      'transition' => 'reject',    ),    'redirect' => 'referer',    'flash' => 'sylius.review.reject',  ),));
                                }
                                not_sylius_admin_product_review_reject:

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/promotions')) {
                            // sylius_admin_promotion_index
                            if ('/admin/promotions' === $trimmedPathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_promotion_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_promotion_index');
                                }

                                return array (  '_controller' => 'sylius.controller.promotion:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_promotion',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns',      'templates' =>       array (        'form' => '@SyliusAdmin/Promotion/_form.html.twig',      ),      'icon' => 'in cart',    ),  ),  '_route' => 'sylius_admin_promotion_index',);
                            }
                            not_sylius_admin_promotion_index:

                            // sylius_admin_promotion_create
                            if ('/admin/promotions/new' === $pathinfo) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_promotion_create;
                                }

                                return array (  '_controller' => 'sylius.controller.promotion:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_promotion_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns',      'templates' =>       array (        'form' => '@SyliusAdmin/Promotion/_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_promotion_create',);
                            }
                            not_sylius_admin_promotion_create:

                            // sylius_admin_promotion_update
                            if (preg_match('#^/admin/promotions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                    goto not_sylius_admin_promotion_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_update')), array (  '_controller' => 'sylius.controller.promotion:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_promotion_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns',      'templates' =>       array (        'form' => '@SyliusAdmin/Promotion/_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_promotion_update:

                            // sylius_admin_promotion_delete
                            if (preg_match('#^/admin/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_sylius_admin_promotion_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_delete')), array (  '_controller' => 'sylius.controller.promotion:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns',      'templates' =>       array (        'form' => '@SyliusAdmin/Promotion/_form.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_promotion_delete:

                            // sylius_admin_promotion_coupon_index
                            if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/?$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_sylius_admin_promotion_coupon_index;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'sylius_admin_promotion_coupon_index');
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_coupon_index')), array (  '_controller' => 'sylius.controller.promotion_coupon:indexAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/PromotionCoupon/index.html.twig',    'grid' => 'sylius_admin_promotion_coupon',    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'promotionId' => '$promotionId',        ),      ),      'templates' =>       array (        'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig',      ),      'icon' => 'tags',      'subheader' => 'sylius.ui.manage_coupons',    ),  ),));
                            }
                            not_sylius_admin_promotion_coupon_index:

                            // sylius_admin_promotion_coupon_create
                            if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/new$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_promotion_coupon_create;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_coupon_create')), array (  '_controller' => 'sylius.controller.promotion_coupon:createAction',  '_sylius' =>   array (    'factory' =>     array (      'method' => 'createForPromotion',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))',      ),    ),    'template' => '@SyliusAdmin/Crud/create.html.twig',    'grid' => 'sylius_admin_promotion_coupon',    'section' => 'admin',    'redirect' =>     array (      'route' => 'sylius_admin_promotion_coupon_index',      'parameters' =>       array (        'promotionId' => '$promotionId',      ),    ),    'permission' => true,    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'promotionId' => '$promotionId',        ),      ),      'templates' =>       array (        'form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig',        'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig',        'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig',      ),    ),  ),));
                            }
                            not_sylius_admin_promotion_coupon_create:

                            // sylius_admin_promotion_coupon_update
                            if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                                    $allow = array_merge($allow, array('GET', 'PUT'));
                                    goto not_sylius_admin_promotion_coupon_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_coupon_update')), array (  '_controller' => 'sylius.controller.promotion_coupon:updateAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/Crud/update.html.twig',    'grid' => 'sylius_admin_promotion_coupon',    'section' => 'admin',    'redirect' =>     array (      'route' => 'sylius_admin_promotion_coupon_index',      'parameters' =>       array (        'promotionId' => '$promotionId',      ),    ),    'permission' => true,    'vars' =>     array (      'route' =>       array (        'parameters' =>         array (          'id' => '$id',          'promotionId' => '$promotionId',        ),      ),      'templates' =>       array (        'form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig',        'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig',      ),      'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns',    ),  ),));
                            }
                            not_sylius_admin_promotion_coupon_update:

                            // sylius_admin_promotion_coupon_generate
                            if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/generate$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_sylius_admin_promotion_coupon_generate;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_coupon_generate')), array (  '_controller' => 'sylius.controller.promotion_coupon:generateAction',  '_sylius' =>   array (    'template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig',    'section' => 'admin',    'redirect' =>     array (      'route' => 'sylius_admin_promotion_coupon_index',      'parameters' =>       array (        'promotionId' => '$promotionId',      ),    ),    'permission' => true,  ),));
                            }
                            not_sylius_admin_promotion_coupon_generate:

                            // sylius_admin_promotion_coupon_delete
                            if (preg_match('#^/admin/promotions/(?P<promotionId>[^/]++)/coupons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_sylius_admin_promotion_coupon_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_promotion_coupon_delete')), array (  '_controller' => 'sylius.controller.promotion_coupon:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'redirect' => 'referer',    'permission' => true,  ),));
                            }
                            not_sylius_admin_promotion_coupon_delete:

                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/attribute')) {
                    // sylius_admin_get_attribute_types
                    if ('/admin/attribute-types' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_get_attribute_types;
                        }

                        return array (  '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction',  'template' => 'SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig',  '_route' => 'sylius_admin_get_attribute_types',);
                    }
                    not_sylius_admin_get_attribute_types:

                    // sylius_admin_render_attribute_forms
                    if ('/admin/attribute-forms' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_render_attribute_forms;
                        }

                        return array (  '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction',  'template' => 'SyliusAdminBundle:Product/Attribute:attributeValues.html.twig',  '_route' => 'sylius_admin_render_attribute_forms',);
                    }
                    not_sylius_admin_render_attribute_forms:

                    // sylius_admin_get_product_attributes
                    if ('/admin/attributes' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_get_product_attributes;
                        }

                        return array (  '_controller' => 'sylius.controller.product_attribute:renderAttributesAction',  'template' => 'SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig',  '_route' => 'sylius_admin_get_product_attributes',);
                    }
                    not_sylius_admin_get_product_attributes:

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // sylius_admin_login
                    if ('/admin/login' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_login;
                        }

                        return array (  '_controller' => 'sylius.controller.security:loginAction',  '_sylius' =>   array (    'template' => 'SyliusAdminBundle:Security:login.html.twig',    'permission' => true,    'logged_in_route' => 'sylius_admin_dashboard',  ),  '_route' => 'sylius_admin_login',);
                    }
                    not_sylius_admin_login:

                    // sylius_admin_login_check
                    if ('/admin/login-check' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_sylius_admin_login_check;
                        }

                        return array (  '_controller' => 'sylius.controller.security:checkAction',  '_route' => 'sylius_admin_login_check',);
                    }
                    not_sylius_admin_login_check:

                }

                // sylius_admin_logout
                if ('/admin/logout' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_logout;
                    }

                    return array('_route' => 'sylius_admin_logout');
                }
                not_sylius_admin_logout:

                if (0 === strpos($pathinfo, '/admin/sh')) {
                    if (0 === strpos($pathinfo, '/admin/shipping-categories')) {
                        // sylius_admin_shipping_category_index
                        if ('/admin/shipping-categories' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_shipping_category_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_shipping_category_index');
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_category:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_shipping_category',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_categories_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig',      ),      'icon' => 'list layout',    ),  ),  '_route' => 'sylius_admin_shipping_category_index',);
                        }
                        not_sylius_admin_shipping_category_index:

                        // sylius_admin_shipping_category_create
                        if ('/admin/shipping-categories/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_shipping_category_create;
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_category:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_shipping_category_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_categories_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_shipping_category_create',);
                        }
                        not_sylius_admin_shipping_category_create:

                        // sylius_admin_shipping_category_update
                        if (preg_match('#^/admin/shipping\\-categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_shipping_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shipping_category_update')), array (  '_controller' => 'sylius.controller.shipping_category:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_shipping_category_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_categories_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_shipping_category_update:

                        // sylius_admin_shipping_category_delete
                        if (preg_match('#^/admin/shipping\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_shipping_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shipping_category_delete')), array (  '_controller' => 'sylius.controller.shipping_category:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_categories_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_shipping_category_delete:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/shipping-methods')) {
                        // sylius_admin_shipping_method_index
                        if ('/admin/shipping-methods' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_shipping_method_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_shipping_method_index');
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_method:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_shipping_method',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_methods_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig',      ),      'icon' => 'shipping',    ),  ),  '_route' => 'sylius_admin_shipping_method_index',);
                        }
                        not_sylius_admin_shipping_method_index:

                        // sylius_admin_shipping_method_create
                        if ('/admin/shipping-methods/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_shipping_method_create;
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_method:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_shipping_method_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_methods_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_shipping_method_create',);
                        }
                        not_sylius_admin_shipping_method_create:

                        // sylius_admin_shipping_method_update
                        if (preg_match('#^/admin/shipping\\-methods/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_shipping_method_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shipping_method_update')), array (  '_controller' => 'sylius.controller.shipping_method:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_shipping_method_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_methods_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_shipping_method_update:

                        // sylius_admin_shipping_method_delete
                        if (preg_match('#^/admin/shipping\\-methods/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_shipping_method_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shipping_method_delete')), array (  '_controller' => 'sylius.controller.shipping_method:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_shipping_methods_for_your_store',      'templates' =>       array (        'form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_shipping_method_delete:

                        // sylius_admin_shipping_method_archive
                        if (preg_match('#^/admin/shipping\\-methods/(?P<id>[^/]++)/archive$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_sylius_admin_shipping_method_archive;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shipping_method_archive')), array (  '_controller' => 'sylius.controller.shipping_method:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => '@SyliusUi/Grid/Action/archive.html.twig',    'form' =>     array (      'type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType',    ),    'redirect' =>     array (      'route' => 'sylius_admin_shipping_method_index',      'parameters' =>       array (      ),    ),  ),));
                        }
                        not_sylius_admin_shipping_method_archive:

                    }

                    // sylius_admin_shop_user_delete
                    if (0 === strpos($pathinfo, '/admin/shop-user') && preg_match('#^/admin/shop\\-user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_sylius_admin_shop_user_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_shop_user_delete')), array (  '_controller' => 'sylius.controller.shop_user:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'redirect' => 'referer',    'permission' => true,  ),));
                    }
                    not_sylius_admin_shop_user_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/tax')) {
                    if (0 === strpos($pathinfo, '/admin/taxons')) {
                        // sylius_admin_taxon_create
                        if ('/admin/taxons/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_taxon_create;
                            }

                            return array (  '_controller' => 'sylius.controller.taxon:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Taxon:create.html.twig',    'redirect' => 'sylius_admin_taxon_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_categorization_of_your_products',      'templates' =>       array (        'form' => '@SyliusAdmin/Taxon/_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_taxon_create',);
                        }
                        not_sylius_admin_taxon_create:

                        // sylius_admin_taxon_update
                        if (preg_match('#^/admin/taxons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_taxon_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_taxon_update')), array (  '_controller' => 'sylius.controller.taxon:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Taxon:update.html.twig',    'redirect' => 'sylius_admin_taxon_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_categorization_of_your_products',      'templates' =>       array (        'form' => '@SyliusAdmin/Taxon/_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_taxon_update:

                        // sylius_admin_taxon_delete
                        if (preg_match('#^/admin/taxons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_taxon_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_taxon_delete')), array (  '_controller' => 'sylius.controller.taxon:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_categorization_of_your_products',      'templates' =>       array (        'form' => '@SyliusAdmin/Taxon/_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_taxon_delete:

                        // sylius_admin_taxon_index
                        if ('/admin/taxons' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_taxon_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_taxon_index');
                            }

                            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sylius_admin_taxon_create',  'permanent' => true,  '_route' => 'sylius_admin_taxon_index',);
                        }
                        not_sylius_admin_taxon_index:

                        // sylius_admin_taxon_create_for_parent
                        if (0 === strpos($pathinfo, '/admin/taxons/new') && preg_match('#^/admin/taxons/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_taxon_create_for_parent;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_taxon_create_for_parent')), array (  '_controller' => 'sylius.controller.taxon:createAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'template' => 'SyliusAdminBundle:Taxon:create.html.twig',    'redirect' => 'sylius_admin_taxon_update',    'factory' =>     array (      'method' => 'createForParent',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service("sylius.repository.taxon").find($id))',      ),    ),    'vars' =>     array (      'subheader' => 'sylius.ui.manage_categorization_of_your_products',      'templates' =>       array (        'form' => '@SyliusAdmin/Taxon/_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_taxon_create_for_parent:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/tax-categories')) {
                        // sylius_admin_tax_category_index
                        if ('/admin/tax-categories' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_tax_category_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_tax_category_index');
                            }

                            return array (  '_controller' => 'sylius.controller.tax_category:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_tax_category',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig',      ),      'icon' => 'tags',    ),  ),  '_route' => 'sylius_admin_tax_category_index',);
                        }
                        not_sylius_admin_tax_category_index:

                        // sylius_admin_tax_category_create
                        if ('/admin/tax-categories/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_tax_category_create;
                            }

                            return array (  '_controller' => 'sylius.controller.tax_category:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_tax_category_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_tax_category_create',);
                        }
                        not_sylius_admin_tax_category_create:

                        // sylius_admin_tax_category_update
                        if (preg_match('#^/admin/tax\\-categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_tax_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_tax_category_update')), array (  '_controller' => 'sylius.controller.tax_category:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_tax_category_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_tax_category_update:

                        // sylius_admin_tax_category_delete
                        if (preg_match('#^/admin/tax\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_tax_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_tax_category_delete')), array (  '_controller' => 'sylius.controller.tax_category:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_tax_category_delete:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/tax-rates')) {
                        // sylius_admin_tax_rate_index
                        if ('/admin/tax-rates' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_sylius_admin_tax_rate_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_admin_tax_rate_index');
                            }

                            return array (  '_controller' => 'sylius.controller.tax_rate:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_tax_rate',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxRate:_form.html.twig',      ),      'icon' => 'money',    ),  ),  '_route' => 'sylius_admin_tax_rate_index',);
                        }
                        not_sylius_admin_tax_rate_index:

                        // sylius_admin_tax_rate_create
                        if ('/admin/tax-rates/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_sylius_admin_tax_rate_create;
                            }

                            return array (  '_controller' => 'sylius.controller.tax_rate:createAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_tax_rate_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxRate:_form.html.twig',      ),    ),  ),  '_route' => 'sylius_admin_tax_rate_create',);
                        }
                        not_sylius_admin_tax_rate_create:

                        // sylius_admin_tax_rate_update
                        if (preg_match('#^/admin/tax\\-rates/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                                goto not_sylius_admin_tax_rate_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_tax_rate_update')), array (  '_controller' => 'sylius.controller.tax_rate:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_tax_rate_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxRate:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_tax_rate_update:

                        // sylius_admin_tax_rate_delete
                        if (preg_match('#^/admin/tax\\-rates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_sylius_admin_tax_rate_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_tax_rate_delete')), array (  '_controller' => 'sylius.controller.tax_rate:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_taxation_of_your_products',      'templates' =>       array (        'form' => 'SyliusAdminBundle:TaxRate:_form.html.twig',      ),    ),  ),));
                        }
                        not_sylius_admin_tax_rate_delete:

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/zones')) {
                    // sylius_admin_zone_index
                    if ('/admin/zones' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sylius_admin_zone_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_admin_zone_index');
                        }

                        return array (  '_controller' => 'sylius.controller.zone:indexAction',  '_sylius' =>   array (    'grid' => 'sylius_admin_zone',    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:index.html.twig',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_geographical_zones',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Zone:_form.html.twig',      ),      'icon' => 'world',    ),  ),  '_route' => 'sylius_admin_zone_index',);
                    }
                    not_sylius_admin_zone_index:

                    // sylius_admin_zone_update
                    if (preg_match('#^/admin/zones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'PATCH'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'PATCH'));
                            goto not_sylius_admin_zone_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_zone_update')), array (  '_controller' => 'sylius.controller.zone:updateAction',  '_sylius' =>   array (    'section' => 'admin',    'template' => 'SyliusAdminBundle:Crud:update.html.twig',    'redirect' => 'sylius_admin_zone_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_geographical_zones',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Zone:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_zone_update:

                    // sylius_admin_zone_delete
                    if (preg_match('#^/admin/zones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_sylius_admin_zone_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_zone_delete')), array (  '_controller' => 'sylius.controller.zone:deleteAction',  '_sylius' =>   array (    'section' => 'admin',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_geographical_zones',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Zone:_form.html.twig',      ),    ),  ),));
                    }
                    not_sylius_admin_zone_delete:

                    // sylius_admin_zone_create
                    if (preg_match('#^/admin/zones/(?P<type>country|province|zone)/new$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_sylius_admin_zone_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_zone_create')), array (  '_controller' => 'sylius.controller.zone:createAction',  '_sylius' =>   array (    'section' => 'admin',    'factory' =>     array (      'method' => 'createTyped',      'arguments' =>       array (        'type' => '$type',      ),    ),    'template' => 'SyliusAdminBundle:Crud:create.html.twig',    'redirect' => 'sylius_admin_zone_update',    'permission' => true,    'vars' =>     array (      'subheader' => 'sylius.ui.manage_geographical_zones',      'templates' =>       array (        'form' => 'SyliusAdminBundle:Zone:_form.html.twig',      ),      'route' =>       array (        'parameters' =>         array (          'type' => '$type',        ),      ),    ),  ),));
                    }
                    not_sylius_admin_zone_create:

                }

            }

            // fos_oauth_server_token
            if ('/api/oauth/v2/token' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_oauth_server_token;
                }

                return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
            }
            not_fos_oauth_server_token:

            if (0 === strpos($pathinfo, '/api/v')) {
                // sylius_admin_api_adjustment_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/adjustments/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_adjustment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_adjustment_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_adjustment_index')), array (  '_controller' => 'sylius.controller.adjustment:indexAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'repository' =>     array (      'method' => 'findByOrder',      'arguments' =>       array (        0 => '$orderId',      ),    ),    'paginate' => false,  ),));
                }
                not_sylius_admin_api_adjustment_index:

                // sylius_admin_api_adjustment_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/adjustments/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_adjustment_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_adjustment_create')), array (  '_controller' => 'sylius.controller.adjustment:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',  ),));
                }
                not_sylius_admin_api_adjustment_create:

                // sylius_admin_api_adjustment_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/adjustments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_adjustment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_adjustment_update')), array (  '_controller' => 'sylius.controller.adjustment:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',  ),));
                }
                not_sylius_admin_api_adjustment_update:

                // sylius_admin_api_adjustment_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/adjustments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_adjustment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_adjustment_delete')), array (  '_controller' => 'sylius.controller.adjustment:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'filterable' => true,    'criteria' =>     array (      'order' => '$orderId',    ),    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_adjustment_delete:

                // sylius_api_admin_user_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/users/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_api_admin_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_api_admin_user_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_api_admin_user_index')), array (  '_controller' => 'sylius.controller.admin_user:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'api',    'permission' => false,  ),));
                }
                not_sylius_api_admin_user_index:

                // sylius_api_admin_user_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/users/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_api_admin_user_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_api_admin_user_create')), array (  '_controller' => 'sylius.controller.admin_user:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'api',    'permission' => false,  ),));
                }
                not_sylius_api_admin_user_create:

                // sylius_api_admin_user_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_api_admin_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_api_admin_user_update')), array (  '_controller' => 'sylius.controller.admin_user:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'api',    'permission' => false,  ),));
                }
                not_sylius_api_admin_user_update:

                // sylius_api_admin_user_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_api_admin_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_api_admin_user_show')), array (  '_controller' => 'sylius.controller.admin_user:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'api',    'permission' => false,  ),));
                }
                not_sylius_api_admin_user_show:

                // sylius_api_admin_user_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_api_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_api_admin_user_delete')), array (  '_controller' => 'sylius.controller.admin_user:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'api',    'permission' => false,  ),));
                }
                not_sylius_api_admin_user_delete:

                // sylius_admin_api_order_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_order_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_order_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_index')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_cart',    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_order_index:

                // sylius_admin_api_cart_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_cart_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_cart_create')), array (  '_controller' => 'sylius.controller.order:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'DetailedCart',    ),  ),));
                }
                not_sylius_admin_api_cart_create:

                // sylius_admin_api_cart_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_cart_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_cart_update')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'DetailedCart',    ),  ),));
                }
                not_sylius_admin_api_cart_update:

                // sylius_admin_api_cart_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_cart_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_cart_delete')), array (  '_controller' => 'sylius.controller.order:deleteAction',  '_format' => 'json',  '_sylius' =>   array (    'serialization_version' => '$version',    'csrf_protection' => false,    'repository' =>     array (      'method' => 'findCartById',      'arguments' =>       array (        0 => '$id',      ),    ),  ),));
                }
                not_sylius_admin_api_cart_delete:

                // sylius_admin_api_cart_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_cart_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_cart_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'repository' =>     array (      'method' => 'findCartById',      'arguments' =>       array (        0 => '$id',      ),    ),    'serialization_groups' =>     array (      0 => 'Default',      1 => 'DetailedCart',    ),  ),));
                }
                not_sylius_admin_api_cart_show:

                // sylius_admin_api_cart_item_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<cartId>[^/]++)/items/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_cart_item_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_cart_item_create')), array (  '_controller' => 'sylius.controller.order_item:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType',    'factory' =>     array (      'method' => 'createForCart',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.order\').findCartById($cartId))',      ),    ),    'serialization_groups' =>     array (      0 => 'Default',      1 => 'DetailedCart',    ),  ),));
                }
                not_sylius_admin_api_cart_item_create:

                // sylius_admin_api_order_item_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<cartId>[^/]++)/items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_order_item_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_item_update')), array (  '_controller' => 'sylius.controller.order_item:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'cart' => '$cartId',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_order_item_update:

                // sylius_admin_api_order_item_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/carts/(?P<cartId>[^/]++)/items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_order_item_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_item_delete')), array (  '_controller' => 'sylius.controller.order_item:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'cart' => '$cartId',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_order_item_delete:

                // sylius_admin_api_channel_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/channels/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_channel_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_channel_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_channel_index')), array (  '_controller' => 'sylius.controller.channel:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_channel_index:

                // sylius_admin_api_channel_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/channels/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_channel_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_channel_show')), array (  '_controller' => 'sylius.controller.channel:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_channel_show:

                // sylius_admin_api_checkout_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_checkout_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Detailed',    ),  ),));
                }
                not_sylius_admin_api_checkout_show:

                // sylius_admin_api_checkout_addressing
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/addressing/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_checkout_addressing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_addressing')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType',    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'address',    ),  ),));
                }
                not_sylius_admin_api_checkout_addressing:

                // sylius_admin_api_checkout_available_shipping_methods
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/select\\-shipping/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_checkout_available_shipping_methods;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_available_shipping_methods')), array (  '_controller' => 'sylius.controller.show_available_shipping_methods:showAction',));
                }
                not_sylius_admin_api_checkout_available_shipping_methods:

                // sylius_admin_api_checkout_select_shipping
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/select\\-shipping/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_checkout_select_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_select_shipping')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType',    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'select_shipping',    ),  ),));
                }
                not_sylius_admin_api_checkout_select_shipping:

                // sylius_admin_api_checkout_available_payment_methods
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/select\\-payment/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_checkout_available_payment_methods;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_available_payment_methods')), array (  '_controller' => 'sylius.controller.show_available_payment_methods:showAction',));
                }
                not_sylius_admin_api_checkout_available_payment_methods:

                // sylius_admin_api_checkout_select_payment
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/select\\-payment/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_checkout_select_payment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_select_payment')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType',    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'select_payment',    ),  ),));
                }
                not_sylius_admin_api_checkout_select_payment:

                // sylius_admin_api_checkout_complete
                if (preg_match('#^/api/v(?P<version>[^/]++)/checkouts/complete/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_checkout_complete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_checkout_complete')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType',      'options' =>       array (        'validation_groups' => 'sylius_checkout_complete',      ),    ),    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'complete',    ),  ),));
                }
                not_sylius_admin_api_checkout_complete:

                // sylius_admin_api_country_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_country_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_country_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_country_index')), array (  '_controller' => 'sylius.controller.country:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_country_index:

                // sylius_admin_api_country_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_country_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_country_create')), array (  '_controller' => 'sylius.controller.country:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_country_create:

                // sylius_admin_api_country_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_country_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_country_show')), array (  '_controller' => 'sylius.controller.country:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_country_show:

                // sylius_admin_api_country_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_country_delete')), array (  '_controller' => 'sylius.controller.country:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_country_delete:

                // sylius_admin_api_currency_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/currencies/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_currency_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_currency_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_currency_index')), array (  '_controller' => 'sylius.controller.currency:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_currency_index:

                // sylius_admin_api_currency_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/currencies/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_currency_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_currency_create')), array (  '_controller' => 'sylius.controller.currency:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_currency_create:

                // sylius_admin_api_currency_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/currencies/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_currency_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_currency_show')), array (  '_controller' => 'sylius.controller.currency:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_currency_show:

                // sylius_admin_api_currency_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/currencies/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_currency_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_currency_delete')), array (  '_controller' => 'sylius.controller.currency:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_currency_delete:

                // sylius_admin_api_customer_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_customer_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_customer_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_index')), array (  '_controller' => 'sylius.controller.customer:indexAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Default',    ),    'paginate' => '$limit',    'sortable' => true,    'sorting' =>     array (      'id' => 'desc',    ),  ),));
                }
                not_sylius_admin_api_customer_index:

                // sylius_admin_api_customer_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_customer_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_show')), array (  '_controller' => 'sylius.controller.customer:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Detailed',    ),  ),));
                }
                not_sylius_admin_api_customer_show:

                // sylius_admin_api_customer_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_customer_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_create')), array (  '_controller' => 'sylius.controller.customer:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Detailed',    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType',    ),  ),));
                }
                not_sylius_admin_api_customer_create:

                // sylius_admin_api_customer_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_customer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_update')), array (  '_controller' => 'sylius.controller.customer:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'form' =>     array (      'type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType',    ),  ),));
                }
                not_sylius_admin_api_customer_update:

                // sylius_admin_api_customer_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_customer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_delete')), array (  '_controller' => 'sylius.controller.customer:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_customer_delete:

                // sylius_admin_api_customer_order_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/customers/(?P<id>[^/]++)/orders/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_customer_order_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_customer_order_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_customer_order_index')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'paginate' => '$limit',    'filterable' => true,    'criteria' =>     array (      'customer' => '$id',    ),    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'desc',    ),    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_customer_order_index:

                // sylius_admin_api_exchange_rate_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/exchange\\-rates/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_exchange_rate_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_exchange_rate_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_exchange_rate_index')), array (  '_controller' => 'sylius.controller.exchange_rate:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_exchange_rate_index:

                // sylius_admin_api_exchange_rate_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/exchange\\-rates/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_exchange_rate_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_exchange_rate_create')), array (  '_controller' => 'sylius.controller.exchange_rate:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_exchange_rate_create:

                // sylius_admin_api_exchange_rate_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/exchange\\-rates/(?P<sourceCurrencyCode>[^/\\-]++)\\-(?P<targetCurrencyCode>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_exchange_rate_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_exchange_rate_update')), array (  '_controller' => 'sylius.controller.exchange_rate:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'repository' =>     array (      'method' => 'findOneWithCurrencyPair',      'arguments' =>       array (        0 => '$sourceCurrencyCode',        1 => '$targetCurrencyCode',      ),    ),  ),));
                }
                not_sylius_admin_api_exchange_rate_update:

                // sylius_admin_api_exchange_rate_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/exchange\\-rates/(?P<sourceCurrencyCode>[^/\\-]++)\\-(?P<targetCurrencyCode>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_exchange_rate_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_exchange_rate_delete')), array (  '_controller' => 'sylius.controller.exchange_rate:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'repository' =>     array (      'method' => 'findOneWithCurrencyPair',      'arguments' =>       array (        0 => '$sourceCurrencyCode',        1 => '$targetCurrencyCode',      ),    ),    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_exchange_rate_delete:

                // sylius_admin_api_exchange_rate_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/exchange\\-rates/(?P<sourceCurrencyCode>[^/\\-]++)\\-(?P<targetCurrencyCode>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_exchange_rate_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_exchange_rate_show')), array (  '_controller' => 'sylius.controller.exchange_rate:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'repository' =>     array (      'method' => 'findOneWithCurrencyPair',      'arguments' =>       array (        0 => '$sourceCurrencyCode',        1 => '$targetCurrencyCode',      ),    ),  ),));
                }
                not_sylius_admin_api_exchange_rate_show:

                // sylius_admin_api_locale_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/locales/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_locale_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_locale_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_locale_index')), array (  '_controller' => 'sylius.controller.locale:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_locale_index:

                // sylius_admin_api_locale_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/locales/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_locale_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_locale_create')), array (  '_controller' => 'sylius.controller.locale:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_locale_create:

                // sylius_admin_api_locale_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/locales/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_locale_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_locale_show')), array (  '_controller' => 'sylius.controller.locale:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_locale_show:

                // sylius_admin_api_locale_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/locales/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_locale_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_locale_delete')), array (  '_controller' => 'sylius.controller.locale:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_locale_delete:

                // sylius_admin_api_order_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_order_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_order_show:

                // sylius_admin_api_order_cancel
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_order_cancel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_cancel')), array (  '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction',  '_sylius' =>   array (    'section' => 'admin_api',    'state_machine' =>     array (      'graph' => 'sylius_order',      'transition' => 'cancel',    ),    'return_content' => false,  ),));
                }
                not_sylius_admin_api_order_cancel:

                // sylius_admin_api_order_shipment_ship
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/shipments/(?P<id>[^/]++)/ship$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_order_shipment_ship;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_shipment_ship')), array (  '_controller' => 'sylius.controller.shipment:updateAction',  '_sylius' =>   array (    'event' => 'ship',    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_shipment',      'transition' => 'ship',    ),    'section' => 'admin_api',    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType',  ),));
                }
                not_sylius_admin_api_order_shipment_ship:

                // sylius_admin_api_order_payment_complete
                if (preg_match('#^/api/v(?P<version>[^/]++)/orders/(?P<orderId>[^/]++)/payments/(?P<id>[^/]++)/complete$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_order_payment_complete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_order_payment_complete')), array (  '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction',  '_sylius' =>   array (    'event' => 'complete',    'repository' =>     array (      'method' => 'findOneByOrderId',      'arguments' =>       array (        'id' => '$id',        'orderId' => '$orderId',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_payment',      'transition' => 'complete',    ),    'section' => 'admin_api',    'return_content' => false,  ),));
                }
                not_sylius_admin_api_order_payment_complete:

                // sylius_admin_api_payment_method_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/payment\\-methods/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_payment_method_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_payment_method_show')), array (  '_controller' => 'sylius.controller.payment_method:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_payment_method_show:

                // sylius_admin_api_payment_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/payments/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_payment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_payment_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_payment_index')), array (  '_controller' => 'sylius.controller.payment:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_payment',    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_payment_index:

                // sylius_admin_api_payment_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_payment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_payment_show')), array (  '_controller' => 'sylius.controller.payment:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_payment_show:

                // sylius_admin_api_product_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_product_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_index')), array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_product',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_index:

                // sylius_admin_api_product_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_product_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_create')), array (  '_controller' => 'sylius.controller.product:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_create:

                // sylius_admin_api_product_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_update')), array (  '_controller' => 'sylius.controller.product:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_update:

                // sylius_admin_api_product_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_show:

                // sylius_admin_api_product_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_delete')), array (  '_controller' => 'sylius.controller.product:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_delete:

                // sylius_admin_api_product_attribute_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-attributes/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_attribute_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_product_attribute_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_attribute_index')), array (  '_controller' => 'sylius.controller.product_attribute:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_attribute_index:

                // sylius_admin_api_product_attribute_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-attributes/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_product_attribute_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_attribute_update')), array (  '_controller' => 'sylius.controller.product_attribute:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_attribute_update:

                // sylius_admin_api_product_attribute_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-attributes/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_attribute_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_attribute_show')), array (  '_controller' => 'sylius.controller.product_attribute:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_attribute_show:

                // sylius_admin_api_product_attribute_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-attributes/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_product_attribute_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_attribute_delete')), array (  '_controller' => 'sylius.controller.product_attribute:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_attribute_delete:

                // sylius_admin_api_product_attribute_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-attributes/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_product_attribute_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_attribute_create')), array (  '_controller' => 'sylius.controller.product_attribute:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'factory' =>     array (      'method' => 'createTyped',      'arguments' =>       array (        'type' => '$type',      ),    ),  ),));
                }
                not_sylius_admin_api_product_attribute_create:

                // sylius_admin_api_product_association_type_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-association\\-types/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_association_type_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_product_association_type_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_association_type_index')), array (  '_controller' => 'sylius.controller.product_association_type:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_association_type_index:

                // sylius_admin_api_product_association_type_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-association\\-types/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_product_association_type_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_association_type_create')), array (  '_controller' => 'sylius.controller.product_association_type:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_association_type_create:

                // sylius_admin_api_product_association_type_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-association\\-types/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_product_association_type_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_association_type_update')), array (  '_controller' => 'sylius.controller.product_association_type:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_association_type_update:

                // sylius_admin_api_product_association_type_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-association\\-types/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_association_type_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_association_type_show')), array (  '_controller' => 'sylius.controller.product_association_type:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_association_type_show:

                // sylius_admin_api_product_association_type_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-association\\-types/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_product_association_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_association_type_delete')), array (  '_controller' => 'sylius.controller.product_association_type:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_association_type_delete:

                // sylius_admin_api_product_option_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-options/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_option_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_product_option_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_option_index')), array (  '_controller' => 'sylius.controller.product_option:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_option_index:

                // sylius_admin_api_product_option_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-options/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_product_option_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_option_create')), array (  '_controller' => 'sylius.controller.product_option:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_option_create:

                // sylius_admin_api_product_option_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-options/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_product_option_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_option_update')), array (  '_controller' => 'sylius.controller.product_option:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_option_update:

                // sylius_admin_api_product_option_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-options/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_option_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_option_show')), array (  '_controller' => 'sylius.controller.product_option:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_option_show:

                // sylius_admin_api_product_option_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/product\\-options/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_product_option_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_option_delete')), array (  '_controller' => 'sylius.controller.product_option:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_option_delete:

                // sylius_admin_api_taxon_products_update_position
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/(?P<taxonCode>[^/]++)/products$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_sylius_admin_api_taxon_products_update_position;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_products_update_position')), array (  '_controller' => 'sylius.controller.update_product_taxon_position:updatePositionsAction',  '_sylius' =>   array (    'serialization_version' => '$version',  ),));
                }
                not_sylius_admin_api_taxon_products_update_position:

                // sylius_admin_api_product_variant_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<productCode>[^/]++)/variants/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_variant_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_product_variant_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_variant_index')), array (  '_controller' => 'sylius.controller.product_variant:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_product_variant',    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_product_variant_index:

                // sylius_admin_api_product_variant_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<productCode>[^/]++)/variants/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_product_variant_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_variant_create')), array (  '_controller' => 'sylius.controller.product_variant:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType',    'factory' =>     array (      'method' => 'createForProduct',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))',      ),    ),  ),));
                }
                not_sylius_admin_api_product_variant_create:

                // sylius_admin_api_product_variant_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<productCode>[^/]++)/variants/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_product_variant_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_variant_update')), array (  '_controller' => 'sylius.controller.product_variant:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType',    'repository' =>     array (      'method' => 'findOneByCodeAndProductCode',      'arguments' =>       array (        0 => '$code',        1 => '$productCode',      ),    ),  ),));
                }
                not_sylius_admin_api_product_variant_update:

                // sylius_admin_api_product_variant_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<productCode>[^/]++)/variants/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_product_variant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_variant_delete')), array (  '_controller' => 'sylius.controller.product_variant:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'repository' =>     array (      'method' => 'findOneByCodeAndProductCode',      'arguments' =>       array (        0 => '$code',        1 => '$productCode',      ),    ),    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_product_variant_delete:

                // sylius_admin_api_product_variant_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/products/(?P<productCode>[^/]++)/variants/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_product_variant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_product_variant_show')), array (  '_controller' => 'sylius.controller.product_variant:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'repository' =>     array (      'method' => 'findOneByCodeAndProductCode',      'arguments' =>       array (        0 => '$code',        1 => '$productCode',      ),    ),  ),));
                }
                not_sylius_admin_api_product_variant_show:

                // sylius_admin_api_promotion_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_promotion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_promotion_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_index')), array (  '_controller' => 'sylius.controller.promotion:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_promotion',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_promotion_index:

                // sylius_admin_api_promotion_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_promotion_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_create')), array (  '_controller' => 'sylius.controller.promotion:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_promotion_create:

                // sylius_admin_api_promotion_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_promotion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_update')), array (  '_controller' => 'sylius.controller.promotion:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_promotion_update:

                // sylius_admin_api_promotion_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_promotion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_show')), array (  '_controller' => 'sylius.controller.promotion:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_promotion_show:

                // sylius_admin_api_promotion_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_promotion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_delete')), array (  '_controller' => 'sylius.controller.promotion:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_promotion_delete:

                // sylius_admin_api_promotion_coupon_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<promotionCode>[^/]++)/coupons/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_promotion_coupon_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_promotion_coupon_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_coupon_index')), array (  '_controller' => 'sylius.controller.promotion_coupon:indexAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Default',    ),    'section' => 'admin_api',    'repository' =>     array (      'method' => 'createPaginatorForPromotion',      'arguments' =>       array (        0 => '$promotionCode',      ),    ),  ),));
                }
                not_sylius_admin_api_promotion_coupon_index:

                // sylius_admin_api_promotion_coupon_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<promotionCode>[^/]++)/coupons/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_promotion_coupon_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_coupon_create')), array (  '_controller' => 'sylius.controller.promotion_coupon:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'factory' =>     array (      'method' => 'createForPromotion',      'arguments' =>       array (        0 => 'expr:service(\'sylius.repository.promotion\').findOneByCode($promotionCode)',      ),    ),    'criteria' =>     array (      'promotion' => '$promotionCode',    ),  ),));
                }
                not_sylius_admin_api_promotion_coupon_create:

                // sylius_admin_api_promotion_coupon_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<promotionCode>[^/]++)/coupons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_promotion_coupon_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_coupon_update')), array (  '_controller' => 'sylius.controller.promotion_coupon:updateAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'repository' =>     array (      'method' => 'findOneByCodeAndPromotionCode',      'arguments' =>       array (        0 => '$code',        1 => '$promotionCode',      ),    ),  ),));
                }
                not_sylius_admin_api_promotion_coupon_update:

                // sylius_admin_api_promotion_coupon_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<promotionCode>[^/]++)/coupons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_promotion_coupon_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_coupon_show')), array (  '_controller' => 'sylius.controller.promotion_coupon:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'section' => 'admin_api',    'repository' =>     array (      'method' => 'findOneByCodeAndPromotionCode',      'arguments' =>       array (        0 => '$code',        1 => '$promotionCode',      ),    ),  ),));
                }
                not_sylius_admin_api_promotion_coupon_show:

                // sylius_admin_api_promotion_coupon_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/promotions/(?P<promotionCode>[^/]++)/coupons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_promotion_coupon_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_promotion_coupon_delete')), array (  '_controller' => 'sylius.controller.promotion_coupon:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'section' => 'admin_api',    'csrf_protection' => false,    'repository' =>     array (      'method' => 'findOneByCodeAndPromotionCode',      'arguments' =>       array (        0 => '$code',        1 => '$promotionCode',      ),    ),  ),));
                }
                not_sylius_admin_api_promotion_coupon_delete:

                // sylius_admin_api_province_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/(?P<countryCode>[^/]++)/provinces/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_province_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_province_delete')), array (  '_controller' => 'sylius.controller.province:deleteAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'criteria' =>     array (      'code' => '$code',    ),    'csrf_protection' => false,  ),));
                }
                not_sylius_admin_api_province_delete:

                // sylius_admin_api_province_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/countries/(?P<countryCode>[^/]++)/provinces/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_province_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_province_show')), array (  '_controller' => 'sylius.controller.province:showAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'serialization_groups' =>     array (      0 => 'Detailed',    ),    'criteria' =>     array (      'code' => '$code',    ),  ),));
                }
                not_sylius_admin_api_province_show:

                // sylius_admin_api_shipment_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipments/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_shipment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_shipment_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipment_index')), array (  '_controller' => 'sylius.controller.shipment:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_shipment',    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipment_index:

                // sylius_admin_api_shipment_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_shipment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipment_show')), array (  '_controller' => 'sylius.controller.shipment:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipment_show:

                // sylius_admin_api_shipping_category_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-categories/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_shipping_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_shipping_category_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_category_index')), array (  '_controller' => 'sylius.controller.shipping_category:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_category_index:

                // sylius_admin_api_shipping_category_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-categories/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_shipping_category_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_category_create')), array (  '_controller' => 'sylius.controller.shipping_category:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_category_create:

                // sylius_admin_api_shipping_category_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_shipping_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_category_update')), array (  '_controller' => 'sylius.controller.shipping_category:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_category_update:

                // sylius_admin_api_shipping_category_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_shipping_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_category_show')), array (  '_controller' => 'sylius.controller.shipping_category:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_category_show:

                // sylius_admin_api_shipping_category_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_shipping_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_category_delete')), array (  '_controller' => 'sylius.controller.shipping_category:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_category_delete:

                // sylius_admin_api_shipping_method_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/shipping\\-methods/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_shipping_method_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_shipping_method_show')), array (  '_controller' => 'sylius.controller.shipping_method:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_shipping_method_show:

                // sylius_admin_api_tax_category_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-categories/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_tax_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_tax_category_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_category_index')), array (  '_controller' => 'sylius.controller.tax_category:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_category_index:

                // sylius_admin_api_tax_category_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-categories/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_tax_category_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_category_create')), array (  '_controller' => 'sylius.controller.tax_category:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_category_create:

                // sylius_admin_api_tax_category_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_tax_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_category_update')), array (  '_controller' => 'sylius.controller.tax_category:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_category_update:

                // sylius_admin_api_tax_category_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_tax_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_category_show')), array (  '_controller' => 'sylius.controller.tax_category:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_category_show:

                // sylius_admin_api_tax_category_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_tax_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_category_delete')), array (  '_controller' => 'sylius.controller.tax_category:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_category_delete:

                // sylius_admin_api_taxon_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_taxon_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_taxon_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_index')), array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'grid' => 'sylius_admin_api_taxon',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_taxon_index:

                // sylius_admin_api_taxon_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_taxon_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_create')), array (  '_controller' => 'sylius.controller.taxon:createAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_taxon_create:

                // sylius_admin_api_taxon_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_taxon_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_update')), array (  '_controller' => 'sylius.controller.taxon:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType',    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_taxon_update:

                // sylius_admin_api_taxon_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_taxon_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_show')), array (  '_controller' => 'sylius.controller.taxon:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_taxon_show:

                // sylius_admin_api_taxon_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/taxons/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_taxon_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_taxon_delete')), array (  '_controller' => 'sylius.controller.taxon:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_taxon_delete:

                // sylius_admin_api_tax_rate_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-rates/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_tax_rate_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_tax_rate_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_rate_index')), array (  '_controller' => 'sylius.controller.tax_rate:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_rate_index:

                // sylius_admin_api_tax_rate_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/tax\\-rates/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_tax_rate_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_tax_rate_show')), array (  '_controller' => 'sylius.controller.tax_rate:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_tax_rate_show:

                // sylius_admin_api_zone_index
                if (preg_match('#^/api/v(?P<version>[^/]++)/zones/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_zone_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_admin_api_zone_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_zone_index')), array (  '_controller' => 'sylius.controller.zone:indexAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_zone_index:

                // sylius_admin_api_zone_update
                if (preg_match('#^/api/v(?P<version>[^/]++)/zones/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('PUT', 'PATCH'));
                        goto not_sylius_admin_api_zone_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_zone_update')), array (  '_controller' => 'sylius.controller.zone:updateAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_zone_update:

                // sylius_admin_api_zone_show
                if (preg_match('#^/api/v(?P<version>[^/]++)/zones/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sylius_admin_api_zone_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_zone_show')), array (  '_controller' => 'sylius.controller.zone:showAction',  '_sylius' =>   array (    'serialization_groups' =>     array (      0 => 'Default',      1 => 'Detailed',    ),    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_zone_show:

                // sylius_admin_api_zone_delete
                if (preg_match('#^/api/v(?P<version>[^/]++)/zones/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sylius_admin_api_zone_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_zone_delete')), array (  '_controller' => 'sylius.controller.zone:deleteAction',  '_sylius' =>   array (    'csrf_protection' => false,    'serialization_version' => '$version',    'section' => 'admin_api',    'criteria' =>     array (      'code' => '$code',    ),    'permission' => false,  ),));
                }
                not_sylius_admin_api_zone_delete:

                // sylius_admin_api_zone_create
                if (preg_match('#^/api/v(?P<version>[^/]++)/zones/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_sylius_admin_api_zone_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_admin_api_zone_create')), array (  '_controller' => 'sylius.controller.zone:createAction',  '_sylius' =>   array (    'serialization_version' => '$version',    'factory' =>     array (      'method' => 'createTyped',      'arguments' =>       array (        'type' => '$type',      ),    ),  ),));
                }
                not_sylius_admin_api_zone_create:

            }

        }

        // sylius_shop_ajax_user_check_action
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/ajax/users/check$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_ajax_user_check_action;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_ajax_user_check_action')), array (  '_controller' => 'sylius.controller.shop_user:showAction',  '_format' => 'json',  '_sylius' =>   array (    'repository' =>     array (      'method' => 'findOneByEmail',      'arguments' =>       array (        'email' => '$email',      ),    ),    'serialization_groups' =>     array (      0 => 'Secured',    ),  ),));
        }
        not_sylius_shop_ajax_user_check_action:

        // sylius_shop_ajax_cart_add_item
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/add$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_sylius_shop_ajax_cart_add_item;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_ajax_cart_add_item')), array (  '_controller' => 'sylius.controller.order_item:addAction',  '_format' => 'json',  '_sylius' =>   array (    'factory' =>     array (      'method' => 'createForProduct',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))',      ),    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType',      'options' =>       array (        'product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_cart_summary',      'parameters' =>       array (      ),    ),    'flash' => 'sylius.cart.add_item',  ),));
        }
        not_sylius_shop_ajax_cart_add_item:

        // sylius_shop_ajax_cart_item_remove
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_sylius_shop_ajax_cart_item_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_ajax_cart_item_remove')), array (  '_controller' => 'sylius.controller.order_item:removeAction',  '_format' => 'json',  '_sylius' =>   array (    'flash' => 'sylius.cart.remove_item',  ),));
        }
        not_sylius_shop_ajax_cart_item_remove:

        // sylius_shop_ajax_render_province_form
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/ajax/render\\-province\\-form$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_ajax_render_province_form;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_ajax_render_province_form')), array (  '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Common/Form/_province.html.twig',  ),));
        }
        not_sylius_shop_ajax_render_province_form:

        // sylius_shop_partial_taxon_show_by_slug
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-slug/(?P<slug>.+)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_taxon_show_by_slug;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_taxon_show_by_slug')), array (  '_controller' => 'sylius.controller.taxon:showAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findOneBySlug',      'arguments' =>       array (        0 => '$slug',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',      ),    ),  ),));
        }
        not_sylius_shop_partial_taxon_show_by_slug:

        // sylius_shop_partial_taxon_index_by_code
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-code/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_taxon_index_by_code;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_taxon_index_by_code')), array (  '_controller' => 'sylius.controller.taxon:indexAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findChildren',      'arguments' =>       array (        0 => '$code',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',      ),    ),  ),));
        }
        not_sylius_shop_partial_taxon_index_by_code:

        // sylius_shop_partial_cart_summary
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/summary$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_cart_summary;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_cart_summary')), array (  '_controller' => 'sylius.controller.order:widgetAction',  '_sylius' =>   array (    'template' => '$template',  ),));
        }
        not_sylius_shop_partial_cart_summary:

        // sylius_shop_partial_cart_add_item
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/add\\-item$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_cart_add_item;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_cart_add_item')), array (  '_controller' => 'sylius.controller.order_item:addAction',  '_sylius' =>   array (    'template' => '$template',    'factory' =>     array (      'method' => 'createForProduct',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))',      ),    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType',      'options' =>       array (        'product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_cart_summary',      'parameters' =>       array (      ),    ),  ),));
        }
        not_sylius_shop_partial_cart_add_item:

        // sylius_shop_partial_product_index_latest
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/products/latest/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_product_index_latest;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_product_index_latest')), array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findLatestByChannel',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.channel\').getChannel()',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',        2 => '!!int $count',      ),    ),  ),));
        }
        not_sylius_shop_partial_product_index_latest:

        // sylius_shop_partial_product_show_by_slug
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/products/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_product_show_by_slug;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_product_show_by_slug')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findOneByChannelAndSlug',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.channel\').getChannel()',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',        2 => '$slug',      ),    ),  ),));
        }
        not_sylius_shop_partial_product_show_by_slug:

        // sylius_shop_partial_product_review_latest
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/products/(?P<productId>[^/]++)/reviews/latest(?:/(?P<count>[^/]++))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_product_review_latest;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_product_review_latest')), array (  '_controller' => 'sylius.controller.product_review:indexAction',  '_sylius' =>   array (    'template' => '$template',    'repository' =>     array (      'method' => 'findLatestByProductId',      'arguments' =>       array (        0 => '$productId',        1 => '!!int $count',      ),    ),  ),  'count' => 3,));
        }
        not_sylius_shop_partial_product_review_latest:

        // sylius_shop_partial_product_association_show
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/_partial/products/(?P<productId>[^/]++)/associations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_partial_product_association_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_partial_product_association_show')), array (  '_controller' => 'sylius.controller.product_association:showAction',  '_sylius' =>   array (    'template' => '$template',  ),));
        }
        not_sylius_shop_partial_product_association_show:

        // sylius_shop_homepage
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_homepage')), array (  '_controller' => 'sylius.controller.shop.homepage:indexAction',));
        }
        not_sylius_shop_homepage:

        // sylius_shop_login
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/login$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_login')), array (  '_controller' => 'sylius.controller.security:loginAction',  '_sylius' =>   array (    'template' => '@SyliusShop/login.html.twig',    'logged_in_route' => 'sylius_shop_account_dashboard',  ),));
        }
        not_sylius_shop_login:

        // sylius_shop_login_check
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/login\\-check$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_sylius_shop_login_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_login_check')), array (  '_controller' => 'sylius.controller.security:checkAction',));
        }
        not_sylius_shop_login_check:

        // sylius_shop_logout
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/logout$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_logout')), array ());
        }
        not_sylius_shop_logout:

        // sylius_shop_register
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/register$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_register;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_register')), array (  '_controller' => 'sylius.controller.customer:createAction',  '_sylius' =>   array (    'template' => '@SyliusShop/register.html.twig',    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType',    'event' => 'register',    'redirect' =>     array (      'route' => 'sylius_shop_account_dashboard',    ),    'flash' => 'sylius.customer.register',  ),));
        }
        not_sylius_shop_register:

        // sylius_shop_request_password_reset_token
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_request_password_reset_token;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_request_password_reset_token')), array (  '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Account/requestPasswordReset.html.twig',    'redirect' => 'sylius_shop_login',  ),));
        }
        not_sylius_shop_request_password_reset_token:

        // sylius_shop_password_reset
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_password_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_password_reset')), array (  '_controller' => 'sylius.controller.shop_user:resetPasswordAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Account/resetPassword.html.twig',    'redirect' => 'sylius_shop_login',  ),));
        }
        not_sylius_shop_password_reset:

        // sylius_shop_user_request_verification_token
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/verify$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_sylius_shop_user_request_verification_token;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_user_request_verification_token')), array (  '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction',));
        }
        not_sylius_shop_user_request_verification_token:

        // sylius_shop_user_verification
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/verify/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_user_verification;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_user_verification')), array (  '_controller' => 'sylius.controller.shop_user:verifyAction',  '_sylius' =>   array (    'redirect' => 'sylius_shop_account_dashboard',  ),));
        }
        not_sylius_shop_user_verification:

        // sylius_shop_product_show
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/products/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_product_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Product/show.html.twig',    'repository' =>     array (      'method' => 'findOneByChannelAndSlug',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.channel\').getChannel()',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',        2 => '$slug',      ),    ),  ),));
        }
        not_sylius_shop_product_show:

        // sylius_shop_product_index
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/taxons/(?P<slug>.+)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_product_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_product_index')), array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Product/index.html.twig',    'grid' => 'sylius_shop_product',  ),));
        }
        not_sylius_shop_product_index:

        // sylius_shop_product_review_index
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/products/(?P<slug>[^/]++)/reviews/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_product_review_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_product_review_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_product_review_index')), array (  '_controller' => 'sylius.controller.product_review:indexAction',  '_sylius' =>   array (    'template' => '@SyliusShop/ProductReview/index.html.twig',    'repository' =>     array (      'method' => 'findAcceptedByProductSlugAndChannel',      'arguments' =>       array (        0 => '$slug',        1 => 'expr:service(\'sylius.context.locale\').getLocaleCode()',        2 => 'expr:service(\'sylius.context.channel\').getChannel()',      ),    ),  ),));
        }
        not_sylius_shop_product_review_index:

        // sylius_shop_product_review_create
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/products/(?P<slug>[^/]++)/reviews/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_product_review_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_product_review_create')), array (  '_controller' => 'sylius.controller.product_review:createAction',  '_sylius' =>   array (    'template' => '@SyliusShop/ProductReview/create.html.twig',    'form' =>     array (      'options' =>       array (        'validation_groups' =>         array (          0 => 'sylius',          1 => 'sylius_review',        ),      ),    ),    'factory' =>     array (      'method' => 'createForSubjectWithReviewer',      'arguments' =>       array (        0 => 'expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))',        1 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_product_show',      'parameters' =>       array (        'slug' => '$slug',      ),    ),    'flash' => 'sylius.review.wait_for_the_acceptation',  ),));
        }
        not_sylius_shop_product_review_create:

        // sylius_shop_cart_summary
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/cart/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_cart_summary;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_cart_summary');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_cart_summary')), array (  '_controller' => 'sylius.controller.order:summaryAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Cart/summary.html.twig',    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType',  ),));
        }
        not_sylius_shop_cart_summary:

        // sylius_shop_cart_save
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/cart/$#s', $pathinfo, $matches)) {
            if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                $allow = array_merge($allow, array('PUT', 'PATCH'));
                goto not_sylius_shop_cart_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_cart_save')), array (  '_controller' => 'sylius.controller.order:saveAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Cart/summary.html.twig',    'redirect' => 'sylius_shop_cart_summary',    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType',    'flash' => 'sylius.cart.save',  ),));
        }
        not_sylius_shop_cart_save:

        // sylius_shop_cart_clear
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/cart/$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_sylius_shop_cart_clear;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_cart_clear')), array (  '_controller' => 'sylius.controller.order:clearAction',  '_sylius' =>   array (    'redirect' => 'sylius_shop_cart_summary',  ),));
        }
        not_sylius_shop_cart_clear:

        // sylius_shop_checkout_start
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/checkout/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_checkout_start;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_checkout_start');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_checkout_start')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sylius_shop_checkout_address',));
        }
        not_sylius_shop_checkout_start:

        // sylius_shop_checkout_address
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/checkout/address$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_checkout_address;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_checkout_address')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'event' => 'address',    'flash' => false,    'template' => 'SyliusShopBundle:Checkout:address.html.twig',    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType',      'options' =>       array (        'customer' => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'repository' =>     array (      'method' => 'findCartForAddressing',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.cart\').getCart().getId()',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'address',    ),  ),));
        }
        not_sylius_shop_checkout_address:

        // sylius_shop_checkout_select_shipping
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-shipping$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_checkout_select_shipping;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_checkout_select_shipping')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'event' => 'select_shipping',    'flash' => false,    'template' => 'SyliusShopBundle:Checkout:selectShipping.html.twig',    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType',    'repository' =>     array (      'method' => 'findCartForSelectingShipping',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.cart\').getCart().getId()',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'select_shipping',    ),  ),));
        }
        not_sylius_shop_checkout_select_shipping:

        // sylius_shop_checkout_select_payment
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-payment$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_checkout_select_payment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_checkout_select_payment')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'event' => 'payment',    'flash' => false,    'template' => 'SyliusShopBundle:Checkout:selectPayment.html.twig',    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType',    'repository' =>     array (      'method' => 'findCartForSelectingPayment',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.cart\').getCart().getId()',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'select_payment',    ),  ),));
        }
        not_sylius_shop_checkout_select_payment:

        // sylius_shop_checkout_complete
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/checkout/complete$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_checkout_complete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_checkout_complete')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'event' => 'complete',    'flash' => false,    'template' => 'SyliusShopBundle:Checkout:complete.html.twig',    'repository' =>     array (      'method' => 'findCartForSummary',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.cart\').getCart().getId()',      ),    ),    'state_machine' =>     array (      'graph' => 'sylius_order_checkout',      'transition' => 'complete',    ),    'redirect' =>     array (      'route' => 'sylius_shop_order_pay',      'parameters' =>       array (        'tokenValue' => 'resource.tokenValue',      ),    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType',      'options' =>       array (        'validation_groups' => 'sylius_checkout_complete',      ),    ),  ),));
        }
        not_sylius_shop_checkout_complete:

        // sylius_shop_contact_request
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/contact/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_contact_request;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_contact_request');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_contact_request')), array (  '_controller' => 'sylius.controller.shop.contact:requestAction',  '_sylius' =>   array (    'redirect' => 'sylius_shop_homepage',  ),));
        }
        not_sylius_shop_contact_request:

        // sylius_shop_order_thank_you
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/order/thank\\-you$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_order_thank_you;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_order_thank_you')), array (  '_controller' => 'sylius.controller.order:thankYouAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Order/thankYou.html.twig',  ),));
        }
        not_sylius_shop_order_thank_you:

        // sylius_shop_order_pay
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/order/(?P<tokenValue>[^/]++)/pay$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_order_pay;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_order_pay')), array (  '_controller' => 'sylius.controller.payum:prepareCaptureAction',  '_sylius' =>   array (    'redirect' =>     array (      'route' => 'sylius_shop_order_after_pay',    ),  ),));
        }
        not_sylius_shop_order_pay:

        // sylius_shop_order_after_pay
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/order/after\\-pay$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_order_after_pay;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_order_after_pay')), array (  '_controller' => 'sylius.controller.payum:afterCaptureAction',));
        }
        not_sylius_shop_order_after_pay:

        // sylius_shop_order_show
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/order/(?P<tokenValue>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_order_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_order_show')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Order/show.html.twig',    'repository' =>     array (      'method' => 'findOneBy',      'arguments' =>       array (        0 =>         array (          'tokenValue' => '$tokenValue',        ),      ),    ),    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType',      'options' =>       array (        'validation_groups' =>         array (        ),      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_order_pay',      'parameters' =>       array (        'tokenValue' => 'resource.tokenValue',      ),    ),    'flash' => false,  ),));
        }
        not_sylius_shop_order_show:

        // sylius_shop_account_order_index
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/orders/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_account_order_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_account_order_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_order_index')), array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/Order/index.html.twig',    'grid' => 'sylius_shop_account_order',  ),));
        }
        not_sylius_shop_account_order_index:

        // sylius_shop_account_order_show
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/orders/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_account_order_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_order_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/Order/show.html.twig',    'repository' =>     array (      'method' => 'findOneByNumberAndCustomer',      'arguments' =>       array (        0 => '$number',        1 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),  ),));
        }
        not_sylius_shop_account_order_show:

        // sylius_shop_account_address_book_index
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_account_address_book_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_account_address_book_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_address_book_index')), array (  '_controller' => 'sylius.controller.address:indexAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/AddressBook/index.html.twig',    'paginate' => false,    'repository' =>     array (      'method' => 'findByCustomer',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),  ),));
        }
        not_sylius_shop_account_address_book_index:

        // sylius_shop_account_address_book_create
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/add$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_account_address_book_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_address_book_create')), array (  '_controller' => 'sylius.controller.address:createAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/AddressBook/create.html.twig',    'factory' =>     array (      'method' => 'createForCustomer',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_account_address_book_index',      'parameters' =>       array (      ),    ),    'flash' => 'sylius.customer.add_address',  ),));
        }
        not_sylius_shop_account_address_book_create:

        // sylius_shop_account_address_book_update
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_account_address_book_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_address_book_update')), array (  '_controller' => 'sylius.controller.address:updateAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/AddressBook/update.html.twig',    'repository' =>     array (      'method' => 'findOneByCustomer',      'arguments' =>       array (        0 => '$id',        1 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_account_address_book_index',      'parameters' =>       array (      ),    ),  ),));
        }
        not_sylius_shop_account_address_book_update:

        // sylius_shop_account_address_book_delete
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_sylius_shop_account_address_book_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_address_book_delete')), array (  '_controller' => 'sylius.controller.address:deleteAction',  '_sylius' =>   array (    'section' => 'shop_account',    'repository' =>     array (      'method' => 'findOneByCustomer',      'arguments' =>       array (        0 => '$id',        1 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' => 'sylius_shop_account_address_book_index',  ),));
        }
        not_sylius_shop_account_address_book_delete:

        // sylius_shop_account_address_book_set_as_default
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/(?P<id>[^/]++)/set\\-as\\-default$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PATCH'))) {
                $allow = array_merge($allow, array('GET', 'PATCH'));
                goto not_sylius_shop_account_address_book_set_as_default;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_address_book_set_as_default')), array (  '_controller' => 'sylius.controller.customer:updateAction',  '_sylius' =>   array (    'section' => 'shop_account',    'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig',    'form' =>     array (      'type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType',      'options' =>       array (        'customer' => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_account_address_book_index',      'parameters' =>       array (      ),    ),    'flash' => 'sylius.customer.set_address_as_default',  ),));
        }
        not_sylius_shop_account_address_book_set_as_default:

        // sylius_shop_account_root
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_account_root;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_account_root');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_root')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sylius_shop_account_dashboard',  'permanent' => true,));
        }
        not_sylius_shop_account_root:

        // sylius_shop_account_dashboard
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/dashboard$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_account_dashboard;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_dashboard')), array (  '_controller' => 'sylius.controller.customer:showAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Account/dashboard.html.twig',    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),  ),));
        }
        not_sylius_shop_account_dashboard:

        // sylius_shop_account_profile_update
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'PUT'))) {
                $allow = array_merge($allow, array('GET', 'PUT'));
                goto not_sylius_shop_account_profile_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_profile_update')), array (  '_controller' => 'sylius.controller.customer:updateAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Account/profileUpdate.html.twig',    'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType',    'repository' =>     array (      'method' => 'find',      'arguments' =>       array (        0 => 'expr:service(\'sylius.context.customer\').getCustomer()',      ),    ),    'redirect' =>     array (      'route' => 'sylius_shop_account_profile_update',      'parameters' =>       array (      ),    ),  ),));
        }
        not_sylius_shop_account_profile_update:

        // sylius_shop_account_change_password
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/account/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_sylius_shop_account_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_account_change_password')), array (  '_controller' => 'sylius.controller.shop_user:changePasswordAction',  '_sylius' =>   array (    'template' => '@SyliusShop/Account/changePassword.html.twig',    'redirect' => 'sylius_shop_account_dashboard',  ),));
        }
        not_sylius_shop_account_change_password:

        // sylius_shop_switch_currency
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/switch\\-currency/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_switch_currency;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_switch_currency')), array (  '_controller' => 'sylius.controller.shop.currency_switch:switchAction',));
        }
        not_sylius_shop_switch_currency:

        // sylius_shop_switch_locale
        if (preg_match('#^/(?P<_locale>[a-z]{2}(?:_[A-Z]{2})?)/switch\\-locale/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_switch_locale;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_shop_switch_locale')), array (  '_controller' => 'sylius.controller.shop.locale_switch:switchAction',));
        }
        not_sylius_shop_switch_locale:

        if (0 === strpos($pathinfo, '/payment/capture')) {
            // payum_capture_do_session
            if ('/payment/capture/session-token' === $pathinfo) {
                return array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction',  '_route' => 'payum_capture_do_session',);
            }

            // payum_capture_do
            if (preg_match('#^/payment/capture/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_capture_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/payment/notify')) {
            // payum_notify_do_unsafe
            if (0 === strpos($pathinfo, '/payment/notify/unsafe') && preg_match('#^/payment/notify/unsafe/(?P<gateway>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do_unsafe')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction',));
            }

            // payum_notify_do
            if (preg_match('#^/payment/notify/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction',));
            }

        }

        // sylius_shop_default_locale
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_sylius_shop_default_locale;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_shop_default_locale');
            }

            return array (  '_controller' => 'sylius.controller.shop.locale_switch:switchAction',  '_route' => 'sylius_shop_default_locale',);
        }
        not_sylius_shop_default_locale:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
