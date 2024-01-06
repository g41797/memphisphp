<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: station.proto

namespace Memphisphp\Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.StationOpions</code>
 */
class StationOpions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .pb.StorageOpt storage = 1;</code>
     */
    protected $storage = null;
    /**
     * Generated from protobuf field <code>optional .pb.RetentionOpt retention = 2;</code>
     */
    protected $retention = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Memphisphp\Pb\StorageOpt $storage
     *     @type \Memphisphp\Pb\RetentionOpt $retention
     * }
     */
    public function __construct($data = NULL) {
        \Memphisphp\Metadata\Station::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .pb.StorageOpt storage = 1;</code>
     * @return \Memphisphp\Pb\StorageOpt|null
     */
    public function getStorage()
    {
        return $this->storage;
    }

    public function hasStorage()
    {
        return isset($this->storage);
    }

    public function clearStorage()
    {
        unset($this->storage);
    }

    /**
     * Generated from protobuf field <code>optional .pb.StorageOpt storage = 1;</code>
     * @param \Memphisphp\Pb\StorageOpt $var
     * @return $this
     */
    public function setStorage($var)
    {
        GPBUtil::checkMessage($var, \Memphisphp\Pb\StorageOpt::class);
        $this->storage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .pb.RetentionOpt retention = 2;</code>
     * @return \Memphisphp\Pb\RetentionOpt|null
     */
    public function getRetention()
    {
        return $this->retention;
    }

    public function hasRetention()
    {
        return isset($this->retention);
    }

    public function clearRetention()
    {
        unset($this->retention);
    }

    /**
     * Generated from protobuf field <code>optional .pb.RetentionOpt retention = 2;</code>
     * @param \Memphisphp\Pb\RetentionOpt $var
     * @return $this
     */
    public function setRetention($var)
    {
        GPBUtil::checkMessage($var, \Memphisphp\Pb\RetentionOpt::class);
        $this->retention = $var;

        return $this;
    }

}
