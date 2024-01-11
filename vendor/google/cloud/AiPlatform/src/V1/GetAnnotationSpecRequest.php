<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.GetAnnotationSpec][google.cloud.aiplatform.v1.DatasetService.GetAnnotationSpec].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetAnnotationSpecRequest</code>
 */
class GetAnnotationSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the AnnotationSpec resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     */
    private $read_mask = null;

    /**
     * @param string $name Required. The name of the AnnotationSpec resource.
     *                     Format:
     *                     `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
     *                     Please see {@see DatasetServiceClient::annotationSpecName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetAnnotationSpecRequest
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
     *           Required. The name of the AnnotationSpec resource.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the AnnotationSpec resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the AnnotationSpec resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
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
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

