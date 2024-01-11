<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ListTableSpecsRequest</code>
 */
class ListTableSpecsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the dataset to list table specs from.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     */
    private $field_mask = null;
    /**
     * Filter expression, see go/filtering.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * Requested page size. The server can return fewer results than requested.
     * If unspecified, the server will pick a default size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained from the
     * [ListTableSpecsResponse.next_page_token][google.cloud.automl.v1beta1.ListTableSpecsResponse.next_page_token] field of the previous
     * [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the dataset to list table specs from.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           Mask specifying which fields to read.
     *     @type string $filter
     *           Filter expression, see go/filtering.
     *     @type int $page_size
     *           Requested page size. The server can return fewer results than requested.
     *           If unspecified, the server will pick a default size.
     *     @type string $page_token
     *           A token identifying a page of results for the server to return.
     *           Typically obtained from the
     *           [ListTableSpecsResponse.next_page_token][google.cloud.automl.v1beta1.ListTableSpecsResponse.next_page_token] field of the previous
     *           [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs] call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the dataset to list table specs from.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the dataset to list table specs from.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

    /**
     * Filter expression, see go/filtering.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter expression, see go/filtering.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Requested page size. The server can return fewer results than requested.
     * If unspecified, the server will pick a default size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. The server can return fewer results than requested.
     * If unspecified, the server will pick a default size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained from the
     * [ListTableSpecsResponse.next_page_token][google.cloud.automl.v1beta1.ListTableSpecsResponse.next_page_token] field of the previous
     * [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained from the
     * [ListTableSpecsResponse.next_page_token][google.cloud.automl.v1beta1.ListTableSpecsResponse.next_page_token] field of the previous
     * [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

