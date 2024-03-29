<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TaxRate extends \Sylius\Bundle\CoreBundle\Entity\TaxRate implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getZone()
    {
        $this->__load();
        return parent::getZone();
    }

    public function setZone(\Sylius\Bundle\AddressingBundle\Model\ZoneInterface $zone)
    {
        $this->__load();
        return parent::setZone($zone);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function setCategory(\Sylius\Bundle\TaxationBundle\Model\TaxCategoryInterface $category = NULL)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getAmount()
    {
        $this->__load();
        return parent::getAmount();
    }

    public function getAmountAsPercentage()
    {
        $this->__load();
        return parent::getAmountAsPercentage();
    }

    public function setAmount($amount)
    {
        $this->__load();
        return parent::setAmount($amount);
    }

    public function isIncludedInPrice()
    {
        $this->__load();
        return parent::isIncludedInPrice();
    }

    public function setIncludedInPrice($includedInPrice)
    {
        $this->__load();
        return parent::setIncludedInPrice($includedInPrice);
    }

    public function getCalculator()
    {
        $this->__load();
        return parent::getCalculator();
    }

    public function setCalculator($calculator)
    {
        $this->__load();
        return parent::setCalculator($calculator);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'amount', 'includedInPrice', 'calculator', 'createdAt', 'updatedAt', 'category', 'id', 'zone');
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