<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Variant extends \Sylius\Bundle\CoreBundle\Entity\Variant implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getSku()
    {
        $this->__load();
        return parent::getSku();
    }

    public function setSku($sku)
    {
        $this->__load();
        return parent::setSku($sku);
    }

    public function getPrice()
    {
        $this->__load();
        return parent::getPrice();
    }

    public function setPrice($price)
    {
        $this->__load();
        return parent::setPrice($price);
    }

    public function isInStock()
    {
        $this->__load();
        return parent::isInStock();
    }

    public function getOnHand()
    {
        $this->__load();
        return parent::getOnHand();
    }

    public function setOnHand($onHand)
    {
        $this->__load();
        return parent::setOnHand($onHand);
    }

    public function getInventoryName()
    {
        $this->__load();
        return parent::getInventoryName();
    }

    public function isAvailableOnDemand()
    {
        $this->__load();
        return parent::isAvailableOnDemand();
    }

    public function isAvailable()
    {
        $this->__load();
        return parent::isAvailable();
    }

    public function setAvailableOnDemand($availableOnDemand)
    {
        $this->__load();
        return parent::setAvailableOnDemand($availableOnDemand);
    }

    public function setDefaults(\Sylius\Bundle\AssortmentBundle\Model\Variant\VariantInterface $masterVariant)
    {
        $this->__load();
        return parent::setDefaults($masterVariant);
    }

    public function getShippingCategory()
    {
        $this->__load();
        return parent::getShippingCategory();
    }

    public function getSellableName()
    {
        $this->__load();
        return parent::getSellableName();
    }

    public function hasImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {
        $this->__load();
        return parent::hasImage($image);
    }

    public function getImages()
    {
        $this->__load();
        return parent::getImages();
    }

    public function addImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {
        $this->__load();
        return parent::addImage($image);
    }

    public function removeImage(\Sylius\Bundle\CoreBundle\Model\VariantImageInterface $image)
    {
        $this->__load();
        return parent::removeImage($image);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function isMaster()
    {
        $this->__load();
        return parent::isMaster();
    }

    public function setMaster($master)
    {
        $this->__load();
        return parent::setMaster($master);
    }

    public function getPresentation()
    {
        $this->__load();
        return parent::getPresentation();
    }

    public function setPresentation($presentation)
    {
        $this->__load();
        return parent::setPresentation($presentation);
    }

    public function getProduct()
    {
        $this->__load();
        return parent::getProduct();
    }

    public function setProduct(\Sylius\Bundle\AssortmentBundle\Model\ProductInterface $product = NULL)
    {
        $this->__load();
        return parent::setProduct($product);
    }

    public function getOptions()
    {
        $this->__load();
        return parent::getOptions();
    }

    public function setOptions(\Doctrine\Common\Collections\Collection $options)
    {
        $this->__load();
        return parent::setOptions($options);
    }

    public function addOption(\Sylius\Bundle\AssortmentBundle\Model\Option\OptionValueInterface $option)
    {
        $this->__load();
        return parent::addOption($option);
    }

    public function removeOption(\Sylius\Bundle\AssortmentBundle\Model\Option\OptionValueInterface $option)
    {
        $this->__load();
        return parent::removeOption($option);
    }

    public function hasOption(\Sylius\Bundle\AssortmentBundle\Model\Option\OptionValueInterface $option)
    {
        $this->__load();
        return parent::hasOption($option);
    }

    public function getAvailableOn()
    {
        $this->__load();
        return parent::getAvailableOn();
    }

    public function setAvailableOn(\DateTime $availableOn)
    {
        $this->__load();
        return parent::setAvailableOn($availableOn);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function isDeleted()
    {
        $this->__load();
        return parent::isDeleted();
    }

    public function getDeletedAt()
    {
        $this->__load();
        return parent::getDeletedAt();
    }

    public function setDeletedAt(\DateTime $deletedAt)
    {
        $this->__load();
        return parent::setDeletedAt($deletedAt);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'master', 'presentation', 'availableOn', 'createdAt', 'updatedAt', 'deletedAt', 'product', 'options', 'sku', 'price', 'onHand', 'availableOnDemand', 'id', 'images');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}