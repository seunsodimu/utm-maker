<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an indexed field.
 *
 * Generated from protobuf message <code>google.logging.v2.IndexConfig</code>
 */
class IndexConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The LogEntry field path to index.
     * Note that some paths are automatically indexed, and other paths are not
     * eligible for indexing. See [indexing documentation](
     * https://cloud.google.com/logging/docs/view/advanced-queries#indexed-fields)
     * for details.
     * For example: `jsonPayload.request.status`
     *
     * Generated from protobuf field <code>string field_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $field_path = '';
    /**
     * Required. The type of data in this index.
     *
     * Generated from protobuf field <code>.google.logging.v2.IndexType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = 0;
    /**
     * Output only. The timestamp when the index was last modified.
     * This is used to return the timestamp, and will be ignored if supplied
     * during update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_path
     *           Required. The LogEntry field path to index.
     *           Note that some paths are automatically indexed, and other paths are not
     *           eligible for indexing. See [indexing documentation](
     *           https://cloud.google.com/logging/docs/view/advanced-queries#indexed-fields)
     *           for details.
     *           For example: `jsonPayload.request.status`
     *     @type int $type
     *           Required. The type of data in this index.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the index was last modified.
     *           This is used to return the timestamp, and will be ignored if supplied
     *           during update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The LogEntry field path to index.
     * Note that some paths are automatically indexed, and other paths are not
     * eligible for indexing. See [indexing documentation](
     * https://cloud.google.com/logging/docs/view/advanced-queries#indexed-fields)
     * for details.
     * For example: `jsonPayload.request.status`
     *
     * Generated from protobuf field <code>string field_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * Required. The LogEntry field path to index.
     * Note that some paths are automatically indexed, and other paths are not
     * eligible for indexing. See [indexing documentation](
     * https://cloud.google.com/logging/docs/view/advanced-queries#indexed-fields)
     * for details.
     * For example: `jsonPayload.request.status`
     *
     * Generated from protobuf field <code>string field_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * Required. The type of data in this index.
     *
     * Generated from protobuf field <code>.google.logging.v2.IndexType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of data in this index.
     *
     * Generated from protobuf field <code>.google.logging.v2.IndexType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Logging\V2\IndexType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the index was last modified.
     * This is used to return the timestamp, and will be ignored if supplied
     * during update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when the index was last modified.
     * This is used to return the timestamp, and will be ignored if supplied
     * during update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

