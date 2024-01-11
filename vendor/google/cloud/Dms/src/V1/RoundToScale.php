<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This allows the data to change scale, for example if the source is 2 digits
 * after the decimal point, specify round to scale value = 2. If for example the
 * value needs to be converted to an integer, use round to scale value = 0.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.RoundToScale</code>
 */
class RoundToScale extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Scale value to be used
     *
     * Generated from protobuf field <code>int32 scale = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scale = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $scale
     *           Required. Scale value to be used
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Scale value to be used
     *
     * Generated from protobuf field <code>int32 scale = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Required. Scale value to be used
     *
     * Generated from protobuf field <code>int32 scale = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkInt32($var);
        $this->scale = $var;

        return $this;
    }

}

