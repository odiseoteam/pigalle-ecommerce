<?php

namespace Proxies\__CG__\Sylius\Bundle\PromotionsBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Promotion extends \Sylius\Bundle\PromotionsBundle\Entity\Promotion implements \Doctrine\ORM\Proxy\Proxy
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

    public function getUsageLimit()
    {
        $this->__load();
        return parent::getUsageLimit();
    }

    public function setUsageLimit($usageLimit)
    {
        $this->__load();
        return parent::setUsageLimit($usageLimit);
    }

    public function getUsed()
    {
        $this->__load();
        return parent::getUsed();
    }

    public function setUsed($used)
    {
        $this->__load();
        return parent::setUsed($used);
    }

    public function incrementUsed()
    {
        $this->__load();
        return parent::incrementUsed();
    }

    public function getStartsAt()
    {
        $this->__load();
        return parent::getStartsAt();
    }

    public function setStartsAt(\DateTime $startsAt = NULL)
    {
        $this->__load();
        return parent::setStartsAt($startsAt);
    }

    public function getEndsAt()
    {
        $this->__load();
        return parent::getEndsAt();
    }

    public function setEndsAt(\DateTime $endsAt = NULL)
    {
        $this->__load();
        return parent::setEndsAt($endsAt);
    }

    public function isCouponBased()
    {
        $this->__load();
        return parent::isCouponBased();
    }

    public function setCouponBased($couponBased)
    {
        $this->__load();
        return parent::setCouponBased($couponBased);
    }

    public function getCoupons()
    {
        $this->__load();
        return parent::getCoupons();
    }

    public function hasCoupons()
    {
        $this->__load();
        return parent::hasCoupons();
    }

    public function hasCoupon(\Sylius\Bundle\PromotionsBundle\Model\CouponInterface $coupon)
    {
        $this->__load();
        return parent::hasCoupon($coupon);
    }

    public function addCoupon(\Sylius\Bundle\PromotionsBundle\Model\CouponInterface $coupon)
    {
        $this->__load();
        return parent::addCoupon($coupon);
    }

    public function removeCoupon(\Sylius\Bundle\PromotionsBundle\Model\CouponInterface $coupon)
    {
        $this->__load();
        return parent::removeCoupon($coupon);
    }

    public function hasRules()
    {
        $this->__load();
        return parent::hasRules();
    }

    public function getRules()
    {
        $this->__load();
        return parent::getRules();
    }

    public function hasRule(\Sylius\Bundle\PromotionsBundle\Model\RuleInterface $rule)
    {
        $this->__load();
        return parent::hasRule($rule);
    }

    public function addRule(\Sylius\Bundle\PromotionsBundle\Model\RuleInterface $rule)
    {
        $this->__load();
        return parent::addRule($rule);
    }

    public function removeRule(\Sylius\Bundle\PromotionsBundle\Model\RuleInterface $rule)
    {
        $this->__load();
        return parent::removeRule($rule);
    }

    public function hasActions()
    {
        $this->__load();
        return parent::hasActions();
    }

    public function getActions()
    {
        $this->__load();
        return parent::getActions();
    }

    public function hasAction(\Sylius\Bundle\PromotionsBundle\Model\ActionInterface $action)
    {
        $this->__load();
        return parent::hasAction($action);
    }

    public function addAction(\Sylius\Bundle\PromotionsBundle\Model\ActionInterface $action)
    {
        $this->__load();
        return parent::addAction($action);
    }

    public function removeAction(\Sylius\Bundle\PromotionsBundle\Model\ActionInterface $action)
    {
        $this->__load();
        return parent::removeAction($action);
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


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'description', 'usageLimit', 'used', 'couponBased', 'startsAt', 'endsAt', 'createdAt', 'updatedAt', 'id', 'coupons', 'rules', 'actions');
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