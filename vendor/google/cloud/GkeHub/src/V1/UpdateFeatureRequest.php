<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/service.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `GkeHub.UpdateFeature` method.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.UpdateFeatureRequest</code>
 */
class UpdateFeatureRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Feature resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;features/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * Only fields specified in update_mask are updated.
     * If you specify a field in the update_mask but don't specify its value here
     * that field will be deleted.
     * If you are updating a map field, set the value of a key to null or empty
     * string to delete the key from the map. It's not possible to update a key's
     * value to the empty string.
     * If you specify the update_mask to be a special path "*", fully replaces all
     * user-modifiable fields to match `resource`.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.Feature resource = 3;</code>
     */
    private $resource = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    private $request_id = '';

    /**
     * @param string                          $name       Required. The Feature resource name in the format
     *                                                    `projects/&#42;/locations/&#42;/features/*`.
     * @param \Google\Cloud\GkeHub\V1\Feature $resource   Only fields specified in update_mask are updated.
     *                                                    If you specify a field in the update_mask but don't specify its value here
     *                                                    that field will be deleted.
     *                                                    If you are updating a map field, set the value of a key to null or empty
     *                                                    string to delete the key from the map. It's not possible to update a key's
     *                                                    value to the empty string.
     *                                                    If you specify the update_mask to be a special path "*", fully replaces all
     *                                                    user-modifiable fields to match `resource`.
     * @param \Google\Protobuf\FieldMask      $updateMask Mask of fields to update.
     *
     * @return \Google\Cloud\GkeHub\V1\UpdateFeatureRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\GkeHub\V1\Feature $resource, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setName($name)
            ->setResource($resource)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The Feature resource name in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;features/&#42;`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Mask of fields to update.
     *     @type \Google\Cloud\GkeHub\V1\Feature $resource
     *           Only fields specified in update_mask are updated.
     *           If you specify a field in the update_mask but don't specify its value here
     *           that field will be deleted.
     *           If you are updating a map field, set the value of a key to null or empty
     *           string to delete the key from the map. It's not possible to update a key's
     *           value to the empty string.
     *           If you specify the update_mask to be a special path "*", fully replaces all
     *           user-modifiable fields to match `resource`.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Feature resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;features/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The Feature resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;features/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Only fields specified in update_mask are updated.
     * If you specify a field in the update_mask but don't specify its value here
     * that field will be deleted.
     * If you are updating a map field, set the value of a key to null or empty
     * string to delete the key from the map. It's not possible to update a key's
     * value to the empty string.
     * If you specify the update_mask to be a special path "*", fully replaces all
     * user-modifiable fields to match `resource`.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.Feature resource = 3;</code>
     * @return \Google\Cloud\GkeHub\V1\Feature|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Only fields specified in update_mask are updated.
     * If you specify a field in the update_mask but don't specify its value here
     * that field will be deleted.
     * If you are updating a map field, set the value of a key to null or empty
     * string to delete the key from the map. It's not possible to update a key's
     * value to the empty string.
     * If you specify the update_mask to be a special path "*", fully replaces all
     * user-modifiable fields to match `resource`.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1.Feature resource = 3;</code>
     * @param \Google\Cloud\GkeHub\V1\Feature $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1\Feature::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

