<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), 'D:/www/projects/pigalle/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('D:/www/projects/pigalle/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PigalleBundle', 'D:/www/projects/pigalle/app/Resources/PigalleBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PigalleBundle', 'D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusBackendBundle', 'D:/www/projects/pigalle/app/Resources/SyliusBackendBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusBackendBundle', 'D:\\www\\projects\\pigalle\\src\\Gecko\\SyliusBackendBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', 'D:/www/projects/pigalle/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('liip_imagine.cache.clearer')));
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, 'D:/www/projects/pigalle/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c)));
    }
    protected function getDataCollector_LadybugDataCollectorService()
    {
        return $this->services['data_collector.ladybug_data_collector'] = new \RaulFraile\Bundle\LadybugBundle\DataCollector\LadybugDataCollector($this);
    }
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Gedmo\Sluggable\SluggableListener();
        $b->setAnnotationReader($a);
        $c = new \Gedmo\Timestampable\TimestampableListener();
        $c->setAnnotationReader($a);
        $d = new \Gedmo\Tree\TreeListener();
        $d->setAnnotationReader($a);
        $e = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $e->setAnnotationReader($a);
        $f = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $f->addResolveTargetEntity('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRateInterface', 'Sylius\\Bundle\\MoneyBundle\\Entity\\ExchangeRate', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\SettingsBundle\\Model\\ParameterInterface', 'Sylius\\Bundle\\SettingsBundle\\Entity\\DefaultParameter', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Cart', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartItemInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\CartItem', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\ProductInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Product', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Variant\\VariantInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Option\\OptionInterface', 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOption', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Option\\OptionValueInterface', 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOptionValue', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Property\\PropertyInterface', 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProperty', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Property\\ProductPropertyInterface', 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProductProperty', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AssortmentBundle\\Model\\Prototype\\PrototypeInterface', 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Prototype\\DefaultPrototype', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategoryInterface', 'Sylius\\Bundle\\TaxationBundle\\Entity\\DefaultTaxCategory', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxRateInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\TaxRate', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Shipment', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentItemInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategoryInterface', 'Sylius\\Bundle\\ShippingBundle\\Entity\\DefaultShippingCategory', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingMethodInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\ShippingMethod', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\ShippingBundle\\Entity\\Rule', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethodInterface', 'Sylius\\Bundle\\PaymentsBundle\\Entity\\PaymentMethod', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentInterface', 'Sylius\\Bundle\\PaymentsBundle\\Entity\\Payment', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\TransactionInterface', 'Sylius\\Bundle\\PaymentsBundle\\Entity\\Transaction', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCardInterface', 'Sylius\\Bundle\\PaymentsBundle\\Entity\\CreditCard', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCardOwnerInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\User', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\PromotionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Promotion', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\CouponInterface', 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Coupon', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Rule', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\ActionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Action', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\AddressInterface', 'Gecko\\PigalleBundle\\Entity\\Address', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\CountryInterface', 'Sylius\\Bundle\\AddressingBundle\\Entity\\Country', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ProvinceInterface', 'Sylius\\Bundle\\AddressingBundle\\Entity\\Province', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneInterface', 'Sylius\\Bundle\\AddressingBundle\\Entity\\Zone', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberInterface', 'Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMember', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\SalesBundle\\Model\\SellableInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\SalesBundle\\Model\\OrderInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Order', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\SalesBundle\\Model\\OrderItemInterface', 'Sylius\\Bundle\\SalesBundle\\Entity\\DefaultOrderItem', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\SalesBundle\\Model\\AdjustmentInterface', 'Sylius\\Bundle\\SalesBundle\\Entity\\DefaultAdjustment', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\InventoryUnitInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\StockableInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonomyInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Taxonomy', array());
        $f->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonInterface', 'Sylius\\Bundle\\CoreBundle\\Entity\\Taxon', array());
        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventSubscriber($b);
        $g->addEventSubscriber($c);
        $g->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $g->addEventSubscriber($d);
        $g->addEventSubscriber($e);
        $g->addEventListener(array(0 => 'loadClassMetadata'), $f);
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'pigalle', 'host' => '127.0.0.1', 'port' => NULL, 'user' => 'root', 'password' => 123456, 'charset' => 'UTF8', 'driver' => 'pdo_mysql', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $g, array());
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_bdcc8bc0f5ed673654646762d0979151');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_bdcc8bc0f5ed673654646762d0979151');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_bdcc8bc0f5ed673654646762d0979151');
        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\CoreBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\MoneyBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\SettingsBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\CartBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\AssortmentBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\TaxationBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\ShippingBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\PaymentsBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\PromotionsBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\AddressingBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\sales-bundle\\Sylius\\Bundle\\SalesBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\SalesBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\InventoryBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\doctrine' => 'Sylius\\Bundle\\TaxonomiesBundle\\Entity', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine' => 'FOS\\UserBundle\\Entity'));
        $d->setGlobalBasename('mapping');
        $e = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array('D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle\\Resources\\config\\doctrine' => 'Gecko\\PigalleBundle\\Entity', 'D:\\www\\projects\\pigalle\\src\\Gecko\\NewsletterBundle\\Resources\\config\\doctrine' => 'Gecko\\NewsletterBundle\\Entity'));
        $e->setGlobalBasename('mapping');
        $f = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $f->addDriver($d, 'Sylius\\Bundle\\CoreBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\MoneyBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\SettingsBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\CartBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\AssortmentBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\TaxationBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\ShippingBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\PaymentsBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\PromotionsBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\AddressingBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\SalesBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\InventoryBundle\\Entity');
        $f->addDriver($d, 'Sylius\\Bundle\\TaxonomiesBundle\\Entity');
        $f->addDriver($d, 'FOS\\UserBundle\\Entity');
        $f->addDriver($e, 'Gecko\\PigalleBundle\\Entity');
        $f->addDriver($e, 'Gecko\\NewsletterBundle\\Entity');
        $g = new \Doctrine\ORM\Configuration();
        $g->setEntityNamespaces(array('SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\Entity', 'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\Entity', 'SyliusSettingsBundle' => 'Sylius\\Bundle\\SettingsBundle\\Entity', 'SyliusCartBundle' => 'Sylius\\Bundle\\CartBundle\\Entity', 'SyliusAssortmentBundle' => 'Sylius\\Bundle\\AssortmentBundle\\Entity', 'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\Entity', 'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\Entity', 'SyliusPaymentsBundle' => 'Sylius\\Bundle\\PaymentsBundle\\Entity', 'SyliusPromotionsBundle' => 'Sylius\\Bundle\\PromotionsBundle\\Entity', 'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\Entity', 'SyliusSalesBundle' => 'Sylius\\Bundle\\SalesBundle\\Entity', 'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\Entity', 'SyliusTaxonomiesBundle' => 'Sylius\\Bundle\\TaxonomiesBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'PigalleBundle' => 'Gecko\\PigalleBundle\\Entity', 'GeckoNewsletterBundle' => 'Gecko\\NewsletterBundle\\Entity'));
        $g->setMetadataCacheImpl($a);
        $g->setQueryCacheImpl($b);
        $g->setResultCacheImpl($c);
        $g->setMetadataDriverImpl($f);
        $g->setProxyDir('D:/www/projects/pigalle/app/cache/prod/doctrine/orm/Proxies');
        $g->setProxyNamespace('Proxies');
        $g->setAutoGenerateProxyClasses(false);
        $g->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $g->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $g->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $g->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');
        $this->services['doctrine.orm.default_entity_manager'] = $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $g);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(0 => 'softdeleteable'), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_taxation', 1 => 'processOrderTaxation'), 0);
        $instance->addListenerService('sylius.order.pre_update', array(0 => 'sylius.listener.order_taxation', 1 => 'processOrderTaxation'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShippingCharges'), 0);
        $instance->addListenerService('sylius.order.pre_update', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShippingCharges'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), 0);
        $instance->addListenerService('sylius.order.pre_update', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), 0);
        $instance->addListenerService('sylius.product.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.product.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('sylius.pigalle_slide.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadPigalleSlideImage'), 0);
        $instance->addListenerService('sylius.pigalle_slide.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadPigalleSlideImage'), 0);
        $instance->addListenerService('sylius.product_collection.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductCollectionImage'), 0);
        $instance->addListenerService('sylius.product_collection.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductCollectionImage'), 0);
        $instance->addListenerService('gecko_newsletter.newsletter.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadNewsletterImage'), 0);
        $instance->addListenerService('gecko_newsletter.newsletter.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadNewsletterImage'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sylius_resource.twig', 1 => 'fetchRequest'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_number', 1 => 'generateOrderNumber'), 10);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.format_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'ladybug.event_listener.ladybug_config_listener', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('sylius.cart_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener');
        $instance->addSubscriberService('sylius.cart_flash_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('fragment.handler', 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), 'D:/www/projects/pigalle/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'd73a220a76ed13d358389b3f7658ecc7');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('sylius_checkout_addressing' => 'sylius.checkout_form.addressing', 'sylius_checkout_shipping' => 'sylius.checkout_form.shipping', 'sylius_checkout_payment' => 'sylius.checkout_form.payment', 'sylius_image' => 'sylius.form.type.image', 'sylius_product_filter' => 'sylius.form.type.product_filter', 'sylius_order_filter' => 'sylius.form.type.order_filter', 'sylius_configuration' => 'sylius.form.type.configuration', 'sylius_configuration_database' => 'sylius.form.type.configuration.database', 'sylius_configuration_mailer' => 'sylius.form.type.configuration.mailer', 'sylius_configuration_locale' => 'sylius.form.type.configuration.locale', 'sylius_configuration_hidden' => 'sylius.form.type.configuration.hidden', 'sylius_setup' => 'sylius.form.type.setup', 'sylius_money' => 'sylius.form.type.money', 'sylius_exchange_rate' => 'sylius.form.type.exchange_rate', 'sylius_cart' => 'sylius.form.type.cart', 'sylius_cart_item' => 'sylius.form.type.cart_item', 'sylius_product' => 'sylius.form.type.product', 'sylius_product_to_identifier' => 'sylius.form.type.product_to_identifier', 'sylius_product_hidden' => 'sylius.form.type.product_hidden', 'sylius_variant' => 'sylius.form.type.variant', 'sylius_variant_choice' => 'sylius.form.type.variant_choice', 'sylius_variant_match' => 'sylius.form.type.variant_match', 'sylius_variant_to_identifier' => 'sylius.form.type.variant_to_identifier', 'sylius_option' => 'sylius.form.type.option', 'sylius_option_choice' => 'sylius.form.type.option_choice', 'sylius_option_value' => 'sylius.form.type.option_value', 'sylius_option_value_choice' => 'sylius.form.type.option_value_choice', 'sylius_option_value_collection' => 'sylius.form.type.option_value_collection', 'sylius_property' => 'sylius.form.type.property', 'sylius_property_choice' => 'sylius.form.type.property_choice', 'sylius_product_property' => 'sylius.form.type.product_property', 'sylius_prototype' => 'sylius.form.type.prototype', 'sylius_tax_category_choice' => 'sylius.form.type.tax_category_choice', 'sylius_tax_category' => 'sylius.form.type.tax_category', 'sylius_tax_rate' => 'sylius.form.type.tax_rate', 'sylius_tax_calculator_choice' => 'sylius.form.type.tax_calculator_choice', 'sylius_shipping_category_choice' => 'sylius.form.type.shipping_category_choice', 'sylius_shipping_rule_item_count_configuration' => 'sylius.form.type.shipping_rule_item_count_configuration', 'sylius_shipping_category' => 'sylius.form.type.shipping_category', 'sylius_shipping_method' => 'sylius.form.type.shipping_method', 'sylius_shipping_method_choice' => 'sylius.form.type.shipping_method_choice', 'sylius_shipping_calculator_choice' => 'sylius.form.type.shipping_calculator_choice', 'sylius_shipping_calculator_flat_rate_configuration' => 'sylius.form.type.shipping_calculator.flat_rate_configuration', 'sylius_shipping_calculator_per_item_rate_configuration' => 'sylius.form.type.shipping_calculator.per_item_rate_configuration', 'sylius_shipping_calculator_flexible_rate_configuration' => 'sylius.form.type.shipping_calculator.flexible_rate_configuration', 'sylius_payment_method_choice' => 'sylius.form.type.payment_method_choice', 'sylius_payment_method' => 'sylius.form.type.payment_method', 'sylius_payment' => 'sylius.form.type.payment', 'sylius_payment_gateway_choice' => 'sylius.form.type.payment_gateway_choice', 'sylius_credit_card' => 'sylius.form.type.credit_card', 'sylius_promotion' => 'sylius.form.type.promotion', 'sylius_promotion_coupon' => 'sylius.form.type.promotion_coupon', 'sylius_promotion_rule' => 'sylius.form.type.promotion_rule', 'sylius_promotion_action' => 'sylius.form.type.promotion_action', 'sylius_promotion_rule_choice' => 'sylius.form.type.promotion_rule_choice', 'sylius_promotion_rule_item_total_configuration' => 'sylius.form.type.promotion_rule.item_total_configuration', 'sylius_promotion_rule_item_count_configuration' => 'sylius.form.type.promotion_rule.item_count_configuration', 'sylius_promotion_action_choice' => 'sylius.form.type.promotion_action_choice', 'sylius_promotion_action_fixed_discount_configuration' => 'sylius.form.type.promotion_action.fixed_discount_configuration', 'sylius_promotion_action_percentage_discount_configuration' => 'sylius.form.type.promotion_action.percentage_discount_configuration', 'sylius_promotion_coupon_to_code' => 'sylius.form.type.promotion_coupon_to_code', 'sylius_promotion_coupon_generate_instruction' => 'sylius.form.type.promotion_coupon_generate_instruction', 'sylius_zone_member_collection' => 'sylius.form.type.zone_member_collection', 'sylius_address' => 'sylius.form.type.address', 'sylius_country' => 'sylius.form.type.country', 'sylius_province' => 'sylius.form.type.province', 'sylius_zone' => 'sylius.form.type.zone', 'sylius_zone_member_country' => 'sylius.form.type.zone_member_country', 'sylius_zone_member_province' => 'sylius.form.type.zone_member_province', 'sylius_zone_member_zone' => 'sylius.form.type.zone_member_zone', 'sylius_country_choice' => 'sylius.form.type.country_choice', 'sylius_province_choice' => 'sylius.form.type.province_choice', 'sylius_zone_choice' => 'sylius.form.type.zone_choice', 'sylius_order' => 'sylius.form.type.order', 'sylius_order_item' => 'sylius.form.type.order_item', 'sylius_taxonomy' => 'sylius.form.type.taxonomy', 'sylius_taxonomy_choice' => 'sylius.form.type.taxonomy_choice', 'sylius_taxon' => 'sylius.form.type.taxon', 'sylius_taxon_choice' => 'sylius.form.type.taxon_choice', 'sylius_taxon_selection' => 'sylius.form.type.taxon_selection', 'entity' => 'form.type.entity', 'field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'gecko_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'sylius_user_profile' => 'pigalle.profile.form.type', 'sylius_pigalle_slide' => 'pigalle.pigalle_slide.form.type', 'sylius_local' => 'pigalle.pigalle_local.form.type', 'sylius_product_collection' => 'pigalle.product_collection.form.type', 'sylius_product_collection_image' => 'pigalle.product_collection_image.form.type', 'fos_user_admin' => 'gecko_user.admin.form.type', 'gecko_newsletter_subscriber' => 'gecko_newsletter.subscriber.form.type', 'gecko_newsletter_subscriber_list' => 'gecko_newsletter.subscriber_list.form.type', 'gecko_newsletter_newsletter' => 'gecko_newsletter.newsletter.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator')), array(0 => 'form.type_guesser.doctrine', 1 => 'form.type_guesser.validator'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType();
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'));
    }
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\Rest\Decoder\JsonDecoder();
    }
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\Rest\Decoder\XmlDecoder();
    }
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'), 'html', array(0 => 'html', 1 => '*/*'), true);
    }
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\Rest\Util\FormatNegotiator();
    }
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }
        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'));
    }
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'));
    }
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }
        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'sylius_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }
        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'fos_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }
        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }
        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('doctrine')->getManager(NULL), 'Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger'));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false);
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getGaufrette_SyliusImageFilesystemService()
    {
        return $this->services['gaufrette.sylius_image_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local('D:/www/projects/pigalle/app/../web/media/image', true));
    }
    protected function getGeckoNewsletter_Controller_NewsletterService()
    {
        $this->services['gecko_newsletter.controller.newsletter'] = $instance = new \Gecko\NewsletterBundle\Controller\NewsletterController('gecko_newsletter', 'newsletter', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getGeckoNewsletter_Controller_SubscriberService()
    {
        $this->services['gecko_newsletter.controller.subscriber'] = $instance = new \Gecko\NewsletterBundle\Controller\SubscriberController('gecko_newsletter', 'subscriber', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getGeckoNewsletter_Controller_SubscriberListService()
    {
        $this->services['gecko_newsletter.controller.subscriber_list'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('gecko_newsletter', 'subscriber_list', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getGeckoNewsletter_Newsletter_Form_TypeService()
    {
        return $this->services['gecko_newsletter.newsletter.form.type'] = new \Gecko\NewsletterBundle\Form\Type\NewsletterType();
    }
    protected function getGeckoNewsletter_Repository_NewsletterService()
    {
        return $this->services['gecko_newsletter.repository.newsletter'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\NewsletterBundle\\Entity\\Newsletter'));
    }
    protected function getGeckoNewsletter_Repository_SubscriberService()
    {
        return $this->services['gecko_newsletter.repository.subscriber'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\NewsletterBundle\\Entity\\Subscriber'));
    }
    protected function getGeckoNewsletter_Repository_SubscriberListService()
    {
        return $this->services['gecko_newsletter.repository.subscriber_list'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\NewsletterBundle\\Entity\\SubscriberList'));
    }
    protected function getGeckoNewsletter_SenderService()
    {
        return $this->services['gecko_newsletter.sender'] = new \Gecko\NewsletterBundle\Sender\BasicSender();
    }
    protected function getGeckoNewsletter_Subscriber_Form_TypeService()
    {
        return $this->services['gecko_newsletter.subscriber.form.type'] = new \Gecko\NewsletterBundle\Form\Type\SubscriberType();
    }
    protected function getGeckoNewsletter_SubscriberList_Form_TypeService()
    {
        return $this->services['gecko_newsletter.subscriber_list.form.type'] = new \Gecko\NewsletterBundle\Form\Type\SubscriberListType();
    }
    protected function getGeckoUser_Admin_Form_TypeService()
    {
        return $this->services['gecko_user.admin.form.type'] = new \Gecko\UserBundle\Form\Type\UserAdminType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getGeckoUser_Registration_Form_TypeService()
    {
        return $this->services['gecko_user.registration.form.type'] = new \Gecko\UserBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request')));
    }
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(new \Metadata\Cache\FileCache('D:/www/projects/pigalle/app/cache/prod/jms_serializer'));
        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));
        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor')), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor')), $b);
    }
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'America/Argentina/Buenos_Aires');
    }
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));
        $instance->setOptions(0);
        return $instance;
    }
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Sylius\\Bundle\\CoreBundle' => 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/config/serializer', 'Sylius\\Bundle\\ResourceBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/config/serializer', 'Sylius\\Bundle\\InstallerBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/config/serializer', 'Sylius\\Bundle\\MoneyBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/config/serializer', 'Sylius\\Bundle\\SettingsBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/config/serializer', 'Sylius\\Bundle\\CartBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle/Resources/config/serializer', 'Sylius\\Bundle\\AssortmentBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxationBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/config/serializer', 'Sylius\\Bundle\\ShippingBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/config/serializer', 'Sylius\\Bundle\\PaymentsBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/config/serializer', 'Sylius\\Bundle\\PromotionsBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/config/serializer', 'Sylius\\Bundle\\AddressingBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/config/serializer', 'Sylius\\Bundle\\SalesBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\sales-bundle\\Sylius\\Bundle\\SalesBundle/Resources/config/serializer', 'Sylius\\Bundle\\InventoryBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\inventory-bundle\\Sylius\\Bundle\\InventoryBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxonomiesBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/config/serializer', 'Sylius\\Bundle\\FlowBundle' => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineBundle' => 'D:\\www\\projects\\pigalle\\vendor\\doctrine\\doctrine-bundle\\Doctrine\\Bundle\\DoctrineBundle/Resources/config/serializer', 'Doctrine\\Bundle\\FixturesBundle' => 'D:\\www\\projects\\pigalle\\vendor\\doctrine\\doctrine-fixtures-bundle\\Doctrine\\Bundle\\FixturesBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\assetic-bundle\\Symfony\\Bundle\\AsseticBundle/Resources/config/serializer', 'Symfony\\Bundle\\FrameworkBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\monolog-bundle\\Symfony\\Bundle\\MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\SecurityBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/config/serializer', 'Symfony\\Bundle\\SwiftmailerBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\swiftmailer-bundle\\Symfony\\Bundle\\SwiftmailerBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/config/serializer', 'Liip\\DoctrineCacheBundle' => 'D:\\www\\projects\\pigalle\\vendor\\liip\\doctrine-cache-bundle\\Liip\\DoctrineCacheBundle/Resources/config/serializer', 'Liip\\ImagineBundle' => 'D:\\www\\projects\\pigalle\\vendor\\liip\\imagine-bundle\\Liip\\ImagineBundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => 'D:\\www\\projects\\pigalle\\vendor\\knplabs\\knp-menu-bundle\\Knp\\Bundle\\MenuBundle/Resources/config/serializer', 'Knp\\Bundle\\GaufretteBundle' => 'D:\\www\\projects\\pigalle\\vendor\\knplabs\\knp-gaufrette-bundle\\Knp\\Bundle\\GaufretteBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => 'D:\\www\\projects\\pigalle\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle/Resources/config/serializer', 'FOS\\RestBundle' => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle/Resources/config/serializer', 'FOS\\UserBundle' => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/config/serializer', 'WhiteOctober\\PagerfantaBundle' => 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/config/serializer', 'Stof\\DoctrineExtensionsBundle' => 'D:\\www\\projects\\pigalle\\vendor\\stof\\doctrine-extensions-bundle\\Stof\\DoctrineExtensionsBundle/Resources/config/serializer', 'JMS\\TranslationBundle' => 'D:\\www\\projects\\pigalle\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle/Resources/config/serializer', 'RaulFraile\\Bundle\\LadybugBundle' => 'D:\\www\\projects\\pigalle\\vendor\\raulfraile\\ladybug-bundle\\RaulFraile\\Bundle\\LadybugBundle/Resources/config/serializer', 'Gecko\\PigalleBundle' => 'D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle/Resources/config/serializer', 'Gecko\\SyliusBackendBundle' => 'D:\\www\\projects\\pigalle\\src\\Gecko\\SyliusBackendBundle/Resources/config/serializer', 'Gecko\\UserBundle' => 'D:\\www\\projects\\pigalle\\src\\Gecko\\UserBundle/Resources/config/serializer', 'Gecko\\NewsletterBundle' => 'D:\\www\\projects\\pigalle\\src\\Gecko\\NewsletterBundle/Resources/config/serializer'));
        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
        $instance->setDoctypeWhitelist(array());
        return $instance;
    }
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsTranslation_ConfigFactoryService()
    {
        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array());
    }
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader()));
    }
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator.default'), false);
    }
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('twig');
        $c = new \Doctrine\Common\Annotations\DocParser();
        $c->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $c->setIgnoreNotImportedAnnotations(true);
        $d = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $d->setSourceLanguage('en');
        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');
        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($b, $a, array(0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($c), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($c), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($b), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator.mapping.class_metadata_factory')), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($c))), $a, array()), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $d, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $e)));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array('sylius_image' => $this->get('gaufrette.sylius_image_filesystem')));
    }
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();
        $instance->addExtension(new \Knp\Menu\Silex\RoutingExtension($this->get('router')), 0);
        return $instance;
    }
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();
        $instance->addVoter($this->get('knp_menu.voter.router'));
        return $instance;
    }
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();
        $instance->addVoter($this->get('knp_menu.voter.router'));
        return $instance;
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('pigalle.menu.main_left' => 'pigalle.menu.main_left', 'pigalle.menu.main_right' => 'pigalle.menu.main_right', 'pigalle.menu.account' => 'pigalle.menu.account', 'pigalle.menu.user' => 'pigalle.menu.user', 'pigalle.menu.footer' => 'pigalle.menu.footer', 'sylius_backend.menu.main' => 'sylius_backend.menu.main', 'sylius_backend.menu.main_account' => 'sylius_backend.menu.main_account', 'sylius_backend.menu.dashboard' => 'sylius_backend.menu.dashboard')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Silex\Voter\RouteVoter();
    }
    protected function getLadybug_DumperService()
    {
        $this->services['ladybug.dumper'] = $instance = new \Ladybug\Dumper();
        $instance->setOptions(array('theme' => 'modern', 'expanded' => false, 'silenced' => false));
        return $instance;
    }
    protected function getLadybug_EventListener_LadybugConfigListenerService()
    {
        return $this->services['ladybug.event_listener.ladybug_config_listener'] = new \RaulFraile\Bundle\LadybugBundle\EventListener\LadybugConfigListener(array('theme' => 'modern', 'expanded' => false, 'silenced' => false));
    }
    protected function getLiipDoctrineCache_Ns_SyliusSettingsService()
    {
        $this->services['liip_doctrine_cache.ns.sylius_settings'] = $instance = new \Doctrine\Common\Cache\FilesystemCache('D:/www/projects/pigalle/app/cache/prod/doctrine/cache', NULL);
        $instance->setNamespace('sylius_settings');
        return $instance;
    }
    protected function getLiipImagineService()
    {
        return $this->services['liip_imagine'] = new \Imagine\Gd\Imagine();
    }
    protected function getLiipImagine_Cache_ClearerService()
    {
        return $this->services['liip_imagine.cache.clearer'] = new \Liip\ImagineBundle\Imagine\Cache\CacheClearer($this->get('liip_imagine.cache.manager'), '/media/cache');
    }
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('router'), 'D:/www/projects/pigalle/app/../web', 'web_path');
        $instance->addResolver('web_path', $this->get('liip_imagine.cache.resolver.web_path'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache'));
        return $instance;
    }
    protected function getLiipImagine_Cache_Resolver_NoCacheService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver($this->get('filesystem'));
    }
    protected function getLiipImagine_Cache_Resolver_WebPathService()
    {
        $this->services['liip_imagine.cache.resolver.web_path'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'));
        $instance->setBasePath('');
        return $instance;
    }
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'));
    }
    protected function getLiipImagine_Data_Loader_FilesystemService()
    {
        return $this->services['liip_imagine.data.loader.filesystem'] = new \Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader($this->get('liip_imagine'), array(), 'D:/www/projects/pigalle/app/../web/media/image');
    }
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.filter.configuration'), 'filesystem');
        $instance->addLoader('filesystem', $this->get('liip_imagine.data.loader.filesystem'));
        return $instance;
    }
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('sylius_16x16' => array('filters' => array('thumbnail' => array('size' => array(0 => 16, 1 => 16), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_50x40' => array('filters' => array('thumbnail' => array('size' => array(0 => 50, 1 => 40), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_60x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 60, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_138x138' => array('filters' => array('thumbnail' => array('size' => array(0 => 138, 1 => 138), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_200x200' => array('filters' => array('thumbnail' => array('size' => array(0 => 200, 1 => 200), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_262x255' => array('filters' => array('thumbnail' => array('size' => array(0 => 265, 1 => 255), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_610x600' => array('filters' => array('thumbnail' => array('size' => array(0 => 610, 1 => 600), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_gallery' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_60x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 60, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_220x220' => array('filters' => array('thumbnail' => array('size' => array(0 => 220, 1 => 220), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_460x460' => array('filters' => array('thumbnail' => array('size' => array(0 => 460, 1 => 460), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_900x900' => array('filters' => array('thumbnail' => array('size' => array(0 => 900, 1 => 900), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), 'D:/www/projects/pigalle/app');
    }
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'));
        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        return $instance;
    }
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }
    protected function getLiipImagine_Routing_LoaderService()
    {
        return $this->services['liip_imagine.routing.loader'] = new \Liip\ImagineBundle\Routing\ImagineLoader('liip_imagine.controller:filterAction', '/media/cache', array('sylius_16x16' => array('filters' => array('thumbnail' => array('size' => array(0 => 16, 1 => 16), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_50x40' => array('filters' => array('thumbnail' => array('size' => array(0 => 50, 1 => 40), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_60x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 60, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_138x138' => array('filters' => array('thumbnail' => array('size' => array(0 => 138, 1 => 138), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_200x200' => array('filters' => array('thumbnail' => array('size' => array(0 => 200, 1 => 200), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_262x255' => array('filters' => array('thumbnail' => array('size' => array(0 => 265, 1 => 255), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_610x600' => array('filters' => array('thumbnail' => array('size' => array(0 => 610, 1 => 600), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_gallery' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_60x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 60, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_220x220' => array('filters' => array('thumbnail' => array('size' => array(0 => 220, 1 => 220), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_460x460' => array('filters' => array('thumbnail' => array('size' => array(0 => 460, 1 => 460), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'pigalle_900x900' => array('filters' => array('thumbnail' => array('size' => array(0 => 900, 1 => 900), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('es', $this->get('router'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('D:/www/projects/pigalle/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getPigalle_Controller_MayoristaService()
    {
        $this->services['pigalle.controller.mayorista'] = $instance = new \Gecko\PigalleBundle\Controller\MayoristaController('sylius', 'product_collection', 'PigalleBundle:ProductCollection');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getPigalle_Menu_AccountService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('pigalle.menu.account', 'request');
        }
        return $this->services['pigalle.menu.account'] = $this->scopedServices['request']['pigalle.menu.account'] = $this->get('pigalle.menu_builder')->createAccountMenu($this->get('request'));
    }
    protected function getPigalle_Menu_FooterService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('pigalle.menu.footer', 'request');
        }
        return $this->services['pigalle.menu.footer'] = $this->scopedServices['request']['pigalle.menu.footer'] = $this->get('pigalle.menu_builder')->createFooterMenu($this->get('request'));
    }
    protected function getPigalle_Menu_MainLeftService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('pigalle.menu.main_left', 'request');
        }
        return $this->services['pigalle.menu.main_left'] = $this->scopedServices['request']['pigalle.menu.main_left'] = $this->get('pigalle.menu_builder')->createMainMenuLeft($this->get('request'));
    }
    protected function getPigalle_Menu_MainRightService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('pigalle.menu.main_right', 'request');
        }
        return $this->services['pigalle.menu.main_right'] = $this->scopedServices['request']['pigalle.menu.main_right'] = $this->get('pigalle.menu_builder')->createMainMenuRight($this->get('request'));
    }
    protected function getPigalle_Menu_UserService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('pigalle.menu.user', 'request');
        }
        return $this->services['pigalle.menu.user'] = $this->scopedServices['request']['pigalle.menu.user'] = $this->get('pigalle.menu_builder')->createUserMenu($this->get('request'));
    }
    protected function getPigalle_MenuBuilderService()
    {
        $this->services['pigalle.menu_builder'] = $instance = new \Gecko\PigalleBundle\Menu\MenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getPigalle_PigalleLocal_Form_TypeService()
    {
        return $this->services['pigalle.pigalle_local.form.type'] = new \Gecko\PigalleBundle\Form\Type\LocalType();
    }
    protected function getPigalle_PigalleSlide_Form_TypeService()
    {
        return $this->services['pigalle.pigalle_slide.form.type'] = new \Gecko\PigalleBundle\Form\Type\PigalleSlideType();
    }
    protected function getPigalle_ProductCollection_Form_TypeService()
    {
        return $this->services['pigalle.product_collection.form.type'] = new \Gecko\PigalleBundle\Form\Type\ProductCollectionType();
    }
    protected function getPigalle_ProductCollectionImage_Form_TypeService()
    {
        return $this->services['pigalle.product_collection_image.form.type'] = new \Gecko\PigalleBundle\Form\Type\ProductCollectionImageType('Gecko\\PigalleBundle\\Entity\\ProductCollectionImage');
    }
    protected function getPigalle_Profile_Form_TypeService()
    {
        return $this->services['pigalle.profile.form.type'] = new \Gecko\PigalleBundle\Form\Type\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getPigalle_Twig_CeilExtensionService()
    {
        return $this->services['pigalle.twig.ceil_extension'] = new \Gecko\PigalleBundle\Twig\CeilExtension();
    }
    protected function getPigalle_Twig_PriceExtensionService()
    {
        return $this->services['pigalle.twig.price_extension'] = new \Gecko\PigalleBundle\Twig\PriceExtension();
    }
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler');
        $b = $this->get('kernel');
        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        $c->setKernel($b);
        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:D:/www/projects/pigalle/app/cache/prod/profiler', '', '', 86400), $a);
        $instance->disable();
        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add(new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine')));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.ladybug_data_collector'));
        return $instance;
    }
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'D:/www/projects/pigalle/app/config/routing.yml', array('cache_dir' => 'D:/www/projects/pigalle/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context'), $this->get('monolog.logger.router'));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), $this->get('monolog.logger.request'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader($this->get('liip_imagine.routing.loader'));
        $b->addLoader($this->get('fos_rest.routing.loader.controller'));
        $b->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $b->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $b);
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.mayorista' => $this->get('security.request_matcher.16f6f2ddc1022283e3329a3e1f3180100aae671ce40e0c73fc8487534abfb8e009a5e88b'), 'security.firewall.map.context.main' => NULL)), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('fos_user.user_manager');
        $c = $this->get('monolog.logger.security');
        $d = $this->get('security.context');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = $this->get('event_dispatcher');
        $h = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b), 'd73a220a76ed13d358389b3f7658ecc7', 'main', array('name' => 'APP_REMEMBER_ME', 'lifetime' => 31536000, 'always_remember_me' => true, 'remember_me_parameter' => '_remember_me', 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true), $c);
        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => 'fos_user_security_logout'));
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $i->addHandler($h);
        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'));
        $j->setProviderKey('main');
        $k = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $f, $this->get('security.authentication.session_strategy'), $a, 'main', $j, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/login_check', 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $g);
        $k->setRememberMeServices($h);
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $i, 3 => $k, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($d, $h, $f, $c, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '537b6cc9bf745', $c), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $a, '/login', false), '/sin-autorizacion', NULL, $c));
    }
    protected function getSecurity_Firewall_Map_Context_MayoristaService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('http_kernel');
        $c = $this->get('monolog.logger.security');
        $d = $this->get('security.context');
        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/mayorista/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'));
        $e->setProviderKey('mayorista');
        return $this->services['security.firewall.map.context.mayorista'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $a, 'mayorista', $e, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($b, $a, array('login_path' => '/mayorista/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/mayorista/login_check', 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $this->get('event_dispatcher')), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '537b6cc9bf745', $c), 4 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'mayorista', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($b, $a, '/mayorista/login', false), '/sin-autorizacion', NULL, $c));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('D:/www/projects/pigalle/app/cache/prod/secure_random.seed', $this->get('monolog.logger.security'));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
        $instance->registerBag($this->get('sylius.process_storage.session.bag'));
        return $instance;
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('D:/www/projects/pigalle/app/cache/prod/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('D:/www/projects/pigalle/app/cache/prod/sessions');
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));
        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getSylius_AvailabilityChecker_DefaultService()
    {
        return $this->services['sylius.availability_checker.default'] = new \Sylius\Bundle\InventoryBundle\Checker\AvailabilityChecker(true);
    }
    protected function getSylius_Builder_OrderService()
    {
        return $this->services['sylius.builder.order'] = new \Sylius\Bundle\SalesBundle\Builder\OrderBuilder($this->get('sylius.repository.order'), $this->get('sylius.repository.order_item'));
    }
    protected function getSylius_CartFlashListenerService()
    {
        return $this->services['sylius.cart_flash_listener'] = new \Sylius\Bundle\CartBundle\EventListener\FlashListener($this->get('session'));
    }
    protected function getSylius_CartItemResolver_DefaultService()
    {
        return $this->services['sylius.cart_item_resolver.default'] = new \Sylius\Bundle\CoreBundle\Cart\ItemResolver($this->get('sylius.repository.product'), $this->get('sylius.repository.product_collection'), $this->get('form.factory'), $this->get('sylius.availability_checker.default'));
    }
    protected function getSylius_CartListenerService()
    {
        return $this->services['sylius.cart_listener'] = new \Sylius\Bundle\CartBundle\EventListener\CartListener($this->get('doctrine.orm.default_entity_manager'), $this->get('validator'));
    }
    protected function getSylius_CartProvider_DefaultService()
    {
        return $this->services['sylius.cart_provider.default'] = new \Sylius\Bundle\CartBundle\Provider\CartProvider($this->get('sylius.cart_storage.session'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.cart'));
    }
    protected function getSylius_CartStorage_SessionService()
    {
        return $this->services['sylius.cart_storage.session'] = new \Sylius\Bundle\CartBundle\Storage\SessionCartStorage($this->get('session'));
    }
    protected function getSylius_CartTwigService()
    {
        return $this->services['sylius.cart_twig'] = new \Sylius\Bundle\CartBundle\Twig\SyliusCartExtension($this->get('sylius.cart_provider.default'), $this->get('sylius.repository.cart_item'), $this->get('form.factory'));
    }
    protected function getSylius_CheckoutForm_AddressingService()
    {
        return $this->services['sylius.checkout_form.addressing'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\AddressingStepType('Sylius\\Bundle\\CoreBundle\\Entity\\Cart');
    }
    protected function getSylius_CheckoutForm_PaymentService()
    {
        return $this->services['sylius.checkout_form.payment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\PaymentStepType('Sylius\\Bundle\\CoreBundle\\Entity\\Cart');
    }
    protected function getSylius_CheckoutForm_ShippingService()
    {
        return $this->services['sylius.checkout_form.shipping'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType('Sylius\\Bundle\\CoreBundle\\Entity\\Cart');
    }
    protected function getSylius_CheckoutScenarioService()
    {
        return $this->services['sylius.checkout_scenario'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario($this->get('sylius.cart_provider.default'));
    }
    protected function getSylius_CheckoutStep_AddressingService()
    {
        $this->services['sylius.checkout_step.addressing'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\AddressingStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_FinalizeService()
    {
        $this->services['sylius.checkout_step.finalize'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\FinalizeStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_PaymentService()
    {
        $this->services['sylius.checkout_step.payment'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\PaymentStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_SecurityService()
    {
        $this->services['sylius.checkout_step.security'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\SecurityStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CheckoutStep_ShippingService()
    {
        $this->services['sylius.checkout_step.shipping'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\ShippingStep();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_AddressService()
    {
        $this->services['sylius.controller.address'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'address', 'SyliusAddressingBundle:Address');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CartService()
    {
        $this->services['sylius.controller.cart'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartController('sylius', 'cart', 'SyliusCartBundle:Cart');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CartItemService()
    {
        $this->services['sylius.controller.cart_item'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartItemController('sylius', 'cart_item', 'SyliusCartBundle:CartItem');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CountryService()
    {
        $this->services['sylius.controller.country'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'country', 'SyliusAddressingBundle:Country');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_CurrencyService()
    {
        $this->services['sylius.controller.currency'] = $instance = new \Sylius\Bundle\MoneyBundle\Controller\CurrencyController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ExchangeRateService()
    {
        $this->services['sylius.controller.exchange_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'exchange_rate', 'SyliusMoneyBundle:ExchangeRate');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_InventoryUnitService()
    {
        $this->services['sylius.controller.inventory_unit'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'inventory_unit', 'SyliusInventoryBundle:InventoryUnit');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_LocalService()
    {
        $this->services['sylius.controller.local'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'local', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OptionService()
    {
        $this->services['sylius.controller.option'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'option', 'SyliusAssortmentBundle:Option');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OrderService()
    {
        $this->services['sylius.controller.order'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\OrderController('sylius', 'order', 'SyliusSalesBundle:Order');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_OrderItemService()
    {
        $this->services['sylius.controller.order_item'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'order_item', 'SyliusSalesBundle:Item');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PaymentService()
    {
        $this->services['sylius.controller.payment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'payment', 'SyliusPaymentsBundle:Payment');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PaymentMethodService()
    {
        $this->services['sylius.controller.payment_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'payment_method', 'SyliusPaymentsBundle:PaymentMethod');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PigalleSlideService()
    {
        $this->services['sylius.controller.pigalle_slide'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'pigalle_slide', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProcessService()
    {
        $this->services['sylius.controller.process'] = $instance = new \Sylius\Bundle\FlowBundle\Controller\ProcessController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProductService()
    {
        $this->services['sylius.controller.product'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\ProductController('sylius', 'product', 'SyliusAssortmentBundle:Product');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProductCollectionService()
    {
        $this->services['sylius.controller.product_collection'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'product_collection', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProductCollectionImageService()
    {
        $this->services['sylius.controller.product_collection_image'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'product_collection_image', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionService()
    {
        $this->services['sylius.controller.promotion'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion', 'SyliusPromotionsBundle:Promotion');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionActionService()
    {
        $this->services['sylius.controller.promotion_action'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion_action', 'SyliusPromotionsBundle:Action');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionCouponService()
    {
        $this->services['sylius.controller.promotion_coupon'] = $instance = new \Sylius\Bundle\PromotionsBundle\Controller\CouponController('sylius', 'promotion_coupon', 'SyliusPromotionsBundle:Coupon');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PromotionRuleService()
    {
        $this->services['sylius.controller.promotion_rule'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion_rule', 'SyliusPromotionsBundle:Rule');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PropertyService()
    {
        $this->services['sylius.controller.property'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'property', 'SyliusAssortmentBundle:Property');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_PrototypeService()
    {
        $this->services['sylius.controller.prototype'] = $instance = new \Sylius\Bundle\AssortmentBundle\Controller\PrototypeController('sylius', 'prototype', 'SyliusAssortmentBundle:Prototype');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ProvinceService()
    {
        $this->services['sylius.controller.province'] = $instance = new \Sylius\Bundle\AddressingBundle\Controller\ProvinceController('sylius', 'province', 'SyliusAddressingBundle:Province');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_SettingsService()
    {
        $this->services['sylius.controller.settings'] = $instance = new \Sylius\Bundle\SettingsBundle\Controller\SettingsController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShipmentService()
    {
        $this->services['sylius.controller.shipment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipment', 'SyliusShippingBundle:Shipment');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShippingCategoryService()
    {
        $this->services['sylius.controller.shipping_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipping_category', 'SyliusShippingBundle:ShippingCategory');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ShippingMethodService()
    {
        $this->services['sylius.controller.shipping_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipping_method', 'SyliusShippingBundle:Shippingmethod');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_StockableService()
    {
        $this->services['sylius.controller.stockable'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'stockable', 'SyliusInventoryBundle:Stockable');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxCategoryService()
    {
        $this->services['sylius.controller.tax_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'tax_category', 'SyliusTaxationBundle:TaxCategory');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxRateService()
    {
        $this->services['sylius.controller.tax_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'tax_rate', 'SyliusTaxationBundle:TaxRate');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxonService()
    {
        $this->services['sylius.controller.taxon'] = $instance = new \Sylius\Bundle\TaxonomiesBundle\Controller\TaxonController('sylius', 'taxon', 'SyliusTaxonomiesBundle:Taxon');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_TaxonomyService()
    {
        $this->services['sylius.controller.taxonomy'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'taxonomy', 'SyliusTaxonomiesBundle:Taxonomy');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_UserService()
    {
        $this->services['sylius.controller.user'] = $instance = new \Gecko\UserBundle\Controller\UserController('sylius', 'user', NULL);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_VariantService()
    {
        $this->services['sylius.controller.variant'] = $instance = new \Sylius\Bundle\AssortmentBundle\Controller\VariantController('sylius', 'variant', 'SyliusAssortmentBundle:Variant');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneService()
    {
        $this->services['sylius.controller.zone'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'zone', 'SyliusAddressingBundle:Zone');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Controller_ZoneMemberService()
    {
        $this->services['sylius.controller.zone_member'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'zone_member', 'SyliusAddressingBundle:ZoneMember');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_CurrencyContextService()
    {
        return $this->services['sylius.currency_context'] = new \Sylius\Bundle\MoneyBundle\Context\CurrencyContext($this->get('session'), 'ARS');
    }
    protected function getSylius_CurrencyConverterService()
    {
        return $this->services['sylius.currency_converter'] = new \Sylius\Bundle\MoneyBundle\Converter\CurrencyConverter($this->get('sylius.repository.exchange_rate'));
    }
    protected function getSylius_Form_Listener_AddressService()
    {
        return $this->services['sylius.form.listener.address'] = new \Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormListener($this->get('sylius.repository.country'), $this->get('form.factory'));
    }
    protected function getSylius_Form_Type_AddressService()
    {
        return $this->services['sylius.form.type.address'] = new \Gecko\PigalleBundle\Form\Type\AddressType('Gecko\\PigalleBundle\\Entity\\Address', $this->get('sylius.form.listener.address'));
    }
    protected function getSylius_Form_Type_CartService()
    {
        return $this->services['sylius.form.type.cart'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartType('Sylius\\Bundle\\CoreBundle\\Entity\\Cart');
    }
    protected function getSylius_Form_Type_CartItemService()
    {
        return $this->services['sylius.form.type.cart_item'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartItemType('Sylius\\Bundle\\CoreBundle\\Entity\\CartItem');
    }
    protected function getSylius_Form_Type_ConfigurationService()
    {
        return $this->services['sylius.form.type.configuration'] = new \Sylius\Bundle\InstallerBundle\Form\Type\ConfigurationType();
    }
    protected function getSylius_Form_Type_Configuration_DatabaseService()
    {
        return $this->services['sylius.form.type.configuration.database'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\DatabaseType();
    }
    protected function getSylius_Form_Type_Configuration_HiddenService()
    {
        return $this->services['sylius.form.type.configuration.hidden'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\HiddenType();
    }
    protected function getSylius_Form_Type_Configuration_LocaleService()
    {
        return $this->services['sylius.form.type.configuration.locale'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\LocaleType();
    }
    protected function getSylius_Form_Type_Configuration_MailerService()
    {
        return $this->services['sylius.form.type.configuration.mailer'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\MailerType();
    }
    protected function getSylius_Form_Type_CountryService()
    {
        return $this->services['sylius.form.type.country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryType('Sylius\\Bundle\\AddressingBundle\\Entity\\Country');
    }
    protected function getSylius_Form_Type_CountryChoiceService()
    {
        return $this->services['sylius.form.type.country_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Entity\\Country');
    }
    protected function getSylius_Form_Type_CreditCardService()
    {
        return $this->services['sylius.form.type.credit_card'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\CreditCardType('Sylius\\Bundle\\PaymentsBundle\\Entity\\CreditCard', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ExchangeRateService()
    {
        return $this->services['sylius.form.type.exchange_rate'] = new \Sylius\Bundle\MoneyBundle\Form\Type\ExchangeRateType('Sylius\\Bundle\\MoneyBundle\\Entity\\ExchangeRate');
    }
    protected function getSylius_Form_Type_ImageService()
    {
        return $this->services['sylius.form.type.image'] = new \Sylius\Bundle\CoreBundle\Form\Type\ImageType('Sylius\\Bundle\\CoreBundle\\Entity\\VariantImage');
    }
    protected function getSylius_Form_Type_MoneyService()
    {
        return $this->services['sylius.form.type.money'] = new \Sylius\Bundle\MoneyBundle\Form\Type\MoneyType('ARS');
    }
    protected function getSylius_Form_Type_OptionService()
    {
        return $this->services['sylius.form.type.option'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\OptionType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOption');
    }
    protected function getSylius_Form_Type_OptionChoiceService()
    {
        return $this->services['sylius.form.type.option_choice'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\OptionEntityChoiceType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOption');
    }
    protected function getSylius_Form_Type_OptionValueService()
    {
        return $this->services['sylius.form.type.option_value'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\OptionValueType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOptionValue');
    }
    protected function getSylius_Form_Type_OptionValueChoiceService()
    {
        return $this->services['sylius.form.type.option_value_choice'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\OptionValueChoiceType();
    }
    protected function getSylius_Form_Type_OptionValueCollectionService()
    {
        return $this->services['sylius.form.type.option_value_collection'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\OptionValueCollectionType();
    }
    protected function getSylius_Form_Type_OrderService()
    {
        return $this->services['sylius.form.type.order'] = new \Sylius\Bundle\CoreBundle\Form\Type\OrderType('Sylius\\Bundle\\CoreBundle\\Entity\\Order', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_OrderFilterService()
    {
        return $this->services['sylius.form.type.order_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\OrderFilterType();
    }
    protected function getSylius_Form_Type_OrderItemService()
    {
        return $this->services['sylius.form.type.order_item'] = new \Sylius\Bundle\SalesBundle\Form\Type\OrderItemType('Sylius\\Bundle\\SalesBundle\\Entity\\DefaultOrderItem', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PaymentService()
    {
        return $this->services['sylius.form.type.payment'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentType('Sylius\\Bundle\\PaymentsBundle\\Entity\\Payment', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PaymentGatewayChoiceService()
    {
        return $this->services['sylius.form.type.payment_gateway_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentGatewayChoiceType(array('dummy' => 'Test', 'stripe' => 'Stripe'));
    }
    protected function getSylius_Form_Type_PaymentMethodService()
    {
        return $this->services['sylius.form.type.payment_method'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodType('Sylius\\Bundle\\PaymentsBundle\\Entity\\PaymentMethod', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PaymentMethodChoiceService()
    {
        return $this->services['sylius.form.type.payment_method_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodEntityType('Sylius\\Bundle\\PaymentsBundle\\Entity\\PaymentMethod');
    }
    protected function getSylius_Form_Type_ProductService()
    {
        return $this->services['sylius.form.type.product'] = new \Sylius\Bundle\CoreBundle\Form\Type\ProductType('Sylius\\Bundle\\CoreBundle\\Entity\\Product');
    }
    protected function getSylius_Form_Type_ProductFilterService()
    {
        return $this->services['sylius.form.type.product_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\ProductFilterType();
    }
    protected function getSylius_Form_Type_ProductHiddenService()
    {
        return $this->services['sylius.form.type.product_hidden'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\ProductHiddenType($this->get('sylius.repository.product'));
    }
    protected function getSylius_Form_Type_ProductPropertyService()
    {
        return $this->services['sylius.form.type.product_property'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\ProductPropertyType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProductProperty');
    }
    protected function getSylius_Form_Type_ProductToIdentifierService()
    {
        return $this->services['sylius.form.type.product_to_identifier'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\ProductToIdentifierType($this->get('sylius.repository.product'));
    }
    protected function getSylius_Form_Type_PromotionService()
    {
        return $this->services['sylius.form.type.promotion'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\PromotionType('Sylius\\Bundle\\PromotionsBundle\\Entity\\Promotion', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'), $this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_Form_Type_PromotionActionService()
    {
        return $this->services['sylius.form.type.promotion_action'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionType('Sylius\\Bundle\\PromotionsBundle\\Entity\\Action', array(0 => 'sylius'), $this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_Form_Type_PromotionAction_FixedDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.fixed_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\FixedDiscountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionAction_PercentageDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.percentage_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\PercentageDiscountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionActionChoiceService()
    {
        return $this->services['sylius.form.type.promotion_action_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionChoiceType(array('fixed_discount' => 'Fixed discount', 'percentage_discount' => 'Percentage discount'));
    }
    protected function getSylius_Form_Type_PromotionCouponService()
    {
        return $this->services['sylius.form.type.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponType('Sylius\\Bundle\\PromotionsBundle\\Entity\\Coupon', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionCouponGenerateInstructionService()
    {
        return $this->services['sylius.form.type.promotion_coupon_generate_instruction'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponGenerateInstructionType('Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionCouponToCodeService()
    {
        return $this->services['sylius.form.type.promotion_coupon_to_code'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponToCodeType($this->get('sylius.repository.promotion_coupon'));
    }
    protected function getSylius_Form_Type_PromotionRuleService()
    {
        return $this->services['sylius.form.type.promotion_rule'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleType('Sylius\\Bundle\\PromotionsBundle\\Entity\\Rule', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'));
    }
    protected function getSylius_Form_Type_PromotionRule_ItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_count_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRule_ItemTotalConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_total_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemTotalConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_PromotionRuleChoiceService()
    {
        return $this->services['sylius.form.type.promotion_rule_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleChoiceType(array('item_total' => 'Item total', 'item_count' => 'Item count'));
    }
    protected function getSylius_Form_Type_PropertyService()
    {
        return $this->services['sylius.form.type.property'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\PropertyType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProperty');
    }
    protected function getSylius_Form_Type_PropertyChoiceService()
    {
        return $this->services['sylius.form.type.property_choice'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\PropertyEntityChoiceType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProperty');
    }
    protected function getSylius_Form_Type_PrototypeService()
    {
        return $this->services['sylius.form.type.prototype'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\PrototypeType('Sylius\\Bundle\\AssortmentBundle\\Entity\\Prototype\\DefaultPrototype');
    }
    protected function getSylius_Form_Type_ProvinceService()
    {
        return $this->services['sylius.form.type.province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceType('Sylius\\Bundle\\AddressingBundle\\Entity\\Province');
    }
    protected function getSylius_Form_Type_ProvinceChoiceService()
    {
        return $this->services['sylius.form.type.province_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceChoiceType($this->get('sylius.repository.province'));
    }
    protected function getSylius_Form_Type_SetupService()
    {
        return $this->services['sylius.form.type.setup'] = new \Sylius\Bundle\InstallerBundle\Form\Type\SetupType('Sylius\\Bundle\\CoreBundle\\Entity\\User');
    }
    protected function getSylius_Form_Type_ShippingCalculator_FlatRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flat_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlatRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculator_FlexibleRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flexible_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlexibleRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculator_PerItemRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.per_item_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\PerItemRateConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.shipping_calculator_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType(array('oca' => 'Oca', 'flat_rate' => 'Flat rate per shipment', 'per_item_rate' => 'Flat rate per item', 'flexible_rate' => 'Flexible rate'));
    }
    protected function getSylius_Form_Type_ShippingCategoryService()
    {
        return $this->services['sylius.form.type.shipping_category'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryType('Sylius\\Bundle\\ShippingBundle\\Entity\\DefaultShippingCategory', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_ShippingCategoryChoiceService()
    {
        return $this->services['sylius.form.type.shipping_category_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryEntityType('Sylius\\Bundle\\ShippingBundle\\Entity\\DefaultShippingCategory');
    }
    protected function getSylius_Form_Type_ShippingMethodService()
    {
        return $this->services['sylius.form.type.shipping_method'] = new \Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType('Sylius\\Bundle\\CoreBundle\\Entity\\ShippingMethod', array(0 => 'sylius'), $this->get('sylius.shipping_calculator_registry'), $this->get('sylius.shipping_rule_checker_registry'));
    }
    protected function getSylius_Form_Type_ShippingMethodChoiceService()
    {
        return $this->services['sylius.form.type.shipping_method_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType($this->get('sylius.shipping_methods_resolver'));
    }
    protected function getSylius_Form_Type_ShippingRuleItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_rule_item_count_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.tax_calculator_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\CalculatorChoiceType(array('default' => 'default'));
    }
    protected function getSylius_Form_Type_TaxCategoryService()
    {
        return $this->services['sylius.form.type.tax_category'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType('Sylius\\Bundle\\TaxationBundle\\Entity\\DefaultTaxCategory');
    }
    protected function getSylius_Form_Type_TaxCategoryChoiceService()
    {
        return $this->services['sylius.form.type.tax_category_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryEntityType('Sylius\\Bundle\\TaxationBundle\\Entity\\DefaultTaxCategory');
    }
    protected function getSylius_Form_Type_TaxRateService()
    {
        return $this->services['sylius.form.type.tax_rate'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxRateType('Sylius\\Bundle\\CoreBundle\\Entity\\TaxRate');
    }
    protected function getSylius_Form_Type_TaxonService()
    {
        return $this->services['sylius.form.type.taxon'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonType('Sylius\\Bundle\\CoreBundle\\Entity\\Taxon', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxonChoiceService()
    {
        return $this->services['sylius.form.type.taxon_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonChoiceType($this->get('sylius.repository.taxon'));
    }
    protected function getSylius_Form_Type_TaxonSelectionService()
    {
        return $this->services['sylius.form.type.taxon_selection'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonSelectionType($this->get('sylius.repository.taxonomy'));
    }
    protected function getSylius_Form_Type_TaxonomyService()
    {
        return $this->services['sylius.form.type.taxonomy'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonomyType('Sylius\\Bundle\\CoreBundle\\Entity\\Taxonomy', array(0 => 'sylius'));
    }
    protected function getSylius_Form_Type_TaxonomyChoiceService()
    {
        return $this->services['sylius.form.type.taxonomy_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonomyChoiceType('Sylius\\Bundle\\CoreBundle\\Entity\\Taxonomy');
    }
    protected function getSylius_Form_Type_VariantService()
    {
        return $this->services['sylius.form.type.variant'] = new \Sylius\Bundle\CoreBundle\Form\Type\VariantType('Sylius\\Bundle\\CoreBundle\\Entity\\Variant');
    }
    protected function getSylius_Form_Type_VariantChoiceService()
    {
        return $this->services['sylius.form.type.variant_choice'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\VariantChoiceType();
    }
    protected function getSylius_Form_Type_VariantMatchService()
    {
        return $this->services['sylius.form.type.variant_match'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\VariantMatchType();
    }
    protected function getSylius_Form_Type_VariantToIdentifierService()
    {
        return $this->services['sylius.form.type.variant_to_identifier'] = new \Sylius\Bundle\AssortmentBundle\Form\Type\VariantToIdentifierType($this->get('sylius.repository.variant'));
    }
    protected function getSylius_Form_Type_ZoneService()
    {
        return $this->services['sylius.form.type.zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneType('Sylius\\Bundle\\AddressingBundle\\Entity\\Zone');
    }
    protected function getSylius_Form_Type_ZoneChoiceService()
    {
        return $this->services['sylius.form.type.zone_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Entity\\Zone');
    }
    protected function getSylius_Form_Type_ZoneMemberCollectionService()
    {
        return $this->services['sylius.form.type.zone_member_collection'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCollectionType('Sylius\\Bundle\\AddressingBundle\\Entity\\Zone');
    }
    protected function getSylius_Form_Type_ZoneMemberCountryService()
    {
        return $this->services['sylius.form.type.zone_member_country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCountryType('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberCountry');
    }
    protected function getSylius_Form_Type_ZoneMemberProvinceService()
    {
        return $this->services['sylius.form.type.zone_member_province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberProvinceType('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberProvince');
    }
    protected function getSylius_Form_Type_ZoneMemberZoneService()
    {
        return $this->services['sylius.form.type.zone_member_zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberZoneType('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberZone');
    }
    protected function getSylius_Generator_OrderNumberService()
    {
        return $this->services['sylius.generator.order_number'] = new \Sylius\Bundle\SalesBundle\Generator\OrderNumberGenerator($this->get('sylius.repository.order'));
    }
    protected function getSylius_Generator_PromotionCouponService()
    {
        return $this->services['sylius.generator.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Generator\CouponGenerator($this->get('sylius.repository.promotion_coupon'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSylius_ImageUploaderService()
    {
        return $this->services['sylius.image_uploader'] = new \Sylius\Bundle\CoreBundle\Uploader\ImageUploader($this->get('knp_gaufrette.filesystem_map')->get('sylius_image'));
    }
    protected function getSylius_Installer_ScenarioService()
    {
        $this->services['sylius.installer.scenario'] = $instance = new \Sylius\Bundle\InstallerBundle\Process\InstallerScenario();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSylius_Installer_YamlPersisterService()
    {
        return $this->services['sylius.installer.yaml_persister'] = new \Sylius\Bundle\InstallerBundle\Persister\YamlPersister('D:/www/projects/pigalle/app/config/parameters.yml');
    }
    protected function getSylius_InventoryListenerService()
    {
        return $this->services['sylius.inventory_listener'] = new \Sylius\Bundle\InventoryBundle\EventListener\InventoryChangeListener($this->get('sylius.inventory_operator.default'));
    }
    protected function getSylius_InventoryOperator_DefaultService()
    {
        return $this->services['sylius.inventory_operator.default'] = new \Sylius\Bundle\InventoryBundle\Operator\InventoryOperator($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.inventory_unit'), $this->get('sylius.availability_checker.default'));
    }
    protected function getSylius_InventoryTwigService()
    {
        return $this->services['sylius.inventory_twig'] = new \Sylius\Bundle\InventoryBundle\Twig\SyliusInventoryExtension($this->get('sylius.availability_checker.default'));
    }
    protected function getSylius_Listener_ImageUploadService()
    {
        return $this->services['sylius.listener.image_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener($this->get('sylius.image_uploader'));
    }
    protected function getSylius_Listener_OrderNumberService()
    {
        return $this->services['sylius.listener.order_number'] = new \Sylius\Bundle\SalesBundle\EventListener\OrderNumberListener($this->get('sylius.generator.order_number'));
    }
    protected function getSylius_Listener_OrderPromotionService()
    {
        return $this->services['sylius.listener.order_promotion'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderPromotionListener($this->get('sylius.promotion_processor'));
    }
    protected function getSylius_Listener_OrderShippingService()
    {
        return $this->services['sylius.listener.order_shipping'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderShippingListener($this->get('sylius.order_processing.shipping_processor'));
    }
    protected function getSylius_Listener_OrderTaxationService()
    {
        return $this->services['sylius.listener.order_taxation'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderTaxationListener($this->get('sylius.order_processing.taxation_processor'));
    }
    protected function getSylius_OrderProcessing_InventoryUnitsFactoryService()
    {
        return $this->services['sylius.order_processing.inventory_units_factory'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\InventoryUnitsFactory($this->get('sylius.inventory_operator.default'));
    }
    protected function getSylius_OrderProcessing_ShipmentFactoryService()
    {
        return $this->services['sylius.order_processing.shipment_factory'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShipmentFactory($this->get('sylius.repository.shipment'));
    }
    protected function getSylius_OrderProcessing_ShippingProcessorService()
    {
        return $this->services['sylius.order_processing.shipping_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShippingChargesProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.shipping_calculator'));
    }
    protected function getSylius_OrderProcessing_TaxationProcessorService()
    {
        return $this->services['sylius.order_processing.taxation_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.tax_calculator'), $this->get('sylius.tax_rate_resolver'), $this->get('sylius.zone_matcher'), $this->get('sylius.settings.manager')->loadSettings('taxation'));
    }
    protected function getSylius_Process_BuilderService()
    {
        $this->services['sylius.process.builder'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilder($this);
        $instance->registerStep('sylius_checkout_security', $this->get('sylius.checkout_step.security'));
        $instance->registerStep('sylius_checkout_addressing', $this->get('sylius.checkout_step.addressing'));
        $instance->registerStep('sylius_checkout_shipping', $this->get('sylius.checkout_step.shipping'));
        $instance->registerStep('sylius_checkout_payment', $this->get('sylius.checkout_step.payment'));
        $instance->registerStep('sylius_checkout_finalize', $this->get('sylius.checkout_step.finalize'));
        return $instance;
    }
    protected function getSylius_Process_ContextService()
    {
        return $this->services['sylius.process.context'] = new \Sylius\Bundle\FlowBundle\Process\Context\ProcessContext($this->get('sylius.process_storage.session'));
    }
    protected function getSylius_Process_CoordinatorService()
    {
        $this->services['sylius.process.coordinator'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Coordinator\Coordinator($this->get('router'), $this->get('sylius.process.builder'), $this->get('sylius.process.context'));
        $instance->registerScenario('sylius_checkout', $this->get('sylius.checkout_scenario'));
        $instance->registerScenario('sylius_installer', $this->get('sylius.installer.scenario'));
        return $instance;
    }
    protected function getSylius_ProcessStorage_SessionService()
    {
        return $this->services['sylius.process_storage.session'] = new \Sylius\Bundle\FlowBundle\Storage\SessionStorage($this->get('session'));
    }
    protected function getSylius_ProcessStorage_Session_BagService()
    {
        return $this->services['sylius.process_storage.session.bag'] = new \Sylius\Bundle\FlowBundle\Storage\SessionFlowsBag();
    }
    protected function getSylius_ProductBuilderService()
    {
        return $this->services['sylius.product_builder'] = new \Sylius\Bundle\AssortmentBundle\Builder\ProductBuilder($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.product'), $this->get('sylius.repository.property'), $this->get('sylius.repository.product_property'), $this->get('sylius.repository.option'), $this->get('sylius.repository.option_value'));
    }
    protected function getSylius_PromotionAction_FixedDiscountService()
    {
        return $this->services['sylius.promotion_action.fixed_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\FixedDiscountAction($this->get('sylius.repository.adjustment'));
    }
    protected function getSylius_PromotionAction_PercentageDiscountService()
    {
        return $this->services['sylius.promotion_action.percentage_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\PercentageDiscountAction($this->get('sylius.repository.adjustment'));
    }
    protected function getSylius_PromotionApplicatorService()
    {
        return $this->services['sylius.promotion_applicator'] = new \Sylius\Bundle\PromotionsBundle\Action\PromotionApplicator($this->get('sylius.registry.promotion_action'));
    }
    protected function getSylius_PromotionEligibilityCheckerService()
    {
        return $this->services['sylius.promotion_eligibility_checker'] = new \Sylius\Bundle\PromotionsBundle\Checker\PromotionEligibilityChecker($this->get('sylius.registry.promotion_rule_checker'));
    }
    protected function getSylius_PromotionProcessorService()
    {
        return $this->services['sylius.promotion_processor'] = new \Sylius\Bundle\PromotionsBundle\Processor\PromotionProcessor($this->get('sylius.repository.promotion'), $this->get('sylius.promotion_eligibility_checker'), $this->get('sylius.promotion_applicator'));
    }
    protected function getSylius_PromotionRuleChecker_ItemCountService()
    {
        return $this->services['sylius.promotion_rule_checker.item_count'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemCountRuleChecker();
    }
    protected function getSylius_PromotionRuleChecker_ItemTotalService()
    {
        return $this->services['sylius.promotion_rule_checker.item_total'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemTotalRuleChecker();
    }
    protected function getSylius_PrototypeBuilderService()
    {
        return $this->services['sylius.prototype_builder'] = new \Sylius\Bundle\AssortmentBundle\Builder\PrototypeBuilder($this->get('sylius.repository.product_property'));
    }
    protected function getSylius_Registry_PromotionActionService()
    {
        $this->services['sylius.registry.promotion_action'] = $instance = new \Sylius\Bundle\PromotionsBundle\Action\Registry\PromotionActionRegistry();
        $instance->registerAction('fixed_discount', $this->get('sylius.promotion_action.fixed_discount'));
        $instance->registerAction('percentage_discount', $this->get('sylius.promotion_action.percentage_discount'));
        return $instance;
    }
    protected function getSylius_Registry_PromotionRuleCheckerService()
    {
        $this->services['sylius.registry.promotion_rule_checker'] = $instance = new \Sylius\Bundle\PromotionsBundle\Checker\Registry\RuleCheckerRegistry();
        $instance->registerChecker('item_total', $this->get('sylius.promotion_rule_checker.item_total'));
        $instance->registerChecker('item_count', $this->get('sylius.promotion_rule_checker.item_count'));
        return $instance;
    }
    protected function getSylius_Repository_AddressService()
    {
        return $this->services['sylius.repository.address'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\PigalleBundle\\Entity\\Address'));
    }
    protected function getSylius_Repository_AdjustmentService()
    {
        return $this->services['sylius.repository.adjustment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\SalesBundle\\Entity\\DefaultAdjustment'));
    }
    protected function getSylius_Repository_CartService()
    {
        return $this->services['sylius.repository.cart'] = new \Sylius\Bundle\CartBundle\Entity\CartRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Cart'));
    }
    protected function getSylius_Repository_CartItemService()
    {
        return $this->services['sylius.repository.cart_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\CartItem'));
    }
    protected function getSylius_Repository_CountryService()
    {
        return $this->services['sylius.repository.country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\Country'));
    }
    protected function getSylius_Repository_CreditCardService()
    {
        return $this->services['sylius.repository.credit_card'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Entity\\CreditCard'));
    }
    protected function getSylius_Repository_ExchangeRateService()
    {
        return $this->services['sylius.repository.exchange_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\MoneyBundle\\Entity\\ExchangeRate'));
    }
    protected function getSylius_Repository_InventoryUnitService()
    {
        return $this->services['sylius.repository.inventory_unit'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit'));
    }
    protected function getSylius_Repository_LocalService()
    {
        return $this->services['sylius.repository.local'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\PigalleBundle\\Entity\\Local'));
    }
    protected function getSylius_Repository_OptionService()
    {
        return $this->services['sylius.repository.option'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOption'));
    }
    protected function getSylius_Repository_OptionValueService()
    {
        return $this->services['sylius.repository.option_value'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOptionValue'));
    }
    protected function getSylius_Repository_OrderService()
    {
        return $this->services['sylius.repository.order'] = new \Sylius\Bundle\CoreBundle\Repository\OrderRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Order'));
    }
    protected function getSylius_Repository_OrderItemService()
    {
        return $this->services['sylius.repository.order_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\SalesBundle\\Entity\\DefaultOrderItem'));
    }
    protected function getSylius_Repository_ParameterService()
    {
        return $this->services['sylius.repository.parameter'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\SettingsBundle\\Entity\\DefaultParameter'));
    }
    protected function getSylius_Repository_PaymentService()
    {
        return $this->services['sylius.repository.payment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Entity\\Payment'));
    }
    protected function getSylius_Repository_PaymentMethodService()
    {
        return $this->services['sylius.repository.payment_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Entity\\PaymentMethod'));
    }
    protected function getSylius_Repository_PigalleSlideService()
    {
        return $this->services['sylius.repository.pigalle_slide'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\PigalleBundle\\Entity\\PigalleSlide'));
    }
    protected function getSylius_Repository_ProductService()
    {
        return $this->services['sylius.repository.product'] = new \Sylius\Bundle\CoreBundle\Repository\ProductRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Product'));
    }
    protected function getSylius_Repository_ProductCollectionService()
    {
        return $this->services['sylius.repository.product_collection'] = new \Gecko\PigalleBundle\Repository\ProductCollectionRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\PigalleBundle\\Entity\\ProductCollection'));
    }
    protected function getSylius_Repository_ProductCollectionImageService()
    {
        return $this->services['sylius.repository.product_collection_image'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Gecko\\PigalleBundle\\Entity\\ProductCollectionImage'));
    }
    protected function getSylius_Repository_ProductPropertyService()
    {
        return $this->services['sylius.repository.product_property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProductProperty'));
    }
    protected function getSylius_Repository_PromotionService()
    {
        return $this->services['sylius.repository.promotion'] = new \Sylius\Bundle\PromotionsBundle\Repository\PromotionRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Entity\\Promotion'));
    }
    protected function getSylius_Repository_PromotionActionService()
    {
        return $this->services['sylius.repository.promotion_action'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Entity\\Action'));
    }
    protected function getSylius_Repository_PromotionCouponService()
    {
        return $this->services['sylius.repository.promotion_coupon'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Entity\\Coupon'));
    }
    protected function getSylius_Repository_PromotionRuleService()
    {
        return $this->services['sylius.repository.promotion_rule'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Entity\\Rule'));
    }
    protected function getSylius_Repository_PropertyService()
    {
        return $this->services['sylius.repository.property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProperty'));
    }
    protected function getSylius_Repository_PrototypeService()
    {
        return $this->services['sylius.repository.prototype'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AssortmentBundle\\Entity\\Prototype\\DefaultPrototype'));
    }
    protected function getSylius_Repository_ProvinceService()
    {
        return $this->services['sylius.repository.province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\Province'));
    }
    protected function getSylius_Repository_ShipmentService()
    {
        return $this->services['sylius.repository.shipment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Shipment'));
    }
    protected function getSylius_Repository_ShipmentItemService()
    {
        return $this->services['sylius.repository.shipment_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit'));
    }
    protected function getSylius_Repository_ShippingCategoryService()
    {
        return $this->services['sylius.repository.shipping_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ShippingBundle\\Entity\\DefaultShippingCategory'));
    }
    protected function getSylius_Repository_ShippingMethodService()
    {
        return $this->services['sylius.repository.shipping_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\ShippingMethod'));
    }
    protected function getSylius_Repository_StockableService()
    {
        return $this->services['sylius.repository.stockable'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Variant'));
    }
    protected function getSylius_Repository_TaxCategoryService()
    {
        return $this->services['sylius.repository.tax_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\TaxationBundle\\Entity\\DefaultTaxCategory'));
    }
    protected function getSylius_Repository_TaxRateService()
    {
        return $this->services['sylius.repository.tax_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\TaxRate'));
    }
    protected function getSylius_Repository_TaxonService()
    {
        return $this->services['sylius.repository.taxon'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Taxon'));
    }
    protected function getSylius_Repository_TaxonomyService()
    {
        return $this->services['sylius.repository.taxonomy'] = new \Sylius\Bundle\TaxonomiesBundle\Entity\TaxonomyRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Taxonomy'));
    }
    protected function getSylius_Repository_TransactionService()
    {
        return $this->services['sylius.repository.transaction'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Entity\\Transaction'));
    }
    protected function getSylius_Repository_UserService()
    {
        return $this->services['sylius.repository.user'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\User'));
    }
    protected function getSylius_Repository_VariantService()
    {
        return $this->services['sylius.repository.variant'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Entity\\Variant'));
    }
    protected function getSylius_Repository_ZoneService()
    {
        return $this->services['sylius.repository.zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\Zone'));
    }
    protected function getSylius_Repository_ZoneMemberService()
    {
        return $this->services['sylius.repository.zone_member'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMember'));
    }
    protected function getSylius_Repository_ZoneMemberCountryService()
    {
        return $this->services['sylius.repository.zone_member_country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberCountry'));
    }
    protected function getSylius_Repository_ZoneMemberProvinceService()
    {
        return $this->services['sylius.repository.zone_member_province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberProvince'));
    }
    protected function getSylius_Repository_ZoneMemberZoneService()
    {
        return $this->services['sylius.repository.zone_member_zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberZone'));
    }
    protected function getSylius_RequirementsService()
    {
        $a = $this->get('translator.default');
        return $this->services['sylius.requirements'] = new \Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements(array(0 => new \Sylius\Bundle\InstallerBundle\Requirement\SettingsRequirements($a), 1 => new \Sylius\Bundle\InstallerBundle\Requirement\ExtensionsRequirements($a), 2 => new \Sylius\Bundle\InstallerBundle\Requirement\FilesystemRequirements($a, 'D:/www/projects/pigalle/app')));
    }
    protected function getSylius_Settings_FormFactoryService()
    {
        return $this->services['sylius.settings.form_factory'] = new \Sylius\Bundle\SettingsBundle\Form\Factory\SettingsFormFactory($this->get('sylius.settings.schema_registry'), $this->get('form.factory'));
    }
    protected function getSylius_Settings_ManagerService()
    {
        return $this->services['sylius.settings.manager'] = new \Sylius\Bundle\SettingsBundle\Manager\SettingsManager($this->get('sylius.settings.schema_registry'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.parameter'), $this->get('liip_doctrine_cache.ns.sylius_settings'));
    }
    protected function getSylius_Settings_SchemaRegistryService()
    {
        $this->services['sylius.settings.schema_registry'] = $instance = new \Sylius\Bundle\SettingsBundle\Schema\SchemaRegistry();
        $instance->registerSchema('general', $this->get('sylius.settings_schema.general'));
        $instance->registerSchema('taxation', $this->get('sylius.settings_schema.taxation'));
        return $instance;
    }
    protected function getSylius_Settings_TwigService()
    {
        return $this->services['sylius.settings.twig'] = new \Sylius\Bundle\SettingsBundle\Twig\SyliusSettingsExtension($this->get('sylius.settings.manager'));
    }
    protected function getSylius_SettingsSchema_GeneralService()
    {
        return $this->services['sylius.settings_schema.general'] = new \Sylius\Bundle\CoreBundle\Settings\GeneralSettingsSchema();
    }
    protected function getSylius_SettingsSchema_TaxationService()
    {
        return $this->services['sylius.settings_schema.taxation'] = new \Sylius\Bundle\CoreBundle\Settings\TaxationSettingsSchema($this->get('sylius.repository.zone'));
    }
    protected function getSylius_ShippingCalculatorService()
    {
        return $this->services['sylius.shipping_calculator'] = new \Sylius\Bundle\ShippingBundle\Calculator\DelegatingCalculator($this->get('sylius.shipping_calculator_registry'));
    }
    protected function getSylius_ShippingCalculator_FlexibleRateService()
    {
        return $this->services['sylius.shipping_calculator.flexible_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlexibleRateCalculator();
    }
    protected function getSylius_ShippingCalculator_OcaService()
    {
        return $this->services['sylius.shipping_calculator.oca'] = new \Sylius\Bundle\CoreBundle\Shipping\OcaCalculator();
    }
    protected function getSylius_ShippingCalculator_PerItemRateService()
    {
        return $this->services['sylius.shipping_calculator.per_item_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\PerItemRateCalculator();
    }
    protected function getSylius_ShippingCalculatorRegistryService()
    {
        $this->services['sylius.shipping_calculator_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Calculator\Registry\CalculatorRegistry();
        $instance->registerCalculator('oca', $this->get('sylius.shipping_calculator.oca'));
        $instance->registerCalculator('flat_rate', $this->get('sylius.shipping_shipping_calculator.flat_rate'));
        $instance->registerCalculator('per_item_rate', $this->get('sylius.shipping_calculator.per_item_rate'));
        $instance->registerCalculator('flexible_rate', $this->get('sylius.shipping_calculator.flexible_rate'));
        return $instance;
    }
    protected function getSylius_ShippingEigibilityCheckerService()
    {
        return $this->services['sylius.shipping_eigibility_checker'] = new \Sylius\Bundle\ShippingBundle\Checker\ShippingMethodEliglibilityChecker($this->get('sylius.shipping_rule_checker_registry'));
    }
    protected function getSylius_ShippingMethodsResolverService()
    {
        return $this->services['sylius.shipping_methods_resolver'] = new \Sylius\Bundle\ShippingBundle\Resolver\MethodsResolver($this->get('sylius.repository.shipping_method'));
    }
    protected function getSylius_ShippingRuleChecker_ItemCountService()
    {
        return $this->services['sylius.shipping_rule_checker.item_count'] = new \Sylius\Bundle\ShippingBundle\Checker\ItemCountRuleChecker();
    }
    protected function getSylius_ShippingRuleCheckerRegistryService()
    {
        $this->services['sylius.shipping_rule_checker_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Checker\Registry\RuleCheckerRegistry();
        $instance->registerChecker('item_count', $this->get('sylius.shipping_rule_checker.item_count'));
        return $instance;
    }
    protected function getSylius_ShippingShippingCalculator_FlatRateService()
    {
        return $this->services['sylius.shipping_shipping_calculator.flat_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlatRateCalculator();
    }
    protected function getSylius_TaxCalculatorService()
    {
        $this->services['sylius.tax_calculator'] = $instance = new \Sylius\Bundle\TaxationBundle\Calculator\DelegatingCalculator();
        $instance->registerCalculator('default', $this->get('sylius.tax_calculator.default'));
        return $instance;
    }
    protected function getSylius_TaxCalculator_DefaultService()
    {
        return $this->services['sylius.tax_calculator.default'] = new \Sylius\Bundle\TaxationBundle\Calculator\DefaultCalculator();
    }
    protected function getSylius_TaxRateResolverService()
    {
        return $this->services['sylius.tax_rate_resolver'] = new \Sylius\Bundle\TaxationBundle\Resolver\TaxRateResolver($this->get('sylius.repository.tax_rate'));
    }
    protected function getSylius_Twig_MoneyService()
    {
        return $this->services['sylius.twig.money'] = new \Sylius\Bundle\MoneyBundle\Twig\SyliusMoneyExtension($this->get('sylius.currency_context'), $this->get('sylius.currency_converter'), 'es');
    }
    protected function getSylius_Validator_Product_UniqueService()
    {
        return $this->services['sylius.validator.product.unique'] = new \Sylius\Bundle\AssortmentBundle\Validator\ProductUniqueValidator($this->get('sylius.repository.product'));
    }
    protected function getSylius_Validator_Variant_CombinationService()
    {
        return $this->services['sylius.validator.variant.combination'] = new \Sylius\Bundle\AssortmentBundle\Validator\VariantCombinationValidator();
    }
    protected function getSylius_Validator_Variant_UniqueService()
    {
        return $this->services['sylius.validator.variant.unique'] = new \Sylius\Bundle\AssortmentBundle\Validator\VariantUniqueValidator($this->get('sylius.repository.variant'));
    }
    protected function getSylius_VariantGeneratorService()
    {
        return $this->services['sylius.variant_generator'] = new \Sylius\Bundle\AssortmentBundle\Generator\VariantGenerator($this->get('validator'), $this->get('sylius.repository.variant'));
    }
    protected function getSylius_ZoneMatcherService()
    {
        return $this->services['sylius.zone_matcher'] = new \Sylius\Bundle\AddressingBundle\Matcher\ZoneMatcher($this->get('sylius.repository.zone'));
    }
    protected function getSyliusBackend_Controller_DashboardService()
    {
        $this->services['sylius_backend.controller.dashboard'] = $instance = new \Gecko\SyliusBackendBundle\Controller\DashboardController();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getSyliusBackend_Menu_DashboardService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius_backend.menu.dashboard', 'request');
        }
        return $this->services['sylius_backend.menu.dashboard'] = $this->scopedServices['request']['sylius_backend.menu.dashboard'] = $this->get('sylius_backend.menu_builder')->createDashboardMenu($this->get('request'));
    }
    protected function getSyliusBackend_Menu_MainService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius_backend.menu.main', 'request');
        }
        return $this->services['sylius_backend.menu.main'] = $this->scopedServices['request']['sylius_backend.menu.main'] = $this->get('sylius_backend.menu_builder')->createMainMenu($this->get('request'));
    }
    protected function getSyliusBackend_Menu_MainAccountService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius_backend.menu.main_account', 'request');
        }
        return $this->services['sylius_backend.menu.main_account'] = $this->scopedServices['request']['sylius_backend.menu.main_account'] = $this->get('sylius_backend.menu_builder')->createMainMenuAccount($this->get('request'));
    }
    protected function getSyliusBackend_MenuBuilderService()
    {
        return $this->services['sylius_backend.menu_builder'] = new \Gecko\SyliusBackendBundle\Menu\MenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'));
    }
    protected function getSyliusResource_TwigService()
    {
        return $this->services['sylius_resource.twig'] = new \Sylius\Bundle\ResourceBundle\Twig\SyliusResourceExtension($this->get('router'));
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, 'D:/www/projects/pigalle/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'imagine' => 'liip_imagine.templating.helper', 'jms_serializer' => 'jms_serializer.templating.helper.serializer'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider')));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => 'D:/www/projects/pigalle/app/cache/prod/translations', 'debug' => false));
        $instance->setFallbackLocale('es');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../../Resources/translations\\security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.nl.xlf', 'nl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr_Cyrl.xlf', 'sr_Cyrl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/translations\\flashes.sr_Latn.xlf', 'sr_Latn', 'flashes');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.de.xliff', 'de', 'messages');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.en.xliff', 'en', 'messages');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\messages.es.xliff', 'es', 'messages');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.de.xliff', 'de', 'requirements');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.en.xliff', 'en', 'requirements');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/translations\\requirements.es.xliff', 'es', 'requirements');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/translations\\flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.nl.xlf', 'nl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fa_IR.yml', 'fa_IR', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\sales-bundle\\Sylius\\Bundle\\SalesBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\sylius\\flow-bundle\\Sylius\\Bundle\\FlowBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ar.xliff', 'ar', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ca.xliff', 'ca', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.da.xliff', 'da', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.de.xliff', 'de', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.en.xliff', 'en', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.es.xliff', 'es', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.fr.xliff', 'fr', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.it.xliff', 'it', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.nl.xliff', 'nl', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.pl.xliff', 'pl', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.pt.xliff', 'pt', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.ru.xliff', 'ru', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.sr_Cyrl.xliff', 'sr_Cyrl', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.sr_Latn.xliff', 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', 'D:\\www\\projects\\pigalle\\vendor\\white-october\\pagerfanta-bundle\\WhiteOctober\\PagerfantaBundle/Resources/translations\\pagerfanta.zh_CN.xliff', 'zh_CN', 'pagerfanta');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\src\\Gecko\\SyliusBackendBundle/Resources/translations\\menu.es.yml', 'es', 'menu');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\src\\Gecko\\SyliusBackendBundle/Resources/translations\\messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', 'D:\\www\\projects\\pigalle\\src\\Gecko\\UserBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'cache' => 'D:/www/projects/pigalle/app/cache/prod/twig', 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension($this->get('sylius_resource.twig'));
        $instance->addExtension($this->get('sylius.twig.money'));
        $instance->addExtension($this->get('sylius.settings.twig'));
        $instance->addExtension($this->get('sylius.cart_twig'));
        $instance->addExtension($this->get('sylius.inventory_twig'));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'PigalleBundle', 1 => 'SyliusBackendBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, 'D:/www/projects/pigalle/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'SyliusBackendBundle::forms.html.twig', 2 => 'LiipImagineBundle:Form:form_div_layout.html.twig')), $this->get('form.csrf_provider'))));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addExtension(new \RaulFraile\Bundle\LadybugBundle\Twig\Extension\LadybugExtension($this));
        $instance->addExtension($this->get('pigalle.twig.price_extension'));
        $instance->addExtension($this->get('pigalle.twig.ceil_extension'));
        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addGlobal('app', $this->get('templating.globals'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request'));
    }
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\resource-bundle\\Sylius\\Bundle\\ResourceBundle/Resources/views', 'SyliusResource');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\installer-bundle\\Sylius\\Bundle\\InstallerBundle/Resources/views', 'SyliusInstaller');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle/Resources/views', 'SyliusSettings');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle/Resources/views', 'SyliusAssortment');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle/Resources/views', 'SyliusTaxation');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle/Resources/views', 'SyliusAddressing');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle/Resources/views', 'SyliusTaxonomies');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\doctrine\\doctrine-bundle\\Doctrine\\Bundle\\DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views', 'Security');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\symfony\\swiftmailer-bundle\\Symfony\\Bundle\\SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views', 'Twig');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\liip\\imagine-bundle\\Liip\\ImagineBundle/Resources/views', 'LiipImagine');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle/Resources/views', 'JMSTranslation');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\raulfraile\\ladybug-bundle\\RaulFraile\\Bundle\\LadybugBundle/Resources/views', 'RaulFraileLadybug');
        $instance->addPath('D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle/Resources/views', 'Pigalle');
        $instance->addPath('D:\\www\\projects\\pigalle\\src\\Gecko\\SyliusBackendBundle/Resources/views', 'SyliusBackend');
        $instance->addPath('D:\\www\\projects\\pigalle\\src\\Gecko\\UserBundle/Resources/views', 'GeckoUser');
        $instance->addPath('D:\\www\\projects\\pigalle\\src\\Gecko\\NewsletterBundle/Resources/views', 'GeckoNewsletter');
        $instance->addPath('D:\\www\\projects\\pigalle\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('d73a220a76ed13d358389b3f7658ecc7');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('sylius.validator.product.unique' => 'sylius.validator.product.unique', 'sylius.validator.variant.unique' => 'sylius.validator.variant.unique', 'sylius.validator.variant.combination' => 'sylius.validator.variant.combination', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'security.validator.user_password' => 'security.validator.user_password')), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator.default');
        $b = new \Pagerfanta\View\DefaultView();
        $c = new \Pagerfanta\View\TwitterBootstrapView();
        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());
        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));
        return $instance;
    }
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getFosRest_RouterService()
    {
        return $this->get('router');
    }
    protected function getFosRest_SerializerService()
    {
        return $this->get('jms_serializer');
    }
    protected function getFosRest_TemplatingService()
    {
        return $this->get('templating');
    }
    protected function getFosUser_ChangePassword_Form_HandlerService()
    {
        return $this->get('fos_user.change_password.form.handler.default');
    }
    protected function getFosUser_Util_UsernameCanonicalizerService()
    {
        return $this->get('fos_user.util.email_canonicalizer');
    }
    protected function getGeckoNewsletter_Manager_NewsletterService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getGeckoNewsletter_Manager_SubscriberService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getGeckoNewsletter_Manager_SubscriberListService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getLadybugService()
    {
        return $this->get('data_collector.ladybug_data_collector');
    }
    protected function getMailerService()
    {
        return $this->get('swiftmailer.mailer.default');
    }
    protected function getSerializerService()
    {
        return $this->get('jms_serializer');
    }
    protected function getSession_StorageService()
    {
        return $this->get('session.storage.native');
    }
    protected function getSwiftmailer_MailerService()
    {
        return $this->get('swiftmailer.mailer.default');
    }
    protected function getSwiftmailer_SpoolService()
    {
        return $this->get('swiftmailer.mailer.default.spool');
    }
    protected function getSwiftmailer_TransportService()
    {
        return $this->get('swiftmailer.mailer.default.transport');
    }
    protected function getSwiftmailer_Transport_RealService()
    {
        return $this->get('swiftmailer.mailer.default.transport.real');
    }
    protected function getSylius_AvailabilityCheckerService()
    {
        return $this->get('sylius.availability_checker.default');
    }
    protected function getSylius_CartProviderService()
    {
        return $this->get('sylius.cart_provider.default');
    }
    protected function getSylius_CartResolverService()
    {
        return $this->get('sylius.cart_item_resolver.default');
    }
    protected function getSylius_CartStorageService()
    {
        return $this->get('sylius.cart_storage.session');
    }
    protected function getSylius_InventoryOperatorService()
    {
        return $this->get('sylius.inventory_operator.default');
    }
    protected function getSylius_Manager_AddressService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_AdjustmentService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_CartService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_CartItemService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_CountryService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_CreditCardService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ExchangeRateService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_InventoryUnitService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_LocalService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_OptionService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_OptionValueService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_OrderService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_OrderItemService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ParameterService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PaymentService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PaymentMethodService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PigalleSlideService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ProductService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ProductCollectionService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ProductCollectionImageService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ProductPropertyService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PromotionService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PromotionActionService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PromotionCouponService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PromotionRuleService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PropertyService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_PrototypeService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ProvinceService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ShipmentService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ShipmentItemService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ShippingCategoryService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ShippingMethodService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_StockableService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_TaxCategoryService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_TaxRateService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_TaxonService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_TaxonomyService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_TransactionService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_UserService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_VariantService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ZoneService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ZoneMemberService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ZoneMemberCountryService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ZoneMemberProvinceService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_Manager_ZoneMemberZoneService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSylius_ProcessStorageService()
    {
        return $this->get('sylius.process_storage.session');
    }
    protected function getSylius_Settings_CacheService()
    {
        return $this->get('liip_doctrine_cache.ns.sylius_settings');
    }
    protected function getTranslatorService()
    {
        return $this->get('translator.default');
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), 'D:/www/projects/pigalle/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'), $this->get('monolog.logger.security'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/registro'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mayorista/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mayorista/login_check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mayorista/registro/completo$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add($this->get('security.request_matcher.16f6f2ddc1022283e3329a3e1f3180100aae671ce40e0c73fc8487534abfb8e009a5e88b'), array(0 => 'ROLE_USER_MAYORISTA', 1 => 'ROLE_SYLIUS_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/admin.*'), array(0 => 'ROLE_SYLIUS_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/cuenta.*'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/_partial.*', NULL, array(), '127.0.0.1'), array(), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_manager');
        $b = $this->get('security.user_checker');
        $c = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'mayorista', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('537b6cc9bf745'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($b, 'd73a220a76ed13d358389b3f7658ecc7', 'main'), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('537b6cc9bf745')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security'));
    }
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_manager')), 'pigalle_context', $this->get('monolog.logger.security'), $this->get('event_dispatcher'));
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router');
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_RequestMatcher_16f6f2ddc1022283e3329a3e1f3180100aae671ce40e0c73fc8487534abfb8e009a5e88bService()
    {
        return $this->services['security.request_matcher.16f6f2ddc1022283e3329a3e1f3180100aae671ce40e0c73fc8487534abfb8e009a5e88b'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/mayorista/.*');
    }
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), 'D:/www/projects/pigalle/app/cache/prod');
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml', 1 => 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\validation.xml', 2 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\validation.xml', 3 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\validation.xml', 4 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\validation.xml', 5 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle\\Resources\\config\\validation.xml', 6 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\validation.xml', 7 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\validation.xml', 8 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\validation.xml', 9 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\validation.xml', 10 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\validation.xml', 11 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\sales-bundle\\Sylius\\Bundle\\SalesBundle\\Resources\\config\\validation.xml', 12 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\validation.xml', 13 => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml', 14 => 'D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle\\Resources\\config\\validation.xml', 15 => 'D:\\www\\projects\\pigalle\\src\\Gecko\\NewsletterBundle\\Resources\\config\\validation.xml', 16 => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => 'D:/www/projects/pigalle/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => 'D:/www/projects/pigalle/app/cache/prod',
            'kernel.logs_dir' => 'D:/www/projects/pigalle/app/logs',
            'kernel.bundles' => array(
                'SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\SyliusCoreBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'SyliusInstallerBundle' => 'Sylius\\Bundle\\InstallerBundle\\SyliusInstallerBundle',
                'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\SyliusMoneyBundle',
                'SyliusSettingsBundle' => 'Sylius\\Bundle\\SettingsBundle\\SyliusSettingsBundle',
                'SyliusCartBundle' => 'Sylius\\Bundle\\CartBundle\\SyliusCartBundle',
                'SyliusAssortmentBundle' => 'Sylius\\Bundle\\AssortmentBundle\\SyliusAssortmentBundle',
                'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\SyliusTaxationBundle',
                'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\SyliusShippingBundle',
                'SyliusPaymentsBundle' => 'Sylius\\Bundle\\PaymentsBundle\\SyliusPaymentsBundle',
                'SyliusPromotionsBundle' => 'Sylius\\Bundle\\PromotionsBundle\\SyliusPromotionsBundle',
                'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\SyliusAddressingBundle',
                'SyliusSalesBundle' => 'Sylius\\Bundle\\SalesBundle\\SyliusSalesBundle',
                'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\SyliusInventoryBundle',
                'SyliusTaxonomiesBundle' => 'Sylius\\Bundle\\TaxonomiesBundle\\SyliusTaxonomiesBundle',
                'SyliusFlowBundle' => 'Sylius\\Bundle\\FlowBundle\\SyliusFlowBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'LiipDoctrineCacheBundle' => 'Liip\\DoctrineCacheBundle\\LiipDoctrineCacheBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'RaulFraileLadybugBundle' => 'RaulFraile\\Bundle\\LadybugBundle\\RaulFraileLadybugBundle',
                'PigalleBundle' => 'Gecko\\PigalleBundle\\PigalleBundle',
                'SyliusBackendBundle' => 'Gecko\\SyliusBackendBundle\\SyliusBackendBundle',
                'GeckoUserBundle' => 'Gecko\\UserBundle\\GeckoUserBundle',
                'GeckoNewsletterBundle' => 'Gecko\\NewsletterBundle\\GeckoNewsletterBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'sylius.database.driver' => 'pdo_mysql',
            'sylius.database.host' => '127.0.0.1',
            'sylius.database.port' => NULL,
            'sylius.database.name' => 'pigalle',
            'sylius.database.user' => 'root',
            'sylius.database.password' => 123456,
            'sylius.mailer.transport' => 'smtp',
            'sylius.mailer.host' => '127.0.0.1',
            'sylius.mailer.user' => NULL,
            'sylius.mailer.password' => NULL,
            'sylius.locale' => 'es',
            'sylius.secret' => 'd73a220a76ed13d358389b3f7658ecc7',
            'sylius.currency' => 'ARS',
            'sylius.cache' => 'file_system',
            'sylius.model.variant_image.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\VariantImage',
            'sylius_core.driver' => 'doctrine/orm',
            'sylius.settings_schema.general.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\GeneralSettingsSchema',
            'sylius.settings_schema.taxation.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\TaxationSettingsSchema',
            'sylius.cart_item_resolver.default.class' => 'Sylius\\Bundle\\CoreBundle\\Cart\\ItemResolver',
            'sylius.checkout_scenario.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutProcessScenario',
            'sylius.checkout_step.security.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\SecurityStep',
            'sylius.checkout_step.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\AddressingStep',
            'sylius.checkout_step.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\ShippingStep',
            'sylius.checkout_step.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\PaymentStep',
            'sylius.checkout_step.finalize.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\FinalizeStep',
            'sylius.order_processing.inventory_units_factory.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\InventoryUnitsFactory',
            'sylius.order_processing.shipment_factory.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShipmentFactory',
            'sylius.order_processing.taxation_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\TaxationProcessor',
            'sylius.order_processing.shipping_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShippingChargesProcessor',
            'sylius.listener.order_taxation.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderTaxationListener',
            'sylius.listener.order_shipping.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderShippingListener',
            'sylius.listener.order_promotion.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderPromotionListener',
            'sylius.checkout_form.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressingStepType',
            'sylius.checkout_form.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShippingStepType',
            'sylius.checkout_form.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\PaymentStepType',
            'sylius.form.type.image.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ImageType',
            'sylius.form.type.product_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\ProductFilterType',
            'sylius.form.type.order_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\OrderFilterType',
            'sylius.listener.image_upload.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\ImageUploadListener',
            'sylius.image_uploader.class' => 'Sylius\\Bundle\\CoreBundle\\Uploader\\ImageUploader',
            'sylius.promotion_action.fixed_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\FixedDiscountAction',
            'sylius.promotion_action.percentage_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\PercentageDiscountAction',
            'sylius.shipping_calculator.oca.class' => 'Sylius\\Bundle\\CoreBundle\\Shipping\\OcaCalculator',
            'sylius_resource.twig.class' => 'Sylius\\Bundle\\ResourceBundle\\Twig\\SyliusResourceExtension',
            'sylius.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\User',
            'sylius.installer.scenario.class' => 'Sylius\\Bundle\\InstallerBundle\\Process\\InstallerScenario',
            'sylius.requirements.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SyliusRequirements',
            'sylius.requirements.settings.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SettingsRequirements',
            'sylius.requirements.extensions.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\ExtensionsRequirements',
            'sylius.requirements.filesystem.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\FilesystemRequirements',
            'sylius.form.type.configuration.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\ConfigurationType',
            'sylius.form.type.configuration.database.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\DatabaseType',
            'sylius.form.type.configuration.mailer.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\MailerType',
            'sylius.form.type.configuration.locale.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\LocaleType',
            'sylius.form.type.configuration.hidden.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\HiddenType',
            'sylius.form.type.setup.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\SetupType',
            'sylius.installer.yaml_persister.class' => 'Sylius\\Bundle\\InstallerBundle\\Persister\\YamlPersister',
            'sylius.model.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Entity\\ExchangeRate',
            'sylius.repository.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.driver' => 'doctrine/orm',
            'sylius.engine' => 'twig',
            'sylius.money.locale' => 'es',
            'sylius.money.currency' => 'ARS',
            'sylius.controller.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType',
            'sylius.controller.currency.class' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController',
            'sylius.twig.money.class' => 'Sylius\\Bundle\\MoneyBundle\\Twig\\SyliusMoneyExtension',
            'sylius.form.type.money.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\MoneyType',
            'sylius.currency_context.class' => 'Sylius\\Bundle\\MoneyBundle\\Context\\CurrencyContext',
            'sylius.currency_converter.class' => 'Sylius\\Bundle\\MoneyBundle\\Converter\\CurrencyConverter',
            'sylius.model.parameter.class' => 'Sylius\\Bundle\\SettingsBundle\\Entity\\DefaultParameter',
            'sylius.repository.parameter.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_settings.driver' => 'doctrine/orm',
            'sylius.controller.settings.class' => 'Sylius\\Bundle\\SettingsBundle\\Controller\\SettingsController',
            'sylius.settings.form_factory.class' => 'Sylius\\Bundle\\SettingsBundle\\Form\\Factory\\SettingsFormFactory',
            'sylius.settings.manager.class' => 'Sylius\\Bundle\\SettingsBundle\\Manager\\SettingsManager',
            'sylius.settings.schema_registry.class' => 'Sylius\\Bundle\\SettingsBundle\\Schema\\SchemaRegistry',
            'sylius.settings.twig.class' => 'Sylius\\Bundle\\SettingsBundle\\Twig\\SyliusSettingsExtension',
            'sylius_cart.driver' => 'doctrine/orm',
            'sylius.model.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Cart',
            'sylius.repository.cart.class' => 'Sylius\\Bundle\\CartBundle\\Entity\\CartRepository',
            'sylius.repository.cart_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.cart_twig.class' => 'Sylius\\Bundle\\CartBundle\\Twig\\SyliusCartExtension',
            'sylius.controller.cart.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController',
            'sylius.form.type.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType',
            'sylius.model.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\CartItem',
            'sylius.controller.cart_item.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController',
            'sylius.form.type.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType',
            'sylius.cart_provider.default.class' => 'Sylius\\Bundle\\CartBundle\\Provider\\CartProvider',
            'sylius.cart_storage.session.class' => 'Sylius\\Bundle\\CartBundle\\Storage\\SessionCartStorage',
            'sylius.cart_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener',
            'sylius.cart_flash_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener',
            'sylius.model.option.class' => 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOption',
            'sylius.model.option_value.class' => 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Option\\DefaultOptionValue',
            'sylius.model.property.class' => 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProperty',
            'sylius.model.product_property.class' => 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Property\\DefaultProductProperty',
            'sylius.model.prototype.class' => 'Sylius\\Bundle\\AssortmentBundle\\Entity\\Prototype\\DefaultPrototype',
            'sylius.repository.product.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository',
            'sylius.repository.variant.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.product_property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.prototype.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.option_choice.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\OptionEntityChoiceType',
            'sylius.form.type.property_choice.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\PropertyEntityChoiceType',
            'sylius.form.type.product_hidden.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\ProductHiddenType',
            'sylius.form.type.product_to_identifier.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\ProductToIdentifierType',
            'sylius.product_builder.class' => 'Sylius\\Bundle\\AssortmentBundle\\Builder\\ProductBuilder',
            'sylius.validator.product.unique.class' => 'Sylius\\Bundle\\AssortmentBundle\\Validator\\ProductUniqueValidator',
            'sylius.form.type.variant_to_identifier.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\VariantToIdentifierType',
            'sylius.form.type.variant_choice.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\VariantChoiceType',
            'sylius.form.type.variant_match.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\VariantMatchType',
            'sylius.variant_generator.class' => 'Sylius\\Bundle\\AssortmentBundle\\Generator\\VariantGenerator',
            'sylius.validator.variant.unique.class' => 'Sylius\\Bundle\\AssortmentBundle\\Validator\\VariantUniqueValidator',
            'sylius.validator.variant.combination.class' => 'Sylius\\Bundle\\AssortmentBundle\\Validator\\VariantCombinationValidator',
            'sylius.form.type.option_value.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\OptionValueType',
            'sylius.form.type.option_value_choice.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\OptionValueChoiceType',
            'sylius.form.type.option_value_collection.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\OptionValueCollectionType',
            'sylius.form.type.product_property.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\ProductPropertyType',
            'sylius.prototype_builder.class' => 'Sylius\\Bundle\\AssortmentBundle\\Builder\\PrototypeBuilder',
            'sylius_assortment.driver' => 'doctrine/orm',
            'sylius_assortment.engine' => 'twig',
            'sylius.model.product.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Product',
            'sylius.controller.product.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController',
            'sylius.form.type.product.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType',
            'sylius.model.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant',
            'sylius.form.type.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType',
            'sylius.controller.variant.class' => 'Sylius\\Bundle\\AssortmentBundle\\Controller\\VariantController',
            'sylius.controller.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.option.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\OptionType',
            'sylius.controller.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.property.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\PropertyType',
            'sylius.controller.prototype.class' => 'Sylius\\Bundle\\AssortmentBundle\\Controller\\PrototypeController',
            'sylius.form.type.prototype.class' => 'Sylius\\Bundle\\AssortmentBundle\\Form\\Type\\PrototypeType',
            'sylius.model.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Entity\\DefaultTaxCategory',
            'sylius.model.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\TaxRate',
            'sylius.repository.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.tax_category_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryEntityType',
            'sylius_taxation.driver' => 'doctrine/orm',
            'sylius_taxation.engine' => 'twig',
            'sylius.form.type.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType',
            'sylius.controller.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.controller.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
            'sylius.form.type.tax_calculator_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.tax_calculator.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DelegatingCalculator',
            'sylius.tax_calculator.default.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DefaultCalculator',
            'sylius.tax_rate_resolver.class' => 'Sylius\\Bundle\\TaxationBundle\\Resolver\\TaxRateResolver',
            'sylius.model.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Entity\\DefaultShippingCategory',
            'sylius.model.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\ShippingMethod',
            'sylius.model.shipping_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Entity\\Rule',
            'sylius.repository.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipment_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.shipping_category_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryEntityType',
            'sylius_shipping.driver' => 'doctrine/orm',
            'sylius_shipping.engine' => 'twig',
            'sylius.model.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Shipment',
            'sylius.controller.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipment.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
            'sylius.model.shipment_item.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit',
            'sylius.controller.shipment_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipment_item.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType',
            'sylius.form.type.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType',
            'sylius.controller.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.controller.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
            'sylius.controller.shipping_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType',
            'sylius.validation_group.shipping_category' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flat_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flexible_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_per_item_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipping_calculator_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.form.type.shipping_rule_item_count_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.shipping_method_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodChoiceType',
            'sylius.shipping_methods_resolver.class' => 'Sylius\\Bundle\\ShippingBundle\\Resolver\\MethodsResolver',
            'sylius.shipping_calculator_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\Registry\\CalculatorRegistry',
            'sylius.shipping_calculator.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\DelegatingCalculator',
            'sylius.shipping_rule_checker_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.shipping_eigibility_checker.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ShippingMethodEliglibilityChecker',
            'sylius.shipping_rule_checker.item_count.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ItemCountRuleChecker',
            'sylius.shipping_calculator.flat_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlatRateCalculator',
            'sylius.form.type.shipping_calculator.flat_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlatRateConfigurationType',
            'sylius.shipping_calculator.per_item_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\PerItemRateCalculator',
            'sylius.form.type.shipping_calculator.per_item_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\PerItemRateConfigurationType',
            'sylius.shipping_calculator.flexible_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlexibleRateCalculator',
            'sylius.form.type.shipping_calculator.flexible_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlexibleRateConfigurationType',
            'sylius.model.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Entity\\PaymentMethod',
            'sylius.repository.payment_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.payment_method_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodEntityType',
            'sylius.model.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Entity\\Payment',
            'sylius.repository.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.model.transaction.class' => 'Sylius\\Bundle\\PaymentsBundle\\Entity\\Transaction',
            'sylius.repository.transaction.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.model.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Entity\\CreditCard',
            'sylius.repository.credit_card.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_payments.driver' => 'doctrine/orm',
            'sylius_payments.engine' => 'twig',
            'sylius.payment_gateways' => array(
                'dummy' => 'Test',
                'stripe' => 'Stripe',
            ),
            'sylius.model.credit_card_owner.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\User',
            'sylius.controller.payment_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType',
            'sylius.controller.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
            'sylius.controller.transaction.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.transaction.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
            'sylius.controller.credit_card.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType',
            'sylius.validation_group.payment_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.payment' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.credit_card' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.payment_gateway_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentGatewayChoiceType',
            'sylius.model.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Promotion',
            'sylius.model.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Coupon',
            'sylius.model.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Rule',
            'sylius.model.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Entity\\Action',
            'sylius.repository.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Repository\\PromotionRepository',
            'sylius.repository.promotion_coupon.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_promotions.driver' => 'doctrine/orm',
            'sylius_promotions.engine' => 'twig',
            'sylius.controller.promotion.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType',
            'sylius.controller.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType',
            'sylius.controller.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController',
            'sylius.form.type.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType',
            'sylius.controller.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType',
            'sylius.validation_group.promotion' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_total_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_fixed_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_percentage_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon_generate_instruction' => array(
                0 => 'sylius',
            ),
            'sylius.promotion_processor.class' => 'Sylius\\Bundle\\PromotionsBundle\\Processor\\PromotionProcessor',
            'sylius.promotion_eligibility_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\PromotionEligibilityChecker',
            'sylius.promotion_rule_checker.item_total.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemTotalRuleChecker',
            'sylius.promotion_rule_checker.item_count.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemCountRuleChecker',
            'sylius.promotion_applicator.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\PromotionApplicator',
            'sylius.generator.instructions.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction',
            'sylius.registry.promotion_rule_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.registry.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\Registry\\PromotionActionRegistry',
            'sylius.form.type.promotion_rule_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleChoiceType',
            'sylius.form.type.promotion_rule.item_total_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemTotalConfigurationType',
            'sylius.form.type.promotion_rule.item_count_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.promotion_action_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionChoiceType',
            'sylius.form.type.promotion_action.fixed_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\FixedDiscountConfigurationType',
            'sylius.form.type.promotion_action.percentage_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\PercentageDiscountConfigurationType',
            'sylius.form.type.promotion_coupon_to_code.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponToCodeType',
            'sylius.form.type.promotion_coupon_generate_instruction.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponGenerateInstructionType',
            'sylius.generator.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\CouponGenerator',
            'sylius.model.address.class' => 'Gecko\\PigalleBundle\\Entity\\Address',
            'sylius.model.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\Country',
            'sylius.model.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\Province',
            'sylius.model.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\Zone',
            'sylius.model.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMember',
            'sylius.model.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberCountry',
            'sylius.model.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberProvince',
            'sylius.model.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Entity\\ZoneMemberZone',
            'sylius.repository.address.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.province.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_country.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_province.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.address.class' => 'Gecko\\PigalleBundle\\Form\\Type\\AddressType',
            'sylius.controller.address.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.controller.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
            'sylius.controller.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
            'sylius.form.type.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
            'sylius.controller.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
            'sylius.controller.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
            'sylius.form.type.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType',
            'sylius.form.type.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType',
            'sylius.form.type.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType',
            'sylius.form.type.country_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryEntityChoiceType',
            'sylius.form.type.province_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceChoiceType',
            'sylius.form.type.zone_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneEntityChoiceType',
            'sylius.form.type.zone_member_collection.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCollectionType',
            'sylius.form.listener.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\EventListener\\BuildAddressFormListener',
            'sylius.zone_matcher.class' => 'Sylius\\Bundle\\AddressingBundle\\Matcher\\ZoneMatcher',
            'sylius.model.order_item.class' => 'Sylius\\Bundle\\SalesBundle\\Entity\\DefaultOrderItem',
            'sylius.model.adjustment.class' => 'Sylius\\Bundle\\SalesBundle\\Entity\\DefaultAdjustment',
            'sylius.repository.order.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository',
            'sylius.repository.order_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_sales.driver' => 'doctrine/orm',
            'sylius.model.sellable.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant',
            'sylius.model.order.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Order',
            'sylius.controller.order.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
            'sylius.form.type.order.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType',
            'sylius.controller.order_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.order_item.class' => 'Sylius\\Bundle\\SalesBundle\\Form\\Type\\OrderItemType',
            'sylius.validation_group.order' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.order_item' => array(
                0 => 'sylius',
            ),
            'sylius.builder.order.class' => 'Sylius\\Bundle\\SalesBundle\\Builder\\OrderBuilder',
            'sylius.generator.order_number.class' => 'Sylius\\Bundle\\SalesBundle\\Generator\\OrderNumberGenerator',
            'sylius.listener.order_number.class' => 'Sylius\\Bundle\\SalesBundle\\EventListener\\OrderNumberListener',
            'sylius.repository.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.stockable.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.inventory_twig.class' => 'Sylius\\Bundle\\InventoryBundle\\Twig\\SyliusInventoryExtension',
            'sylius_inventory.driver' => 'doctrine/orm',
            'sylius_inventory.engine' => 'twig',
            'sylius.backorders' => true,
            'sylius.controller.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.inventory_unit.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\InventoryUnit',
            'sylius.controller.stockable.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.stockable.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Variant',
            'sylius.inventory_operator.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\InventoryOperator',
            'sylius.availability_checker.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Checker\\AvailabilityChecker',
            'sylius.inventory_listener.class' => 'Sylius\\Bundle\\InventoryBundle\\EventListener\\InventoryChangeListener',
            'sylius.model.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Taxonomy',
            'sylius.model.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\Taxon',
            'sylius.repository.taxonomy.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Entity\\TaxonomyRepository',
            'sylius.repository.taxon.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.taxonomy_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonomyChoiceType',
            'sylius_taxonomies.driver' => 'doctrine/orm',
            'sylius.form.type.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType',
            'sylius.controller.taxonomy.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType',
            'sylius.controller.taxon.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController',
            'sylius.validation_group.taxonomy' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.taxon' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.taxon_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonChoiceType',
            'sylius.form.type.taxon_selection.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonSelectionType',
            'sylius.process.builder.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Builder\\ProcessBuilder',
            'sylius.process.context.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Context\\ProcessContext',
            'sylius.controller.process.class' => 'Sylius\\Bundle\\FlowBundle\\Controller\\ProcessController',
            'sylius.process.coordinator.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Coordinator\\Coordinator',
            'sylius.process_storage.session.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionStorage',
            'sylius.process_storage.session.bag.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionFlowsBag',
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
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
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => 'D:/www/projects/pigalle/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => 'D:/www/projects/pigalle/app/cache/prod/assetic',
            'assetic.bundles' => array(
                0 => 'PigalleBundle',
                1 => 'SyliusBackendBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => 'D:/www/projects/pigalle/app/../web',
            'assetic.write_to' => 'D:/www/projects/pigalle/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => 'C:\\Program Files\\Java\\jdk1.7.0_45\\bin\\java.EXE',
            'assetic.node.bin' => 'C:\\Program Files\\nodejs\\\\node.EXE',
            'assetic.ruby.bin' => 'C:\\Ruby200-x64\\bin\\ruby.EXE',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'd73a220a76ed13d358389b3f7658ecc7',
            'kernel.trusted_proxies' => array(
            ),
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trust_proxy_headers' => false,
            'kernel.default_locale' => 'es',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'session.save_path' => 'D:/www/projects/pigalle/app/cache/prod/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => 'D:\\www\\projects\\pigalle\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml',
                1 => 'D:\\www\\projects\\pigalle\\src\\Sylius\\Bundle\\CoreBundle\\Resources\\config\\validation.xml',
                2 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\money-bundle\\Sylius\\Bundle\\MoneyBundle\\Resources\\config\\validation.xml',
                3 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\settings-bundle\\Sylius\\Bundle\\SettingsBundle\\Resources\\config\\validation.xml',
                4 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\cart-bundle\\Sylius\\Bundle\\CartBundle\\Resources\\config\\validation.xml',
                5 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\assortment-bundle\\Sylius\\Bundle\\AssortmentBundle\\Resources\\config\\validation.xml',
                6 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxation-bundle\\Sylius\\Bundle\\TaxationBundle\\Resources\\config\\validation.xml',
                7 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\shipping-bundle\\Sylius\\Bundle\\ShippingBundle\\Resources\\config\\validation.xml',
                8 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\payments-bundle\\Sylius\\Bundle\\PaymentsBundle\\Resources\\config\\validation.xml',
                9 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\promotions-bundle\\Sylius\\Bundle\\PromotionsBundle\\Resources\\config\\validation.xml',
                10 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\addressing-bundle\\Sylius\\Bundle\\AddressingBundle\\Resources\\config\\validation.xml',
                11 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\sales-bundle\\Sylius\\Bundle\\SalesBundle\\Resources\\config\\validation.xml',
                12 => 'D:\\www\\projects\\pigalle\\vendor\\sylius\\taxonomies-bundle\\Sylius\\Bundle\\TaxonomiesBundle\\Resources\\config\\validation.xml',
                13 => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml',
                14 => 'D:\\www\\projects\\pigalle\\src\\Gecko\\PigalleBundle\\Resources\\config\\validation.xml',
                15 => 'D:\\www\\projects\\pigalle\\src\\Gecko\\NewsletterBundle\\Resources\\config\\validation.xml',
                16 => 'D:\\www\\projects\\pigalle\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'validator.translation_domain' => 'validators',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:D:/www/projects/pigalle/app/cache/prod/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'D:/www/projects/pigalle/app/config/routing.yml',
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => '/sin-autorizacion',
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => 'D:/www/projects/pigalle/app/cache/prod/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'SyliusBackendBundle::forms.html.twig',
                2 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'cache' => 'D:/www/projects/pigalle/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'liip_doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'liip_doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'liip_doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'liip_doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'liip_doctrine_cache.memcache_host' => 'localhost',
            'liip_doctrine_cache.memcache_port' => 11211,
            'liip_doctrine_cache.memcache_timeout' => 1,
            'liip_doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'liip_doctrine_cache.memcached_host' => 'localhost',
            'liip_doctrine_cache.memcached_port' => 11211,
            'liip_doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'liip_doctrine_cache.redis_host' => 'localhost',
            'liip_doctrine_cache.redis_port' => 6379,
            'liip_doctrine_cache.redis_timeout' => 2,
            'liip_doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'liip_doctrine_cache.win_cache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'liip_doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'liip_doctrine_cache.zend_data.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'liip_doctrine_cache.namespaces' => array(
                'sylius_settings' => array(
                    'type' => 'file_system',
                    'namespace' => NULL,
                    'host' => NULL,
                    'port' => NULL,
                    'timeout' => NULL,
                    'id' => NULL,
                    'directory' => NULL,
                    'extension' => NULL,
                    'alias' => array(
                    ),
                ),
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.routing.loader.class' => 'Liip\\ImagineBundle\\Routing\\ImagineLoader',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.data.loader.filesystem.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\FileSystemLoader',
            'liip_imagine.data.loader.stream.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\StreamLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.cache.clearer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheClearer',
            'liip_imagine.cache_prefix' => '/media/cache',
            'liip_imagine.web_root' => 'D:/www/projects/pigalle/app/../web',
            'liip_imagine.data_root' => 'D:/www/projects/pigalle/app/../web/media/image',
            'liip_imagine.cache_mkdir_mode' => 511,
            'liip_imagine.formats' => array(
            ),
            'liip_imagine.cache.resolver.default' => 'web_path',
            'liip_imagine.filter_sets' => array(
                'sylius_16x16' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 16,
                                1 => 16,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_50x40' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 50,
                                1 => 40,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_60x60' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 60,
                                1 => 60,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_138x138' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 138,
                                1 => 138,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_200x200' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 200,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_262x255' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 265,
                                1 => 255,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_610x600' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 610,
                                1 => 600,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'sylius_gallery' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 640,
                                1 => 480,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'pigalle_60x60' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 60,
                                1 => 60,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'pigalle_220x220' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 220,
                                1 => 220,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'pigalle_460x460' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 460,
                                1 => 460,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
                'pigalle_900x900' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 900,
                                1 => 900,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(
                    ),
                ),
            ),
            'liip_imagine.data.loader.default' => 'filesystem',
            'liip_imagine.controller_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.cache.resolver.base_path' => '',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Silex\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(
            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\Rest\\Util\\FormatNegotiator',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => 'D:/www/projects/pigalle/app/cache/prod/fos_rest',
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.exception.codes' => array(
            ),
            'fos_rest.exception.messages' => array(
            ),
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.default_priorities' => array(
                0 => 'html',
                1 => '*/*',
            ),
            'fos_rest.prefer_extension' => true,
            'fos_rest.fallback_format' => 'html',
            'fos_rest.mime_types' => array(
            ),
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'sylius_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'es',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(
            ),
            'ladybug.options' => array(
                'theme' => 'modern',
                'expanded' => false,
                'silenced' => false,
            ),
            'pigalle.menu_builder.class' => 'Gecko\\PigalleBundle\\Menu\\MenuBuilder',
            'sylius_backend.controller.dashboard.class' => 'Gecko\\SyliusBackendBundle\\Controller\\DashboardController',
            'sylius_backend.menu_builder.class' => 'Gecko\\SyliusBackendBundle\\Menu\\MenuBuilder',
            'gecko_newsletter.sender.class' => 'Gecko\\NewsletterBundle\\Sender\\BasicSender',
            'sylius.tax_calculators' => array(
                'default' => 'default',
            ),
            'sylius.shipping_calculators' => array(
                'oca' => 'Oca',
                'flat_rate' => 'Flat rate per shipment',
                'per_item_rate' => 'Flat rate per item',
                'flexible_rate' => 'Flexible rate',
            ),
            'sylius.shipping_rules' => array(
                'item_count' => 'Item count',
            ),
            'sylius.promotion_rules' => array(
                'item_total' => 'Item total',
                'item_count' => 'Item count',
            ),
            'sylius.promotion_actions' => array(
                'fixed_discount' => 'Fixed discount',
                'percentage_discount' => 'Percentage discount',
            ),
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.ladybug_data_collector' => array(
                    0 => 'ladybug',
                    1 => 'RaulFraileLadybugBundle:Collector:ladybug',
                ),
            ),
        );
    }
}
