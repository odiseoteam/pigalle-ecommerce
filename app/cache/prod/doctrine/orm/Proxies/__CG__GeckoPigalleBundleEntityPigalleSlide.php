<?php

namespace Proxies\__CG__\Gecko\PigalleBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PigalleSlide extends \Gecko\PigalleBundle\Entity\PigalleSlide implements \Doctrine\ORM\Proxy\Proxy
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

    public function hasFile()
    {
        $this->__load();
        return parent::hasFile();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function setFile(\SplFileInfo $file)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function hasPath()
    {
        $this->__load();
        return parent::hasPath();
    }

    public function getPath()
    {
        $this->__load();
        return parent::getPath();
    }

    public function setPath($path)
    {
        $this->__load();
        return parent::setPath($path);
    }

    public function hasTitle()
    {
        $this->__load();
        return parent::hasTitle();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function hasText()
    {
        $this->__load();
        return parent::hasText();
    }

    public function getText()
    {
        $this->__load();
        return parent::getText();
    }

    public function setText($text)
    {
        $this->__load();
        return parent::setText($text);
    }

    public function getLinkText()
    {
        $this->__load();
        return parent::getLinkText();
    }

    public function setLinkText($linkText)
    {
        $this->__load();
        return parent::setLinkText($linkText);
    }

    public function getLinkUrl()
    {
        $this->__load();
        return parent::getLinkUrl();
    }

    public function setLinkUrl($linkUrl)
    {
        $this->__load();
        return parent::setLinkUrl($linkUrl);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
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

    public function hasBox()
    {
        $this->__load();
        return parent::hasBox();
    }

    public function hasLink()
    {
        $this->__load();
        return parent::hasLink();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'path', 'title', 'text', 'linkText', 'linkUrl', 'isActive', 'createdAt', 'updatedAt');
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