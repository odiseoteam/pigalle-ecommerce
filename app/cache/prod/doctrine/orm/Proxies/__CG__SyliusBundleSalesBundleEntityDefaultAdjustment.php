<?php

namespace Proxies\__CG__\Sylius\Bundle\SalesBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class DefaultAdjustment extends \Sylius\Bundle\SalesBundle\Entity\DefaultAdjustment implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getAdjustable()
    {
        $this->__load();
        return parent::getAdjustable();
    }

    public function setAdjustable(\Sylius\Bundle\SalesBundle\Model\AdjustableInterface $adjustable = NULL)
    {
        $this->__load();
        return parent::setAdjustable($adjustable);
    }

    public function getLabel()
    {
        $this->__load();
        return parent::getLabel();
    }

    public function setLabel($label)
    {
        $this->__load();
        return parent::setLabel($label);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getAmount()
    {
        $this->__load();
        return parent::getAmount();
    }

    public function setAmount($amount)
    {
        $this->__load();
        return parent::setAmount($amount);
    }

    public function isNeutral()
    {
        $this->__load();
        return parent::isNeutral();
    }

    public function setNeutral($neutral)
    {
        $this->__load();
        return parent::setNeutral($neutral);
    }

    public function isCharge()
    {
        $this->__load();
        return parent::isCharge();
    }

    public function isCredit()
    {
        $this->__load();
        return parent::isCredit();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'label', 'description', 'amount', 'neutral', 'createdAt', 'updatedAt', 'order', 'orderItem', 'id');
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