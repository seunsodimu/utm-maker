<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A tuple of values for the quasi-identifier columns.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult.KMapEstimationQuasiIdValues</code>
 */
class KMapEstimationQuasiIdValues extends \Google\Protobuf\Internal\Message
{
    /**
     * The quasi-identifier values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     */
    private $quasi_ids_values;
    /**
     * The estimated anonymity for these quasi-identifier values.
     *
     * Generated from protobuf field <code>int64 estimated_anonymity = 2;</code>
     */
    private $estimated_anonymity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $quasi_ids_values
     *           The quasi-identifier values.
     *     @type int|string $estimated_anonymity
     *           The estimated anonymity for these quasi-identifier values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The quasi-identifier values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIdsValues()
    {
        return $this->quasi_ids_values;
    }

    /**
     * The quasi-identifier values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIdsValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Value::class);
        $this->quasi_ids_values = $arr;

        return $this;
    }

    /**
     * The estimated anonymity for these quasi-identifier values.
     *
     * Generated from protobuf field <code>int64 estimated_anonymity = 2;</code>
     * @return int|string
     */
    public function getEstimatedAnonymity()
    {
        return $this->estimated_anonymity;
    }

    /**
     * The estimated anonymity for these quasi-identifier values.
     *
     * Generated from protobuf field <code>int64 estimated_anonymity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedAnonymity($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_anonymity = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KMapEstimationQuasiIdValues::class, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails_KMapEstimationResult_KMapEstimationQuasiIdValues::class);

