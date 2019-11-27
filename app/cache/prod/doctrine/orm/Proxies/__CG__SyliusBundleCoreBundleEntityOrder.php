<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Order extends \Sylius\Bundle\CoreBundle\Entity\Order implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setUser(\FOS\UserBundle\Model\UserInterface $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getShippingAddress()
    {
        $this->__load();
        return parent::getShippingAddress();
    }

    public function setShippingAddress(\Sylius\Bundle\AddressingBundle\Model\AddressInterface $address)
    {
        $this->__load();
        return parent::setShippingAddress($address);
    }

    public function getBillingAddress()
    {
        $this->__load();
        return parent::getBillingAddress();
    }

    public function setBillingAddress(\Sylius\Bundle\AddressingBundle\Model\AddressInterface $address)
    {
        $this->__load();
        return parent::setBillingAddress($address);
    }

    public function getTaxTotal()
    {
        $this->__load();
        return parent::getTaxTotal();
    }

    public function getTaxAdjustments()
    {
        $this->__load();
        return parent::getTaxAdjustments();
    }

    public function removeTaxAdjustments()
    {
        $this->__load();
        return parent::removeTaxAdjustments();
    }

    public function getPromotionTotal()
    {
        $this->__load();
        return parent::getPromotionTotal();
    }

    public function getPromotionAdjustments()
    {
        $this->__load();
        return parent::getPromotionAdjustments();
    }

    public function removePromotionAdjustments()
    {
        $this->__load();
        return parent::removePromotionAdjustments();
    }

    public function getShippingTotal()
    {
        $this->__load();
        return parent::getShippingTotal();
    }

    public function getShippingAdjustments()
    {
        $this->__load();
        return parent::getShippingAdjustments();
    }

    public function removeShippingAdjustments()
    {
        $this->__load();
        return parent::removeShippingAdjustments();
    }

    public function getInventoryUnits()
    {
        $this->__load();
        return parent::getInventoryUnits();
    }

    public function addInventoryUnit(\Sylius\Bundle\CoreBundle\Model\InventoryUnitInterface $unit)
    {
        $this->__load();
        return parent::addInventoryUnit($unit);
    }

    public function removeInventoryUnit(\Sylius\Bundle\CoreBundle\Model\InventoryUnitInterface $unit)
    {
        $this->__load();
        return parent::removeInventoryUnit($unit);
    }

    public function getShipments()
    {
        $this->__load();
        return parent::getShipments();
    }

    public function addShipment(\Sylius\Bundle\ShippingBundle\Model\ShipmentInterface $shipment)
    {
        $this->__load();
        return parent::addShipment($shipment);
    }

    public function removeShipment(\Sylius\Bundle\ShippingBundle\Model\ShipmentInterface $shipment)
    {
        $this->__load();
        return parent::removeShipment($shipment);
    }

    public function hasShipment(\Sylius\Bundle\ShippingBundle\Model\ShipmentInterface $shipment)
    {
        $this->__load();
        return parent::hasShipment($shipment);
    }

    public function setPromotionCoupon($promotionCoupon)
    {
        $this->__load();
        return parent::setPromotionCoupon($promotionCoupon);
    }

    public function getPromotionCoupon()
    {
        $this->__load();
        return parent::getPromotionCoupon();
    }

    public function getPromotionSubjectItemTotal()
    {
        $this->__load();
        return parent::getPromotionSubjectItemTotal();
    }

    public function getPromotionSubjectItemCount()
    {
        $this->__load();
        return parent::getPromotionSubjectItemCount();
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
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

    public function isConfirmed()
    {
        $this->__load();
        return parent::isConfirmed();
    }

    public function setConfirmed($confirmed)
    {
        $this->__load();
        return parent::setConfirmed($confirmed);
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function getItems()
    {
        $this->__load();
        return parent::getItems();
    }

    public function setItems(\Doctrine\Common\Collections\Collection $items)
    {
        $this->__load();
        return parent::setItems($items);
    }

    public function clearItems()
    {
        $this->__load();
        return parent::clearItems();
    }

    public function countItems()
    {
        $this->__load();
        return parent::countItems();
    }

    public function addItem(\Sylius\Bundle\SalesBundle\Model\OrderItemInterface $item)
    {
        $this->__load();
        return parent::addItem($item);
    }

    public function removeItem(\Sylius\Bundle\SalesBundle\Model\OrderItemInterface $item)
    {
        $this->__load();
        return parent::removeItem($item);
    }

    public function hasItem(\Sylius\Bundle\SalesBundle\Model\OrderItemInterface $item)
    {
        $this->__load();
        return parent::hasItem($item);
    }

    public function getItemsTotal()
    {
        $this->__load();
        return parent::getItemsTotal();
    }

    public function setItemsTotal($itemsTotal)
    {
        $this->__load();
        return parent::setItemsTotal($itemsTotal);
    }

    public function calculateItemsTotal()
    {
        $this->__load();
        return parent::calculateItemsTotal();
    }

    public function getAdjustments()
    {
        $this->__load();
        return parent::getAdjustments();
    }

    public function addAdjustment(\Sylius\Bundle\SalesBundle\Model\AdjustmentInterface $adjustment)
    {
        $this->__load();
        return parent::addAdjustment($adjustment);
    }

    public function removeAdjustment(\Sylius\Bundle\SalesBundle\Model\AdjustmentInterface $adjustment)
    {
        $this->__load();
        return parent::removeAdjustment($adjustment);
    }

    public function hasAdjustment(\Sylius\Bundle\SalesBundle\Model\AdjustmentInterface $adjustment)
    {
        $this->__load();
        return parent::hasAdjustment($adjustment);
    }

    public function getAdjustmentsTotal()
    {
        $this->__load();
        return parent::getAdjustmentsTotal();
    }

    public function calculateAdjustmentsTotal()
    {
        $this->__load();
        return parent::calculateAdjustmentsTotal();
    }

    public function getTotal()
    {
        $this->__load();
        return parent::getTotal();
    }

    public function setTotal($total)
    {
        $this->__load();
        return parent::setTotal($total);
    }

    public function calculateTotal()
    {
        $this->__load();
        return parent::calculateTotal();
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

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getTotalItems()
    {
        $this->__load();
        return parent::getTotalItems();
    }

    public function getTotalQuantity()
    {
        $this->__load();
        return parent::getTotalQuantity();
    }

    public function isEmpty()
    {
        $this->__load();
        return parent::isEmpty();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'number', 'itemsTotal', 'adjustmentsTotal', 'total', 'createdAt', 'updatedAt', 'state', 'id', 'user', 'items', 'adjustments', 'inventoryUnits', 'shipments', 'shippingAddress', 'billingAddress');
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