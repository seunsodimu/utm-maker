<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the Submit URI long-running operation.
 * option (google.api.message_visibility).restriction = "TRUSTED_TESTER";
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.SubmitUriMetadata</code>
 */
class SubmitUriMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SubmitUriMetadata.State state = 1;</code>
     */
    private $state = 0;
    /**
     * Creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * Latest update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     */
    private $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The state of the operation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Creation time of the operation.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Latest update time of the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SubmitUriMetadata.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SubmitUriMetadata.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebRisk\V1\SubmitUriMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Latest update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Latest update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

