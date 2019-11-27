<?php

namespace Proxies\__CG__\Sylius\Bundle\PaymentsBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CreditCard extends \Sylius\Bundle\PaymentsBundle\Entity\CreditCard implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setToken($token)
    {
        $this->__load();
        return parent::setToken($token);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getOwner()
    {
        $this->__load();
        return parent::getOwner();
    }

    public function setOwner(\Sylius\Bundle\PaymentsBundle\Model\CreditCardOwnerInterface $owner)
    {
        $this->__load();
        return parent::setOwner($owner);
    }

    public function getCardholderName()
    {
        $this->__load();
        return parent::getCardholderName();
    }

    public function setCardholderName($cardholderName)
    {
        $this->__load();
        return parent::setCardholderName($cardholderName);
    }

    public function getNumber()
    {
        $this->__load();
        return parent::getNumber();
    }

    public function setNumber($number)
    {
        $this->__load();
        return parent::setNumber($number);
    }

    public function getMaskedNumber()
    {
        $this->__load();
        return parent::getMaskedNumber();
    }

    public function getSecurityCode()
    {
        $this->__load();
        return parent::getSecurityCode();
    }

    public function setSecurityCode($securityCode)
    {
        $this->__load();
        return parent::setSecurityCode($securityCode);
    }

    public function getExpiryMonth()
    {
        $this->__load();
        return parent::getExpiryMonth();
    }

    public function setExpiryMonth($expiryMonth)
    {
        $this->__load();
        return parent::setExpiryMonth($expiryMonth);
    }

    public function getExpiryYear()
    {
        $this->__load();
        return parent::getExpiryYear();
    }

    public function setExpiryYear($expiryYear)
    {
        $this->__load();
        return parent::setExpiryYear($expiryYear);
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
        return array('__isInitialized__', 'token', 'type', 'cardholderName', 'number', 'securityCode', 'expiryMonth', 'expiryYear', 'createdAt', 'updatedAt', 'id', 'owner');
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