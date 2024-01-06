<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: station.proto

namespace Memphisphp\Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.CreateStationRequest</code>
 */
class CreateStationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.pb.Station station = 1;</code>
     */
    protected $station = null;
    /**
     * Generated from protobuf field <code>optional .pb.StationOpions options = 2;</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Memphisphp\Pb\Station $station
     *     @type \Memphisphp\Pb\StationOpions $options
     * }
     */
    public function __construct($data = NULL) {
        \Memphisphp\Metadata\Station::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.pb.Station station = 1;</code>
     * @return \Memphisphp\Pb\Station|null
     */
    public function getStation()
    {
        return $this->station;
    }

    public function hasStation()
    {
        return isset($this->station);
    }

    public function clearStation()
    {
        unset($this->station);
    }

    /**
     * Generated from protobuf field <code>.pb.Station station = 1;</code>
     * @param \Memphisphp\Pb\Station $var
     * @return $this
     */
    public function setStation($var)
    {
        GPBUtil::checkMessage($var, \Memphisphp\Pb\Station::class);
        $this->station = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .pb.StationOpions options = 2;</code>
     * @return \Memphisphp\Pb\StationOpions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>optional .pb.StationOpions options = 2;</code>
     * @param \Memphisphp\Pb\StationOpions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Memphisphp\Pb\StationOpions::class);
        $this->options = $var;

        return $this;
    }

}
