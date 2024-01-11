<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An existing VPC network.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.LinkedVpcNetwork</code>
 */
class LinkedVpcNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $uri = '';
    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclude_export_ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The URI of the VPC network resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_export_ranges
     *           Optional. IP ranges encompassing the subnets to be excluded from peering.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludeExportRanges()
    {
        return $this->exclude_export_ranges;
    }

    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludeExportRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_export_ranges = $arr;

        return $this;
    }

}

