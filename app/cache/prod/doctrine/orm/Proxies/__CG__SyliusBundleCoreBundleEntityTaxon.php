<?php

namespace Proxies\__CG__\Sylius\Bundle\CoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Taxon extends \Sylius\Bundle\CoreBundle\Entity\Taxon implements \Doctrine\ORM\Proxy\Proxy
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

    public function isVisibleMayoristas()
    {
        $this->__load();
        return parent::isVisibleMayoristas();
    }

    public function getVisibleMayoristas()
    {
        $this->__load();
        return parent::getVisibleMayoristas();
    }

    public function setVisibleMayoristas($visibleMayoristas)
    {
        $this->__load();
        return parent::setVisibleMayoristas($visibleMayoristas);
    }

    public function isVisibleColecciones()
    {
        $this->__load();
        return parent::isVisibleColecciones();
    }

    public function getVisibleColecciones()
    {
        $this->__load();
        return parent::getVisibleColecciones();
    }

    public function setVisibleColecciones($visibleColecciones)
    {
        $this->__load();
        return parent::setVisibleColecciones($visibleColecciones);
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

    public function getLeft()
    {
        $this->__load();
        return parent::getLeft();
    }

    public function setLeft($left)
    {
        $this->__load();
        return parent::setLeft($left);
    }

    public function getRight()
    {
        $this->__load();
        return parent::getRight();
    }

    public function setRight($right)
    {
        $this->__load();
        return parent::setRight($right);
    }

    public function getLevel()
    {
        $this->__load();
        return parent::getLevel();
    }

    public function setLevel($level)
    {
        $this->__load();
        return parent::setLevel($level);
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

    public function getTaxonomy()
    {
        $this->__load();
        return parent::getTaxonomy();
    }

    public function setTaxonomy(\Sylius\Bundle\TaxonomiesBundle\Model\TaxonomyInterface $taxonomy = NULL)
    {
        $this->__load();
        return parent::setTaxonomy($taxonomy);
    }

    public function isRoot()
    {
        $this->__load();
        return parent::isRoot();
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function setParent(\Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface $parent = NULL)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }

    public function hasChild(\Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface $taxon)
    {
        $this->__load();
        return parent::hasChild($taxon);
    }

    public function addChild(\Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface $taxon)
    {
        $this->__load();
        return parent::addChild($taxon);
    }

    public function removeChild(\Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface $taxon)
    {
        $this->__load();
        return parent::removeChild($taxon);
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

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getPermalink()
    {
        $this->__load();
        return parent::getPermalink();
    }

    public function setPermalink($permalink)
    {
        $this->__load();
        return parent::setPermalink($permalink);
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


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'slug', 'permalink', 'description', 'left', 'right', 'level', 'taxonomy', 'path', 'visibleColecciones', 'visibleMayoristas', 'createdAt', 'updatedAt', 'id', 'children', 'parent');
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