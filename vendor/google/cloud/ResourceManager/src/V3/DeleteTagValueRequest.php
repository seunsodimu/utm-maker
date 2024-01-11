<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for deleting a TagValue.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.DeleteTagValueRequest</code>
 */
class DeleteTagValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for TagValue to be deleted in the format
     * tagValues/456.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. Set as true to perform the validations necessary for deletion,
     * but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;
    /**
     * Optional. The etag known to the client for the expected state of the
     * TagValue. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * @param string $name Required. Resource name for TagValue to be deleted in the format
     *                     tagValues/456. Please see
     *                     {@see TagValuesClient::tagValueName()} for help formatting this field.
     *
     * @return \Google\Cloud\ResourceManager\V3\DeleteTagValueRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name for TagValue to be deleted in the format
     *           tagValues/456.
     *     @type bool $validate_only
     *           Optional. Set as true to perform the validations necessary for deletion,
     *           but not actually perform the action.
     *     @type string $etag
     *           Optional. The etag known to the client for the expected state of the
     *           TagValue. This is to be used for optimistic concurrency.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for TagValue to be deleted in the format
     * tagValues/456.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name for TagValue to be deleted in the format
     * tagValues/456.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Set as true to perform the validations necessary for deletion,
     * but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Set as true to perform the validations necessary for deletion,
     * but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. The etag known to the client for the expected state of the
     * TagValue. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The etag known to the client for the expected state of the
     * TagValue. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

