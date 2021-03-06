<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Consumer extends \App\Entity\Consumer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'nick_name', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'deleted_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'last_login_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'first_login_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'receiptInfos', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'orders', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'member', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'wechat', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'updated_at'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'nick_name', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'deleted_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'last_login_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'first_login_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'receiptInfos', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'orders', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'member', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'wechat', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Consumer' . "\0" . 'updated_at'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Consumer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getNickName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNickName', []);

        return parent::getNickName();
    }

    /**
     * {@inheritDoc}
     */
    public function setNickName(string $nick_name): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNickName', [$nick_name]);

        return parent::setNickName($nick_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeposit(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeposit', []);

        return parent::getDeposit();
    }

    /**
     * {@inheritDoc}
     */
    public function getSex(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', []);

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex(string $sex): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', [$sex]);

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt(\DateTimeInterface $deleted_at): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deleted_at]);

        return parent::setDeletedAt($deleted_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLoginAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLoginAt', []);

        return parent::getLastLoginAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLoginAt(?\DateTimeInterface $last_login_at): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLoginAt', [$last_login_at]);

        return parent::setLastLoginAt($last_login_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstLoginAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstLoginAt', []);

        return parent::getFirstLoginAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstLoginAt(?\DateTimeInterface $first_login_at): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstLoginAt', [$first_login_at]);

        return parent::setFirstLoginAt($first_login_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiptInfos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiptInfos', []);

        return parent::getReceiptInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function addReceiptInfo(\App\Entity\ReceiptInfo $receiptInfo): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReceiptInfo', [$receiptInfo]);

        return parent::addReceiptInfo($receiptInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReceiptInfo(\App\Entity\ReceiptInfo $receiptInfo): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReceiptInfo', [$receiptInfo]);

        return parent::removeReceiptInfo($receiptInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', []);

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrder(\App\Entity\Order $order): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrder', [$order]);

        return parent::addOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrder(\App\Entity\Order $order): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrder', [$order]);

        return parent::removeOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getMember(): ?\App\Entity\Member
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMember', []);

        return parent::getMember();
    }

    /**
     * {@inheritDoc}
     */
    public function setMember(\App\Entity\Member $member): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMember', [$member]);

        return parent::setMember($member);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getWechat(): ?\App\Entity\Wechat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWechat', []);

        return parent::getWechat();
    }

    /**
     * {@inheritDoc}
     */
    public function setWechat(\App\Entity\Wechat $wechat): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWechat', [$wechat]);

        return parent::setWechat($wechat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $created_at): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updated_at): \App\Entity\Consumer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

}
