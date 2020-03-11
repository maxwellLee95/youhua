<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderBill extends \App\Entity\OrderBill implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'id', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'deposit_price', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'status', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'goods', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'order_info', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'goods_id', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'updated_at'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'id', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'deposit_price', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'status', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'goods', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'order_info', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'goods_id', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\OrderBill' . "\0" . 'updated_at'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderBill $proxy) {
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
    public function getGoodsId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoodsId', []);

        return parent::getGoodsId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoodsId($goods_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoodsId', [$goods_id]);

        return parent::setGoodsId($goods_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepositPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepositPrice', []);

        return parent::getDepositPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepositPrice(float $deposit_price): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepositPrice', [$deposit_price]);

        return parent::setDepositPrice($deposit_price);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity(int $quantity): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoods(): ?\App\Entity\Goods
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoods', []);

        return parent::getGoods();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoods(?\App\Entity\Goods $goods): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoods', [$goods]);

        return parent::setGoods($goods);
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
    public function getOrderInfo(): ?\App\Entity\Order
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderInfo', []);

        return parent::getOrderInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderInfo(?\App\Entity\Order $order_info): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderInfo', [$order_info]);

        return parent::setOrderInfo($order_info);
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
    public function setCreatedAt(?\DateTimeInterface $created_at): \App\Entity\OrderBill
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
    public function setUpdatedAt(\DateTimeInterface $updated_at): \App\Entity\OrderBill
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

}
